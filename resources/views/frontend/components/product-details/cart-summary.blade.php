    <!-- ========== Cart Summary 🛒Section Start ========== -->
    <section
        class="max-w-[1920px] w-full px-[30px] xl:px-[150px] mx-auto flex gap-[33px] sm:gap-[60px] mb-[45px] max-[1500px]:flex-col max-[1500px]:items-center">
        <!-- cart details section  -->
        <div class=" max-w-[845px] w-full border-t-[1px] border-[#9a999a]">
            <div class=" flex justify-between pt-[11px] sm:pt-[35px] flex-col sm:flex-row">
                <!-- sub section -->
                <div class=" order-1 sm:order-3">
                    <h2
                        class="text-[14px] max-sm:mb-[-50px] sm:text-[28px] leading-[15px] sm:leading-[41px] text-right font-[700]">
                        CAD 2,799.20
                    </h2>
                </div>

                <div class="max-w-[200px] w-full order-2 sm:order-1">
                    <img class="max-w-[100px] sm:max-w-[200px] w-full bg-[#f5f4f3]"
                        src="{{ asset('assets/images/productDetails/door-cabinate.png') }}" alt="doorCarinate" />
                </div>

                <!-- sub section -->
                <div class="max-w-[370px] w-full pl-0 sm:pl-[30px] pr-0 sm:pr-[10px] order-3 sm:order-2">
                    <h3 class="text-[12px] leading-[15px] sm:text-[28px] sm:leading-[41px] font-[700]">
                        1 Door Base Cabinet
                    </h3>
                    <h3
                        class="text-[12px] leading-[15px] sm:text-[28px] sm:leading-[41px] mb-[11px] sm:mb-[32px] font-[700]">
                        2 Adjustable Shelves
                    </h3>

                    <div
                        class="max-w-[230px] sm:max-w-[500px] w-full text-[11px] leading-[14px] sm:text-[18px] sm:leading-[24px] mb-[17px] sm:mb-[40px] font-[700]">

                        <p class="font-[700]">Dimensions: <span class="font-[400]">W 27 in x H 30 in x D 24 in</span>
                        </p>
                        <p class="font-[700]">Cabinet Interior Material: <span class="font-[400]">3/4 Hard Rock
                                Maple</span></p>
                        <p class="font-[700]">Textured Panels:<span class="font-[400]">Anthracite Rift Oak</span></p>

                    </div>


                    <div class="flex items-center gap-[15px]">
                        <span class="text-[11px] sm:text-[24px] leading-[18px] sm:leading-[41px]">QTY</span>

                        <div
                            class="bg-[#ecebe9] flex justify-between text-[11px] sm:text-[21px] leading-[16px] sm:leading-[36px]">
                            <button id="minus"
                                class="text-[18px] sm:text-[41px] sm:h-[52px] sm:w-[52px] h-[23px] w-[23px] flex justify-center items-center">
                                - </button>
                            <span id="num"
                                class="sm:h-[52px] sm:w-[52px] h-[23px] w-[23px] flex justify-center items-center bg-[#ffffff] border-2 border-[#222222]">01</span>
                            <button id="plus"
                                class="text-[18px] sm:text-[41px] sm:h-[52px] sm:w-[52px] h-[23px] w-[23px] flex justify-center items-center">+</button>
                        </div>
                    </div>

                    <!-- sub section  -->
                </div>
                <!-- sub section -->
            </div>



            <!-- up coming sections 01  -->
            <div class="flex justify-end pb-[25px] pt-0 sm:pt-[45px] border-b-[1px] border-[#9a999a]">
                <div class="flex gap-2 items-center border-r-2 border-[#edecea] sm:pr-[22px] pr-[11px]">
                    <h2 class="text-[11px] leading-[9px] sm:text-[18px] smleading-[40px]">
                        Save for Later
                    </h2>
                    <img class="w-[11px] sm:w-[25px] h-[11px] sm:h-[25px] cursor-pointer"
                        src="{{ asset('assets/images/productDetails/download-icon.png') }}" alt="download" />
                </div>


                <div class="flex gap-2 items-center sm:pl-[22px] pl-[11px]">
                    <h2 class="text-[11px] leading-[9px] sm:text-[18px] smleading-[40px]">
                        Remove
                    </h2>
                    <img class="w-[11px] sm:w-[20px] h-[11px] sm:h-[20px] cursor-pointer"
                        src="{{ asset('assets/images/productDetails/remove-icon.png') }}" alt="remove" />
                </div>
            </div>



            <!-- up coming sections 02  -->
            <div class="py-[18px] sm:py-[45px] border-b-[1px] border-[#9a999a]">
                <div class="account_category_radio_div flex flex-col items-center">
                    <div class="labels max-w-[480px] w-full">
                        <input type="radio" id="contactChoice1" name="contact" value="email" />
                        <label class="spans flex items-start" for="contactChoice1">
                            <h3 class="font-[700] text-[11px] leading-[14px] sm:text-[24px] sm:leading-[41px]"> Ship
                                <p
                                    class="font-[400] max-w-[240px] sm:max-w-[380px] text-[11px] leading-[14px] sm:text-[20px] sm:leading-[28px]">
                                    Purchase now and we'll ship when it's ready. Shipping:
                                    Toronto Area, In-Home Arrives: Estimated delivery June 23,
                                    2023.Postal Code: K1A 0A1
                                </p>
                            </h3>
                        </label>
                    </div>

                    <div class="labels max-w-[480px] w-full">
                        <input type="radio" id="contactChoice2" name="contact" value="email" />
                        <label class="spans flex items-start" for="contactChoice2">
                            <h3 class="font-[700] text-[11px] leading-[14px] sm:text-[24px] sm:leading-[41px]">
                                Free Pickup
                                <p
                                    class="font-[400] max-w-[400px] text-[11px] leading-[14px] sm:text-[20px] sm:leading-[28px]">
                                    From: 1-301 Hanlan, Woodbridge, ON L4L 3R7
                                </p>
                            </h3>
                        </label>
                    </div>
                </div>
            </div>






            <!-- up coming sections 03  -->
            <div>
                <div class="flex items-center gap-[10px] pt-[10px] sm:pt-[30px] pb-[9px] md:pb-[36px]">
                    <img class="w-[14px] sm:w-[32px]" src="{{ asset('assets/images/productDetails/plus.png') }}"
                        alt="plusIcon" />
                    <h2 class="text-[14px] sm:text-[24px] font-[700]">Add More Items</h2>
                </div>
                <!-- box  -->
                <div
                    class="max-w-[845px] bg-[#ecebe9] p-[20px] sm:p-[27px] flex gap-[10px] justify-between mb-[11px] sm:mb-[40px]">
                    <div class="max-w-[380px] w-full">
                        <h2 class="font-[700] text-[11px] leading-[12px] sm:text-[24px] sm:leading-[41px]">
                            Returns made easy
                        </h2>
                        <p class="text-[9px] leading-[12px] my-[7px] sm:my-[23px] sm:text-[20px] sm:leading-[28px]">
                            At Rey-Express, we stand behind the quality of our products and
                            want every purchase to be a positive experience.
                        </p>
                        <a class="text-[9px] sm:text-[20px] leading-[12px] sm:leading-[28px] border-b-[1px] border-[#9a999a]"
                            href="#">Our Return/Exchange Policy</a>
                    </div>
                    <div class="max-w-[380px] w-full">
                        <h2 class="font-[700] text-[11px] leading-[12px] sm:text-[24px] sm:leading-[28px]">
                            Unlimited cabinet or millwork delivery for one flat fee
                        </h2>
                        <p class="text-[9px] leading-[12px] my-[7px] sm:my-[23px] sm:text-[20px] sm:leading-[28px]">
                            For a flat fee per trip, we will deliver all cabinets and or
                            millwork in your order regardless of the number of items.
                        </p>
                        <a class="text-[9px] sm:text-[20px] leading-[12px] sm:leading-[28px] border-b-[1px] border-[#9a999a]"
                            href="#">Learn more</a>
                    </div>
                </div>
            </div>
            <!-- up coming sections end  -->
            <div class="flex items-center gap-[10px] mb-[13px]">
                <div>
                    <img class="w-[16px] sm:w-[31px]" src="{{ asset('assets/images/productDetails/padlock.png') }}"
                        alt="lock" />
                </div>
                <div>
                    <h3 class="font-[700] text-[9px] leading-[12px] sm:text-[20px] sm:leading-[24px]">
                        Secure Checkout
                    </h3>
                    <p class="text-[9px] leading-[12px] sm:text-[18px] sm:leading-[24px]">
                        Shopping is always
                        <a class="border-b-[1px] border-[#9a999a]" href="#">safe and secure.</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Cart summery section start =================================================-->
        <!-- Cart summery section start =================================================-->
        <!-- Cart summery section start =================================================-->
        <div class="max-w-[710px] w-full border border-[#9a999a] px-[20px] sm:px-[28px]">
            <!-- up coming div ^^^^^^^^^^^ -->
            <div class="flex items-center gap-[7px] sm:gap-[20px] pt-[30px] sm:pt-[44px] pb-[13px] sm:pb-[35px]">
                <img class="w-[14px] sm:w-[35px]" src="{{ asset('assets/images/productDetails/padlock.png') }}"
                    alt="lock" />
                <h2 class="font-[700] text-[15px] leading-[15px] sm:text-[42px] sm:leading-[41px]">
                    Cart Summery
                </h2>
            </div>
            <!-- up coming div ^^^^^^^^^^^ -->
            <!-- another  -->
            <div class="text-[11px] leading-[16px] sm:text-[24px] sm:leading-[41px]">
                <div class="flex justify-between mb-[14px]">
                    <h2>Merchandise:</h2>
                    <h2>CAD 2,799.20</h2>
                </div>
                <!-- another  -->
                <div class="flex justify-between">
                    <h2>Est. Shipping & Handling:</h2>
                    <h2>CAD 599.00</h2>
                </div>
                <!-- another  -->
                <div class="flex justify-between">
                    <h2>Est. Tax:</h2>
                    <h2>CAD 441.77</h2>
                </div>
                <!-- another  -->
                <div class="flex justify-between">
                    <h2>Estimated for K1A 0A1:</h2>
                </div>
            </div>
            <!-- up coming div ^^^^^^^^^^^^ -->
            <div class="w-full h-[1px] bg-[#d8d8d8] my-[9px] sm:my-[25px]"></div>
            <!-- up coming div  ^^^^^^^^^^^-->
            <div class="mb-[24px] sm:mb-[74px]">
                <div
                    class="font-[700] flex justify-between text-[14px] leading-[16px] sm:text-[32px] sm:leading-[41px]">
                    <h2>Est. Order Total:</h2>
                    <h2>CAD 3,839.97</h2>
                </div>
            </div>

            <!-- up coming div  ^^^^^^^^^^^^-->
            <div class="text-[11px] leading-[16px] sm:text-[24px] sm:leading-[41px] mb-[20px] sm:mb-[55px]">
                <p class="font-[700]">Apply a Promotion Code</p>
                <p>Remove any spaces or dashes before hitting apply.</p>
            </div>
            <!-- up coming div  ^^^^^^^^^^^^-->
            <div class="flex justify-between gap-[10px] sm:gap-[25px]">
                <input
                    class="text-[11px] leading-[13px] sm:text-[21px] sm:leading-[36px] border-[#222222] border-[1px] px-[7px] sm:px-[14px] py-[7px] w-full outline-none"
                    placeholder="Enter Code" type="text" />
                <button
                    class="text-[11px] leading-[13px] sm:text-[21px] sm:leading-[36px] border-[#222222] bg-[#222222] text-[#ffffff] border-[1px] px-[25px] sm:px-[54px] py-[7px] uppercase cursor-pointer">
                    Apply
                </button>
            </div>
            <!-- up coming div  ^^^^^^^^^^^^-->
            <button
                class="text-[11px] leading-[13px] sm:text-[21px] sm:leading-[36px] border-[#222222] bg-[#222222] text-[#ffffff] border-[1px] py-[7px] uppercase cursor-pointer w-full mt-[12px] sm:mt-[30px]">
                CHECKOUT NOW
            </button>
            <!-- up coming div  ^^^^^^^^^^^^-->
            <div
                class="text-[11px] leading-[16px] py-[15px] sm:py-[35px] sm:text-[24px] sm:leading-[41px] border-b-[1px] border-[#cfcfcf]">
                <p>By continuing to Checkout, you are agreeing to our</p>
                <p>
                    <a class="border-b-[1px] border-[#9a999a]" href="#">Terms of Use</a>
                    and
                    <a class="border-b-[1px] border-[#9a999a]" href="#">Privacy Policy.</a>
                </p>
            </div>
            <!-- up coming div  ^^^^^^^^^^^^-->
            <div class="mt-[12px] sm:mt-[35px] mb-[12px] sm:mb-[54px]">
                <p class="text-[11px] leading-[13px] sm:text-[24px] sm:leading-[41px]">
                    Or use other checkout methods:
                </p>

                <div class="flex justify-between my-[12px] sm:my-[36px]">
                    <img class="w-[46px] sm:w-[124px]"
                        src="{{ asset('assets/images/productDetails/Rey-Xpress-Visa-Logo.svg') }}" alt="visa" />
                    <img class="w-[30px] sm:w-[80px]"
                        src="{{ asset('assets/images/productDetails/Rey-Xpress-Mastercard-Logo.svg') }}"
                        alt="mastercard" />
                    <img class="w-[66px] sm:w-[177px]"
                        src="{{ asset('assets/images/productDetails/Rey-Xpress-PayPal-Logo.svg') }}" alt="paypal" />
                </div>

                <div class="flex items-center gap-[12px] sm:gap-[18px]">
                    <img class="w-[35px] sm:w-[94px]"
                        src="{{ asset('assets/images/productDetails/Rey-Xpress-Apple-Pay-Logo.svg') }}"
                        alt="apple" />
                    <p class="text-[11px] leading-[16px] sm:text-[24px] sm:leading-[41px]">
                        Apple Pay available for Apple Pay account holders. Sign up for
                        Apple Pay in your phone settings.
                    </p>
                </div>
            </div>
            <!-- up coming div  ^^^^^^^^^^^^-->
        </div>
    </section>
    <!-- ========== Cart Summary 🛒Section End ========== -->
