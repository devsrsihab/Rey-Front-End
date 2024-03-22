<?Php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\helpers\ImageManager;
use Illuminate\Validation\Rule;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $categories = Category::orderBy('order_level', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $categories = $categories->where('name', 'like', '%'.$sort_search.'%');
        }
        $categories = $categories->paginate(15);
        return view('backend.pages.category.index', compact('categories', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id', 0)
            ->with('childrenCategories')
            ->get();

        return view('backend.pages.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Define custom validation rules
            $rules = [
                'name' => 'required|max:255|unique:categories',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example rules for image upload
            ];

            // Define custom validation messages
            $messages = [
                'name.required' => 'The category name is required.',
                'name.max' => 'The category name must not exceed 255 characters.',
                'name.unique' => 'The category name has already been taken.',
                'image.required' => 'category image is required.',
                'image.image' => 'The uploaded file must be an image.',
                'image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
                'image.max' => 'The image size must not exceed 2MB.',
            ];

            // Perform validation
            $validator = Validator::make($request->all(), $rules, $messages);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $category = new Category;
            $category->name = $request->name;
            $category->order_level = 0;
            if($request->order_level != null) {
                $category->order_level = $request->order_level;
            }
            $imageFile       = $request->file('image');
            $imageFolder     = 'categories';
            $imageName       = ImageManager::upload($imageFile, $imageFolder);
            // dd($imageName);
            $category->image = $imageName;

            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;

            if ($request->parent_id != "0") {
                $category->parent_id = $request->parent_id;

                $parent = Category::find($request->parent_id);
                $category->level = $parent->level + 1 ;
            }

            if ($request->slug != null) {
                $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
            }
            else {
                $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)).'-'.Str::random(5);
            }
            if ($request->commision_rate != null) {
                $category->commision_rate = $request->commision_rate;
            }

            $category->save();

            // Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);

            return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('category show method');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('parent_id', 0)
            ->with('childrenCategories')
            ->orderBy('name','asc')
            ->get();

        return view('backend.pages.category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
        {
            // Find the category by its ID
            $category = Category::findOrFail($id);

            // Define custom validation rules
            $rules = [
                'name' => 'required|max:255|unique:categories,name,' . $category->id,
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Modified to be nullable for update
                'parent_id' => [
                    'required',
                    Rule::notIn([$id]), // Ensure that the selected parent_id is different from the category ID
                ],
            ];

            // Define custom validation messages
            $messages = [
                'name.required' => 'The category name is required.',
                'name.max' => 'The category name must not exceed 255 characters.',
                'name.unique' => 'The category name has already been taken.',
                'image.image' => 'The uploaded file must be an image.',
                'image.mimes' => 'Only JPEG, PNG, JPG, and GIF images are allowed.',
                'image.max' => 'The image size must not exceed 2MB.',
                'parent_id.required' => 'Please select a parent category.',
                'parent_id.not_in' => 'Parent category cannot be the same as the category itself.',
            ];

            // Perform validation
            $validator = Validator::make($request->all(), $rules, $messages);

            // Check if validation fails
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Update the fields based on the request data
            $category->name = $request->name;
            $category->order_level = $request->order_level ?? 0; // Default to 0 if order_level is not provided
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;

            // Check if an image file is provided and update it
            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $imageFolder = 'categories';
                $imageName = ImageManager::update($imageFile, $imageFolder);
                $category->image = $imageName;
            }

            // Update parent category
            if ($request->parent_id != "0") {
                $category->parent_id = $request->parent_id;
                $parent = Category::find($request->parent_id);
                $category->level = $parent->level + 1;
            } else {
                $category->parent_id = 0;
                $category->level = 0;
            }

            // Slug
            if ($request->slug != null) {
                $category->slug = strtolower($request->slug);
            } else {
                $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name)) . '-' . Str::random(5);
            }

            // Save the updated category
            $category->save();

            // Redirect back with success message
            return back();
        }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('category destroy method');
        $category = Category::findOrFail($id);
        $category->attributes()->detach();

        // Category Translations Delete
        foreach ($category->category_translations as $key => $category_translation) {
            $category_translation->delete();
        }

        foreach (Product::where('category_id', $category->id)->get() as $product) {
            $product->category_id = null;
            $product->save();
        }

        CategoryUtility::delete_category($id);
        Cache::forget('featured_categories');

        flash(translate('Category has been deleted successfully'))->success();
        return redirect()->route('categories.index');
    }
}
