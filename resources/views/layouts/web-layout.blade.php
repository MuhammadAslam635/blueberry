<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords"
        content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.png') }}" type="image/x-icon">

    <script src="{{ asset('assets/js/vendor/tailwindcss3.4.5.js') }}"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/vendor/remixicon.css', 'resources/css/vendor/aos.css', 'resources/css/vendor/swiper-bundle.min.css', 'resources/css/vendor/owl.carousel.min.css', 'resources/css/vendor/slick.min.css', 'resources/css/vendor/animate.min.css', 'resources/css/vendor/jquery-range-ui.css', 'resources/css/style.css'])
    @livewireStyles
    @stack('css')
</head>

<body>
    <x-loader />
    <livewire:web.section.header-component />
    {{ $slot }}
    <livewire:web.section.footer-component />

    <!-- Cart sidebar -->


    <!-- Category Popup -->
    <div
        class="bb-category-sidebar transition-all duration-[0.3s] ease-in-out w-full h-full fixed top-[0] z-[17] hidden">
        <div class="bb-category-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[17]"></div>
        <div
            class="category-sidebar w-[calc(100%-30px)] max-[1199px]:h-[calc(100vh-60px)] max-w-[1200px] my-[15px] mx-[auto] py-[30px] px-[15px] text-[14px] font-normal transition-all duration-[0.5s] ease-in-out delay-[0s] bg-[#fff] overflow-auto rounded-[30px] z-[18] relative">
            <button type="button"
                class="bb-category-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]"
                title="Close"></button>
            <div class="w-full mx-auto">
                <div class="flex flex-wrap w-full mb-[-24px]">
                    <div class="w-full px-[12px]">
                        <div class="bb-category-tags mb-[24px]">
                            <div class="sub-title mb-[20px] flex justify-between">
                                <h4
                                    class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">
                                    keywords</h4>
                            </div>
                            <div class="bb-tags">
                                <ul class="flex flex-wrap m-[-5px]">
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Clothes</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Fruits</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Snacks</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Dairy</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Seafood</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Toys</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">perfume</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">jewelry</a>
                                    </li>
                                    <li
                                        class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer">
                                        <a href="javascript:void(0)"
                                            class="text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Bags</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-wrap w-full">
                            <div class="w-full px-[12px]">
                                <div class="sub-title mb-[20px] flex justify-between">
                                    <h4
                                        class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">
                                        Explore Categories</h4>
                                </div>
                            </div>
                            <div
                                class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1 bg-[#fef1f1]">
                                    <div class="category-image mb-[12px]">
                                        <img src="assets/img/category/1.svg" alt="category"
                                            class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5
                                            class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">vegetables</a>
                                        </h5>
                                        <p
                                            class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                            485 items</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2]">
                                    <div class="category-image mb-[12px]">
                                        <img src="assets/img/category/2.svg" alt="category"
                                            class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5
                                            class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Fruits</a>
                                        </h5>
                                        <p
                                            class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                            291 items</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe]">
                                    <div class="category-image mb-[12px]">
                                        <img src="assets/img/category/3.svg" alt="category"
                                            class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5
                                            class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Cold
                                                Drinks</a>
                                        </h5>
                                        <p
                                            class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                            49 items</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-4 bg-[#fbf9e4]">
                                    <div class="category-image mb-[12px]">
                                        <img src="assets/img/category/4.svg" alt="category"
                                            class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5
                                            class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Bakery</a>
                                        </h5>
                                        <p
                                            class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                            08 items</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2]">
                                    <div class="category-image mb-[12px]">
                                        <img src="assets/img/category/5.svg" alt="category"
                                            class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5
                                            class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Fast
                                                Food</a>
                                        </h5>
                                        <p
                                            class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                            291 items</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe]">
                                    <div class="category-image mb-[12px]">
                                        <img src="assets/img/category/6.svg" alt="category"
                                            class="w-[50px] h-[50px] max-[1399px]:h-[65px] max-[1399px]:w-[65px] max-[1199px]:h-[50px] max-[1199px]:w-[50px]">
                                    </div>
                                    <div class="category-sub-contact">
                                        <h5
                                            class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]">
                                            <a href="shop-left-sidebar-col-3.html"
                                                class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">Snacks</a>
                                        </h5>
                                        <p
                                            class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">
                                            49 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex flex-wrap w-full">
                            <div class="w-full px-[12px]">
                                <div class="sub-title mb-[20px] flex justify-between">
                                    <h4
                                        class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize">
                                        Related products</h4>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                    <a href="javascript:void(0)"
                                        class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                        <img src="assets/img/new-product/1.jpg" alt="new-product-1"
                                            class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                    </a>
                                    <div class="flex flex-col side-contact">
                                        <h4 class="bb-pro-title text-[15px]">
                                            <a href="product-left-sidebar.html"
                                                class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Ground
                                                Nuts Oil Pack</a>
                                        </h4>
                                        <span class="bb-pro-rating">
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$15</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                    <a href="javascript:void(0)"
                                        class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                        <img src="assets/img/new-product/2.jpg" alt="new-product-2"
                                            class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                    </a>
                                    <div class="flex flex-col side-contact">
                                        <h4 class="bb-pro-title text-[15px]">
                                            <a href="product-left-sidebar.html"
                                                class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Organic
                                                Litchi Juice</a>
                                        </h4>
                                        <span class="bb-pro-rating">
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$25</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                    <a href="javascript:void(0)"
                                        class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                        <img src="assets/img/new-product/3.jpg" alt="new-product-3"
                                            class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                    </a>
                                    <div class="flex flex-col side-contact">
                                        <h4 class="bb-pro-title text-[15px]">
                                            <a href="product-left-sidebar.html"
                                                class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Spicy
                                                Banana Chips</a>
                                        </h4>
                                        <span class="bb-pro-rating">
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$01</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$02</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                    <a href="javascript:void(0)"
                                        class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                        <img src="assets/img/new-product/4.jpg" alt="new-product-4"
                                            class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                    </a>
                                    <div class="flex flex-col side-contact">
                                        <h4 class="bb-pro-title text-[15px]">
                                            <a href="product-left-sidebar.html"
                                                class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Spicy
                                                Potato Chips</a>
                                        </h4>
                                        <span class="bb-pro-rating">
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$25</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                    <a href="javascript:void(0)"
                                        class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                        <img src="assets/img/new-product/5.jpg" alt="new-product-5"
                                            class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                    </a>
                                    <div class="flex flex-col side-contact">
                                        <h4 class="bb-pro-title text-[15px]">
                                            <a href="product-left-sidebar.html"
                                                class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Black
                                                Pepper Spice</a>
                                        </h4>
                                        <span class="bb-pro-rating">
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$32</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]">
                                <div
                                    class="bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col">
                                    <a href="javascript:void(0)"
                                        class="pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]">
                                        <img src="assets/img/new-product/6.jpg" alt="new-product-6"
                                            class="w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full">
                                    </a>
                                    <div class="flex flex-col side-contact">
                                        <h4 class="bb-pro-title text-[15px]">
                                            <a href="product-left-sidebar.html"
                                                class="transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]">Small
                                                Chili Spice</a>
                                        </h4>
                                        <span class="bb-pro-rating">
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-fill float-left text-[15px] mr-[3px] leading-[26px] text-[#fea99a]"></i>
                                            <i
                                                class="ri-star-line float-left text-[15px] mr-[3px] leading-[26px] text-[#777]"></i>
                                        </span>
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[15px] text-[#686e7d] font-semibold">$41</span>
                                            <span
                                                class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$45</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick view Modal -->
    <div class="bb-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[26] bg-[#000000b3]"></div>
    <div
        class="bb-modal quickview-modal max-[575px]:w-full fixed top-[45%] max-[767px]:top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto">
        <div
            class="bb-modal-dialog h-full my-[0%] mx-auto max-w-[700px] w-[700px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out cr-fadeOutUp">
            <div class="modal-content p-[24px] relative bg-[#fff] rounded-[20px] overflow-hidden">
                <button type="button"
                    class="bb-close-modal transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]"
                    title="Close"></button>
                <div class="modal-body mx-[-12px] max-[767px]:mx-[0]">
                    <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                        <div class="min-[768px]:w-[41.66%] min-[576px]:w-full px-[12px] mb-[24px]">
                            <div
                                class="single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] overflow-hidden rounded-[20px]">
                                <div class="h-full single-product-scroll">
                                    <div class="single-slide zoom-image-hover h-full bg-[#fff] flex items-center">
                                        <img class="block max-w-full img-responsive" src="assets/img/product/1.jpg"
                                            alt="product-img-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-[768px]:w-[58.33%] min-[576px]:w-full px-[12px] mb-[24px]">
                            <div class="quickview-pro-content">
                                <h5 class="bb-quick-title">
                                    <a href="product-left-sidebar.html"
                                        class="font-Poppins tracking-[0.03rem] mb-[10px] block text-[#3d4750] text-[20px] leading-[30px] font-medium">Mix
                                        nuts premium quality organic dried fruit 250g pack</a>
                                </h5>
                                <div class="bb-pro-rating flex mb-[10px]">
                                    <i
                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                    <i
                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                    <i
                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                    <i
                                        class="ri-star-fill float-left text-[15px] mr-[3px] leading-[18px] text-[#fea99a]"></i>
                                    <i
                                        class="ri-star-line float-left text-[15px] mr-[3px] leading-[18px] text-[#777]"></i>
                                </div>
                                <div
                                    class="bb-quickview-desc mb-[10px] text-[15px] leading-[24px] text-[#777] font-light">
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever
                                    since the 1900s,</div>
                                <div class="bb-quickview-price pt-[5px] pb-[10px] flex items-center justify-left">
                                    <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$50.00</span>
                                    <span
                                        class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">$62.00</span>
                                </div>
                                <div class="bb-pro-variation mt-[15px] mb-[25px]">
                                    <ul class="flex flex-wrap m-[-2px]">
                                        <li
                                            class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active">
                                            <a href="javascript:void(0)"
                                                class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]"
                                                data-tooltip="Small">250g</a>
                                        </li>
                                        <li
                                            class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                            <a href="javascript:void(0)"
                                                class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]"
                                                data-tooltip="Medium">500g</a>
                                        </li>
                                        <li
                                            class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                            <a href="javascript:void(0)"
                                                class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]"
                                                data-tooltip="Large">1kg</a>
                                        </li>
                                        <li
                                            class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                            <a href="javascript:void(0)"
                                                class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]"
                                                data-tooltip="Extra Large">2kg</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-quickview-qty flex max-[360px]:justify-center">
                                    <div
                                        class="qty-plus-minus w-[85px] h-[40px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px] max-[360px]:m-[auto]">
                                        <input
                                            class="qty-input text-[#777] float-left text-[14px] h-auto m-[0] p-[0] text-center w-[32px] outline-[0] font-normal leading-[35px] rounded-[10px]"
                                            type="text" name="bb-qtybtn" value="1">
                                    </div>
                                    <div
                                        class="bb-quickview-cart ml-[4px] max-[360px]:mt-[15px] max-[360px]:ml-[0] max-[360px]:flex max-[360px]:justify-center">
                                        <button type="button"
                                            class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins h-[40px] leading-[28px] tracking-[0.03rem] py-[3px] px-[20px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">
                                            <i class="ri-shopping-bag-line pr-[8px]"></i>Add To Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Modal -->
    <x-web.news-letter />

    <!-- Tools Sidebar -->
    <div class="bb-tools-sidebar-overlay w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[16] hidden">
    </div>
    <div
        class="bb-tools-sidebar w-[300px] h-screen fixed right-[0] top-[0] bg-[#fff] transition-all duration-[0.3s] ease z-[16] translate-x-[300px]">
        <a href="javascript:void(0)"
            class="bb-tools-sidebar-toggle in-out absolute top-[45%] right-[302px] w-[40px] h-[40px] bg-[#3d4750] transition-all duration-[0.3s] ease-in flex items-center justify-center text-[25px] z-[-1] rounded-[5px]">
            <i class="ri-settings-fill text-[20px] text-[#fff]"></i>
        </a>
        <div
            class="bb-bar-title mb-[15px] p-[15px] flex flex-row justify-between items-center border-b-[1px] border-solid border-[#eee] ">
            <h6 class="m-[0] font-quicksand text-[17px] font-bold tracking-[0.03rem] leading-[1.2] text-[#3d4750]">
                Tools</h6>
            <a href="#"
                class="close-tools text-[#ff0000] text-[17px] font-semibold leading-[28px] tracking-[0.03rem]"><i
                    class="ri-close-line"></i></a>
        </div>
        <div class="bb-tools-detail h-[calc(100vh-72px)] px-[15px] pb-[15px] overflow-auto">
            <div class="bb-tools-block">
                <h3
                    class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">
                    Select Color</h3>
                <ul class="bb-color">
                    <li
                        class="color-primary inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#6c7fd8] active-variant">
                    </li>
                    <li
                        class="color-1 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#8118d5]">
                    </li>
                    <li
                        class="color-2 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#5f6af5]">
                    </li>
                    <li
                        class="color-3 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#f5885f]">
                    </li>
                    <li
                        class="color-4 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#32dbe2]">
                    </li>
                    <li
                        class="color-5 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#3f51b5]">
                    </li>
                    <li
                        class="color-6 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#f44336]">
                    </li>
                    <li
                        class="color-7 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#e91e63]">
                    </li>
                    <li
                        class="color-8 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#607d8b]">
                    </li>
                    <li
                        class="color-9 inline-block h-[35px] w-[35px] rounded-[5px] cursor-pointer align-middle m-[6px] relative bg-[#5eb595]">
                    </li>
                </ul>
            </div>
            <div class="bb-tools-block">
                <h3
                    class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">
                    Dark Modes</h3>
                <div class="flex flex-row flex-wrap justify-between bb-tools-dark">
                    <div class="mode-primary bb-dark-item mode light relative w-[125px] mb-[10px] text-center active-dark"
                        data-bb-mode-tool="light">
                        <img src="assets/img/tools/light.png" alt="light"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                        <p
                            class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">
                            Light</p>
                    </div>
                    <div class="bb-dark-item mode dark relative w-[125px] mb-[10px] text-center"
                        data-bb-mode-tool="dark">
                        <img src="assets/img/tools/dark.png" alt="dark"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                        <p
                            class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">
                            Dark</p>
                    </div>
                </div>
            </div>
            <div class="bb-tools-block">
                <h3
                    class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">
                    RTL Modes</h3>
                <div class="flex flex-row flex-wrap justify-between bb-tools-rtl">
                    <div class="bb-tools-item ltr relative w-[125px] mb-[10px] text-center active-rtl"
                        data-bb-mode-tool="ltr">
                        <img src="assets/img/tools/ltr.png" alt="ltr"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                        <p
                            class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">
                            LTR</p>
                    </div>
                    <div class="bb-tools-item rtl relative w-[125px] mb-[10px] text-center" data-bb-mode-tool="rtl">
                        <img src="assets/img/tools/rtl.png" alt="rtl"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                        <p
                            class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">
                            RTL</p>
                    </div>
                </div>
            </div>
            <div class="bb-tools-block">
                <h3
                    class="font-quicksand tracking-[0.03rem] leading-[1.2] my-[15px] text-[14px] font-bold text-[#3d4750]">
                    Box Design</h3>
                <div class="flex flex-row flex-wrap justify-between bb-tools-box">
                    <div class="bb-tools-item default relative w-[125px] mb-[10px] text-center active-box"
                        data-bb-mode-tool="default">
                        <img src="assets/img/tools/box-0.png" alt="box-0"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                        <p
                            class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">
                            Default</p>
                    </div>
                    <div class="bb-tools-item box-1 relative w-[125px] mb-[10px] text-center"
                        data-bb-mode-tool="box-1">
                        <img src="assets/img/tools/box-1.png" alt="box-1"
                            class="w-full p-[5px] rounded-[10px] border-[1px] border-solid border-[#eee] hover:border-[#6c7fd8]">
                        <p
                            class="m-[0] font-Poppins text-[14px] font-semibold capitalize leading-[28px] tracking-[0.03rem] text-[#686e7d]">
                            Box-1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to top  -->
    <x-back-to-top />
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countdownTimer.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-range-ui.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <x-mary-toast />
    @livewireScripts
    @stack('modals')
    @stack('js')
</body>


</html>
