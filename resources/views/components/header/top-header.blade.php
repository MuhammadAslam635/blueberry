<div>
    <div class="top-header bg-[#3d4750] py-[6px] max-[991px]:hidden">
        <div
            class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex justify-between inner-top-header">
                        <div class="col-left-bar">
                            <x-mary-button
                                class="transition-all btn-link p-0 hover:no-underline no-underline duration-[0.3s] ease-in-out font-Poppins font-light text-[14px] text-[#fff] leading-[28px] tracking-[0.03rem]">Flat
                                50% Off On Grocery Shop.
                            </x-mary-button>
                        </div>
                        <div class="flex col-right-bar">
                            <div class="cols px-[12px]">
                                <x-mary-button href="faq.html"
                                    class="transition-all duration-[0.3s] btn-link p-0 hover:no-underline no-underline ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]">Help?</x-mary-button>
                            </div>
                            <div class="cols px-[12px]">
                                <x-mary-button href="track-order.html"
                                    class="transition-all duration-[0.3s] btn-link p-0 hover:no-underline no-underline ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]">Track
                                    Order</x-mary-button>
                            </div>
                            <div class="cols px-[12px] pt-[10px]">
                                <div class="custom-dropdown relative z-[5]">
                                    <a class="bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]"
                                        href="#">{{ Lang::locale() }}</a>
                                    <ul
                                        class="dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff]  border-[1px] border-solid border-[#eee] block rounded-[10px]">
                                        <li
                                            class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                            <a href="javascript:void(0)" wire:click.prevent="changeLanguage('en')"
                                                class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">English</a>
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                            <a href="javascript:void(0)" wire:click.prevent="changeLanguage('ur')"
                                                class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">Urdu</a>
                                        </li>
                                        <li
                                            class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                            <a href="javascript:void(0)" wire:click.prevent="changeLanguage('fr')"
                                                class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">French</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cols px-[12px] pt-[10px]">
                                <div class="custom-dropdown relative z-[5]">
                                    <a class="bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]"
                                        href="#">{{ Session::get('currency') }}</a>
                                    <ul
                                        class="dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] block rounded-[10px]">
                                        @foreach ($currencies as $curr)
                                            <li
                                                class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">
                                                <a href="javascript:void(0)"
                                                    wire:click.prevent="changeCurrency('{{ $curr->symbol }}')"
                                                    class="transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]">{{ $curr->currency }}
                                                    {{ $curr->symbol }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
