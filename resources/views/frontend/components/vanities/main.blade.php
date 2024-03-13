  <!-- CONTAINER FOR THIS PAGE ---------------------------------------- -->
  <main class="max-w-[1920px] mx-auto px-[30px] xl:px-[150px]">

      <!-- section 1 start  ======================================================================-->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      1
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Select Cabinets Door Style
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>

          <!-- list radio section  -->
          <div class="mt-[10px] md:mt-[35px]">
              <div class="account_category_radio_div">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="drawerSection1" name="drawerSection" value="email" />
                      <label class="spans" for="drawerSection1">5-Piece Doors</label>
                  </div>
              </div>
          </div>

          <!-- another -->
          <div class="account_category_radio_div">
              <div class="labels pl-[10px] md:pl-[46px]">
                  <input type="radio" id="drawerSection2" name="drawerSection" value="email" />
                  <label class="spans" for="drawerSection2">Glass Doors</label>
              </div>
          </div>
          </div>
          <!-- another -->
          <div class="account_category_radio_div">
              <div class="labels pl-[10px] md:pl-[46px]">
                  <input type="radio" checked id="drawerSection3" name="drawerSection" value="email" />
                  <label class="spans" for="drawerSection3">Slab Doors </label>
              </div>
          </div>
          </div>

          <!-- Radio image section ------------------------ -->
          <!-- content 1 -->
          <div class="radio_list_content md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="doorMedium">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection1"
                          id="drawerContentSection1image1">
                      <label class="checkbox_label" for="drawerContentSection1image1">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/5piceDoors/1a.Columbia.png') }}" alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">1a.Columbia</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection1"
                          id="drawerContentSection1image2">
                      <label class="checkbox_label" for="drawerContentSection1image2">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/5piceDoors/1b.Columbia.png') }}" alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">1b.Columbia</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection1"
                          id="drawerContentSection1image3">
                      <label class="checkbox_label" for="drawerContentSection1image3">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/5piceDoors/1c.Columbia.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">1c.Columbia</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection1"
                          id="drawerContentSection1image4">
                      <label class="checkbox_label" for="drawerContentSection1image4">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/5piceDoors/1d.Columbia.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">1d.Columbia</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection1"
                          id="drawerContentSection1image5">
                      <label class="checkbox_label" for="drawerContentSection1image5">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/5piceDoors/4.V-Shaker.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">4.V-Shaker</h3>
                  </li>
                  <!-- end -->
              </div>
          </div>

          <!-- content 2 -->
          <div class="radio_list_content md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="doorMedium">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection2"
                          id="drawerContentSection2image1">
                      <label class="checkbox_label" for="drawerContentSection2image1">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img src=" {{ asset('assets/images/doors/glassDoors/door1.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">Glass door 1</h3>
                  </li>
                  <!-- end -->
              </div>
          </div>

          <!-- content 3 -->
          <div class="radio_list_content active md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="doorMedium">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image1">
                      <label class="checkbox_label" for="drawerContentSection3image1">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door1.png') }}" alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">SLAB WITH BEAD</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image2">
                      <label class="checkbox_label" for="drawerContentSection3image2">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door2.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">TRADITIONAL WITH BEAD</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image3">
                      <label class="checkbox_label" for="drawerContentSection3image3">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door3.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">UTICA SHAKER</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image4">
                      <label class="checkbox_label" for="drawerContentSection3image4">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door4.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">V-GROOVE SHAKER</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image5">
                      <label class="checkbox_label" for="drawerContentSection3image5">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door5.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">FLAT</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image6">
                      <label class="checkbox_label" for="drawerContentSection3image6">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door6.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">GABBY SHAKER</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image7">
                      <label class="checkbox_label" for="drawerContentSection3image7">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door7.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">GLASGOW</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image8">
                      <label class="checkbox_label" for="drawerContentSection3image8">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door8.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">HAMPTON (.05” STEP)</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image9">
                      <label class="checkbox_label" for="drawerContentSection3image9">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door9.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">V-SHAKER</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image10">
                      <label class="checkbox_label" for="drawerContentSection3image10">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door10.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">NEWARK SHAKER</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="drawerContentSection3"
                          id="drawerContentSection3image11">
                      <label class="checkbox_label" for="drawerContentSection3image11">
                          <div class="border-[3px] border-[#ffffff]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/slabDoors/door11.png') }} " alt="door" />
                          </div>
                      </label>
                      <h3 class="doorProductTitle">PLAIN SHAKER</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>



      </section>
      <!-- section 1 end  -->

      <!-- section 2 start  ======================================================================-->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      2
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Select a Door/Drawer Front Color
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>

          <!-- list radio section  -->
          <section class="list_radio_grid_container mt-[10px] md:mt-[35px]">


              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="doorColorSection1" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection1">No Doors (Box Only)</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="doorColorSection2" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection2">MDF Painted Doors</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="doorColorSection3" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection3">Standard Finishes </label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="doorColorSection4" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection4">Super Matt Panels </label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="doorColorSection5" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection5">Textured Panels</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="doorColorSection6" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection6">High Gloss</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" checked id="doorColorSection7" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection7">Wood Grain</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div2">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="doorColorSection8" name="doorColorSection" value="email" />
                      <label class="spans" for="doorColorSection8">Stained</label>
                  </div>
              </div>
              <!-- end -->
          </section>
          </div>


          <!-- 1. No Doors (Box Only) ------------------------------------------------------------------- -->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <!-- empty data here  -->
          </div>

          <!-- 2. MDF Painted Doors  ------------------------------------------------------------->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image2">
                      <label class="checkbox_label" for="doorColorSection2image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Decorators White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Decorators White <br>
                          OC-149
                      </h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image3">
                      <label class="checkbox_label" for="doorColorSection2image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Ultra White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Ultra White <br>
                          CC-10</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image4">
                      <label class="checkbox_label" for="doorColorSection2image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Simply White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Simply White <br>
                          OC-117</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image5">
                      <label class="checkbox_label" for="doorColorSection2image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Cloud White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Cloud White <br>
                          OC-130</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image6">
                      <label class="checkbox_label" for="doorColorSection2image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Oxford White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Oxford White <br>
                          CC-30</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image7">
                      <label class="checkbox_label" for="doorColorSection2image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Cloud White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Cloud White <br>
                          OC-130</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image8">
                      <label class="checkbox_label" for="doorColorSection2image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Seapearl.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Seapearl <br>
                          OC-19</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image9">
                      <label class="checkbox_label" for="doorColorSection2image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Snowfall White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Snowfall White <br>
                          OC-118</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image10">
                      <label class="checkbox_label" for="doorColorSection2image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Swiss Coffee.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Swiss Coffee <br>
                          OC-45</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image11">
                      <label class="checkbox_label" for="doorColorSection2image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Dove Wing.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Dove Wing <br>
                          OC-18</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image12">
                      <label class="checkbox_label" for="doorColorSection2image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/White Dove.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          White Dove <br>
                          OC-17</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>

          <!-- 3. Standard Finishes ------------------------------------------------------------->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection3"
                          id="doorColorSection3image1">
                      <label class="checkbox_label" for="doorColorSection3image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection3"
                          id="doorColorSection3image2">
                      <label class="checkbox_label" for="doorColorSection3image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Hard Rock Maple.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Hard Rock Maple</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection3"
                          id="doorColorSection3image3">
                      <label class="checkbox_label" for="doorColorSection3image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Linen.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Linen</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection3"
                          id="doorColorSection3image4">
                      <label class="checkbox_label" for="doorColorSection3image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Black.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection3"
                          id="doorColorSection3image5">
                      <label class="checkbox_label" for="doorColorSection3image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Plywood.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Plywood</h3>
                  </li>
                  <!-- end -->
              </div>
          </div>

          <!-- 4. Super Matt Panels  ------------------------------------------------------------->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image1">
                      <label class="checkbox_label" for="doorColorSection4image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/White Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          White Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image2">
                      <label class="checkbox_label" for="doorColorSection4image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Natural White Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Natural White <br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image3">
                      <label class="checkbox_label" for="doorColorSection4image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Cool Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Cool Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image4">
                      <label class="checkbox_label" for="doorColorSection4image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Modern Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Modern Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image5">
                      <label class="checkbox_label" for="doorColorSection4image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Chrome Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Chrome Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image6">
                      <label class="checkbox_label" for="doorColorSection4image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Fume Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Fume Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image7">
                      <label class="checkbox_label" for="doorColorSection4image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Light Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Light Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image8">
                      <label class="checkbox_label" for="doorColorSection4image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Light Beige Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Light Beige<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image9">
                      <label class="checkbox_label" for="doorColorSection4image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Sand Beige Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sand Beige<br />
                          Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image10">
                      <label class="checkbox_label" for="doorColorSection4image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Grey Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image11">
                      <label class="checkbox_label" for="doorColorSection4image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Lava Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Lava Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image12">
                      <label class="checkbox_label" for="doorColorSection4image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Pastel Blue Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Pastel Blue <br />Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image13">
                      <label class="checkbox_label" for="doorColorSection4image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Nile Green Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Nile Green <br />Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image14">
                      <label class="checkbox_label" for="doorColorSection4image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Pastel Blue Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Pastel Blue<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image15">
                      <label class="checkbox_label" for="doorColorSection4image15">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Tropic Green Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Tropic Green<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image16">
                      <label class="checkbox_label" for="doorColorSection4image16">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Pastel Orange Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Pastel Orange<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image17">
                      <label class="checkbox_label" for="doorColorSection4image17">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Night Blue Matte.png') }}"
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Night Blue<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image18">
                      <label class="checkbox_label" for="doorColorSection4image18">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Ecru Antracite Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru Antracite<br /> Super Mattee</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection4"
                          id="doorColorSection4image19">
                      <label class="checkbox_label" for="doorColorSection4image19">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Black Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black Super Matte</h3>
                  </li>



                  <!-- end -->
              </div>
          </div>

          <!-- 5. Textured Panels  ------------------------------------------------------------->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image1">
                      <label class="checkbox_label" for="doorColorSection5image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Albero Bianco.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Albero Bianco
                          Textured Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image2">
                      <label class="checkbox_label" for="doorColorSection5image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Antique Bronze.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Antique Bronze
                          Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image3">
                      <label class="checkbox_label" for="doorColorSection5image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Antique Gold.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Antique Gold
                          Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image4">
                      <label class="checkbox_label" for="doorColorSection5image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Black Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black Leather</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image5">
                      <label class="checkbox_label" for="doorColorSection5image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Aluminum.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Aluminum</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image6">
                      <label class="checkbox_label" for="doorColorSection5image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Bronze.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Bronze</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image7">
                      <label class="checkbox_label" for="doorColorSection5image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Copper.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Copper</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image8">
                      <label class="checkbox_label" for="doorColorSection5image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Gold.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Gold</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image9">
                      <label class="checkbox_label" for="doorColorSection5image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Inox.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Inox</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image10">
                      <label class="checkbox_label" for="doorColorSection5image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Cactus Textile.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Cactus Textile</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image11">
                      <label class="checkbox_label" for="doorColorSection5image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Canyon Beige.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Canyon Beige
                          Textured Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image12">
                      <label class="checkbox_label" for="doorColorSection5image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Canyon Grey.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Canyon Grey
                          Textured Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image13">
                      <label class="checkbox_label" for="doorColorSection5image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Cosmic Marble.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Cosmic Marble
                          Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image14">
                      <label class="checkbox_label" for="doorColorSection5image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Darkhaki Textile.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Darkhaki Textile</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image15">
                      <label class="checkbox_label" for="doorColorSection5image15">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Dun Grey Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dun Grey Leather</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image16">
                      <label class="checkbox_label" for="doorColorSection5image16">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Tortora Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Tortora Leather</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image17">
                      <label class="checkbox_label" for="doorColorSection5image17">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/English Grey Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">English Grey Leather</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image18">
                      <label class="checkbox_label" for="doorColorSection5image18">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Greige Tessea.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Greige Tessea</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image19">
                      <label class="checkbox_label" for="doorColorSection5image19">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Grey Line.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey Line
                          Textured Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image20">
                      <label class="checkbox_label" for="doorColorSection5image20">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/White Line.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White Line
                          Textured Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image21">
                      <label class="checkbox_label" for="doorColorSection5image21">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Elegant Spike.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Elegant Spike</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image22">
                      <label class="checkbox_label" for="doorColorSection5image22">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Mercurio Textile.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Mercurio Textile</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection5"
                          id="doorColorSection5image23">
                      <label class="checkbox_label" for="doorColorSection5image23">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/White Sahara.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White Sahara
                          Wavy High Gloss</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>

          <!-- 6. High Gloss  ------------------------------------------------------------->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image1">
                      <label class="checkbox_label" for="doorColorSection6image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/White Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image2">
                      <label class="checkbox_label" for="doorColorSection6image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Natural White Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Natural White
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image4">
                      <label class="checkbox_label" for="doorColorSection6image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image5">
                      <label class="checkbox_label" for="doorColorSection6image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Modern Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Modern Grey
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image6">
                      <label class="checkbox_label" for="doorColorSection6image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Chrome Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Chrome Grey
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image7">
                      <label class="checkbox_label" for="doorColorSection6image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Fume Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Fume High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image8">
                      <label class="checkbox_label" for="doorColorSection6image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ecru White Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru White
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image9">
                      <label class="checkbox_label" for="doorColorSection6image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ecru New Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru New Grey
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image10">
                      <label class="checkbox_label" for="doorColorSection6image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ecru Antracite Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru Antracite
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image11">
                      <label class="checkbox_label" for="doorColorSection6image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Lava Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Lava High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image12">
                      <label class="checkbox_label" for="doorColorSection6image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ruby Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ruby High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image13">
                      <label class="checkbox_label" for="doorColorSection6image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Sand Beige Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sand Beige
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image14">
                      <label class="checkbox_label" for="doorColorSection6image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Black Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black High Gloss</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>

          <!-- 7. Wood Grain  ------------------------------------------------------------->
          <div class="radio_list_content2 active md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image1">
                      <label class="checkbox_label" for="doorColorSection7image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Arena Origami.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Arena Origami</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image2">
                      <label class="checkbox_label" for="doorColorSection7image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Arslanbob.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Arslanbob</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image3">
                      <label class="checkbox_label" for="doorColorSection7image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Augusta Walnut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Augusta Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image4">
                      <label class="checkbox_label" for="doorColorSection7image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Black Mamut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black Mamut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image5">
                      <label class="checkbox_label" for="doorColorSection7image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Bruma Origami.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Bruma Origami</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image6">
                      <label class="checkbox_label" for="doorColorSection7image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Casual Borgona.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Casual Borgona</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image7">
                      <label class="checkbox_label" for="doorColorSection7image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Coal Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Coal Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image8">
                      <label class="checkbox_label" for="doorColorSection7image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Cognac Monument.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Coal Monument</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image9">
                      <label class="checkbox_label" for="doorColorSection7image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Dark Cherry.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Riverside <br />
                          Cherr</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image10">
                      <label class="checkbox_label" for="doorColorSection7image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Dark Hickory.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Rockford <br />
                          Hickory</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image11">
                      <label class="checkbox_label" for="doorColorSection7image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Dark Walnut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Select Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image12">
                      <label class="checkbox_label" for="doorColorSection7image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Grey Craft Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey Craft Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image13">
                      <label class="checkbox_label" for="doorColorSection7image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Grey Nordic Wood.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey Nordic Wood</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image14">
                      <label class="checkbox_label" for="doorColorSection7image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Guernica Grey Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Guernica Grey Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image15">
                      <label class="checkbox_label" for="doorColorSection7image15">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Hazel Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Hazel Silverjack Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image16">
                      <label class="checkbox_label" for="doorColorSection7image16">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Languedoc Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Languedoc Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image17">
                      <label class="checkbox_label" for="doorColorSection7image17">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Light Hickory.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Light Rockford <br />
                          Hickory</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image18">
                      <label class="checkbox_label" for="doorColorSection7image18">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Light Select Walnut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Light Select Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image19">
                      <label class="checkbox_label" for="doorColorSection7image19">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Monterrey Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Monterrey Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image20">
                      <label class="checkbox_label" for="doorColorSection7image20">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Oyster Urban Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Oyster Urban Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image22">
                      <label class="checkbox_label" for="doorColorSection7image22">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Ristretto Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ristretto Baroque Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image23">
                      <label class="checkbox_label" for="doorColorSection7image23">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Samoa Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Samoa Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image24">
                      <label class="checkbox_label" for="doorColorSection7image24">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Sand Barbera Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sand Barbera Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image25">
                      <label class="checkbox_label" for="doorColorSection7image25">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Satin Coastland Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Satin Coastland Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image26">
                      <label class="checkbox_label" for="doorColorSection7image26">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Smoked Eucalyptus.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Smoked Eucalyptus</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image27">
                      <label class="checkbox_label" for="doorColorSection7image27">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Smoked Jarrah.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Smoked Jarrah</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image28">
                      <label class="checkbox_label" for="doorColorSection7image28">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Smoked Kala Ash.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Smoked Kala Ash</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image29">
                      <label class="checkbox_label" for="doorColorSection7image29">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Tribeca Walnut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Tribeca Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image30">
                      <label class="checkbox_label" for="doorColorSection7image30">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/White Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White Oak</h3>
                  </li>
                  <!-- end -->
              </div>
          </div>
          <!-- 8. Stained  ------------------------------------------------------------->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image1">
                      <label class="checkbox_label" for="doorColorSection8image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Black W240.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black <br>
                          W240</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image2">
                      <label class="checkbox_label" for="doorColorSection8image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Brown Mahogany W260A.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brown Mahogany <br>
                          W260A</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image3">
                      <label class="checkbox_label" for="doorColorSection8image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Dark Walnut W210.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Walnut <br>
                          W210</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image4">
                      <label class="checkbox_label" for="doorColorSection8image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Golden Oak W201.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Golden Oak <br>
                          W201</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image5">
                      <label class="checkbox_label" for="doorColorSection8image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Gunstock Walnut W247.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Gunstock Walnut <br>
                          W247</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image6">
                      <label class="checkbox_label" for="doorColorSection8image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Light Walnut W231.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Light Walnut <br>
                          W231</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image7">
                      <label class="checkbox_label" for="doorColorSection8image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Pecan W239.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Pecan <br>
                          W239</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image8">
                      <label class="checkbox_label" for="doorColorSection8image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Pickled Oak WS200482.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Pickled Oak <br>
                          WS20 0482</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image9">
                      <label class="checkbox_label" for="doorColorSection8image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Sandstorm W253.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sandstorm <br>
                          W253</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image10">
                      <label class="checkbox_label" for="doorColorSection8image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/White W250.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White <br>
                          W250</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>



      </section>
      <!-- section 2 end  -->


      <!-- section 3 start  ======================================================================-->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      3
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Select Cabinet Interior Materials
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>



          <div class="mt-[20px] lg:mt-[50px] interiorRoot border-b-[1px] border-[#a0a0a0] pb-[20px] lg:pb-[50px]">

              <div class="account_category_radio_div4 interiorCheck">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" checked id="Interior1" name="Interior" value="email" />
                      <label class="spans" for="Interior1">Select New Cabinet Interior Material, Different than
                          Door/Drawer Color</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div4 interiorCheck">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="Interior2" name="Interior" value="email" />
                      <label class="spans" for="Interior2">Match Cabinet Interior Material with Door/Drawer
                          Color</label>
                  </div>
              </div>
          </div>







          <!-- list radio section start  -->
          <section class="list_radio_grid_container mt-[10px] md:mt-[35px]">


              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="interiorColorSection1" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection1">No Doors (Box Only)</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="interiorColorSection2" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection2">MDF Painted Doors</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="interiorColorSection3" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection3">Standard Finishes </label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="interiorColorSection4" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection4">Super Matt Panels </label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="interiorColorSection5" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection5">Textured Panels</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="interiorColorSection6" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection6">High Gloss</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" checked id="interiorColorSection7" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection7">Wood Grain</label>
                  </div>
              </div>
              <!-- another -->
              <div class="account_category_radio_div3">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="interiorColorSection8" name="interiorColorSection"
                          value="email" />
                      <label class="spans" for="interiorColorSection8">Stained</label>
                  </div>
              </div>
              <!-- end -->
          </section>
          <!-- list radio section end  -->

          <!-- 1. No Doors (Box Only) ------------------------------------------------------------------- -->
          <div class="radio_list_content3 md:mt-[55px] mt-[30px] w-full">
              <!-- empty data here  -->
          </div>

          <!-- 2. MDF Painted Doors  ------------------------------------------------------------->
          <div class="radio_list_content3 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image2">
                      <label class="checkbox_label" for="interiorColorSection2image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Decorators White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Decorators White <br>
                          OC-149
                      </h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image3">
                      <label class="checkbox_label" for="interiorColorSection2image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Ultra White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Ultra White <br>
                          CC-10</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image4">
                      <label class="checkbox_label" for="interiorColorSection2image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Simply White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Simply White <br>
                          OC-117</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image5">
                      <label class="checkbox_label" for="interiorColorSection2image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Cloud White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Cloud White <br>
                          OC-130</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image6">
                      <label class="checkbox_label" for="interiorColorSection2image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Oxford White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Oxford White <br>
                          CC-30</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image7">
                      <label class="checkbox_label" for="interiorColorSection2image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Cloud White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Cloud White <br>
                          OC-130</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image8">
                      <label class="checkbox_label" for="interiorColorSection2image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Seapearl.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Seapearl <br>
                          OC-19</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image9">
                      <label class="checkbox_label" for="interiorColorSection2image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Snowfall White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Snowfall White <br>
                          OC-118</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image10">
                      <label class="checkbox_label" for="interiorColorSection2image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Swiss Coffee.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Swiss Coffee <br>
                          OC-45</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image11">
                      <label class="checkbox_label" for="interiorColorSection2image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/Dove Wing.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Dove Wing <br>
                          OC-18</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection2"
                          id="interiorColorSection2image12">
                      <label class="checkbox_label" for="interiorColorSection2image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/MDF Painted Doors/White Dove.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          White Dove <br>
                          OC-17</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>

          <!-- 3. Standard Finishes ------------------------------------------------------------->
          <div class="radio_list_content3 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection3"
                          id="interiorColorSection3image1">
                      <label class="checkbox_label" for="interiorColorSection3image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/White.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection3"
                          id="interiorColorSection3image2">
                      <label class="checkbox_label" for="interiorColorSection3image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Hard Rock Maple.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Hard Rock Maple</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection3"
                          id="interiorColorSection3image3">
                      <label class="checkbox_label" for="interiorColorSection3image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Linen.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Linen</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection3"
                          id="interiorColorSection3image4">
                      <label class="checkbox_label" for="interiorColorSection3image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Black.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection3"
                          id="interiorColorSection3image5">
                      <label class="checkbox_label" for="interiorColorSection3image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Standard Finishes/Plywood.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Plywood</h3>
                  </li>
                  <!-- end -->
              </div>
          </div>

          <!-- 4. Super Matt Panels  ------------------------------------------------------------->
          <div class="radio_list_content3 md:mt-[55px] mt-[30px] w-full">
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image1">
                      <label class="checkbox_label" for="interiorColorSection4image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/White Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          White Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image2">
                      <label class="checkbox_label" for="interiorColorSection4image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Natural White Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Natural White <br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image3">
                      <label class="checkbox_label" for="interiorColorSection4image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Cool Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Cool Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image4">
                      <label class="checkbox_label" for="interiorColorSection4image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Modern Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Modern Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image5">
                      <label class="checkbox_label" for="interiorColorSection4image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Chrome Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Chrome Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image6">
                      <label class="checkbox_label" for="interiorColorSection4image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Fume Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Fume Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image7">
                      <label class="checkbox_label" for="interiorColorSection4image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Light Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Light Grey<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image8">
                      <label class="checkbox_label" for="interiorColorSection4image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Light Beige Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Light Beige<br /> Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image9">
                      <label class="checkbox_label" for="interiorColorSection4image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Sand Beige Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sand Beige<br />
                          Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image10">
                      <label class="checkbox_label" for="interiorColorSection4image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Grey Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Grey Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image11">
                      <label class="checkbox_label" for="interiorColorSection4image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Lava Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Lava Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image12">
                      <label class="checkbox_label" for="interiorColorSection4image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Pastel Blue Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Pastel Blue <br />Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image13">
                      <label class="checkbox_label" for="interiorColorSection4image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Nile Green Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Nile Green <br />Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image14">
                      <label class="checkbox_label" for="interiorColorSection4image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Pastel Blue Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Pastel Blue<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image15">
                      <label class="checkbox_label" for="interiorColorSection4image15">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Tropic Green Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Tropic Green<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image16">
                      <label class="checkbox_label" for="interiorColorSection4image16">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Pastel Orange Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Pastel Orange<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image17">
                      <label class="checkbox_label" for="interiorColorSection4image17">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Night Blue Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Night Blue<br /> Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image18">
                      <label class="checkbox_label" for="interiorColorSection4image18">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Ecru Antracite Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru Antracite<br /> Super Mattee</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection4"
                          id="interiorColorSection4image19">
                      <label class="checkbox_label" for="interiorColorSection4image19">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Super Matt Panels/Black Matte.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black Super Matte</h3>
                  </li>



                  <!-- end -->
              </div>
          </div>

          <!-- 5. Textured Panels  ------------------------------------------------------------->
          <div class="radio_list_content3 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image1">
                      <label class="checkbox_label" for="interiorColorSection5image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Albero Bianco.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Albero Bianco
                          Textured Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image2">
                      <label class="checkbox_label" for="interiorColorSection5image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Antique Bronze.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Antique Bronze
                          Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image3">
                      <label class="checkbox_label" for="interiorColorSection5image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Antique Gold.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Antique Gold
                          Super Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image4">
                      <label class="checkbox_label" for="interiorColorSection5image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Black Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black Leather</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image5">
                      <label class="checkbox_label" for="interiorColorSection5image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Aluminum.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Aluminum</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image6">
                      <label class="checkbox_label" for="interiorColorSection5image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Bronze.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Bronze</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image7">
                      <label class="checkbox_label" for="interiorColorSection5image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Copper.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Copper</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image8">
                      <label class="checkbox_label" for="interiorColorSection5image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Gold.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Gold</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image9">
                      <label class="checkbox_label" for="interiorColorSection5image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Brushed Inox.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brushed Inox</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image10">
                      <label class="checkbox_label" for="interiorColorSection5image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Cactus Textile.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Cactus Textile</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image11">
                      <label class="checkbox_label" for="interiorColorSection5image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Canyon Beige.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Canyon Beige
                          Textured Matte</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image12">
                      <label class="checkbox_label" for="interiorColorSection5image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Canyon Grey.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Canyon Grey
                          Textured Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image13">
                      <label class="checkbox_label" for="interiorColorSection5image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Cosmic Marble.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Cosmic Marble
                          Super Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image14">
                      <label class="checkbox_label" for="interiorColorSection5image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Darkhaki Textile.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Darkhaki Textile</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image15">
                      <label class="checkbox_label" for="interiorColorSection5image15">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Dun Grey Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dun Grey Leather</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image16">
                      <label class="checkbox_label" for="interiorColorSection5image16">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Tortora Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Tortora Leather</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image17">
                      <label class="checkbox_label" for="interiorColorSection5image17">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/English Grey Leather.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">English Grey Leather</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image18">
                      <label class="checkbox_label" for="interiorColorSection5image18">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Greige Tessea.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Greige Tessea</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image19">
                      <label class="checkbox_label" for="interiorColorSection5image19">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Grey Line.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey Line
                          Textured Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image20">
                      <label class="checkbox_label" for="interiorColorSection5image20">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/White Line.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White Line
                          Textured Matte</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image21">
                      <label class="checkbox_label" for="interiorColorSection5image21">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Elegant Spike.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Elegant Spike</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image22">
                      <label class="checkbox_label" for="interiorColorSection5image22">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/Mercurio Textile.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Mercurio Textile</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection5"
                          id="interiorColorSection5image23">
                      <label class="checkbox_label" for="interiorColorSection5image23">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Textured Panels/White Sahara.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White Sahara
                          Wavy High Gloss</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>

          <!-- 6. High Gloss  ------------------------------------------------------------->
          <div class="radio_list_content3 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image1">
                      <label class="checkbox_label" for="interiorColorSection6image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/White Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image2">
                      <label class="checkbox_label" for="interiorColorSection6image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Natural White Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Natural White
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image4">
                      <label class="checkbox_label" for="interiorColorSection6image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image5">
                      <label class="checkbox_label" for="interiorColorSection6image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Modern Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Modern Grey
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image6">
                      <label class="checkbox_label" for="interiorColorSection6image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Chrome Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Chrome Grey
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image7">
                      <label class="checkbox_label" for="interiorColorSection6image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Fume Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Fume High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image8">
                      <label class="checkbox_label" for="interiorColorSection6image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ecru White Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru White
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image9">
                      <label class="checkbox_label" for="interiorColorSection6image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ecru New Grey Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru New Grey
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image10">
                      <label class="checkbox_label" for="interiorColorSection6image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ecru Antracite Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ecru Antracite
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image11">
                      <label class="checkbox_label" for="interiorColorSection6image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Lava Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Lava High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image12">
                      <label class="checkbox_label" for="interiorColorSection6image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Ruby Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ruby High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image13">
                      <label class="checkbox_label" for="interiorColorSection6image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Sand Beige Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sand Beige
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection6"
                          id="interiorColorSection6image14">
                      <label class="checkbox_label" for="interiorColorSection6image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/High Gloss/Black Gloss.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black High Gloss</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>

          <!-- 7. Wood Grain  ------------------------------------------------------------->
          <div class="radio_list_content3 active md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image1">
                      <label class="checkbox_label" for="interiorColorSection7image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Arena Origami.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Arena Origami</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image2">
                      <label class="checkbox_label" for="interiorColorSection7image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Arslanbob.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Arslanbob</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image3">
                      <label class="checkbox_label" for="interiorColorSection7image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Augusta Walnut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Augusta Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image4">
                      <label class="checkbox_label" for="interiorColorSection7image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Black Mamut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black Mamut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image5">
                      <label class="checkbox_label" for="interiorColorSection7image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Bruma Origami.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Bruma Origami</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image6">
                      <label class="checkbox_label" for="interiorColorSection7image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Casual Borgona.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Casual Borgona</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image7">
                      <label class="checkbox_label" for="interiorColorSection7image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Coal Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Coal Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image8">
                      <label class="checkbox_label" for="interiorColorSection7image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Cognac Monument.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Coal Monument</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image9">
                      <label class="checkbox_label" for="interiorColorSection7image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Dark Cherry.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Riverside <br />
                          Cherr</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image10">
                      <label class="checkbox_label" for="interiorColorSection7image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Dark Hickory.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Rockford <br />
                          Hickory</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image11">
                      <label class="checkbox_label" for="interiorColorSection7image11">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Dark Walnut.png') }}"
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Select Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image12">
                      <label class="checkbox_label" for="interiorColorSection7image12">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Grey Craft Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey Craft Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image13">
                      <label class="checkbox_label" for="interiorColorSection7image13">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Grey Nordic Wood.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Grey Nordic Wood</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image14">
                      <label class="checkbox_label" for="interiorColorSection7image14">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Guernica Grey Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Guernica Grey Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image15">
                      <label class="checkbox_label" for="interiorColorSection7image15">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Hazel Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Hazel Silverjack Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image16">
                      <label class="checkbox_label" for="interiorColorSection7image16">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Languedoc Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Languedoc Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image17">
                      <label class="checkbox_label" for="interiorColorSection7image17">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Light Hickory.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Light Rockford <br />
                          Hickory</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image18">
                      <label class="checkbox_label" for="interiorColorSection7image18">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Light Select Walnut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Light Select Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image19">
                      <label class="checkbox_label" for="interiorColorSection7image19">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Monterrey Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Monterrey Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image20">
                      <label class="checkbox_label" for="interiorColorSection7image20">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Oyster Urban Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Oyster Urban Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image22">
                      <label class="checkbox_label" for="interiorColorSection7image22">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Ristretto Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Ristretto Baroque Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image23">
                      <label class="checkbox_label" for="interiorColorSection7image23">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Samoa Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Samoa Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image24">
                      <label class="checkbox_label" for="interiorColorSection7image24">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Sand Barbera Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sand Barbera Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image25">
                      <label class="checkbox_label" for="interiorColorSection7image25">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Satin Coastland Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Satin Coastland Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image26">
                      <label class="checkbox_label" for="interiorColorSection7image26">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Smoked Eucalyptus.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Smoked Eucalyptus</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image27">
                      <label class="checkbox_label" for="interiorColorSection7image27">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Smoked Jarrah.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Smoked Jarrah</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image28">
                      <label class="checkbox_label" for="interiorColorSection7image28">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Smoked Kala Ash.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Smoked Kala Ash</h3>
                  </li>

                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image29">
                      <label class="checkbox_label" for="interiorColorSection7image29">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/Tribeca Walnut.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Tribeca Walnut</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection7"
                          id="interiorColorSection7image30">
                      <label class="checkbox_label" for="interiorColorSection7image30">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Wood Grain/White Oak.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White Oak</h3>
                  </li>
                  <!-- end -->
              </div>
          </div>
          <!-- 8. Stained  ------------------------------------------------------------->
          <div class="radio_list_content3 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image1">
                      <label class="checkbox_label" for="interiorColorSection8image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Black W240.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Black <br>
                          W240</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image2">
                      <label class="checkbox_label" for="interiorColorSection8image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Brown Mahogany W260A.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Brown Mahogany <br>
                          W260A</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image3">
                      <label class="checkbox_label" for="interiorColorSection8image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Dark Walnut W210.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Dark Walnut <br>
                          W210</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image4">
                      <label class="checkbox_label" for="interiorColorSection8image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Golden Oak W201.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Golden Oak <br>
                          W201</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image5">
                      <label class="checkbox_label" for="interiorColorSection8image5">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Gunstock Walnut W247.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Gunstock Walnut <br>
                          W247</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image6">
                      <label class="checkbox_label" for="interiorColorSection8image6">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Light Walnut W231.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Light Walnut <br>
                          W231</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image7">
                      <label class="checkbox_label" for="interiorColorSection8image7">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Pecan W239.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Pecan <br>
                          W239</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image8">
                      <label class="checkbox_label" for="interiorColorSection8image8">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Pickled Oak WS200482.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Pickled Oak <br>
                          WS20 0482</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image9">
                      <label class="checkbox_label" for="interiorColorSection8image9">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/Sandstorm W253.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Sandstorm <br>
                          W253</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="interiorColorSection8"
                          id="interiorColorSection8image10">
                      <label class="checkbox_label" for="interiorColorSection8image10">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src=" {{ asset('assets/images/doors/frontColor/Stained/White W250.png') }} "
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White <br>
                          W250</h3>
                  </li>

                  <!-- end -->
              </div>
          </div>








      </section>
      <!-- section 3 end  -->






      <!-- section 04 start  -->
      <section>
          <!-- ==================================================================== 5 Tab ======================================================================== -->
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      4
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Cabinets, Vanities, Trim & Details
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>

          <!-- tab section  -->
          <div class="mt-[22px] md:mt-[48px]">
              <div class="tabContainer">

                  <div class="buttonContainer">
                      <!-- tab button 1 -->
                      <button class="tab_button">
                          <img class="w-[53px] md:w-[158px] pt-[10px] md:pt-[20px]"
                              src=" {{ asset('assets/images/tab-image/tab1.svg') }} " alt="image1">
                          <h3
                              class="text-[9px] leading-[15px] text-[#222] capitalize sm:text-[24px] sm:leading-[41px]">
                              Wall Cabinets</h3>
                      </button>
                      <!-- tab button 2 -->
                      <button class="tab_button active">
                          <img class="w-[53px] md:w-[158px] pt-[10px] md:pt-[20px]"
                              src=" {{ asset('assets/images/tab-image/tab2.png') }} " alt="image1">
                          <h3
                              class="text-[9px] leading-[15px] text-[#222] capitalize sm:text-[24px] sm:leading-[41px]">
                              Base Cabinets</h3>
                      </button>
                      <!-- tab button 3 -->
                      <button class="tab_button">
                          <img class="w-[53px] md:w-[158px] pt-[10px] md:pt-[20px]"
                              src=" {{ asset('assets/images/tab-image/tab3.png') }} " alt="image1">
                          <h3
                              class="text-[9px] leading-[15px] text-[#222] capitalize sm:text-[24px] sm:leading-[41px]">
                              Tall Cabinets</h3>
                      </button>
                      <!-- tab button 4 -->
                      <button class="tab_button">
                          <img class="w-[40px] md:w-[110px] pt-[10px] md:pt-[20px]"
                              src=" {{ asset('assets/images/tab-image/tab4.png') }} " alt="image1">
                          <h3
                              class="text-[9px] leading-[15px] text-[#222] capitalize sm:text-[24px] sm:leading-[41px]">
                              Vanity Cabinets</h3>
                      </button>
                  </div>
              </div>




              <!-- Tab 1 content 1  Start -------------------------------------------------------------------------------- Tab 1  START ---------------------------------------->
              <div class="tab_content bg-[#ecebe9] pt-[30px] md:pt-[100px]">
                  <div class="flex max-[1300px]:flex-col  max-[1300px]:items-center">
                      <div class="min-[1300px]:w-[30%] w-full md:p-[20px]">

                          <p
                              class="px-[20px] text-[20px] leading-[20px] sm:text-[42px] sm:leading-[41px] capitalize border-b-[2px] border-[#222] pb-[18px] sm:pb-[30px]">
                              Wall Cabinet
                          </p>

                          <!-- TOGGLE ITEM 1 START ------------------------------------------------->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222]">

                              <button class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px]">
                                  STANDARD BASES
                                  <i>+</i>
                              </button>
                              <div class="content">

                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title active text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" checked type="radio" name="subsection1"
                                              id="subsection1">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="subsection1">1 Door/2 Adjustable Shelves</label>
                                      </li>
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="subsection1"
                                              id="subsection2">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="subsection2">2 doors 2 adjustable shelves</label>
                                      </li>
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="subsection1"
                                              id="subsection3">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="subsection3">1 Door/2 Rollouts</label>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <!-- TOGGLE ITEM 1 END -->


                          <!-- TOGGLE ITEM 2 START ---------------------------------------------->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222] ">
                              <button class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px]">
                                  FULL HEIGHT BASES
                                  <i>+</i>
                              </button>
                              <div class="content">

                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">
                                      <!-- list 1 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="toggle2"
                                              id="toggle2subsection1">
                                          <label
                                              class="checkbox_label2 active before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="toggle2subsection1">1 Door/2 Adjustable Shelves</label>

                                      </li>
                                      <!-- list 2 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="toggle2"
                                              id="toggle2subsection2">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="toggle2subsection2">2Doors/2 Adjustable Shelves</label>

                                      </li>
                                      <!-- list 3 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="toggle2"
                                              id="toggle2subsection3">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="toggle2subsection3">1 Door/2 Rollouts</label>
                                      </li>
                                  </ul>


                              </div>
                          </div>
                          <!-- TOGGLE ITEM 2 END -->



                      </div>

                      <!--=== Tab 1 TOGGLE ITEM 1 ====================================================== -->
                      <!-- Tab1 toggle 1 content 1  Start-->
                      <div class="sub_tab_content active xl:w-[70%] p-[20px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content1"
                                  id="toggle1content1product1">
                              <label class="checkbox_label" for="toggle1content1product1">
                                  <div>
                                      <img class="object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content1"
                                  id="toggle1content1product2">
                              <label class="checkbox_label" for="toggle1content1product2">
                                  <div>
                                      <img class="object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content1"
                                  id="toggle1content1product3">
                              <label class="checkbox_label" for="toggle1content1product3">
                                  <div>
                                      <img class="object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content1"
                                  id="toggle1content1product4">
                              <label class="checkbox_label" for="toggle1content1product4">
                                  <div>
                                      <img class="object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content1"
                                  id="toggle1content1product5">
                              <label class="checkbox_label" for="toggle1content1product5">
                                  <div>
                                      <img class="object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content1"
                                  id="toggle1content1product6">
                              <label class="checkbox_label" for="toggle1content1product6">
                                  <div>
                                      <img class="object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                      </div>
                      <!-- Tab1 toggle 1 content 1 End-->
                      <!-- Tab1 toggle 1 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content2"
                                  id="toggle1content2product1">
                              <label class="checkbox_label" for="toggle1content2product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content2"
                                  id="toggle1content2product2">
                              <label class="checkbox_label" for="toggle1content2product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content2"
                                  id="toggle1content2product3">
                              <label class="checkbox_label" for="toggle1content2product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content2"
                                  id="toggle1content2product4">
                              <label class="checkbox_label" for="toggle1content2product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab1 toggle 1 content 2  Ens-->
                      <!-- Tab1 toggle 1 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content3"
                                  id="toggle1content3product1">
                              <label class="checkbox_label" for="toggle1content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content3"
                                  id="toggle1content3product2">
                              <label class="checkbox_label" for="toggle1content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle1content3"
                                  id="toggle1content3product3">
                              <label class="checkbox_label" for="toggle1content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab1 toggle 1 content 3  End-->
                      <!-- Tab1 toggle 1 content  End-->




                      <!--=== Tab 1 TOGGLE ITEM 2 ========================================================= -->

                      <!-- Tab1 toggle 2 content 1  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content1"
                                  id="toggle2content1product1">
                              <label class="checkbox_label" for="toggle2content1product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>

                      </div>
                      <!-- Tab1 toggle 1 content 1 End-->
                      <!-- Tab1 toggle 1 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content2"
                                  id="toggle2content2product1">
                              <label class="checkbox_label" for="toggle2content2product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content2"
                                  id="toggle2content2product2">
                              <label class="checkbox_label" for="toggle2content2product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content2"
                                  id="toggle2content2product3">
                              <label class="checkbox_label" for="toggle2content2product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content2"
                                  id="toggle2content2product4">
                              <label class="checkbox_label" for="toggle2content2product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content2"
                                  id="toggle2content2product5">
                              <label class="checkbox_label" for="toggle2content2product5">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content2"
                                  id="toggle2content2product6">
                              <label class="checkbox_label" for="toggle2content2product6">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                      </div>
                      <!-- Tab1 toggle 1 content 2  Ens-->
                      <!-- Tab1 toggle 1 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content3"
                                  id="toggle2content3product1">
                              <label class="checkbox_label" for="toggle2content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content3"
                                  id="toggle2content3product2">
                              <label class="checkbox_label" for="toggle2content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="toggle2content3"
                                  id="toggle2content3product3">
                              <label class="checkbox_label" for="toggle2content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab1 toggle 1 content 3  End-->
                      <!-- Tab1 toggle 1 content  End-->

                  </div>
              </div>
              <!-- Tab 1 content 1 End ------------------------------------------------------------------------------------------------------------------------------------->




              <!-- Tab 2 content 1 Start---------------------------------------------------------------------------------- Tab 2 ---------------------------------------->
              <div class="tab_content active bg-[#ecebe9] pt-[30px] md:pt-[100px]">
                  <div class="flex max-[1300px]:flex-col max-[1300px]:items-center"">
                      <div class="min-[1300px]:w-[30%] w-full md:p-[20px]">
                          <p
                              class="px-[20px] text-[20px] leading-[20px] sm:text-[42px] sm:leading-[41px] capitalize border-b-[2px] border-[#222] pb-[18px] sm:pb-[30px]">
                              Base Cabinet
                          </p>
                          <!-- Tab 2 toggle start 1 -->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222] ">
                              <button
                                  class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px] uppercase">
                                  OPEN CABINET
                                  <i>+</i>
                              </button>
                              <div class="content">


                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title active text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" checked type="radio" name="tab2toggle1"
                                              id="tab2toggle1title1">
                                          <label
                                              class="checkbox_label2 active before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab2toggle1title1">1 Door/2 Adjustable Shelves</label>
                                      </li>

                                  </ul>
                              </div>
                          </div>
                          <!-- Tab 2 toggle end 1-->
                          <!--Tab 2 toggle start 2-->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222] ">
                              <button
                                  class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px] uppercase">
                                  WITH DOORS
                                  <i>+</i>
                              </button>
                              <div class="content">


                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">
                                      <!-- list 1 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab2toggle2"
                                              id="tab2toggle2title1">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab2toggle2title1">1 Door/2 Adjustable Shelves</label>
                                      </li>
                                      <!-- list 2 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab2toggle2"
                                              id="tab2toggle2title2">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab2toggle2title2">2Doors/2 Adjustable Shelves</label>
                                      </li>
                                      <!-- list 3 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab2toggle2"
                                              id="tab2toggle2title3">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab2toggle2title3">1 Door/2 Rollouts</label>
                                      </li>
                                  </ul>


                              </div>
                          </div>
                          <!-- Tab 2 toggle end 2-->
                      </div>

                      <!--=== Tab 2 Toggle 1 Contents============================================================Toggle 1 Products ====================================== -->
                      <!-- Tab2 toggle 1 content 1  Start-->
                      <div class="sub_tab_content active xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle1content1"
                                  id="tab2toggle1content1product1">
                              <label class="checkbox_label" for="tab2toggle1content1product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/vanities/Base Cabinets/Open Cabinet/Open Base Cabinet.png') }} "
                                          alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  Open Base Cabinet</h3>
                          </li>



                      </div>
                      <!-- Tab2 toggle 1 content 1 End-->
                      <!-- Tab2 toggle 1 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle1content2"
                                  id="tab2toggle1content2product1">
                              <label class="checkbox_label" for="tab2toggle1content2product1">
                                  <div>
                                      <img class="aspect-square object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/vanities/Base Cabinets/Base Doors/Base 2 Doors.png') }} "
                                          alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  Base 2 Doors</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle1content2"
                                  id="tab2toggle1content2product2">
                              <label class="checkbox_label" for="tab2toggle1content2product2">
                                  <div>
                                      <img class="aspect-square object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/vanities/Base Cabinets/Base Doors/Base Left_1 Door.png') }} "
                                          alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  Base Left_1 Door</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle1content2"
                                  id="tab2toggle1content2product3">
                              <label class="checkbox_label" for="tab2toggle1content2product3">
                                  <div>
                                      <img class="aspect-square object-cover w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/vanities/Base Cabinets/Base Doors/Base Right_1 Door.png') }} "
                                          alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  Base Right_1 Door</h3>
                          </li>


                      </div>
                      <!-- Tab2 toggle 1 content 2  Ens-->
                      <!-- Tab2 toggle 1 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle1content3"
                                  id="tab2toggle1content3product1">
                              <label class="checkbox_label" for="tab2toggle1content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle1content3"
                                  id="tab2toggle1content3product2">
                              <label class="checkbox_label" for="tab2toggle1content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle1content3"
                                  id="tab2toggle1content3product3">
                              <label class="checkbox_label" for="tab2toggle1content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab2 toggle 1 content 3  End-->
                      <!-- Tab2 toggle 1 content  End-->




                      <!--=== Tab 2 Toggle 2  Contents =========================================================Toggle 2 Products  ===================================== -->

                      <!-- Tab2 toggle 2 content 1  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content1"
                                  id="tab2toggle2content1product1">
                              <label class="checkbox_label" for="tab2toggle2content1product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>

                      </div>
                      <!-- Tab2 toggle 2 content 1 End-->
                      <!-- Tab2 toggle 2 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content2"
                                  id="tab2toggle2content2product1">
                              <label class="checkbox_label" for="tab2toggle2content2product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content2"
                                  id="tab2toggle2content2product2">
                              <label class="checkbox_label" for="tab2toggle2content2product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content2"
                                  id="tab2toggle2content2product3">
                              <label class="checkbox_label" for="tab2toggle2content2product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content2"
                                  id="tab2toggle2content2product4">
                              <label class="checkbox_label" for="tab2toggle2content2product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content2"
                                  id="tab2toggle2content2product5">
                              <label class="checkbox_label" for="tab2toggle2content2product5">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                      </div>
                      <!-- Tab2 toggle 2 content 2  Ens-->
                      <!-- Tab2 toggle 2 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content3"
                                  id="tab2toggle2content3product1">
                              <label class="checkbox_label" for="tab2toggle2content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content3"
                                  id="tab2toggle2content3product2">
                              <label class="checkbox_label" for="tab2toggle2content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab2toggle2content3"
                                  id="tab2toggle2content3product3">
                              <label class="checkbox_label" for="tab2toggle2content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab2 toggle 2 content 3  End-->
                      <!-- Tab2 toggle 2 content  End-->
                  </div>
              </div>
              <!-- Tab 2 content 2 End ---------------------------------------------------------------------------------------------------------------------------------->




              <!-- Tab 3 content 1 Start----------------------------------------------------------------------------------- Tab 3 ---------------------------------------->
              <div class="tab_content bg-[#ecebe9] pt-[30px] md:pt-[100px]">
                  <div class="flex max-[1300px]:flex-col  max-[1300px]:items-center"">
                      <div class="min-[1300px]:w-[30%] w-full md:p-[20px]">
                          <p
                              class="px-[20px] text-[20px] leading-[20px] sm:text-[42px] sm:leading-[41px] capitalize border-b-[2px] border-[#222] pb-[18px] sm:pb-[30px]">
                              Tall Cabinet
                          </p>

                          <!-- Tab 3 toggle start 1 -->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222] ">
                              <button class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px]">
                                  Tab 3 What is the return policy?
                                  <i>+</i>
                              </button>
                              <div class="content">
                                  <p
                                      class="text-[11px] leading-[14px] sm:text-[21px] sm:leading-[36px] mb-[15px] mt-[19] sm:mt-[22px] uppercase">
                                      tab 3 toggle 1
                                  </p>

                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title active text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" checked type="radio" name="tab3toggle1"
                                              id="tab3toggle1title1">
                                          <label
                                              class="checkbox_label2 active before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab3toggle1title1">1 Door/2 Adjustable Shelves</label>
                                      </li>
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab3toggle1"
                                              id="tab3toggle1title2">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab3toggle1title2">2 doors 2 adjustable shelves</label>
                                      </li>
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab3toggle1"
                                              id="tab3toggle1title3">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab3toggle1title3">1 Door/2 Rollouts</label>
                                      </li>
                                  </ul>


                              </div>
                          </div>
                          <!-- Tab 3 toggle end 1-->
                          <!--Tab 3 toggle start 2-->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222] ">
                              <button class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px]">
                                  tab 3 FULL HEIGHT BASES
                                  <i>+</i>
                              </button>
                              <div class="content">
                                  <p
                                      class="text-[11px] leading-[14px] sm:text-[21px] sm:leading-[36px] mb-[15px] mt-[19] sm:mt-[22px] uppercase">
                                      toggle 2
                                  </p>
                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">

                                      <!-- list 1 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab4toggle2"
                                              id="tab4toggle2title1">
                                          <label
                                              class="checkbox_label2 active before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab4toggle2title1">1 Door/2 Adjustable Shelves</label>

                                      </li>
                                      <!-- list 2 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab4toggle2"
                                              id="tab4toggle2title2">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab4toggle2title2">2Doors/2 Adjustable Shelves</label>

                                      </li>
                                      <!-- list 3 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab4toggle2"
                                              id="tab4toggle2title3">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab4toggle2title3">1 Door/2 Rollouts</label>
                                  </ul>
                                  </li>


                              </div>
                          </div>
                          <!-- Tab 3 toggle end 2-->
                      </div>

                      <!--=== Tab 3 Toggle 1 Contents============================================================Toggle 1 Products ====================================== -->
                      <!-- Tab3 toggle 1 content 1  Start-->
                      <div class="sub_tab_content active xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content1"
                                  id="tab3toggle1content1product1">
                              <label class="checkbox_label" for="tab3toggle1content1product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content1"
                                  id="tab3toggle1content1product2">
                              <label class="checkbox_label" for="tab3toggle1content1product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content1"
                                  id="tab3toggle1content1product3">
                              <label class="checkbox_label" for="tab3toggle1content1product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content1"
                                  id="tab3toggle1content1product4">
                              <label class="checkbox_label" for="tab3toggle1content1product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content1"
                                  id="tab3toggle1content1product5">
                              <label class="checkbox_label" for="tab3toggle1content1product5">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content1"
                                  id="tab3toggle1content1product6">
                              <label class="checkbox_label" for="tab3toggle1content1product6">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>



                      </div>
                      <!-- Tab3 toggle 1 content 1 End-->
                      <!-- Tab3 toggle 1 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content2"
                                  id="tab3toggle1content2product1">
                              <label class="checkbox_label" for="tab3toggle1content2product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content2"
                                  id="tab3toggle1content2product2">
                              <label class="checkbox_label" for="tab3toggle1content2product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content2"
                                  id="tab3toggle1content2product3">
                              <label class="checkbox_label" for="tab3toggle1content2product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content2"
                                  id="tab3toggle1content2product4">
                              <label class="checkbox_label" for="tab3toggle1content2product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab3 toggle 1 content 2  Ens-->
                      <!-- Tab3 toggle 1 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content3"
                                  id="tab3toggle1content3product1">
                              <label class="checkbox_label" for="tab3toggle1content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content3"
                                  id="tab3toggle1content3product2">
                              <label class="checkbox_label" for="tab3toggle1content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle1content3"
                                  id="tab3toggle1content3product3">
                              <label class="checkbox_label" for="tab3toggle1content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab3 toggle 1 content 3  End-->
                      <!-- Tab3 toggle 1 content  End-->




                      <!--=== Tab 3 Toggle 2  Contents =========================================================Toggle 2 Products  ===================================== -->

                      <!-- Tab3 toggle 2 content 1  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content1"
                                  id="tab3toggle2content1product1">
                              <label class="checkbox_label" for="tab3toggle2content1product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>

                      </div>
                      <!-- Tab3 toggle 2 content 1 End-->
                      <!-- Tab3 toggle 2 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content2"
                                  id="tab3toggle2content2product1">
                              <label class="checkbox_label" for="tab3toggle2content2product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content2"
                                  id="tab3toggle2content2product2">
                              <label class="checkbox_label" for="tab3toggle2content2product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content2"
                                  id="tab3toggle2content2product3">
                              <label class="checkbox_label" for="tab3toggle2content2product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content2"
                                  id="tab3toggle2content2product4">
                              <label class="checkbox_label" for="tab3toggle2content2product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content2"
                                  id="tab3toggle2content2product5">
                              <label class="checkbox_label" for="tab3toggle2content2product5">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                      </div>
                      <!-- Tab3 toggle 2 content 2  Ens-->
                      <!-- Tab3 toggle 2 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content3"
                                  id="tab3toggle2content3product1">
                              <label class="checkbox_label" for="tab3toggle2content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content3"
                                  id="tab3toggle2content3product2">
                              <label class="checkbox_label" for="tab3toggle2content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab3toggle2content3"
                                  id="tab3toggle2content3product3">
                              <label class="checkbox_label" for="tab3toggle2content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab3 toggle 2 content 3  End-->
                      <!-- Tab3 toggle 2 content  End-->
                  </div>
              </div>
              <!-- Tab 3 content 1 End----------------------------------------------------------------------------------------------------------------------------------->






              <!-- Tab 4 content 1 Start---------------------------------------------------------------------------------- Tab 4 ----------------------------------------->
              <div class="tab_content bg-[#ecebe9] pt-[30px] md:pt-[100px]">
                  <div class="flex max-[1300px]:flex-col  max-[1300px]:items-center"">
                      <div class="min-[1300px]:w-[30%] w-full md:p-[20px]">

                          <p
                              class="px-[20px] text-[20px] leading-[20px] sm:text-[42px] sm:leading-[41px] capitalize border-b-[2px] border-[#222] pb-[18px] sm:pb-[30px]">
                              Vanity Cabinet
                          </p>
                          <!-- Tab 3 toggle start 1 -->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222] ">
                              <button class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px]">
                                  tab 4 What is the return policy?
                                  <i>+</i>
                              </button>
                              <div class="content">
                                  <p
                                      class="text-[11px] leading-[14px] sm:text-[21px] sm:leading-[36px] mb-[15px] mt-[19] sm:mt-[22px] uppercase">
                                      tab 4 toggle 1
                                  </p>
                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">

                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title active text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" checked type="radio" name="tab4toggle1"
                                              id="tab4toggle1title1">
                                          <label
                                              class="checkbox_label2 active before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab4toggle1title1">1 Door/2 Adjustable Shelves</label>
                                      </li>
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab4toggle1"
                                              id="tab4toggle1title2">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab4toggle1title2">2 doors 2 adjustable shelves</label>
                                      </li>
                                      <!-- list  -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab4toggle1"
                                              id="tab4toggle1title3">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab4toggle1title3">1 Door/2 Rollouts</label>
                                      </li>
                                  </ul>


                              </div>
                          </div>
                          <!-- Tab 3 toggle end 1-->
                          <!--Tab 3 toggle start 2-->
                          <div class="w-full px-[20px] border-b-[2px] border-[#222] ">
                              <button class="toggle text-[11px] leading-[17px] sm:text-[21px] sm:leading-[36px]">
                                  tab 4 FULL HEIGHT BASES
                                  <i>+</i>
                              </button>
                              <div class="content">
                                  <p
                                      class="text-[11px] leading-[14px] sm:text-[21px] sm:leading-[36px] mb-[15px] mt-[19] sm:mt-[22px] uppercase">
                                      toggle 2
                                  </p>
                                  <ul class="text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] ">

                                      <!-- list 1 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab3toggle2"
                                              id="tab3toggle2title1">
                                          <label
                                              class="checkbox_label2 active before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab3toggle2title1">1 Door/2 Adjustable Shelves</label>

                                      </li>
                                      <!-- list 2 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab3toggle2"
                                              id="tab3toggle2title2">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab3toggle2title2">2Doors/2 Adjustable Shelves</label>

                                      </li>
                                      <!-- list 3 -->
                                      <li
                                          class="sub_checkbox_title text-[11px] leading-[14px] sm:text-[24px] sm:leading-[28px] flex gap-[7px] sm:gap-[13px] py-[5px] pl-[50px]">
                                          <input class="checkboxes" type="radio" name="tab3toggle2"
                                              id="tab3toggle2title3">
                                          <label
                                              class="checkbox_label2 before:w-[16px] before:h-[16px] md:before:w-[30px] md:before:h-[30px]"
                                              for="tab3toggle2title3">1 Door/2 Rollouts</label>
                                  </ul>
                                  </li>


                              </div>
                          </div>
                          <!-- Tab 3 toggle end 2-->
                      </div>

                      <!--=== Tab 3 Toggle 1 Contents============================================================Toggle 1 Products ====================================== -->
                      <!-- Tab3 toggle 1 content 1  Start-->
                      <div class="sub_tab_content active xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content1"
                                  id="tab4toggle1content1product1">
                              <label class="checkbox_label" for="tab4toggle1content1product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content1"
                                  id="tab4toggle1content1product2">
                              <label class="checkbox_label" for="tab4toggle1content1product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content1"
                                  id="tab4toggle1content1product3">
                              <label class="checkbox_label" for="tab4toggle1content1product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content1"
                                  id="tab4toggle1content1product4">
                              <label class="checkbox_label" for="tab4toggle1content1product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content1"
                                  id="tab4toggle1content1product5">
                              <label class="checkbox_label" for="tab4toggle1content1product5">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content1"
                                  id="tab4toggle1content1product6">
                              <label class="checkbox_label" for="tab4toggle1content1product6">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>



                      </div>
                      <!-- Tab3 toggle 1 content 1 End-->
                      <!-- Tab3 toggle 1 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content2"
                                  id="tab4toggle1content2product1">
                              <label class="checkbox_label" for="tab4toggle1content2product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content2"
                                  id="tab4toggle1content2product2">
                              <label class="checkbox_label" for="tab4toggle1content2product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content2"
                                  id="tab4toggle1content2product3">
                              <label class="checkbox_label" for="tab4toggle1content2product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content2"
                                  id="tab4toggle1content2product4">
                              <label class="checkbox_label" for="tab4toggle1content2product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab3 toggle 1 content 2  Ens-->
                      <!-- Tab3 toggle 1 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content3"
                                  id="tab4toggle1content3product1">
                              <label class="checkbox_label" for="tab4toggle1content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content3"
                                  id="tab4toggle1content3product2">
                              <label class="checkbox_label" for="tab4toggle1content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle1content3"
                                  id="tab4toggle1content3product3">
                              <label class="checkbox_label" for="tab4toggle1content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab3 toggle 1 content 3  End-->
                      <!-- Tab3 toggle 1 content  End-->




                      <!--=== Tab 3 Toggle 2  Contents =========================================================Toggle 2 Products  ===================================== -->

                      <!-- Tab3 toggle 2 content 1  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content1"
                                  id="tab4toggle2content1product1">
                              <label class="checkbox_label" for="tab4toggle2content1product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>

                      </div>
                      <!-- Tab3 toggle 2 content 1 End-->
                      <!-- Tab3 toggle 2 content 2  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content2"
                                  id="tab4toggle2content2product1">
                              <label class="checkbox_label" for="tab4toggle2content2product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content2"
                                  id="tab4toggle2content2product2">
                              <label class="checkbox_label" for="tab4toggle2content2product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content2"
                                  id="tab4toggle2content2product3">
                              <label class="checkbox_label" for="tab4toggle2content2product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content2"
                                  id="tab4toggle2content2product4">
                              <label class="checkbox_label" for="tab4toggle2content2product4">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content2"
                                  id="tab4toggle2content2product5">
                              <label class="checkbox_label" for="tab4toggle2content2product5">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                      </div>
                      <!-- Tab3 toggle 2 content 2  Ens-->
                      <!-- Tab3 toggle 2 content 3  Start-->
                      <div class="sub_tab_content xl:w-[70%] p-[20px] gap-[15px] md:gap-[30px]">

                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content3"
                                  id="tab4toggle2content3product1">
                              <label class="checkbox_label" for="tab4toggle2content3product1">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content3"
                                  id="tab4toggle2content3product2">
                              <label class="checkbox_label" for="tab4toggle2content3product2">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>
                          <li class="list-none">
                              <input class="checkboxes" type="radio" name="tab4toggle2content3"
                                  id="tab4toggle2content3product3">
                              <label class="checkbox_label" for="tab4toggle2content3product3">
                                  <div>
                                      <img class="w-full px-[20px] md:px-[30px] bg-white"
                                          src=" {{ asset('assets/images/page5/shelves.png') }} " alt="shelves">
                                  </div>
                              </label>
                              <h3
                                  class="mt-[10px] md:mt-[20px] text-[11px] leading-[12px] md:text-[24px] md:leading-[28px]">
                                  1 Door/2 Adjustable Shelves</h3>
                          </li>


                      </div>
                      <!-- Tab3 toggle 2 content 3  End-->
                      <!-- Tab3 toggle 2 content  End-->
                  </div>
              </div>
              <!-- Tab 4 content 1 End------------------------------------------------------------------------------------------------------------------------------------>
          </div>


          <!-- section 5 end  -->
      </section>
      <!-- section 04 end  -->








      <!-- section 05 start  -->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      5
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Dimensions
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>
          <!-- ONE start -->
          <section class="bg-[#f4f4f3] mt-[30px] p-[20px] md:p-[60px] font-[700]">

              <section class="dimension_section">
                  <!-- section 1 start  -->
                  <div><img class="max-w-[527px] w-full"
                          src=" {{ asset('assets/images/counter/Dimention.png') }} " alt="dimension">
                  </div>
                  <!-- section 1 end -->
                  <section class="pl-[0] lg:pl-[55px]">

                      <!-- section 2 start  -->
                      <div class="flex flex-col items-center lg:items-end mt-[24px] lg:mt-[56px]">

                          <div>
                              <section class="mb-[20px] md:mb-[70px]">

                                  <div class="account_category_radio_div3">
                                      <div class="labels pl-[10px] md:pl-[46px]">
                                          <input type="radio" checked id="dimension1" name="dimension"
                                              value="email" />
                                          <label class="spans" for="dimension1">Imperial Units (Inches)</label>
                                      </div>
                                  </div>
                                  <!-- another -->
                                  <div class="account_category_radio_div3">
                                      <div class="labels pl-[10px] md:pl-[46px]">
                                          <input type="radio" id="dimension2" name="dimension"
                                              value="email" />
                                          <label class="spans" for="dimension2">Metric Units (Centimeters)</label>
                                      </div>
                                  </div>
                          </div>

                          <div class="flex flex-col gap-[9px] lg:gap-[21px]">
                              <div class="flex items-center gap-[9px] lg:gap-[21px]">
                                  <label for="dimension-width"
                                      class="text-[16px] leading-[22px]
                          lg:text-[32px] lg:leading-[52px] uppercase font-[700]">W</label>

                                  <input class="select_box_container" value="32" type="number"
                                      id="dimension-width">
                                  <input class="select_box_container" value="0" type="number"
                                      id="dimension-width">

                              </div>
                              <!-- another  -->
                              <div class="flex items-center gap-[9px] lg:gap-[21px]">
                                  <h1
                                      class="text-[16px] leading-[22px]
                          lg:text-[32px] lg:leading-[52px] uppercase font-[700] pl-[3px]">
                                      H</h1>

                                  <input class="select_box_container" value="34" type="number"
                                      id="dimension-width">
                                  <input class="select_box_container" value=".5" type="number"
                                      id="dimension-width">
                              </div>
                              <!-- another  -->
                              <div class="flex items-center gap-[9px] lg:gap-[21px]">
                                  <h1
                                      class="text-[16px] leading-[22px]
                          lg:text-[32px] lg:leading-[52px] uppercase font-[700] pl-[3px]">
                                      D</h1>

                                  <input class="select_box_container" value="23" type="number"
                                      id="dimension-width">
                                  <input class="select_box_container" value=".5" type="number"
                                      id="dimension-width">
                              </div>
                          </div>


                      </div>
                      <!-- section 2 end -->

                  </section>
                  </div>
              </section>
          </section>
          <!-- ONE end -->


      </section>
      <!-- section 06 end  -->


      <!-- section 06 start  -->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      6
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Grain Direction
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>

          <div class="flex justify-between gap-[13px] mt-[23px]">
              <li class="list-none">
                  <input class="checkboxes" checked type="radio" name="radio7" id="image1">
                  <label class="checkbox_label" for="image1">
                      <img class="max-w-[790px] w-full"
                          src=" {{ asset('assets/images/page5/Rey-Xpress-Vertical Grain.jpg') }} " alt="one">
                  </label>
                  <h3 class="text-[12px] leading-[22px] md:text-[34px] md:leading-[60px]">Vertical Grain</h3>
              </li>
              <!-- another  -->
              <li class="list-none">
                  <input class="checkboxes" type="radio" name="radio7" id="image2">
                  <label class="checkbox_label" for="image2">
                      <img class="max-w-[790px] w-full"
                          src=" {{ asset('assets/images/page5/Rey-Xpress-Horizontal-Grain.jpg') }} "
                          alt="two">
                  </label>
                  <h3 class="text-[12px] leading-[22px] md:text-[34px] md:leading-[60px]">Horizontal Grain</h3>
              </li>
              <!-- another  -->

          </div>
      </section>
      <!-- section 06 end  -->


      <!-- section 07 start  -->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      7
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Select Finished Side(s) <span class="font-[400]">(if required)</span>
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>


          <section class="bg-[#f4f4f3]">
              <div class="grid grid-cols-2 sm:grid-cols-3 gap-[13px] xl:gap-[30px] mt-[23px]  p-[10px] lg:p-[50px]">
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="radio8" id="checkbox1">
                      <label class="checkbox_label" for="checkbox1">
                          <img class="w-full object-cover "
                              src=" {{ asset('assets/images/page5/secion8/Rey-Xpress-Left-Side-Finished.svg') }} "
                              alt="one">
                      </label>
                      <h3 class="text-[12px] leading-[16px] lg:text-[34px] lg:leading-[42px] mt-[10px] lg:mt-[25px]">
                          Left Side Finished</h3>
                  </li>
                  <!-- another  -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="radio8" id="checkbox2">
                      <label class="checkbox_label" for="checkbox2">
                          <img class="w-full object-cover "
                              src=" {{ asset('assets/images/page5/secion8/Rey-Xpress-Right-Side-Finished.svg') }} "
                              alt="two">
                      </label>
                      <h3 class="text-[12px] leading-[16px] lg:text-[34px] lg:leading-[42px] mt-[10px] lg:mt-[25px]">
                          Right Side Finished</h3>
                  </li>
                  <!-- another  -->
                  <!-- another  -->
                  <li class="list-none">
                      <input class="checkboxes" checked type="radio" name="radio8" id="checkbox3">
                      <label class="checkbox_label" for="checkbox3">
                          <img class="w-full object-cover "
                              src=" {{ asset('assets/images/page5/secion8/Rey-Xpress-Both-Sides-Finished.svg') }} "
                              alt="Three">
                      </label>
                      <h3 class="text-[12px] leading-[16px] lg:text-[34px] lg:leading-[42px] mt-[10px] lg:mt-[25px]">
                          Both Left/Right Side Finished</h3>
                  </li>
                  <!-- another  -->

              </div>



              <!-- check start -->
              <div class="pb-[20px] lg:pb-[50px]">
                  <section class="mt-[10px] md:mt-[35px]">

                      <div class="account_category_radio_div3">
                          <div class="labels pl-[10px] md:pl-[46px]">
                              <input type="radio" id="finishedSide1" name="finishedSide" value="email" />
                              <label class="spans" for="finishedSide1">Match Sides of Cabinet with Cabinet Interior
                                  Material</label>
                          </div>
                      </div>
                      <!-- another -->
                      <div class="account_category_radio_div3">
                          <div class="labels pl-[10px] md:pl-[46px]">
                              <input type="radio" checked id="finishedSide2" name="finishedSide"
                                  value="email" />
                              <label class="spans" for="finishedSide2">Match Sides of Cabinet with Door/Drawer
                                  Color</label>
                          </div>
                      </div>
              </div>

          </section>
      </section>
      <!-- check end -->

      <!-- section 07 end  -->


      <!-- SECTION 8 START -->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      8
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Number of Fixed Shelves<span class="font-[400]">(if required)</span>
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>


          <!-- ONE start -->
          <section class=" bg-[#f4f4f3] mt-[30px] p-[20px] md:p-[60px] font-[700]">

              <section class="flex flex-col lg:flex-row justify-center lg:justify-around item-center">
                  <!-- section 1 start  -->
                  <div><img class="max-w-[150px] md:max-w-[300px]"
                          src=" {{ asset('assets/images/vanities/fixed-shelve.png') }} " alt="dimension">
                  </div>


                  <!-- section 1 end -->
                  <section class="pl-[0] lg:pl-[55px]">
                      <!-- section 2 start  -->
                      <div class="w-full mt-[24px] lg:mt-[56px]">

                          <h3
                              class="mb-[7px] lg:mb-[20px] text-[11px] leading-[26px] md:text-[21px] md:leading-[36px]">
                              SPECIFY THE NUMBER OF SHELVES</h3>

                          <div class="flex flex-col gap-[9px] lg:gap-[21px]">
                              <input class="select_box_container" value="0" type="number"
                                  id="dimension-width">
                          </div>
                          <div class="md:ml-[-55px] mt-[30px] lg:mt-[60px]">
                              <section class="mb-[20px] md:mb-[70px]">
                                  <div class="account_category_radio_div3">
                                      <div class="labels pl-[10px] md:pl-[46px]">
                                          <input type="radio" id="shelve1section1" name="shelve1section"
                                              value="email" />
                                          <label class="spans" for="shelve1section1">Match Shelves with Cabinet
                                              Interior Material</label>
                                      </div>
                                  </div>
                                  <!-- another -->
                                  <div class="account_category_radio_div3">
                                      <div class="labels pl-[10px] md:pl-[46px]">
                                          <input type="radio" checked id="shelve1section2" name="shelve1section"
                                              value="email" />
                                          <label class="spans" for="shelve1section2">Match Shelves with Door/Drawer
                                              Color</label>
                                      </div>
                                  </div>
                          </div>
                      </div>
                      <!-- section 2 end -->
                  </section>
              </section>
          </section>
          <!-- ONE end -->

      </section>
      <!-- SECTION 8 END -->




      <!-- SECTION 9 START -->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      9
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Number of Pullout Shelves <span class="font-[400]">(if required)</span>
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>


          <!-- ONE start -->
          <section class=" bg-[#f4f4f3] mt-[30px] p-[20px] md:p-[60px] font-[700]">

              <section class="flex flex-col lg:flex-row justify-center lg:justify-around item-center">
                  <!-- section 1 start  -->
                  <div><img class="max-w-[150px] md:max-w-[300px]"
                          src=" {{ asset('assets/images/vanities/pullout-shelve.png') }} " alt="dimension"></div>


                  <!-- section 1 end -->
                  <section class="pl-[0] lg:pl-[55px]">
                      <!-- section 2 start  -->
                      <div class="w-full mt-[24px] lg:mt-[56px]">

                          <h3
                              class="mb-[7px] lg:mb-[20px] text-[11px] leading-[26px] md:text-[21px] md:leading-[36px]">
                              SPECIFY THE NUMBER OF PULLOUTS</h3>

                          <div class="flex flex-col gap-[9px] lg:gap-[21px]">
                              <input class="select_box_container" value="0" type="number"
                                  id="dimension-width">
                          </div>
                          <div class="md:ml-[-55px] mt-[30px] lg:mt-[60px]">
                              <section class="mb-[20px] md:mb-[70px]">
                                  <div class="account_category_radio_div3">
                                      <div class="labels pl-[10px] md:pl-[46px]">
                                          <input type="radio" id="Pullouts1" name="Pullouts" value="email" />
                                          <label class="spans" for="Pullouts1">Match Pullouts with Cabinet Interior
                                              Material</label>
                                      </div>
                                  </div>
                                  <!-- another -->
                                  <div class="account_category_radio_div3">
                                      <div class="labels pl-[10px] md:pl-[46px]">
                                          <input type="radio" checked id="Pullouts2" name="Pullouts"
                                              value="email" />
                                          <label class="spans" for="Pullouts2">Match Pullouts with Door/Drawer
                                              Color</label>
                                      </div>
                                  </div>
                          </div>
                      </div>
                      <!-- section 2 end -->
                  </section>
              </section>
          </section>
          <!-- ONE end -->

      </section>
      <!-- SECTION 9 END -->







      <!-- section 10 start  -->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      10
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Select Hinge Side
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>

          <div class="flex justify-between gap-[13px] mt-[23px]">
              <li class="list-none">
                  <input class="checkboxes" checked type="radio" name="radio9" id="checkboxs1">
                  <label class="checkbox_label" for="checkboxs1">
                      <img class="max-w-[790px] w-full max-[500px]:h-[138px] object-cover"
                          src=" {{ asset('assets/images/page5/section9/Rey-Xpress-Left-Hinge.svg') }} "
                          alt="one">
                  </label>
                  <h3 class="text-[12px] leading-[22px] md:text-[34px] md:leading-[60px] mt-[10px] xl:mt-[25px]">Left
                      Hinge</h3>
              </li>
              <!-- another  -->
              <li class="list-none">
                  <input class="checkboxes" type="radio" name="radio9" id="checkboxs2">
                  <label class="checkbox_label" for="checkboxs2">
                      <img class="max-w-[790px] w-full max-[500px]:h-[138px] object-cover"
                          src=" {{ asset('assets/images/page5/section9/Rey-Xpress-Right-Hinge.svg') }} "
                          alt="two">
                  </label>
                  <h3 class="text-[12px] leading-[22px] md:text-[34px] md:leading-[60px] mt-[10px] xl:mt-[25px]">Right
                      Hinge</h3>
              </li>
              <!-- another  -->
          </div>
      </section>
      <!-- section 10 end  -->



      <!-- section 11 start  -->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] lg:py-[35px] lg:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] lg:gap-[37px]">
                  <h2
                      class="bg-white lg:text-[50px] lg:leading-[41px] text-[15px] leading-[12px] lg:w-[95px] lg:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      11
                  </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] lg:text-[42px] lg:leading-[41px]">
                      Select a Toekick Option
                  </h2>
              </div>

              <div>
                  <img class="w-[13px] h-[13px] lg:w-[50px] lg:h-[50px]"
                      src=" {{ asset('assets/images/page5/plus.png') }} " alt="plus icon" />
              </div>
          </div>

          <div class="grid grid-cols-2 lg:grid-cols-4 gap-[13px] mt-[23px]">
              <li class="list-none">
                  <input class="checkboxes" checked type="radio" name="radio10" id="standard">
                  <label class="checkbox_label" for="standard">
                      <img class="w-full"
                          src=" {{ asset('assets/images/page5/section10/Rey-Xpress-Standard-No-Toekick.svg') }} "
                          alt="one">
                  </label>
                  <h3 class="text-[11px] leading-[12px] lg:text-[34px] lg:leading-[60px] mt-[10px] xl:mt-[25px]">
                      Standard No Toekick</h3>
              </li>
              <!-- another  -->
              <li class="list-none">
                  <input class="checkboxes" type="radio" name="radio10" id="recessed">
                  <label class="checkbox_label" for="recessed">
                      <img class="w-full"
                          src=" {{ asset('assets/images/page5/section10/Rey-Xpress-Recessed-Toekick.svg') }} "
                          alt="two">
                  </label>
                  <h3 class="text-[11px] leading-[12px] lg:text-[34px] lg:leading-[60px] mt-[10px] xl:mt-[25px]">
                      Recessed Toekick</h3>
              </li>
              <!-- another  -->
              <!-- another  -->
              <li class="list-none">
                  <input class="checkboxes" type="radio" name="radio10" id="adjustable">
                  <label class="checkbox_label" for="adjustable">
                      <img class="w-full"
                          src=" {{ asset('assets/images/page5/section10/Rey-Xpress-Legs-With-Toekick.svg') }} "
                          alt="two">
                  </label>
                  <h3
                      class="max-w-[170px] lg:max-w-[300px] text-[11px] leading-[12px] lg:text-[34px] lg:leading-[38px] mt-[10px] xl:mt-[25px]">
                      Adjustable Cabinet Legs with Toekick</h3>
              </li>
              <!-- another  -->
              <!-- another  -->
              <li class="list-none">
                  <input class="checkboxes" type="radio" name="radio10" id="separate">
                  <label class="checkbox_label" for="separate">
                      <img class="w-full"
                          src=" {{ asset('assets/images/page5/section10/Rey-Xpress-Seperate-Base-Toekick.svg') }} "
                          alt="two">
                  </label>
                  <h3
                      class="max-w-[170px] lg:max-w-[320px] text-[11px] leading-[12px] lg:text-[34px] lg:leading-[38px] mt-[10px] xl:mt-[25px]">
                      Seperate Base Platform and Toekick</h3>
              </li>
              <!-- another  -->
          </div>
      </section>
      <!-- section 11 end  -->










      <!-- ITEM SUMMARY SECTION START  -->
      <section class="mt-[24px] lg:mt-[86px]">
          <h2 class="text-[18px] leading-[19px] lg:text-[42px] lg:leading-[41px] font-[700]">Item Summery</h2>

          <!-- full gray section start -->
          <section class="mt-[12px] lg:mt-[47px] bg-[#f5f4f3] p-[30px] lg:p-[70px] relative">
              <div class="flex xl:justify-between justify-center items-center xl:flex-row flex-col relative">
                  <img class="min-[1280px]:hidden w-[18px] h-[18px] cursor-pointer absolute top-[24px] right-[18px]"
                      src=" {{ asset('assets/images/plus.png') }} " alt="plus">
                  <div>
                      <p
                          class="sm:w-full min-[1280px]:hidden mt-[23px] ml-[18px] font-[700] text-[16px] leading-[24px] lg:text-[42px] lg:leading-[41px]">
                          Total</p>

                      <div class="flex justify-center items-center">
                          <div class="imageHoverContainer">
                              <img src=" {{ asset('assets/images/vanities/cart-vanities.png') }} "
                                  alt="add to cart">
                          </div>
                      </div>
                      <img class="max-[1280px]:hidden w-[48px] h-[48px] mt-[60px] cursor-pointer"
                          src=" {{ asset('assets/images/plus.png') }} " alt="plus">

                  </div>

                  <div class="w-full xl:pl-[30px]">
                      <p
                          class="max-w-[560px] w-full mx-auto max-[1280px]:hidden font-[700] text-[16px] leading-[24px] lg:text-[42px] lg:leading-[41px]">
                          Total</p>
                      <h2
                          class="relative text-center lg:mt-[145px] mb-[30px] lg:mb-[60px] text-[28px] leading-[28px] lg:text-[75px] lg:leading-[80px] max-lg:mt-[20px]">
                          CAD $300.00 <sub
                              class="absolute -ml-[30px] -mb-[10px] lg:-ml-[70px] lg:-mb-[20px] text-[13px] leading-[16px] lg:text-[28px] lg:leading-[28px]">each</sub>
                      </h2>
                      <div class="flex items-center justify-center gap-[15px]">
                          <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px]">QTY</span>
                          <div
                              class="bg-[#edecea] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px]">
                              <button id="minus"
                                  class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                                  - </button>
                              <span id="num"
                                  class=" bg-[#ffffff] border-2 border-[#222222] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                                  01 </span>
                              <button id="plus"
                                  class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                                  + </button>
                          </div>
                      </div>

                      <div class="mt-[36px] lg:mt-[92px] flex flex-col items-center gap-[8px] lg:gap-[20px]">
                          <button
                              class="duration-200 border-[2px] border-black hover:bg-white hover:text-black max-w-[560px] w-full bg-[#222] uppercase text-white py-[8px] lg:py-[22px] text-[9px] leading-[15px] lg:text-[24px] lg:leading-[41px]">Add
                              to Cart</button>
                          <button
                              class="duration-300 border-[2px] border-black hover:bg-black hover:text-white max-w-[560px] w-full bg-[#fff] uppercase text-[222] py-[8px] lg:py-[22px] text-[9px] leading-[15px] lg:text-[24px] lg:leading-[41px]">SAVE
                              TO PROJECTS</button>
                      </div>
                  </div>
              </div>



              <div class="borderSummarySection"></div>


              <table class="table-auto">
                  <!-- body  -->
                  <tbody class="w-full text-[11px] leading-[14px] md:text-[28px] md:leading-[34px]">
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Cabinet Door Style:</td>
                          <td>Ultica Shaker</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Door/Drawer Front Color:</td>
                          <td>Dark Rockford Hickory</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Cabinet Interior Materials:</td>
                          <td>Light Rockford Hickory</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Cabinets, Vanities, Trim & Details:
                          </td>
                          <td>Base / 1 Drawer / 2 Doors</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Dimensions: </td>
                          <td>W 16 inch x H 34.5 inch x D 16 inch</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Grain Direction:</td>
                          <td>Vertical</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Finished Sides: </td>
                          <td>Left / Right</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Fixed Shelves:</td>
                          <td>1 X White Melamine</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Pullout Shelves:</td>
                          <td>0</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Hinges:</td>
                          <td>Left Hinge</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Toekick:</td>
                          <td>Front Toekick with Adjustable Legs </td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="lg:min-w-[500px] md:min-w-[380px] font-[700]">Delivery Time:</td>
                          <td>Ships in 15 Business Days Or Less</td>
                      </tr>
                  </tbody>
              </table>



              <div class="borderSummarySection"></div>



              <section class="flex justify-between max-md:flex-col max-md:gap-[12px] pb-[150px]">
                  <div class="max-w-[600px] w-full lg:px-[25px]">
                      <img class="lg:max-w-[247px] max-w-[120px] w-full"
                          src=" {{ asset('assets/images/fitting/Rey-Xpress-High-Quality-Products.svg') }} "
                          alt="high-quality-product">
                      <p class="font24 my-[12px] lg:my-[25px]">Crafted with quality to withstand a lifetime of daily
                          use.Due to manufacturing variances, limitations of computer screens and the variation in
                          natural lighting, actual colors may vary from the images you see here.</p>
                      <article class="font24">To order actual product samples, please contact us at: <span
                              class="highlightText">info@rey-xpress.com</span> or call us at: <span
                              class="whitespace-nowrap">T 905.265.0286</span> or T 877.265.0286. Samples are
                          non-refunded. All sales are final.</article>
                  </div>

                  <div class="border-r-[1px] border-[#000]"></div>

                  <div class="max-w-[600px] w-full md:px-[25px]">
                      <button
                          class="duration-300 border-[2px] border-[#c17b52] hover:border-[#222] hover:bg-black hover:text-white max-w-[560px] w-full bg-[#fff] uppercase text-[#c17b52] py-[8px] lg:py-[22px] text-[9px] leading-[15px] lg:text-[24px] lg:leading-[41px]">RESET
                          ALL SELECTIONS</button>

                      <p class="font24 my-[12px] lg:my-[25px]">Click the “Reset All Selections” button if you want to
                          restore all menu settings to its original settings.</p>
                  </div>
              </section>


              <!-- circle logo  -->
              <div class="absolute md:bottom-0 md:mb-[-135px] max-xl:mb-[-50px] left-1/2 -translate-x-1/2">
                  <a href="#">
                      <img class="w-[100px] md:w-[270px]"
                          src=" {{ asset('assets/images/fitting/Rey-Xpress-Button-Add-Item-Black.svg') }} "
                          alt="add a item" />
                  </a>
              </div>


          </section>
          <!-- full gray section end -->
      </section>
      <!-- ITEM SUMMARY SECTION END  -->

  </main>
