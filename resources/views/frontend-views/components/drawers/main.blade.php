  <!-- CONTAINER FOR THIS PAGE ---- -->
  <main class="max-w-[1920px] mx-auto px-[30px] xl:px-[150px]">



      <!-- section 1 start  ===========================-->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] md:py-[35px] md:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] md:gap-[37px]">

                  <h2
                      class="bg-white md:text-[50px] md:leading-[41px] text-[15px] leading-[12px] md:w-[95px] md:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      1</h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] md:text-[42px] md:leading-[41px]">
                      Select a Drawer Style
                  </h2>
              </div>
              <div>
                  <img class="w-[13px] h-[13px] md:w-[50px] md:h-[50px]" src="{{ asset('front-end/assets/images/doors/plus.png') }}" alt="plus icon" />
              </div>
          </div>

          <!-- list radio section  -->
          <div class="mt-[10px] md:mt-[35px]">
              <div class="account_category_radio_div">
                  <div class="labels pl-[10px] md:pl-[46px]">
                      <input type="radio" id="drawerSection1" name="drawerSection" value="email" />
                      <label class="spans" for="drawerSection1">5-Piece Drawers</label>
                  </div>
              </div>
          </div>

          <!-- another -->
          <div class="account_category_radio_div">
              <div class="labels pl-[10px] md:pl-[46px]">
                  <input type="radio" id="drawerSection2" name="drawerSection" value="email" />
                  <label class="spans" for="drawerSection2">Glass Drawers</label>
              </div>
          </div>
          </div>
          <!-- another -->
          <div class="account_category_radio_div">
              <div class="labels pl-[10px] md:pl-[46px]">
                  <input type="radio" checked id="drawerSection3" name="drawerSection" value="email" />
                  <label class="spans" for="drawerSection3">Slab Drawers </label>
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/5piceDoors/1a.Columbia.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/5piceDoors/1b.Columbia.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/5piceDoors/1c.Columbia.png') }}"
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/5piceDoors/1d.Columbia.png') }}"
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/5piceDoors/4.V-Shaker.png') }}"
                                  alt="door" />
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
                              <img src="{{ asset('front-end/assets/images/doors/glassDoors/door1.png') }}" alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door1.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door2.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door3.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door4.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door5.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door6.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door7.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door8.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door9.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door10.png') }}"
                                  alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/slabDoors/door11.png') }}"
                                  alt="door" />
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
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] md:py-[35px] md:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] md:gap-[37px]">

                  <h2
                      class="bg-white md:text-[50px] md:leading-[41px] text-[15px] leading-[12px] md:w-[95px] md:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      2</h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] md:text-[42px] md:leading-[41px]">
                      Select a Drawers Front Color
                  </h2>
              </div>
              <div>
                  <img class="w-[13px] h-[13px] md:w-[50px] md:h-[50px]" src="{{ asset('front-end/assets/images/doors/plus.png') }}"
                      alt="plus icon" />
              </div>
          </div>

          <!-- list radio section  -->
          <section class="list_radio_grid_container mt-[10px] md:mt-[35px]">

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




          <!-- 2. MDF Painted Doors  ------------------------------------------------------------->
          <div class="radio_list_content2 md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image1">
                      <label class="checkbox_label" for="doorColorSection2image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Chantilly Lace.png') }}"
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">
                          Chantilly Lace <br>
                          OC-65</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection2"
                          id="doorColorSection2image2">
                      <label class="checkbox_label" for="doorColorSection2image2">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Decorators White.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Ultra White.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Simply White.png"') }}
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Cloud White.png ') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Oxford White.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Cloud White.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Seapearl.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Snowfall White.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Swiss Coffee.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/Dove Wing.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/MDF Painted Doors/White Dove.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Standard Finishes/White.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Standard Finishes/Hard Rock Maple.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Standard Finishes/Linen.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Standard Finishes/Black.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Standard Finishes/Plywood.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/White Matte.png"') }} alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Natural White Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Cool Grey Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Modern Grey Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Chrome Grey Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Fume Matte.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Light Grey Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Light Beige Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Sand Beige Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Grey Matte.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Lava Matte.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Pastel Blue Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Nile Green Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Pastel Blue Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Tropic Green Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Pastel Orange Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Night Blue Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Ecru Antracite Matte.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Super Matt Panels/Black Matte.png') }}"
                                  
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Albero Bianco.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Antique Bronze.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Antique Gold.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Black Leather.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Brushed Aluminum.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Brushed Bronze.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Brushed Copper.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Brushed Gold.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Brushed Inox.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Cactus Textile.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Canyon Beige.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Canyon Grey.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Cosmic Marble.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Darkhaki Textile.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Dun Grey Leather.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Tortora Leather.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/English Grey Leather.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Greige Tessea.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Grey Line.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/White Line.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Elegant Spike.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/Mercurio Textile.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Textured Panels/White Sahara.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/White Gloss.png"') }} 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Natural White Gloss.png') }}"
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Natural White
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image3">
                      <label class="checkbox_label" for="doorColorSection6image3">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Light Beige Gloss.png.png') }}"
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Light Beige
                          High Gloss</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection6"
                          id="doorColorSection6image4">
                      <label class="checkbox_label" for="doorColorSection6image4">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]  ">
                              <img class="doorProductImage"
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Grey Gloss.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Modern Grey Gloss.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Chrome Grey Gloss.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Fume Gloss.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Ecru White Gloss.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Ecru New Grey Gloss.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Ecru Antracite Gloss.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Lava Gloss.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Ruby Gloss.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Sand Beige Gloss.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/High Gloss/Black Gloss.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Arena Origami.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Arslanbob.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Augusta Walnut.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Black Mamut.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Bruma Origami.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Casual Borgona.png') }}" alt="door" />
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Coal Oak.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Cognac Monument.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Dark Cherry.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Dark Hickory.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Dark Walnut.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Grey Craft Oak.png"') }} 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Grey Nordic Wood.png"') }} 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Guernica Grey Oak.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Hazel Oak.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Languedoc Oak.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Light Hickory.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Light Select Walnut.pn') }}g"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Monterrey Oak.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Oyster Urban Oak.png') }}" 
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Oyster Urban Oak</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image21">
                      <label class="checkbox_label" for="doorColorSection7image21">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Pure Surfside Ash.png') }}"
                                  alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">Pure Surfside Ash</h3>
                  </li>
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection7"
                          id="doorColorSection7image22">
                      <label class="checkbox_label" for="doorColorSection7image22">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage"
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Ristretto Oak.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Samoa Oak.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Sand Barbera Oak.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Satin Coastland Oak.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Smoked Eucalyptus.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Smoked Jarrah.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Smoked Kala Ash.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/Tribeca Walnut.png') }}" alt="door" />
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Wood Grain/White Oak.png') }}" alt="door" />
                          </div>
                      </label>
                      <h3 class="colorSampleTitle">White Oak</h3>
                  </li>
                  <!-- end -->
              </div>
          </div>




          <!-- 8. Stained  ------------------------------------------------------------->
          <div class="radio_list_content2  md:mt-[55px] mt-[30px] w-full">
              <!-- doors container  -->
              <div class="colorSampleSmall">
                  <!--  door design -->
                  <li class="list-none">
                      <input class="checkboxes" type="radio" name="doorColorSection8"
                          id="doorColorSection8image1">
                      <label class="checkbox_label" for="doorColorSection8image1">
                          <div class="border-[3px] border-[#ffffff] ring-[1px] ring-[#c3c3c3]">
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Black W240.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Brown Mahogany W260A.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Dark Walnut W210.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Golden Oak W201.png') }}" 
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Gunstock Walnut W247.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Light Walnut W231.png') }}" 
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Pecan W239.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Pickled Oak WS200482.png') }}"
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
                                  src="{{ asset('front-end/assets/images/doors/frontColor/Stained/Sandstorm W253.png') }}" 
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
                              <img class="doorProductImage" src="{{ asset('front-end/assets/images/doors/frontColor/Stained/White W250.png') }}"
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
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] md:py-[35px] md:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] md:gap-[37px]">

                  <h2
                      class="bg-white md:text-[50px] md:leading-[41px] text-[15px] leading-[12px] md:w-[95px] md:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      3</h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] md:text-[42px] md:leading-[41px]">
                      Dimensions
                  </h2>
              </div>
              <div>
                  <img class="w-[13px] h-[13px] md:w-[50px] md:h-[50px]" src="{{ asset('front-end/assets/images/doors/plus.png') }}"
                      alt="plus icon" />
              </div>
          </div>

          <!-- start body of dimension  -->
          <section class="dimension_section">
              <!-- section 1 start  -->
              <div><img src="{{ asset('front-end/assets/images/drawers/drawers-dimention.png') }}" 
                alt="dimension"></div>
              <!-- section 1 end -->

              <!-- section 2 start -->
              <div class="mt-[30px] md:mt-[0]">
                  <section class="mt-[10px] md:mt-[35px]">

                      <div class="account_category_radio_div3">
                          <div class="labels pl-[10px] md:pl-[46px]">
                              <input type="radio" id="dimension1" name="dimension" value="email" />
                              <label class="spans" for="dimension1">Imperial Units (Inches)</label>
                          </div>
                      </div>
                      <!-- another -->
                      <div class="account_category_radio_div3">
                          <div class="labels pl-[10px] md:pl-[46px]">
                              <input type="radio" id="dimension2" name="dimension" value="email" />
                              <label class="spans" for="dimension2">Metric Units (Centimeters)</label>
                          </div>
                      </div>

                      <!-- section 06 start  -->
                      <section class="pl-[0] md:pl-[55px]">

                          <div
                              class="flex justify-center  flex-wrap md:justify-between gap-[15px] mt-[24px] md:mt-[56px]">
                              <div class="flex items-center gap-[9px] md:gap-[21px]">
                                  <label for="dimension-width"
                                      class="text-[16px] leading-[22px]
    md:text-[32px] md:leading-[52px] uppercase font-[700]">W</label>

                                  <input class="select_box_container" type="number" id="dimension-width">
                                  <input class="select_box_container" type="number" id="dimension-width">

                              </div>
                              <!-- another  -->
                              <div class="flex items-center gap-[9px] md:gap-[21px]">
                                  <h1
                                      class="text-[16px] leading-[22px]
    md:text-[32px] md:leading-[52px] uppercase font-[700] pl-[5px]">
                                      H</h1>

                                  <input class="select_box_container" type="number" id="dimension-width">
                                  <input class="select_box_container" type="number" id="dimension-width">
                              </div>
                              <!-- another  -->
                              <div class="flex items-center gap-[9px] md:gap-[21px]">
                                  <h1
                                      class="text-[16px] leading-[22px]
    md:text-[32px] md:leading-[52px] uppercase font-[700] pl-[5px]">
                                      D</h1>

                                  <input class="select_box_container" type="number" id="dimension-width">
                                  <input class="select_box_container" type="number" id="dimension-width">
                              </div>

                          </div>
              </div>
          </section>
          <!-- section 06 end  -->


          </div>
          <!-- section 2 end -->
      </section>
      </section>
      <!-- section 3 end  -->























      <!-- section 4 start  ======================================================================-->
      <section>
          <div
              class="bg-[#ecebe9] flex items-center justify-between py-[10px] px-[20px] sm:py-[35px] sm:px-[46px] mt-[58px] md:mt-[135px]">
              <div class="flex items-center gap-[10px] sm:gap-[37px]">
                  <h2
                      class="bg-white sm:text-[50px] sm:leading-[41px] text-[15px] leading-[12px] sm:w-[95px] sm:h-[95px] w-[28px] h-[28px] rounded-full flex justify-center items-center">
                      4 </h2>
                  <h2 class="font-[700] text-[16px] leading-[13px] sm:text-[42px] sm:leading-[41px]">
                      Grain Direction
                  </h2>
              </div>
              <div>
                  <img class="w-[13px] h-[13px] sm:w-[50px] sm:h-[50px]" src="{{ asset('front-end/assets/images/doors/plus.png') }}"
                      alt="plus icon" />
              </div>
          </div>

          <div class="flex justify-between gap-[13px] mt-[23px]">
              <li class="list-none">
                  <input class="checkboxes" type="radio" name="radio7" id="image1">
                  <label class="checkbox_label" for="image1">
                      <img class="max-w-[790px] w-full" src="{{ asset('front-end/assets/images/doors/Rey-Xpress-Vertical Grain.jpg') }}"
                          alt="one">
                  </label>
                  <h3 class="text-[12px] leading-[22px] md:text-[34px] md:leading-[60px]">Vertical Grain</h3>
              </li>
              <!-- another  -->
              <li class="list-none">
                  <input class="checkboxes" type="radio" name="radio7" id="image2">
                  <label class="checkbox_label" for="image2">
                      <img class="max-w-[790px] w-full" src="{{ asset('front-end/assets/images/doors/Rey-Xpress-Horizontal-Grain.jpg') }}"
                          alt="two">
                  </label>
                  <h3 class="text-[12px] leading-[22px] md:text-[34px] md:leading-[60px]">Horizontal Grain</h3>
              </li>
              <!-- another  -->

          </div>
      </section>
      <!-- section 4 end  -->


















      <!-- ITEM SUMMARY SECTION START  -->
      <section class="mt-[24px] lg:mt-[86px]">
          <h2 class="text-[18px] leading-[19px] lg:text-[42px] lg:leading-[41px] font-[700]">Item Summery</h2>

          <!-- full gray section start -->
          <section class="mt-[12px] lg:mt-[47px] bg-[#f5f4f3] p-[30px] lg:p-[70px] relative">
              <div class="flex xl:justify-between justify-center items-center xl:flex-row flex-col relative">
                  <img class="md:hidden w-[18px] h-[18px] cursor-pointer absolute top-[24px] right-[18px]"
                      src="{{ asset('front-end/assets/images/plus.png') }}" alt="plus">
                  <div class="w-full">
                      <p
                          class="sm:hidden mt-[23px] ml-[18px] font-[700] text-[16px] leading-[24px] lg:text-[42px] lg:leading-[41px]">
                          Total</p>

                      <div class="flex justify-center items-center">
                          <div class="imageHoverContainer">
                              <img src="{{ asset('front-end/assets/images/drawers/drawers-cart.png') }}" alt="add to cart">
                          </div>
                      </div>
                      <img class="max-lg:hidden w-[48px] h-[48px] mt-[60px] cursor-pointer" src="{{ asset('front-end/assets/images/plus.png') }}"
                          alt="plus">

                  </div>

                  <div class="w-full xl:pl-[30px]">
                      <p
                          class="max-w-[560px] w-full mx-auto max-[640px]:hidden font-[700] text-[16px] leading-[24px] lg:text-[42px] lg:leading-[41px]">
                          Total</p>
                      <h2
                          class="relative text-center lg:mt-[145px] mb-[30px] lg:mb-[60px] text-[28px] leading-[28px] lg:text-[75px] lg:leading-[80px] max-lg:mt-[20px]">
                          CAD $152.00 <sub
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
                          <td class="md:min-w-[380px] font-[700]">Cabinet Door Style:</td>
                          <td>V-Groove Shaker</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="md:min-w-[380px] font-[700]">Door/Drawer Front Color: </td>
                          <td>Dark Rockford Hickory</td>
                      </tr>
                      <!-- another -->
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="md:min-w-[380px] font-[700]">Dimensions: </td>
                          <td>W 16 inch x H 6 inch x D 23.5 inch</td>
                      </tr>
                      <!-- another -->
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="md:min-w-[380px] font-[700]">Grain Direction:</td>
                          <td>Vertical</td>
                      </tr>
                      <!-- another -->
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="md:min-w-[380px] font-[700]">Hinges:</td>
                          <td>Left Hinge</td>
                      </tr>
                      <!-- another -->
                      <tr class="flex mt-[8px] md:mt-[30px] md:flex-row flex-col">
                          <td class="md:min-w-[380px] font-[700]">Delivery Time:</td>
                          <td>Ships in 15 Business Days Or Less</td>
                      </tr>
                  </tbody>
              </table>



              <div class="borderSummarySection"></div>



              <section class="flex justify-between max-md:flex-col max-md:gap-[12px] pb-[150px]">
                  <div class="max-w-[600px] w-full lg:px-[25px]">
                      <img class="lg:max-w-[247px] max-w-[120px] w-full"
                          src="{{ asset('front-end/assets/images/fitting/Rey-Xpress-High-Quality-Products.svg') }}" alt="high-quality-product">
                      <p class="font24 my-[12px] lg:my-[25px]">Crafted with quality to withstand a lifetime of daily
                          use.
                          Due to manufacturing variances, limitations of computer
                          screens and the variation in natural lighting, actual colors
                          may vary from the images you see here.</p>
                      <article class="font24">To order actual product samples, please contact us at: <span
                              class="highlightText">info@rey-xpress.com</span> or call us at: <span
                              class="whitespace-nowrap">T 905.265.0286</span> or T 877.265.0286. Samples are
                          non-refunded. All sales are final.</article>
                  </div>

                  <div class="border-r-[1px] border-[#000]"></div>

                  <div class="max-w-[600px] w-full md:px-[25px]">
                      <button
                          class="duration-300 border-[2px] border-[#c96d3e] hover:border-[#222] hover:bg-black hover:text-white max-w-[560px] w-full bg-[#fff] uppercase text-[#c96d3e] py-[8px] lg:py-[22px] text-[9px] leading-[15px] lg:text-[24px] lg:leading-[41px]">RESET
                          ALL SELECTIONS</button>

                      <p class="font24 my-[12px] lg:my-[25px]">Click the “Reset All Selections” button if you want to
                          restore all menu settings to its original settings.</p>
                  </div>
              </section>


              <!-- circle logo  -->
              <div class="absolute md:bottom-0 md:mb-[-135px] max-xl:mb-[-50px] left-1/2 -translate-x-1/2">
                  <a href="#">
                      <img class="w-[100px] md:w-[270px]"
                          src="{{ asset('front-end/assets/images/fitting/Rey-Xpress-Button-Add-Item-Black.svg') }}" alt="add a item" />
                  </a>
              </div>


          </section>
          <!-- full gray section end -->
      </section>
      <!-- ITEM SUMMARY SECTION END  -->




  </main>
    <!-- END CONTAINER FOR THIS PAGE ---------- -->

