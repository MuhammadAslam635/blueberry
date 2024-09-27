<div>
    <div wire:ignore id="bb-mobile-menu"
        class="bb-mobile-menu transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]">
        <div class="bb-menu-title w-full pb-[10px] flex flex-wrap justify-between">
            <span
                class="menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]">My
                Menu</span>
            <button type="button"
                class="bb-close-menu relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent">×</button>
        </div>
        <div class="bb-menu-inner">
            <div class="bb-menu-content">
                <ul>
                    <li class="relative">
                        <a href="/" wire:navigate
                            class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">{{ __('locale.home') }}</a>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)"
                            class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">{{ __('locale.categories') }}</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative">
                                <a href="javascript:void(0)"
                                    class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Classic</a>
                                <ul
                                    class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-left-sidebar-col-3.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left
                                            sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-left-sidebar-col-4.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left
                                            sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-right-sidebar-col-3.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right
                                            sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-right-sidebar-col-4.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right
                                            sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-full-width.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full
                                            width 4 column</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)"
                                    class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Banner</a>
                                <ul
                                    class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-banner-left-sidebar-col-3.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left
                                            sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-banner-left-sidebar-col-4.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left
                                            sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-banner-right-sidebar-col-3.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right
                                            sidebar 3 column</a></li>
                                    <li class="relative"><a href="shop-banner-right-sidebar-col-4.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right
                                            sidebar 4 column</a></li>
                                    <li class="relative"><a href="shop-banner-full-width.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full
                                            width 4 column</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)"
                                    class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Columns</a>
                                <ul
                                    class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-full-width-col-3.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">3
                                            Columns full width</a></li>
                                    <li class="relative"><a href="shop-full-width-col-4.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">4
                                            Columns full width</a></li>
                                    <li class="relative"><a href="shop-full-width-col-5.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">5
                                            Columns full width</a></li>
                                    <li class="relative"><a href="shop-full-width-col-6.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">6
                                            Columns full width</a></li>
                                    <li class="relative"><a href="shop-banner-full-width-col-3.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Banner
                                            3 Columns</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)"
                                    class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">List</a>
                                <ul
                                    class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="shop-list-left-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Shop
                                            left sidebar</a></li>
                                    <li class="relative"><a href="shop-list-right-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Shop
                                            right sidebar</a></li>
                                    <li class="relative"><a href="shop-list-banner-left-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Banner
                                            left sidebar</a></li>
                                    <li class="relative"><a href="shop-list-banner-right-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Banner
                                            right sidebar</a></li>
                                    <li class="relative"><a href="shop-list-full-col-2.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full
                                            width 2 columns</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)"
                            class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">{{ __('locale.products') }}</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative">
                                <a href="javascript:void(0)"
                                    class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Product
                                    page</a>
                                <ul
                                    class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="product-left-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Product
                                            left sidebar</a></li>
                                    <li class="relative"><a href="product-right-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Product
                                            right sidebar</a></li>
                                </ul>
                            </li>
                            <li class="relative">
                                <a href="javascript:void(0)"
                                    class="transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]">Product
                                    Accordion</a>
                                <ul
                                    class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                                    <li class="relative"><a href="product-accordion-left-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">left
                                            sidebar</a></li>
                                    <li class="relative"><a href="product-accordion-right-sidebar.html"
                                            class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">right
                                            sidebar</a></li>
                                </ul>
                            </li>
                            <li class="relative"><a href="product-full-width.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Product
                                    full width</a></li>
                            <li class="relative"><a href="product-accordion-full-width.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">accordion
                                    full width</a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)"
                            class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">{{ __('locale.pages') }}</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative"><a href="about-us.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">About
                                    Us</a></li>
                            <li class="relative"><a href="contact-us.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Contact
                                    Us</a></li>
                            <li class="relative"><a href="cart.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Cart</a>
                            </li>
                            <li class="relative"><a href="checkout.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Checkout</a>
                            </li>
                            <li class="relative"><a href="compare.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Compare</a>
                            </li>
                            <li class="relative"><a href="faq.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Faq</a>
                            </li>
                            <li class="relative"><a href="login.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Login</a>
                            </li>
                            <li class="relative"><a href="register.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Register</a>
                            </li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="javascript:void(0)"
                            class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]">Blog</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative"><a href="blog-left-sidebar.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Left
                                    Sidebar</a></li>
                            <li class="relative"><a href="blog-right-sidebar.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Right
                                    Sidebar</a></li>
                            <li class="relative"><a href="blog-full-width.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Full
                                    Width</a></li>
                            <li class="relative"><a href="blog-detail-left-sidebar.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Detail
                                    Left Sidebar</a></li>
                            <li class="relative"><a href="blog-detail-right-sidebar.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Detail
                                    Right Sidebar</a></li>
                            <li class="relative"><a href="blog-detail-full-width.html"
                                    class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Detail
                                    Full Width</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header-res-lan-curr">
                <!-- Social Start -->
                <div class="header-res-social mt-[30px]">
                    <div class="header-top-social">
                        <ul class="flex flex-row justify-center mb-[0]">
                            <li
                                class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i
                                        class="ri-facebook-fill text-[#fff] text-[15px]"></i></a>
                            </li>
                            <li
                                class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i
                                        class="ri-twitter-fill text-[#fff] text-[15px]"></i></a>
                            </li>
                            <li
                                class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i
                                        class="ri-instagram-line text-[#fff] text-[15px]"></i></a>
                            </li>
                            <li
                                class="list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px]">
                                <a href="#" class="transition-all duration-[0.3s] ease-in-out"><i
                                        class="ri-linkedin-fill text-[#fff] text-[15px]"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>
</div>
