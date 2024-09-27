<div>
    <section class="section-hero mb-[50px] max-[1199px]:mb-[35px] py-[50px] relative bg-[#f8f8fb] overflow-hidden">
        <div class="bb-social-follow absolute left-[20px] bottom-[30px] max-[1250px]:hidden">
            <ul class="inner-links">
                <li class="p-[6px] rotate-[270deg]">
                    <a href="javascript:void(0)"
                        class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Fb</a>
                </li>
                <li class="p-[6px] rotate-[270deg]">
                    <a href="javascript:void(0)"
                        class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Li</a>
                </li>
                <li class="p-[6px] rotate-[270deg]">
                    <a href="javascript:void(0)"
                        class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">Dr</a>
                </li>
                <li class="p-[6px] rotate-[270deg]">
                    <a href="javascript:void(0)"
                        class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium text-[#777] hover:text-[#6c7fd8] leading-[28px] tracking-[0.03rem] uppercase">In</a>
                </li>
            </ul>
        </div>
        <div
            class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full">
                    <div class="hero-slider swiper-container">
                        <div class="swiper-wrapper">
                            @forelse($banners as $banner)
                                <div class="swiper-slide slide-{{ $banner->id }}">
                                    <div class="flex flex-wrap w-full mb-[-24px]">
                                        <div
                                            class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                            <div
                                                class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                                <p
                                                    class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">
                                                    {{ $banner->title }}</p>
                                                <h1
                                                    class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">
                                                    {{ $banner->heading1 }} <span
                                                        class="relative text-[#6c7fd8]">{{ $banner->heading2 }}</span><br>
                                                    {{ $banner->heading3 }}</h1>
                                                <a href="{{ $banner->link }}"
                                                    class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                        <div
                                            class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                            <div
                                                class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                                <img src="{{ asset('assets/img/banner') }}/{{ $banner->image }}"
                                                    alt="hero"
                                                    class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
                                                    class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                                    <linearGradient id="shape_1" x1="100%" x2="0%"
                                                        y1="100%" y2="0%"></linearGradient>
                                                    <path d="">
                                                        <animate repeatCount="indefinite" attributeName="d"
                                                            dur="15s" values="" />
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="swiper-slide slide-{{ $banner->id }}">
                                    <div class="flex flex-wrap w-full mb-[-24px]">
                                        <div
                                            class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-1 order-2 mb-[24px]">
                                            <div
                                                class="hero-contact h-full flex flex-col items-start justify-center max-[991px]:items-center">
                                                <p
                                                    class="mb-[20px] font-Poppins text-[18px] text-[#777] font-light leading-[28px] tracking-[0.03rem] max-[1199px]:mb-[10px] max-[1199px]:text-[16px]">
                                                    Flat 20% Off</p>
                                                <h2
                                                    class="mb-[20px] font-quicksand text-[50px] text-[#3d4750] font-bold tracking-[0.03rem] leading-[1.2] max-[1199px]:mb-[10px] max-[1199px]:text-[38px] max-[991px]:text-center max-[991px]:text-[45px] max-[767px]:text-[40px] max-[575px]:text-[35px] max-[420px]:text-[30px] max-[360px]:text-[28px]">
                                                    Explore <span class="relative text-[#6c7fd8]">Warm</span><br> Fast
                                                    Food
                                                    & Snacks</h2>
                                                <a href="shop-left-sidebar-col-3.html"
                                                    class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[8px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] max-[1199px]:py-[3px] max-[1199px]:px-[15px] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                        <div
                                            class="min-[992px]:w-[50%] w-full px-[12px] min-[992px]:order-2 order-1 mb-[24px]">
                                            <div
                                                class="hero-image pr-[50px] relative max-[991px]:px-[50px] max-[575px]:px-[30px] flex justify-center max-[420px]:p-[0]">
                                                <img src="assets/img/hero/hero-2.png" alt="hero"
                                                    class="w-full pb-[50px] opacity-[1] max-[1199px]:pr-[30px] max-[991px]:pr-[0] max-[575px]:pb-[30px] max-[420px]:pb-[15px]">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
                                                    class="animate-shape w-[120%] absolute top-[-50px] right-[-50px] z-[-1] max-[1399px]:right-[-30px] max-[1199px]:w-[125%] max-[991px]:w-[100%] max-[991px]:top-[0] max-[575px]:right-[0] max-[420px]:w-[110%] max-[420px]:right-[-30px]">
                                                    <linearGradient id="shape_2" x1="80%" x2="0%"
                                                        y1="80%" y2="0%">
                                                    </linearGradient>
                                                    <path d="">
                                                        <animate repeatCount="indefinite" attributeName="d"
                                                            dur="15s" values="" />
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse

                        </div>
                        <div class="swiper-pagination swiper-pagination-white"></div>
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bb-scroll-Page absolute right-[-15px] bottom-[75px] rotate-[270deg] max-[575px]:hidden">
            <span class="scroll-bar transition-all duration-[0.3s] ease-in-out relative max-[1250px]:hidden">
                <a href="javascript:void(0)"
                    class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[16px] font-medium leading-[28px] tracking-[0.03rem] text-[#686e7d]">Scroll
                    Page</a>
            </span>
        </div>
    </section>
</div>
