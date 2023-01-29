@props(['products'])
<div>
    <div class="grid grid-cols-2 mx-5 mt-5 gap-2 md:gap-8 md:mx-10 lg:grid-cols-4">

        @foreach ($products as $product)
            <div class="transition ease-in-out hover:scale-110 z-30 bg-white hover:drop-shadow-lg p-2">
                <div class="border p-2">
                    <a href="/products/{{ $product->id }}">
                        @if (is_null($product->image_link))
                            <img src="/resources/images/noImage.jpg" alt="{{ $product->title }}">
                        @else
                            <img src="{{ $product->image_link }}" alt="{{ $product->title }}">
                        @endif
                    </a>
                </div>
                <div class="flex justify-between">
                    <div class="flex space-x-2 text-primary ">
                        <?php
                        
                        if ($product->price != 0 && $product->sale_price != null) {
                            echo "<span class='line-through'>€ $product->price</span>";
                            echo "<span>€ $product->sale_price</span>";
                        } elseif ($product->price != 0) {
                            echo "<span>€ $product->price</span>";
                        } else {
                            echo '<span>€ N/A</span>';
                        }
                        
                        ?>
                    </div>
                    @if ($product->vip_price)
                        <span class="text-xs text-secondary">Vip Price € {{ $product->vip_price }}</span>
                    @endif
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-sm">{{ $product->marche }}</span>
                    <span class="text-sm"> {{ $product->title }}</span>
                </div>
            </div>
        @endforeach


    </div>

    <div class="flex justify-center  lg:mx-auto  mt-3">
        {{ $products->links('pagination::tailwind') }}
    </div>

</div>
