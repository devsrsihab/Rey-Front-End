    <!-- Header Section Start -->
    <section class="headerSection">
        <!-- Navbar Desktop Start -->
        <nav class="max-[1370px]:hidden w-full bg-[#ffffff] pt-[40px] pb-[40px]">
            <!-- main nav container  -->
            <section class="mx-auto max-w-[1920px] px-[100px] flex justify-between gap-[20px] max-[1000px]:flex-col">
                <!-- logo -->
                <div class="logo">
                    <a href="#">
                        <img class="md:w-[440px] w-[165px]"
                            src="{{ asset('front-end/assets/images/navbar/Rey-Xpress-Color-Logo.svg') }} "
                            alt="logo" />
                    </a>
                </div>
                <!-- main links container -->
                <div class="gap-[70px] flex flex-col justify-between items-end">
                    <!-- top links  -->
                    <div class="topLinks max-[1000px]:w-full">
                        <div
                            class="min-[1700px]:text-[14px] xl:text-[15px] text-[14px] sm:leading-[14px] leading-[32px] flex items-center max-[1000px]:flex-col max-[1000px]:block">
                            <!-- items  -->
                            <a class="flex items-center gap-[10px] max-[1000px]:py-[20px]" href="/pages/page3.html">
                                <img class="sm:w-[23px] w-[20px]"
                                    src="{{ asset('front-end/assets/images/navbar/Rey-Xpress-Account-Icon.svg') }}"
                                    alt="account" /> SIGN IN / CREATE ACCOUNT </a>
                            <!-- items  -->
                            <a class="flex items-center gap-[10px] mx-[32px] px-[32px] border-l-2 border-r-2 border-[#9a999a]"
                                href="#">
                                <img class="sm:w-[28px] w-[20px]"
                                    src="{{ asset('front-end/assets/images/navbar/Rey-Xpress-Projects-Icon.svg') }}"
                                    alt="project" /> PROJECTS </a>
                            <!-- items  -->
                            <a class="flex items-center gap-[10px]" href="./pages/page4.html">
                                <img class="sm:w-[24px] w-[20px]"
                                    src="{{ asset('front-end/assets/images/navbar/Rey-Xpress-Shopping-Cart-Icon.svg') }}"
                                    alt="cart" /> SHOPPING CART </a>
                        </div>
                    </div>
                    <!-- bottom links  -->
                    <div class="bottomLinks">
                        <ul id="navbar"
                            class="nav flex 2xl:gap-[60px] xl:gap-[40px] gap-[20px] min-[1700px]:text-[22px] text-[18px] leading-[32px] text-[#9a999a] uppercase">
                            <li class="hover:text-[#666666]">
                                <a class="navlinks pb-[28px]" href="/pages/page2.html">PRODUCT & FINISHES</a>
                            </li>
                            <li class="hover:text-[#666666]">
                                <a class="navlinks pb-[28px]" href="./pages/page5.html">SHOP</a>
                            </li>
                            <li class="hover:text-[#666666]">
                                <a class="navlinks pb-[28px]" href="#">WHY REY-XPRESS</a>
                            </li>
                            <li class="hover:text-[#666666]">
                                <a class="navlinks pb-[28px]" href="#">TUTORIALS</a>
                            </li>
                            <li class="hover:text-[#666666]">
                                <a class="navlinks pb-[28px]" href="#">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </nav>
        <!-- Navbar Desktop End -->

        <!-- Navbar Mobile Start  -->
        <section id="mobile_nav_bg" class="min-[1370px]:hidden bg-[#fff]">
            <div class="px-[30px] py-[50px] text-[#fff]">
                <!-- logo and hamburger menu  -->
                <section class="flex justify-between items-center ">
                    <div>
                        <a href="#">
                            <img id="nav_logo_white" class="w-[165px] active"
                                src="{{ asset('front-end/assets/images/navbar/Rey-Xpress-White-Logo.svg') }}"
                                alt="logo" />
                            <img id="nav_logo_red" class="w-[165px] "
                                src="{{ asset('front-end/assets/images/navbar/Rey-Xpress-Color-Logo.svg') }}"
                                alt="logo" />
                        </a>
                    </div>
                    <div>
                        <div class="hamburger_menu" id="hamburger_menu">
                            <div class="hamburger_bar"></div>
                            <div class="hamburger_bar"></div>
                            <div class="hamburger_bar"></div>
                        </div>
                    </div>
                </section>
                <!-- main nav  -->
                <main id="main_nav_container">
                    <!-- links section  -->
                    <section class="mt-[45px]">
                        <!-- item start 1-->
                        <div class="toggle_container">
                            <div class="toggle_item">
                                <h2 class="toggle_text">home</h2>
                                <div class="toggle_hamburger_menu">
                                    <div class="toggle_hamburger_bar"></div>
                                    <div class="toggle_hamburger_bar"></div>
                                </div>
                            </div>
                            <!-- toggle  -->
                            <div class="hide_toggle_item">
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                            </div>
                        </div>
                        <!-- item end 1-->
                        <!-- item start 2-->
                        <div class="toggle_container">
                            <div class="toggle_item">
                                <h2 class="toggle_text">PRODUCT & FINISHES</h2>
                                <div class="toggle_hamburger_menu">
                                    <div class="toggle_hamburger_bar"></div>
                                    <div class="toggle_hamburger_bar"></div>
                                </div>
                            </div>
                            <!-- toggle  -->
                            <div class="hide_toggle_item">
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                            </div>
                        </div>
                        <!-- item end 2-->
                        <!-- item start 3-->
                        <div class="toggle_container">
                            <div class="toggle_item">
                                <h2 class="toggle_text">SHOP</h2>
                                <div class="toggle_hamburger_menu">
                                    <div class="toggle_hamburger_bar"></div>
                                    <div class="toggle_hamburger_bar"></div>
                                </div>
                            </div>
                            <!-- toggle  -->
                            <div class="hide_toggle_item">
                                <p>
                                    <a href="#">Kitchen Cabinets</a>
                                </p>
                                <p>
                                    <a href="#">Base Cabinets</a>
                                </p>
                                <p>
                                    <a href="#">Top Wall Cabinets</a>
                                </p>
                                <p>
                                    <a href="#">Tall Cabinets</a>
                                </p>
                                <p>
                                    <a href="#">Vaneties</a>
                                </p>
                                <p>
                                    <a href="#">Doors</a>
                                </p>
                                <p>
                                    <a href="#">Drawers</a>
                                </p>
                                <p>
                                    <a href="#">Trim, Details & Accessories</a>
                                </p>
                                <p>
                                    <a href="#">Counter Tops</a>
                                </p>
                            </div>
                        </div>
                        <!-- item end 3-->
                        <!-- item start 4-->
                        <div class="toggle_container">
                            <div class="toggle_item">
                                <h2 class="toggle_text">home</h2>
                                <div class="toggle_hamburger_menu">
                                    <div class="toggle_hamburger_bar"></div>
                                    <div class="toggle_hamburger_bar"></div>
                                </div>
                            </div>
                            <!-- toggle  -->
                            <div class="hide_toggle_item">
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                            </div>
                        </div>
                        <!-- item end 4-->
                        <!-- item start 5-->
                        <div class="toggle_container">
                            <div class="toggle_item">
                                <h2 class="toggle_text">home</h2>
                                <div class="toggle_hamburger_menu">
                                    <div class="toggle_hamburger_bar"></div>
                                    <div class="toggle_hamburger_bar"></div>
                                </div>
                            </div>
                            <!-- toggle  -->
                            <div class="hide_toggle_item">
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                            </div>
                        </div>
                        <!-- item end 5-->
                        <!-- item start 6-->
                        <div class="toggle_container">
                            <div class="toggle_item">
                                <h2 class="toggle_text">home</h2>
                                <div class="toggle_hamburger_menu">
                                    <div class="toggle_hamburger_bar"></div>
                                    <div class="toggle_hamburger_bar"></div>
                                </div>
                            </div>
                            <!-- toggle  -->
                            <div class="hide_toggle_item">
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                                <p>
                                    <a href="#">Rey Xpress links</a>
                                </p>
                            </div>
                        </div>
                        <!-- item end 6-->
                    </section>
                    <section class="uppercase mt-[40px] pb-[35px] border-b-[1px] border-[#fff]">
                        <a href="#" class="flex gap-[6px] mb-[14px]">
                            <img class="w-[17px]"
                                src="{{ asset('front-end/assets/images/navbar/mobile/Rey-Xpress-Account-Icon.svg') }}"
                                alt="account" />
                            <h3>SIGN IN / CREATE ACCOUNT</h3>
                        </a>
                        <a href="#" class="flex gap-[6px] mb-[14px]">
                            <img class="w-[20px]"
                                src="{{ asset('front-end/assets/images/navbar/mobile/Rey-Xpress-Projects-Icon.svg') }}"
                                alt="project" />
                            <h3>PROJECTS</h3>
                        </a>
                        <a href="#" class="flex gap-[6px] mb-[14px]">
                            <img class="w-[18px]"
                                src="{{ asset('front-end/assets/images/navbar/mobile/Rey-Xpress-Shopping-Cart-Icon.svg') }}"
                                alt="add to cart" />
                            <h3>SHOPPING CART</h3>
                        </a>
                    </section>
                    <section class="my-[15px]">
                        <p class="text-[12px] leading-[18px]"> Rey Woodworking Ltd., 1-301 Hanlan, Woodbridge, ON L4L
                            3R7 T 905.265.0286 | TF 877.265.0286 </p>
                    </section>
                </main>
            </div>
        </section>
        <!-- Navbar Mobile End  -->
    </section>
    <!-- Header Section End -->