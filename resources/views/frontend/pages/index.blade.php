@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <main class="flex max-[768px]:flex-col">
        <!-- red section  -->
        <section style="background-image: url('{{ asset('front-end/assets/images/home/home-red.png') }}')"
            class="w-full bg-no-repeat bg-cover pt-[100px] xl:pt-[450px] pb-[40px] xl:pb-[514px]">
            <div class="pl-[30px] pr-[30px] xl:pl-[170px] text-[#fff]">
                <a href="https://reywoodworking.com"><img class="w-[126px] xl:w-[250px]"
                        src="{{ asset('front-end/assets/images/home/rey-small-logo.png') }}" alt="small logo" /></a>
                <h2
                    class="uppercase font-[400] mt-[24px] xl:mt-[70px] mb-[15px] xl:mb-[40px] text-[30px] leading-[32px] xl:text-[74px] xl:leading-[80px]">
                    FOR <br />
                    HOMEOWNERS
                </h2>
                <p
                    class="max-w-[550px] w-full mb-[20px] xl:mb-[70px] text-[16px] leading-[20px] xl:text-[36px] xl:leading-[44px]">
                    Get tailored cabinet solutions to fit your kitchen and bathroom style and storage needs.
                </p>
                <a href="https://reywoodworking.com"><img class="w-[97px] xl:w-[240px]"
                        src="{{ asset('front-end/assets/images/home/red-button.png') }}" alt="red button" /></a>
            </div>
        </section>
        <!-- green section  -->
        <section style="background-image: url('{{ asset('front-end/assets/images/home/home-green.png') }}')"
            class="w-full  bg-no-repeat bg-cover pt-[100px] xl:pt-[450px] pb-[40px] xl:pb-[514px]">
            <div class="pl-[30px] pr-[30px] xl:pl-[170px] text-[#fff]">
                <a href="{{ url('/home') }}"><img class="w-[230px] xl:w-[460px]"
                        src="{{ asset('front-end/assets/images/home/Rey-Xpress-White-Logo.svg') }}" alt="small logo" /></a>
                <h2
                    class="uppercase font-[400] mt-[24px] xl:mt-[70px] mb-[15px] xl:mb-[40px] text-[30px] leading-[32px] xl:text-[74px] xl:leading-[80px]">
                    FOR TRADE <br>
                    PROFESSIONALs
                </h2>
                <p
                    class="max-w-[550px] w-full mb-[20px] xl:mb-[70px] text-[16px] leading-[20px] xl:text-[36px] xl:leading-[44px]">
                    Easy-to-use and made-to-order cabinets and millwork, and get manufacturer-direct prices.
                </p>
                <a href="{{ url('/home') }}"><img class="w-[97px] xl:w-[240px]"
                        src="{{ asset('front-end/assets/images/home/green button.png') }}" alt="green button" /></a>
            </div>
        </section>
    </main>

    <footer class="bg-[#343334] text-[#fff]">
        <div class="max-w-[1920px] xl:px-[150px] px-[30px] mx-auto pt-[60px] md:pt-[140px] pb-[57px] md:pb-[130px]">
            <h2
                class="font-[700] tracking-[2px] text-[12px] leading-[16px] md:text-[22px] md:leading-[22px] mb-[9px] md:mb-[35px] text-[#bb6c3e]">
                INQUIRIES:
            </h2>
            <h3 class="text-[12px] leading-[16px] md:text-[27px] md:leading-[34px]">
                Rey Woodworking Ltd., 1-301 Hanlan, Woodbridge, ON L4L 3R7 <span
                    class="max-[440px]:hidden px-[5px] md:px-[9px]">|</span> Email Us <span
                    class=" px-[5px] md:px-[9px]">|</span> T 905.265.0286 <span class=" px-[5px] md:px-[9px]">|</span>
                TF 877.265.0286
            </h3>
            <div class="h-[1px] bg-[#cccccc] my-[20px] md:my-[27px]"></div>
            <small class="text-[12px] leading-[16px] md:text-[21px] md:leading-[34px]">© Copyright 2023. Rey
                Woodworking, Ltd. All rights reserved.
                Rey-Xpress is a subsidiary of Rey Woodworking Ltd.
            </small>
        </div>
    </footer>

@endsection
