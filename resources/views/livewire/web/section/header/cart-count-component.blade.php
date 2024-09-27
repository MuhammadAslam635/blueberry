<div>
    <a href="javascript:void(0)"
        class="bb-header-btn bb-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]"
        title="Cart">
        <div class="relative flex header-icon">
            <svg class="svg-icon w-[30px] h-[30px] max-[1199px]:w-[25px] max-[1199px]:h-[25px] max-[991px]:w-[22px] max-[991px]:h-[22px]"
                viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-[#6c7fd8]"
                    d="M351.552 831.424c-35.328 0-63.968 28.64-63.968 63.968 0 35.328 28.64 63.968 63.968 63.968 35.328 0 63.968-28.64 63.968-63.968C415.52 860.064 386.88 831.424 351.552 831.424L351.552 831.424 351.552 831.424zM799.296 831.424c-35.328 0-63.968 28.64-63.968 63.968 0 35.328 28.64 63.968 63.968 63.968 35.328 0 63.968-28.64 63.968-63.968C863.264 860.064 834.624 831.424 799.296 831.424L799.296 831.424 799.296 831.424zM862.752 799.456 343.264 799.456c-46.08 0-86.592-36.448-92.224-83.008L196.8 334.592 165.92 156.128c-1.92-15.584-16.128-28.288-29.984-28.288L95.2 127.84c-17.664 0-32-14.336-32-31.968 0-17.664 14.336-32 32-32l40.736 0c46.656 0 87.616 36.448 93.28 83.008l30.784 177.792 54.464 383.488c1.792 14.848 15.232 27.36 28.768 27.36l519.488 0c17.696 0 32 14.304 32 31.968S880.416 799.456 862.752 799.456L862.752 799.456zM383.232 671.52c-16.608 0-30.624-12.8-31.872-29.632-1.312-17.632 11.936-32.928 29.504-34.208l433.856-31.968c15.936-0.096 29.344-12.608 31.104-26.816l50.368-288.224c1.28-10.752-1.696-22.528-8.128-29.792-4.128-4.672-9.312-7.04-15.36-7.04L319.04 223.84c-17.664 0-32-14.336-32-31.968 0-17.664 14.336-31.968 32-31.968l553.728 0c24.448 0 46.88 10.144 63.232 28.608 18.688 21.088 27.264 50.784 23.52 81.568l-50.4 288.256c-5.44 44.832-45.92 81.28-92 81.28L385.6 671.424C384.8 671.488 384 671.52 383.232 671.52L383.232 671.52zM383.232 671.52" />
            </svg>
            <span class="main-label-note-new"></span>
        </div>
        <div class="bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden">
            <span
                class="bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap">
                <b class="bb-cart-count">{{ Cart::instance('cart')->content()->count() }}</b>
                {{ __('locale.items') }}</span>
            <span
                class="bb-btn-stitle font-Poppins transition-all duration-[0.3s] ease-in-out text-[14px] leading-[16px] font-semibold text-[#3d4750]  tracking-[0.03rem] whitespace-nowrap">{{ __('locale.cart') }}</span>
        </div>
    </a>
    <div class="bb-side-cart-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[17]"></div>
    <div
        class="bb-side-cart w-[770px] h-[calc(100%-30px)] my-[15px] ml-[15px] pt-[15px] px-[8px] text-[14px] font-normal fixed z-[17] top-[0] right-[0] left-[auto] block transition-all duration-[0.5s] ease delay-[0s] translate-x-[100%] bg-[#fff] overflow-auto opacity-[0] rounded-tl-[20px] rounded-bl-[20px] max-[991px]:w-[740px] max-[767px]:w-[350px] max-[575px]:w-[300px]">
        <div class="flex flex-wrap h-full">
            @if (Cart::instance('cart')->content()->count() > 0)
                <div class="min-[768px]:w-[41.66%] w-full px-[12px] max-[767px]:hidden">
                    <div class="bb-top-contact">
                        <div class="bb-cart-title w-full mb-[20px] flex flex-wrap justify-between">
                            <h4
                                class="font-quicksand text-[18px] font-extrabold text-[#3d4750] tracking-[0.03rem] leading-[1.2]">
                                Related Items</h4>
                        </div>
                    </div>
                    <div
                        class="bb-cart-box cart-related bb-border-right flex flex-col pr-[24px] border-r-[1px] border-solid border-[#eee] overflow-auto mb-[-24px]">
                        <div class="bb-deal-card mb-[24px]">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div
                                    class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                    <span
                                        class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                        <span class="text-[14px] text-[#777] font-medium uppercase">Hot</span>
                                    </span>
                                    <a href="javascript:void(0)">
                                        <div
                                            class="inner-img relative block overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease delay-[0s] max-w-full"
                                                src="assets/img/product/2.jpg" alt="product-2">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="assets/img/product/back-2.jpg" alt="product-2">
                                        </div>
                                    </a>
                                    <ul
                                        class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist"
                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare"
                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i
                                                    class="ri-shopping-bag-4-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                        <span class="bb-pro-rating">
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
                                        </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html"
                                            class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic
                                            Apple Juice Pack</a>
                                    </h4>
                                    <div class="flex flex-wrap justify-between bb-price">
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">$15</span>
                                            <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">3 Left</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#6c7fd8]">100 ml</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-cart-banner mb-[24px]">
                            <div class="banner rounded-[20px] relative overflow-hidden">
                                <img src="assets/img/category/cart-banner.jpg" alt="cart-banner"
                                    class="w-full transition-all duration-[0.3s] ease-in-out">
                                <div
                                    class="detail w-full p-[15px] absolute left-[0] bottom-[0] bg-[#000000b3] flex flex-col">
                                    <h4
                                        class="font-Poppins text-[15px] mb-[5px] leading-[22px] font-light text-[#fff] tracking-[0.03rem]">
                                        Organic & Fresh</h4>
                                    <h3
                                        class="font-quicksand font-semibold tracking-[0.03rem] text-[#fff] text-[22px] leading-[30px]">
                                        Vegetables</h3>
                                    <a href="shop-left-sidebar-col-3.html"
                                        class="transition-all duration-[0.3s] ease-in-out w-[100px] mt-[15px] py-[5px] px-[10px] border-[1px] border-solid border-[#fff] rounded-[10px] text-[#fff] font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem] flex items-center justify-center hover:bg-[#fff] hover:text-[#3d4750]">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="min-[768px]:w-[41.66%] w-full px-[12px] max-[767px]:hidden">
                    <div class="bb-top-contact">
                        <div class="bb-cart-title w-full mb-[20px] flex flex-wrap justify-between">
                            <h4
                                class="font-quicksand text-[18px] font-extrabold text-[#3d4750] tracking-[0.03rem] leading-[1.2]">
                                Top Selling Items</h4>
                        </div>
                    </div>
                    <div
                        class="bb-cart-box cart-related bb-border-right flex flex-col pr-[24px] border-r-[1px] border-solid border-[#eee] overflow-auto mb-[-24px]">
                        <div class="bb-deal-card mb-[24px]">
                            <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                <div
                                    class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                    <span
                                        class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                        <span class="text-[14px] text-[#777] font-medium uppercase">Hot</span>
                                    </span>
                                    <a href="javascript:void(0)">
                                        <div
                                            class="inner-img relative block overflow-hidden rounded-tl-[20px] rounded-tr-[20px]">
                                            <img class="main-img transition-all duration-[0.3s] ease delay-[0s] max-w-full"
                                                src="assets/img/product/2.jpg" alt="product-2">
                                            <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full"
                                                src="assets/img/product/back-2.jpg" alt="product-2">
                                        </div>
                                    </a>
                                    <ul
                                        class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Wishlist"
                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-heart-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-eye-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="compare.html" title="Compare"
                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i class="ri-repeat-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                        <li
                                            class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                            <a href="javascript:void(0)" title="Add To Cart"
                                                class="w-[35px] h-[35px] flex items-center justify-center">
                                                <i
                                                    class="ri-shopping-bag-4-line text-[18px] text-[#777] leading-[10px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bb-pro-contact p-[20px]">
                                    <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                        <a href="shop-left-sidebar-col-3.html"
                                            class="font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">Juice</a>
                                        <span class="bb-pro-rating">
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
                                        </span>
                                    </div>
                                    <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                        <a href="product-left-sidebar.html"
                                            class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">Organic
                                            Apple Juice Pack</a>
                                    </h4>
                                    <div class="flex flex-wrap justify-between bb-price">
                                        <div class="inner-price mx-[-3px]">
                                            <span
                                                class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">{{ Session::get('currency') }}
                                                15</span>
                                            <span class="item-left px-[3px] text-[14px] text-[#6c7fd8]">3 Left</span>
                                        </div>
                                        <span class="last-items text-[14px] text-[#6c7fd8]">100 ml</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-cart-banner mb-[24px]">
                            <div class="banner rounded-[20px] relative overflow-hidden">
                                <img src="assets/img/category/cart-banner.jpg" alt="cart-banner"
                                    class="w-full transition-all duration-[0.3s] ease-in-out">
                                <div
                                    class="detail w-full p-[15px] absolute left-[0] bottom-[0] bg-[#000000b3] flex flex-col">
                                    <h4
                                        class="font-Poppins text-[15px] mb-[5px] leading-[22px] font-light text-[#fff] tracking-[0.03rem]">
                                        Organic & Fresh</h4>
                                    <h3
                                        class="font-quicksand font-semibold tracking-[0.03rem] text-[#fff] text-[22px] leading-[30px]">
                                        Vegetables</h3>
                                    <a href="shop-left-sidebar-col-3.html"
                                        class="transition-all duration-[0.3s] ease-in-out w-[100px] mt-[15px] py-[5px] px-[10px] border-[1px] border-solid border-[#fff] rounded-[10px] text-[#fff] font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem] flex items-center justify-center hover:bg-[#fff] hover:text-[#3d4750]">Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="min-[768px]:w-[58.33%] w-full px-[12px]">
                <div class="bb-inner-cart relative z-[9] flex flex-col h-full justify-between">
                    <div class="bb-top-contact">
                        <div class="bb-cart-title w-full mb-[20px] flex flex-wrap justify-between">
                            <h4
                                class="font-quicksand text-[18px] font-extrabold text-[#3d4750] tracking-[0.03rem] leading-[1.2]">
                                My cart</h4>
                            <a href="javascript:void(0)"
                                class="bb-cart-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-20px] right-[0] bg-[#e04e4eb3] rounded-[10px] cursor-pointer"
                                title="Close Cart"></a>
                        </div>
                    </div>
                    <div class="bb-cart-box item h-full flex flex-col max-[767px]:justify-start">

                        <ul class="bb-cart-items mb-[-24px]">
                            @forelse(Cart::instance('cart')->content() as $item)
                                <li
                                    class="cart-sidebar-list mb-[24px] p-[20px] flex bg-[#f8f8fb] rounded-[20px] border-[1px] border-solid border-[#eee] relative max-[575px]:p-[10px]">
                                    <a href="javascript:void(0)"
                                        class="cart-remove-item transition-all duration-[0.3s] ease-in-out bg-[#3d4750] w-[20px] h-[20px] text-[#fff] absolute top-[-3px] right-[-3px] rounded-[50%] flex items-center justify-center opacity-[0.5] text-[15px]"><i
                                            class="ri-close-line"></i></a>
                                    <a href="javascript:void(0)"
                                        class="bb-cart-pro-img flex grow-[1] shrink-[0] basis-[25%] items-center max-[575px]:flex-[initial]">
                                        <img src="{{ asset('assets/img/product') }}/{{ $item->model->image }}"
                                            alt="product-img-1"
                                            class="w-[85px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[575px]:w-[50px]">
                                    </a>
                                    <div
                                        class="bb-cart-contact pl-[15px] relative grow-[1] shrink-[0] basis-[70%] overflow-hidden">
                                        <x-mary-button link="product-left-sidebar.html"
                                            class="bb-cart-sub-title w-full mb-[8px] btn-link no-] hover:no-underline font-Poppins tracking-[0.03rem] text-[#3d4750] whitespace-nowrap overflow-hidden text-ellipsis block text-[14px] leading-[18px] font-medium">
                                            {{ $item->name }}
                                        </x-mary-button>
                                        <span
                                            class="cart-price mb-[8px] text-[14px] leading-[18px] block font-Poppins text-[#686e7d] font-light tracking-[0.03rem]">
                                            <span
                                                class="new-price px-[3px] text-[15px] leading-[18px] text-[#686e7d] font-bold">${{ $item->price }}</span>
                                            x 500 g
                                        </span>
                                        <div
                                            class="qty-plus-minus h-[28px] w-[85px] py-[7px] border-[1px] border-solid border-[#eee] overflow-hidden relative flex items-center justify-between bg-[#fff] rounded-[10px]">
                                            <input class="text-center qty-input" type="text" name="bb-qtybtn"
                                                value="1">
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li
                                    class="cart-sidebar-list mb-[24px] p-[20px] flex bg-[#f8f8fb] rounded-[20px] border-[1px] border-solid border-[#eee] relative max-[575px]:p-[10px]">
                                    <div class="flex justify-center">
                                        <svg width="256px" height="256px" viewBox="-16.8 -16.8 57.60 57.60"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                <path transform="translate(-16.8, -16.8), scale(1.7999999999999998)"
                                                    d="M16,26.883781088723076C17.859497798212747,27.549968559100133,19.699388900391053,29.10678504814756,21.60641910385665,28.592223477181157C23.430803313971765,28.099961737698923,23.953827760887094,25.69978405126153,25.300568174362695,24.37426919846395C26.733648784310258,22.96377493042651,29.024038219065496,22.335422131061904,29.83352325931898,20.494784175248768C30.638020194600504,18.665488362751958,30.420105650513953,16.397250837078733,29.612668564703018,14.569250880581777C28.823769437303422,12.783219998536538,26.837341776358286,11.913800142775365,25.44061989770374,10.549455560743812C24.358847594545967,9.492759733635527,23.19686762882632,8.571702169875827,22.258650879431546,7.3857060830094134C20.985301708155074,5.77607042544661,20.825632112124733,3.0407426212502218,18.912580389247772,2.297386604468487C17.11613678479834,1.5993410962329324,15.359023355032638,3.7738367867268408,13.440669368878185,3.959296052713796C11.236521837652404,4.172384766381045,8.351234023916614,1.796790560702119,6.888997911236988,3.459781447651487C5.2163915463722255,5.362024948618172,8.097387210630462,8.568040805310979,7.280161265856014,10.965598759551838C6.673048545386619,12.746731555677083,3.8510367476103062,12.926363727914223,3.0775238402899987,14.641793025494735C2.3097434538207473,16.344509239526378,2.703425030745043,18.36386271702115,3.123526537140073,20.183819846103525C3.5599139504466963,22.074330524592728,3.868611202954156,24.45025646614728,5.56074171300553,25.39955038107955C7.436298080219378,26.45174714482357,9.806952461496442,24.824993900343753,11.936082181812987,25.127708865772597C13.413229003746718,25.337726341395694,14.595417755343076,26.38057259156654,16,26.883781088723076"
                                                    fill="#7ed0ec" strokewidth="0"></path>
                                            </g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path d="M10.5 15L13.5 12M13.5 15L10.5 12" stroke="#1C274C"
                                                    stroke-width="1.5" stroke-linecap="round"></path>
                                                <path
                                                    d="M22 11.7979C22 9.16554 22 7.84935 21.2305 6.99383C21.1598 6.91514 21.0849 6.84024 21.0062 6.76946C20.1506 6 18.8345 6 16.2021 6H15.8284C14.6747 6 14.0979 6 13.5604 5.84678C13.2651 5.7626 12.9804 5.64471 12.7121 5.49543C12.2237 5.22367 11.8158 4.81578 11 4L10.4497 3.44975C10.1763 3.17633 10.0396 3.03961 9.89594 2.92051C9.27652 2.40704 8.51665 2.09229 7.71557 2.01738C7.52976 2 7.33642 2 6.94975 2C6.06722 2 5.62595 2 5.25839 2.06935C3.64031 2.37464 2.37464 3.64031 2.06935 5.25839C2 5.62595 2 6.06722 2 6.94975M21.9913 16C21.9554 18.4796 21.7715 19.8853 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V11"
                                                    stroke="#1C274C" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                </li>
                            @endforelse

                        </ul>

                    </div>
                    <div class="bb-bottom-cart">
                        <div
                            class="cart-sub-total mt-[20px] pb-[8px] flex flex-wrap justify-between border-t-[1px] border-solid border-[#eee]">
                            <table class="table cart-table mt-[10px] w-full align-top">
                                <tbody>
                                    <tr>
                                        <td class="title font-medium text-[#777] p-[.5rem]">Sub-Total :</td>
                                        <td class="price text-[#777] text-right p-[.5rem]">${{ Cart::subtotal() }}</td>
                                    </tr>
                                    <tr>
                                        <td class="title font-medium text-[#777] p-[.5rem]">VAT (20%) :</td>
                                        <td class="price text-[#777] text-right p-[.5rem]">${{ Cart::tax() }}</td>
                                    </tr>
                                    <tr>
                                        <td class="title font-medium text-[#777] p-[.5rem]">Total :</td>
                                        <td class="price text-[#777] text-right p-[.5rem]">${{ Cart::total() }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-btn flex justify-between mb-[20px]">
                            <a href="cart.html"
                                class="bb-btn-1 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[5px] px-[15px] text-[14px] font-normal text-[#3d4750] bg-transparent rounded-[10px] border-[1px] border-solid border-[#3d4750] hover:bg-[#6c7fd8] hover:border-[#6c7fd8] hover:text-[#fff]">View
                                Cart</a>
                            <a href="checkout.html"
                                class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[5px] px-[15px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
