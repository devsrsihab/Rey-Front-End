    <!-- data table -->
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="h3">All categories</h1>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-lg">
                        <span>Add New category</span>
                    </a>
                </div>
            </div>
        </div>
        <table class="table datatable-basic table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent Cat.</th>
                    <th>Order Level</th>
                    <th>Level</th>
                    <th>Image</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            @php
                                $parent = \App\Models\Category::where('id', $category->parent_id)->first();
                            @endphp
                            @if ($parent != null)
                                {{ $parent->name }}
                            @else
                                —
                            @endif
                        </td>
                        <td>{{ $category->order_level }}</td>
                        <td>{{ $category->level }}</td>
                        <td>
                            @if ($category->image != null)
   
                            <img src="{{ asset('uploads/images/categories/' . $category->image) }}" alt="{{ $category->image }}" style="width:100px; height:50px; max-widht:100%; max-height:100%; object-fit:cover " >

                            @else
                                —
                            @endif
                        </td>
                        <td class="align-middle">
                            <div class="dropdown">
                                <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="ph-gear"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{route('categories.edit', ['id'=>$category->id] )}}" class="dropdown-item">
                                        <i class="ph-pen me-2"></i>
                                        Edit
                                    </a>
                                    <a href="{{ route('categories.show', ['id' => $category->id]) }}" class="dropdown-item">
                                        <i class="ph-eye me-2"></i>
                                        View
                                    </a>
                                    <a href="{{ route('categories.destroy', ['id' => $category->id]) }}"
                                        class="deleteBtn text-danger dropdown-item">
                                        <i class="ph-trash me-2"></i>
                                        Remove
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /data table -->
