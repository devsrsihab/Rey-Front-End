<main class="mx-auto max-w-[1920px] px-[30px] lg:px-[60px] xl:px-[150px]">

    <!-- after hero section 2 start -->
    <section class="flex justify-between items-center mt-[48px] lg:mt-[150px] gap-[25px] xl:flex-row flex-col">
        <section>
            <!-- heading  -->
            <h2 class="text-[22px] leading-[24px] lg:text-[50px] lg:leading-[55px] uppercase font-[700]">Managing Your
                Project</h2>
            <!-- border  -->
            <div class="w-[43px] lg:w-[110px] h-[2px] bg-[#bc6d3e] my-[16px] lg:my-[58px]"></div>
            <!-- copy  -->
            <article class="text-[14px] leading-[20px] lg:text-[38px] lg:leading-[48px]">
                To make organizing and sorting your projects easier, select your kitchen cabinets, vaneties, doors,
                drawers, hardware counter top or any other component, and store in your projects folder. You can also
                set up as many projects as you need. Once you confirm your items, you can add items to your shopping
                cart and proceed to checkout.
            </article>
        </section>
    </section>
    <!-- after hero section 2 end -->


    <!-- Alert Section start -->
    <section
        class="mt-[30px] lg:mt-[50px] xl:mt-[80px] mb-[15px] lg:mb-[30px] xl:mb-[50px] border-[2px] border-[#ff0000] py-[15px] px-[20px] lg:py-[30px] lg:px-[55px] xl:py-[50px] xl:px-[75px] relative">
        <img class="absolute -top-[1px] -right-[1px] cursor-pointer w-[15px] h-[15px] lg:w-[35px] lg:h-[35px]"
            src="{{ asset('front-end/assets/images/rey-projects/alert-cross.png') }}" alt="cross">
        <div class="flex items-start gap-[10px] lg:gap-[27px]">
            <img class="cursor-pointer w-[30px] h-[30px] lg:w-[62px] lg:h-[62px]" src="{{ asset('front-end/assets/images/rey-projects/alert.png') }}"
                alt="alert">
            <article
                class="text-[#fc5441] text-[12px] lg:text-[20px] xl:text-[28px] leading-[20px] lg:leading-[28px] xl:leading-[36px]">
                Error with your dimensions, cabinet interior material or door/drawer front color, see items indicated in
                red below. Ignore the error and continue? Note: Ignoring the error may cause your cabinets to be
                inconsistant.
            </article>
        </div>
        <div class="flex justify-center mt-[10px] lg:mt-[27px]">
            <button
                class="cursor-pointer border-[2px] border-[#ff0000] px-[20px] lg:px-[40px] text-[12px] leading-[27px] lg:text-[24px] lg:leading-[41px] text-[#fc5441]">IGNORE</button>
        </div>
    </section>
    <!-- Alert Section end  -->

    <!-- PROJECT 1 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 1.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Base / 90 Left / 1 Door</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 32 in x H 34.5 in x D 23.5 in</p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus1"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num1"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus1"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">1,799.20</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 1 End -->


    <!-- PROJECT 2 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets') }}/images/rey-projects/projects/Asset 2.png" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Base / 1 Drawer / 1 Right Door</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span>W 16 in x H 34.5 in x D 23.5 in</p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> : 3/4 Hard Rock Maple</p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span><span class="text-[#fb5942]">White
                            Melamine</span></p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus2"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num2"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus2"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">1,899.59</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 2 End -->


    <!-- PROJECT 3 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 3.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Base / 1 Drawer / 2 Doors</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 30 in x H 34.5 in x D <span
                            class="text-[#fb5942]">22.5 in</span></p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus3"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num3"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus3"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">1,499.72</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 3 End -->


    <!-- PROJECT 4 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 4.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Base / 3 Drawers</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 16 in x H 34.5 in x D 23.5 in</p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus4"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num4"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus4"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">2,225.69</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 4 End -->

    <!-- PROJECT 5 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 5.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Base / Pullout Waste Bin</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 16 in x H 34.5 in x D <span
                            class="text-[#fb5942]">21.5 in</span></p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus5"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num5"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus5"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">859.25</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 5 End -->


    <!-- PROJECT 6 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 6.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Upper / 90 Left / 1 Door</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 16 in x H 34.5 in x D 23.5 in</p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus6"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num6"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus6"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">1569.58</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 6 End -->

    <!-- PROJECT 7 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 7.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Upper / 1 Right Door</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 32 in x H 34.5 in x D 23.5 in</p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus7"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num7"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus7"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">2,575.49</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 7 End -->


    <!-- PROJECT 8 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 8.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Upper / 2 Doors</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 32 in x H 34.5 in x D 23.5 in</p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>

                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus8"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num8"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus8"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>

                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">1,786.98</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 8 End -->

    <!-- PROJECT 9 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 1.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Upper / 1 Left Door</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 32 in x H 34.5 in x D <span
                            class="text-[#fb5942]">23.5 in</span></p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> Anthracite Rift Oak</p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus9"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num9"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus9"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>

                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">1,785.79</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 9 End -->

    <!-- PROJECT 10 Start  -->
    <section
        class="bg-[#f5f4f3] px-[30px] py-[20px] lg:px-[60px] lg:py-[50px] xl:px-[80px] xl:py-[70px] mb-[15px] lg:mb-[25px]">
        <!-- Main Card Section start-->
        <div class="flex max-[480px]:flex-col relative max-[580px]:gap-[10px] max-[1450px]:gap-[40px] gap-[100px]">
            <!-- Image section start -->
            <div>
                <img class="min-[700px]:max-w-[350px] max-[700px]:max-w-[180px] max-[580px]:max-w-[130px] w-full aspect-square"
                    src="{{ asset('front-end/assets/images/rey-projects/projects/Asset 1.png') }}" alt="Project">
            </div> <!--Image section end -->
            <!-- Text section start  -->
            <div>

                <h2
                    class="font-[700] text-[14px] leading-[24px] lg:text-[32px] lg:leading-[41px] mb-[10px] lg:mb-[20px]">
                    Tall / 2 Doors</h2>
                <div class="text-[11px] leading-[22px] lg:text-[24px] lg:leading-[34px]">
                    <p><span class="font-[700]">Dimensions:</span> W 32 in x H 34.5 in x D 23.5 in</p>
                    <p><span class="font-[700]">Cabinet Interior Material:</span> 3/4 Hard Rock Maple </p>
                    <p><span class="font-[700]">Door/Drawer Front Color:</span> <span class="text-[#fb5942]">White
                            Melamine</span></p>
                </div>


                <div class="flex items-center gap-[15px]  my-[10px] lg:my-[45px]">
                    <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px] font-[700]">QTY</span>
                    <div
                        class="font-[700] bg-[#fff] flex justify-between text-[11px] lg:text-[21px] leading-[16px] lg:leading-[36px] border-2 border-[#d0cfce]">
                        <button id="minus10"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            - </button>
                        <span id="num10"
                            class=" bg-[#ffffff] border-l-2 border-r-2 border-[#d0cfce] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            01 </span>
                        <button id="plus10"
                            class="text-[18px] lg:text-[41px] lg:h-[62px] h-[22px] lg:w-[62px] w-[22px] flex justify-center items-center">
                            + </button>
                    </div>
                </div>


                <div class="flex gap-[15px] lg:gap-[25px]">
                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Remove
                        <img class="w-[10px] h-[10px] lg:w-[17px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/remove-btn.png') }}" alt="Remove"></button>

                    <div class="w-[2px] h-[20px] lg:h-[34px] bg-[#222]"></div>

                    <button
                        class="cursor-pointer flex items-center gap-[5px] lg:gap-[10px] text-[11px] lg:text-[24px]">Modify
                        <img class="w-[12px] h-[10px] lg:w-[19px] lg:h-[17px]"
                            src="{{ asset('front-end/assets/images/rey-projects/arrow-right-btn.png') }}" alt="Modify"></button>
                </div>

            </div> <!-- text section end  -->

            <h2 class="absolute top-0 right-0 font-[700] text-[12px] lg:text-[32px]">1,429.89</h2>
        </div> <!-- Main Card Section end-->
    </section> <!-- PROJECT 10 End -->






    <!-- button   -->
    <section class="flex justify-center my-[50px] lg:my-[150px]">
        <div>
            <button
                class="text-[11px] leading-[27px] lg:text-[24px] lg:leading-[41px]  text-[#fff] bg-[#222] hover:bg-[#fff] hover:text-[#222] border-[2px] border-[#222] max-w-[560px] w-full h-[40px] lg:h-[70px] mb-[10px] lg:mb-[20px]">ADD
                ALL ITEMS TO CART</button>
            <button
                class="text-[11px] leading-[27px] lg:text-[24px] lg:leading-[41px]  text-[#222] bg-[#fff] hover:bg-[#222] hover:text-[#fff] border-[2px] border-[#222] max-w-[560px] w-full h-[40px] lg:h-[70px]">CONTINUE
                SHOPPING</button>
        </div>
    </section>

    <div class="w-full h-[1px] bg-[#d0d0d0]"></div>


</main>
