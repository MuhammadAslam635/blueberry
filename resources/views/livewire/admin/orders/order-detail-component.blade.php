<div>
    <x-mary-header title="Order# {{ $order->id }}" />
        <x-mary-card class="overflow-y-scroll shadow-md bg-base-100">
            <section class="relative py-1">
                <div class="w-full px-4 mx-auto max-w-7xl md:px-5 lg-6">
                    <div class="flex flex-col items-start gap-6 xl:flex-row ">
                        <div
                            class="flex flex-col items-start w-full max-w-sm gap-8 md:max-w-3xl xl:max-w-sm max-xl:mx-auto">
                            <div
                                class="w-full p-6 transition-all duration-500 border border-gray-200 rounded-3xl group hover:border-gray-400 ">
                                <h2
                                    class="pb-6 text-3xl font-bold leading-10 text-black border-b border-gray-200 font-manrope ">
                                    Buyer Detail
                                </h2>
                                <div class="py-6 border-b border-gray-200 data">
                                    <div class="flex items-center justify-between gap-4 mb-5">
                                        <p
                                            class="text-lg font-normal leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700">
                                            Name:</p>
                                        <p class="text-lg font-medium leading-8 text-gray-900">{{ $order->user->name }}</p>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 mb-5">
                                        <p
                                            class="text-lg font-normal leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700">
                                            Contact:</p>
                                        <span class="text-xs font-bold text-gray-600">{{ $order->address }}</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 ">
                                        <p
                                            class="text-lg font-normal leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700 ">
                                            Country</p>
                                        <p class="text-lg font-medium leading-8 text-emerald-500">{{ $order->city }}&nbsp;,{{ $order->state }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between pt-6 total">
                                    <p class="text-xl font-normal leading-8 text-black ">Subtotal</p>
                                    <h5 class="text-2xl font-bold leading-9 text-indigo-600 font-manrope">$400.00</h5>
                                </div>
                            </div>
                            <div
                                class="w-full p-6 transition-all duration-500 border border-gray-200 rounded-3xl group hover:border-gray-400 ">
                                <h2
                                    class="pb-6 text-3xl font-bold leading-10 text-black border-b border-gray-200 font-manrope ">
                                    Order Summary
                                </h2>
                                <div class="py-6 border-b border-gray-200 data">
                                    <div class="flex items-center justify-between gap-4 mb-5">
                                        <p
                                            class="text-lg font-normal leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700">
                                            Product Cost</p>
                                        <p class="text-lg font-medium leading-8 text-gray-900">$360.00</p>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 mb-5">
                                        <p
                                            class="text-lg font-normal leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700">
                                            Shipping</p>
                                        <p class="text-lg font-medium leading-8 text-gray-600">$40.00</p>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 ">
                                        <p
                                            class="text-lg font-normal leading-8 text-gray-400 transition-all duration-500 group-hover:text-gray-700 ">
                                            Coupon Code</p>
                                        <p class="text-lg font-medium leading-8 text-emerald-500">#APPLIED</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between pt-6 total">
                                    <p class="text-xl font-normal leading-8 text-black ">Subtotal</p>
                                    <h5 class="text-2xl font-bold leading-9 text-indigo-600 font-manrope">$400.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-sm md:max-w-3xl max-xl:mx-auto">
                            <div class="grid grid-cols-1 gap-6">
                                <div
                                    class="flex flex-col gap-5 p-6 transition-all duration-500 bg-gray-100 border border-gray-100 rounded-3xl md:flex-row md:items-center hover:border-gray-400">
                                    <div class="img-box ">
                                        <img src="https://pagedone.io/asset/uploads/1701167635.png"
                                            alt="Denim Jacket image"
                                            class="w-full md:max-w-[122px] rounded-lg object-cover">
                                    </div>
                                    <div class="grid w-full grid-cols-1 gap-3 md:grid-cols-2 md:gap-8">
                                        <div class="">
                                            <h2 class="mb-3 text-xl font-medium leading-8 text-black">Dark Denim Jacket
                                            </h2>
                                            <p class="text-lg font-normal leading-8 text-gray-500 ">By: Dust Studios</p>

                                        </div>
                                        <div class="flex items-center justify-between gap-8">
                                            <div class="flex items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <h6 class="text-xl font-medium leading-8 text-indigo-600">$120.00</h6>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col gap-5 p-6 transition-all duration-500 bg-gray-100 border border-gray-100 rounded-3xl md:flex-row md:items-center hover:border-gray-400">
                                    <div class="img-box ">
                                        <img src="https://pagedone.io/asset/uploads/1701167652.png"
                                            alt="Leather Military Boots image"
                                            class="w-full md:max-w-[122px] rounded-lg object-cover">
                                    </div>
                                    <div class="grid w-full grid-cols-1 gap-3 md:grid-cols-2 md:gap-8">
                                        <div class="">
                                            <h2 class="mb-3 text-xl font-medium leading-8 text-black">Leather Military
                                                Boots
                                            </h2>
                                            <p class="text-lg font-normal leading-8 text-gray-500 ">Lethal Lifestyle</p>

                                        </div>
                                        <div class="flex items-center justify-between gap-8">
                                            <div class="flex items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <h6 class="text-xl font-medium leading-8 text-indigo-600">$120.00</h6>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col gap-5 p-6 transition-all duration-500 bg-gray-100 border border-gray-100 rounded-3xl md:flex-row md:items-center hover:border-gray-400">
                                    <div class="img-box ">
                                        <img src="https://pagedone.io/asset/uploads/1701167668.png"
                                            alt="Writing Pad image"
                                            class="w-full md:max-w-[122px] rounded-lg object-cover">
                                    </div>
                                    <div class="grid w-full grid-cols-1 gap-3 md:grid-cols-2 md:gap-8">
                                        <div class="">
                                            <h2 class="mb-3 text-xl font-medium leading-8 text-black">Writing Pad</h2>
                                            <p class="text-lg font-normal leading-8 text-gray-500 ">Books</p>

                                        </div>
                                        <div class="flex items-center justify-between gap-8">
                                            <div class="flex items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_14099_1497)">
                                                        <path
                                                            d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                            fill="#FBBF24" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_14099_1497">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <h6 class="text-xl font-medium leading-8 text-indigo-600">$120.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </x-mary-card>

</div>
