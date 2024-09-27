<div>
    <div class="bb-main-menu-desk bg-[#fff] py-[5px] border-t-[1px] border-solid border-[#eee] max-[991px]:hidden">
        <div
            class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-inner-menu-desk flex max-[1199px]:relative max-[991px]:justify-between">
                        <a href="javascript:void(0)"
                            class="bb-header-btn bb-sidebar-toggle bb-category-toggle transition-all duration-[0.3s] ease-in-out h-[45px] w-[45px] mr-[30px] p-[8px] flex items-center justify-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px] relative max-[767px]:m-[0] max-[575px]:hidden">
                            <svg class="svg-icon w-[25px] h-[25px]" viewBox="0 0 1024 1024" version="1.1"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-[#6c7fd8]"
                                    d="M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z" />
                            </svg>
                        </a>
                        <button class="hidden shadow-none navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-2-line"></i>
                        </button>
                        <div class="bb-main-menu relative flex flex-[auto] justify-start max-[991px]:hidden"
                            id="navbarSupportedContent">
                            <ul class="flex flex-row flex-wrap navbar-nav ">
                                <li
                                    class="nav-item flex items-center font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] mr-[35px]">
                                    <a class="nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-medium text-[#3d4750] tracking-[0.03rem] block"
                                        href="/" wire:navigate>{{ __('locale.home') }}</a>
                                </li>
                                <li class="nav-item bb-main-dropdown flex items-center mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]"
                                        href="javascript:void(0)">{{ __('locale.categories') }}</a>
                                    <ul
                                        class="mega-menu min-w-full transition-all duration-[0.3s] ease-in-out mt-[25px] pl-[30px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] flex items-center">
                                            @foreach ($categories as $cat)
                                                <ul class="mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]">
                                                    <li
                                                        class="menu_title border-b-[1px] border-solid border-[#eee] mb-[10px] pb-[5px] flex items-center leading-[28px]">
                                                        <a href="javascript:void(0)"
                                                            class="transition-all duration-[0.3s] ease-in-out font-Poppins h-[auto] text-[#6c7fd8] text-[15px] font-medium tracking-[0.03rem] block py-[10px] leading-[22px] capitalize">{{ $cat->name }}</a>
                                                    </li>
                                                    @foreach ($cat->subcategories as $subcat)
                                                        <li class="flex items-center leading-[28px]"><x-mary-button
                                                                link="{{ route('category_products', ['slug' => $cat->slug, 'subcatgeory' => $subcat->slug]) }}"
                                                                class="transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize bg-transparent border-none hover:bg-transparent btn-link">
                                                                {{ $subcat->name }}
                                                            </x-mary-button>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            @endforeach

                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item  flex items-center relative mr-[45px]">
                                    <a class="nav-link  font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]"
                                        href="javascript:void(0)">{{ __('locale.products') }}</a>

                                </li>
                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]"
                                        href="javascript:void(0)">{{ __('locale.pages') }}</a>
                                    <ul
                                        class="bb-dropdown-menu min-w-[205px] p-[10px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="about-us.html">{{ __('locale.about') }}</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="contact-us.html">{{ __('locale.contact') }}</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="cart.html">Cart</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="checkout.html">{{ __('locale.checkout') }}</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="compare.html">{{ __('locale.comapre') }}</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="faq.html">{{ __('locale.faq') }}</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="login.html">{{ __('locale.login') }}</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a
                                                class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal text-[#686e7d] hover:text-[#6c7fd8] capitalize block w-full whitespace-nowrap"
                                                href="register.html">{{ __('locale.register') }}</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item flex items-center relative mr-[45px]">
                                    <a class="nav-link  font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]"
                                        href="javascript:void(0)">{{ __('locale.blog') }}</a>

                                </li>
                                <li class="flex items-center nav-item">
                                    <a class="nav-link font-Poppins  p-[0] leading-[28px] text-[15px] font-medium tracking-[0.03rem] text-[#3d4750] flex"
                                        href="offer.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0"
                                            viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve"
                                            class="w-[20px] h-[25px] mr-[5px] leading-[18px] align-middle">
                                            <g>
                                                <path
                                                    d="M10 16v22c0 .3.1.6.2.8.3.6 6.5 13.8 21 20h.2c.2 0 .3.1.5.1s.3 0 .5-.1h.2c14.5-6.2 20.8-19.4 21-20 .1-.3.2-.5.2-.8V16c0-.9-.6-1.7-1.5-1.9-7.6-1.9-19.3-9.6-19.4-9.7-.1-.1-.2-.1-.4-.2-.1 0-.1 0-.2-.1h-.9c-.1 0-.2.1-.3.1-.1.1-.2.1-.4.2s-11.8 7.8-19.4 9.7c-.7.2-1.3 1-1.3 1.9zm4 1.5c6.7-2.1 15-7.2 18-9.1 3 1.9 11.3 7 18 9.1v20c-1.1 2.1-6.7 12.1-18 17.3-11.3-5.2-16.9-15.2-18-17.3z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class="fill-[#6c7fd8]"></path>
                                                <path
                                                    d="M28.6 38.4c.4.4.9.6 1.4.6s1-.2 1.4-.6l9.9-9.9c.8-.8.8-2 0-2.8s-2-.8-2.8 0L30 34.2l-4.5-4.5c-.8-.8-2-.8-2.8 0s-.8 2 0 2.8z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class="fill-[#6c7fd8]"></path>
                                            </g>
                                        </svg>
                                        {{ __('locale.offers') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="bb-dropdown-menu flex max-[991px]:hidden" wire:ignore>
                            <div
                                class="inner-select w-[180px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px] flex items-center">
                                <svg class="svg-icon m-[10px] w-[25px] h-[25px] align-middle" viewBox="0 0 1024 1024"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M511.614214 958.708971c-21.76163 0-41.744753-9.781784-54.865586-26.862811L222.50156 626.526383c-3.540639-4.044106-5.872754-7.978718-7.349385-10.461259-41.72838-58.515718-63.959707-127.685078-63.959707-199.699228 0.87288-193.650465 162.903184-351.075891 361.209691-351.075891 198.726064 0 360.40435 157.49194 360.40435 351.075891-0.839111 72.190159-23.070438 140.856052-64.345494 199.053522-1.962701 3.288906-4.312212 7.189749-7.735171 11.098779L566.479799 931.847184c-13.120832 17.080004-33.103956 26.861788-54.865585 26.861787zM273.525654 580.51956a33.707706 33.707706 0 0 1 2.63399 3.037173L511.278569 890.00931 747.068783 583.556733c0.435928-0.569982 0.889253-1.124614 1.358951-1.669013l2.51631-4.102434c0.285502-0.453325 0.587378-0.89744 0.889253-1.325182 33.507138-46.921659 51.577702-102.416578 52.248991-160.487158 0-155.294902-130.839931-281.95565-291.679105-281.95565-160.571069 0-291.780413 126.72931-292.484448 282.501073 0 57.450457 17.802458 112.811322 51.460022 159.933549l2.90312 4.580318c0.418532 0.73678-0.186242 0.032746-0.756223-0.512676z m476.059439 0.100284v0z m0.066515-0.058329c-0.016373 0.016373-0.033769 0.025583-0.033769 0.041956 0.001023-0.016373 0.017396-0.025583 0.033769-0.041956z m0.051166-0.041955a0.227174 0.227174 0 0 0-0.050142 0.041955c0.016373-0.016373 0.032746-0.033769 0.050142-0.041955z"
                                        fill="#444444" class="fill-[#6c7fd8]" />
                                    <path
                                        d="M512 577.206094c-90.000803 0-163.222455-73.221652-163.222455-163.222455s73.221652-163.222455 163.222455-163.222455S675.222455 323.982836 675.222455 413.983639s-73.222675 163.222455-163.222455 163.222455z m0-240.538355c-42.634006 0-77.3159 34.68087-77.3159 77.3159s34.68087 77.3159 77.3159 77.3159 77.3159-34.681894 77.3159-77.3159-34.681894-77.3159-77.3159-77.3159z"
                                        fill="#00D8A0" class="fill-[#6c7fd8]" />
                                </svg>
                                <div
                                    class="custom-select transition-all duration-[0.3s] ease-in-out w-full h-full pr-[15px] text-[#777] flex items-center justify-between text-[14px] relative">
                                    <select>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
