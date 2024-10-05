<div>
    <div class="grid gap-3 lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-1">
        <div>
            <x-mary-card title="{{ $product->name }}" subtitle="Detail Information" shadow no-separator>
                <x-slot:figure>
                    <img src="{{ asset('assets/img/product/1.jpg') }}" class="h-48" />
                </x-slot:figure>
                <x-slot:menu>
                    <x-mary-button label="{{ $product->sole }}" class="btn btn-sm" />
                    <x-mary-button label="{{ $product->closure }}" class="btn btn-sm" />
                    <x-mary-button label="{{ $product->stock }}" class="btn btn-sm" />
                    <x-mary-button label="{{ $product->status }}" class="btn btn-sm" />
                </x-slot:menu>
                <x-slot:actions>
                    <p>
                        <span>Price: <strong>{{ $product->price }}</strong></span>
                        <span>Sale Price: <strong>{{ $product->sale_price }}</strong></span>
                        <span>Qty: <strong>{{ $product->qty }}</strong></span>
                        <span>Sale Qty: <strong>{{ $product->sale_qty }}</strong></span>
                    </p>
                </x-slot:actions>
            </x-mary-card>
            <div class="flex flex-col gap-2 p-2">
                <h1>Product Tags</h1>
                <div class="flex flex-row gap-2">
                    @foreach ($product->productTags as $tag)
                        <span class="btn btn-sm">{{ $tag->tag->name }}</span>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-2 p-2">
                <h1>Product Avialable Weights</h1>
                <div class="flex flex-row gap-2">
                    @foreach ($product->productWeights as $weight)
                        <span class="btn btn-sm">{{ $weight->weight }}&nbsp;{{ $weight->type }}</span>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-2 p-2">
                <h1>Product Avilable Sizes</h1>
                <div class="flex flex-row gap-2">
                    @foreach ($product->productDimensions as $dimen)
                        <span class="btn btn-sm">{{ $dimen->width }}</span>
                    @endforeach
                </div>
            </div>
        </div>
        <x-mary-card title="Gallery" subtitle="Detail Information" shadow no-separator>

            <x-slot:figure>
                @forelse(optional($product->gallery) as $image)
                    <img src="{{ asset($image) }}" class="px-1 w-72 h-50" alt="{{ $image }}" />
                @empty
                    <img src="{{ asset('assets/img/product/1.jpg') }}" />
                @endforelse
            </x-slot:figure>

        </x-mary-card>


    </div>
    <x-mary-card title="Orders">
        @php
            $systemType = (new \App\Policies\SystemPolicy())->type();
        @endphp
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No's</th>
                        @if($systemType =='multi')
                        <th>Vendor</th>
                        @endif
                        <th>Customer</th>
                        <th>Order</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($product->productOrders as $order)
                        @php
                            $i = 1;
                        @endphp
                        <tr>
                            <th>{{ $i++ }}</th>
                            @if($systemType == 'multi')
                            <td>
                                {{ $order->vsndor->user->name }}
                            </td>
                            @endif
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->total }}</td>
                            <td><span class="capitalize btn btn-sm">{{ $order->status }}</span></td>
                            <td>
                                <x-mary-button label="Order Detail" link="#" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <div class="flex justify-center">No Orders Found</div>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </x-mary-card>
</div>
