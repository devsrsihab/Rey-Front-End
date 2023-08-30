    <!-- Finishing section start  -->
    <section style="background-image:url('{{ asset($finishing_bg) }}')"
    
        class=" bg-no-repeat bg-cover bg-center bg-[#343334] max-sm:h-[175px] xl:h-[450px]">
        <section
            class="max-w-[1920px] mx-auto w-full px-[35px] md:px-[150px] pt-[50px] pb-[50px] md:pt-[121px] md:pb-[140px]">
            <div class="ml-auto text-end text-white">
                <button
                    class="ml-auto text-[10px] leading-[22px] md:text-[27px] md:leading-[60px] flex items-center gap-2 justify-end">
                    Next <img class="w-[10px] md:w-[27px]"
                        src="{{ asset('front-end/assets/images/Arrow_Right_White.svg') }}" alt="right arrow" />
                </button>
                <h3 class="text-[27px] leading-[30px] md:text-[74px] md:leading-[80px]"> {{ $finishing_title }}</h3>
            </div>
        </section>
    </section>
    <!--   Finishing section End -->