<div>
    <header class="bb-header relative z-[5] border-b-[1px] border-solid border-[#eee]">
        <x-header.top-header />
        <div class="bottom-header py-[20px] max-[991px]:py-[15px]">
            <div
                class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
                <div class="flex flex-wrap w-full">
                    <div class="w-full px-[12px]">
                        <div class="inner-bottom-header flex justify-between max-[767px]:flex-col">
                            <x-header.logo-card />
                            <x-header.search-form />
                            <div class="flex justify-center cols bb-icons">
                                <div class="bb-flex-justify max-[575px]:flex max-[575px]:justify-between">
                                    <div class="flex items-center justify-end h-full bb-header-buttons">
                                        <x-header.account-card />
                                        @livewire('web.section.header.wishlist-count-component')
                                        @livewire('web.section.header.cart-count-component')

                                        <a href="javascript:void(0)"
                                            class="bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]">
                                            <div class="header-icon">
                                                <i class="ri-menu-3-fill text-[22px] text-[#6c7fd8]"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-header.main-menu />
        <div class="bb-mobile-menu-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]"></div>
        <x-header.mobile-menu />
    </header>

</div>
