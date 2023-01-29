@props(['item', 'related_products'])
<div class="flex flex-col lg:flex-row lg:relative w-full mt-10">
    <div class="lg:w-[60%] lg:block lg:ml-12">
        @if (count($item->gallery) === 0)
            <img class='w-[400px] mx-auto mb-2' src='{{ asset('/resources/images/noImage.jpg') }}' alt='No image' />
        @else
            @foreach ($item->gallery as $item)
                <img class='w-[400px] mx-auto mb-2' src='{{ $item->image }}' alt='{{ $item->title }}' />
            @endforeach
        @endif

    </div>
    <div class="px-20 mt-5 lg:w-[30%] lg:ml-5">
        <div class="text-lg font-bold mb-5">{{ $item->title }}</div>

        <div class="text-primary text-xl">
            <?php
            if ($item->price != 0 && $item->sale_price != null) {
                echo "<span class='text-primary line-through'>€ $item->price</span>";
                echo "<span class='ml-2'>€ $item->sale_price</span>";
            } elseif ($item->price != 0) {
                echo "<span>€ $item->price</span>";
            } else {
                echo '<span>€ N/A</span>';
            }
            
            ?>
        </div>
        @if ($item->vip_price)
            <div class="mt-2 text-secondary text-xl">€ {{ $item->vip_price }} <span class="text-xs ">CON VIP CARD</span>
            </div>
        @endif
        <div class="my-5 text-xs uppercase">spedizione gratuita a casa o in negozio</div>


        <div x-data="{ show: false }" class="mt-5 text-sm">
            <div x-show="show">
                <p class="text-sm">{{ $item->description }}
                </p>
            </div>
            <button class="text-sm" @click="show=! show"> + INFO PRODOTTO</button>
        </div>
        <div class="flex relative mt-5">
            <div class="font-bold">Taglie</div>
        </div>

        <div class="mt-5 grid grid-cols-3 gap-x-2 gap-y-2">
            @php
                $taglia = explode(',', $item->taglia);
            @endphp
            @foreach ($taglia as $size)
                <a class="border border-black text-center rounded-full" href="#">{{ $size }}</a>
            @endforeach

        </div>

        <div class="flex mt-10 space-x-2 text-sm items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path
                    d="M20 20a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9zm-2-1V9.157l-6-5.454-6 5.454V19h12zm-6-2l-3.359-3.359a2.25 2.25 0 1 1 3.182-3.182l.177.177.177-.177a2.25 2.25 0 1 1 3.182 3.182L12 17z" />
            </svg>
            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Ducimus, in.</p>

        </div>

        <a href="#" class="ml-10 text-sm underline">Mostra i negozi disponibili</a>

        <div class="mt-20">
            <div class="flex space-x-3 text-sm items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0H24V24H0z" />
                    <path
                        d="M12.001 4.529c2.349-2.109 5.979-2.039 8.242.228 2.262 2.268 2.34 5.88.236 8.236l-8.48 8.492-8.478-8.492c-2.104-2.356-2.025-5.974.236-8.236 2.265-2.264 5.888-2.34 8.244-.228zm6.826 1.641c-1.5-1.502-3.92-1.563-5.49-.153l-1.335 1.198-1.336-1.197c-1.575-1.412-3.99-1.35-5.494.154-1.49 1.49-1.565 3.875-.192 5.451L12 18.654l7.02-7.03c1.374-1.577 1.299-3.959-.193-5.454z"
                        fill="rgba(231,43,111,1)" />
                </svg>
                <a href="#">Aggiungi alla lista desideri</a>

            </div>
            <div class="flex space-x-3 text-sm items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M15 2a4 4 0 0 1 3.464 6.001L23 8v2h-2v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V10H1V8l4.536.001A4 4 0 0 1 12 3.355 3.983 3.983 0 0 1 15 2zm-4 8H5v9h6v-9zm8 0h-6v9h6v-9zM9 4a2 2 0 0 0-.15 3.995L9 8h2V6a2 2 0 0 0-1.697-1.977l-.154-.018L9 4zm6 0a2 2 0 0 0-1.995 1.85L13 6v2h2a2 2 0 0 0 1.995-1.85L17 6a2 2 0 0 0-2-2z"
                        fill="rgba(231,43,111,1)" />
                </svg>
                <a href="#">Aggiungi alla lista nascita</a>
            </div>

        </div>

    </div>

</div>

@unless(count($relatedProducts) === 0)
    <div class="mt-12 text-center ">
        <span class="text-lg">Potrebbero piacerti anche</span>
        <p class="mt-5 mx-5"> Ecco una selezione di prodotti che potrebbero esserti
            utili se stai acquistando questo prodotto
        </p>
    </div>
    <div class="hidden px-5 gap-y-3 mt-5 md:grid md:grid-cols-4 md:gap-x-3 md:px-12">
        @foreach ($relatedProducts as $relatedProduct)
            <div class="hover:scale-110 hover:shadow-lg p-3 bg-white transition ease-in-out">
                <div class="border p-2">
                    <a href="/products/{{ $relatedProduct->id }}"><img src="{{ $relatedProduct->image_link }}"
                            alt="{{ $relatedProduct->title }}"></a>
                </div>
                <div class="flex space-x-2 text-primary ">
                    <?php
                    if ($item->price != 0 && $item->sale_price != null) {
                        echo "<span class='text-primary line-through'>€ $item->price</span>";
                        echo "<span>$item->sale_price</span>";
                    } elseif ($item->price != 0) {
                        echo "<span>€ $item->price</span>";
                    } else {
                        echo '<span>€ N/A</span>';
                    }
                    ?>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-bold">{{ $relatedProduct->marche }}</span>
                    <span class="text-sm">{{ $relatedProduct->title }}</span>
                </div>
            </div>
        @endforeach

    </div>

    <div class="relative w-full flex  items-center mx-auto lg:hidden ">
        <div id="default-carousel" class="relative w-full mt-5 p-10" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-[500px] overflow-hidden rounded-lg md:h-96">
                @foreach ($relatedProducts as $relatedProduct)
                    <div class="bg-white duration-700 transition ease-in-out" data-carousel-item>
                        <div class="p-2">
                            <a href="/products/{{ $relatedProduct->id }}"><img class="mx-auto" height="250"
                                    width="300" src="{{ $relatedProduct->image_link }}"
                                    alt="{{ $relatedProduct->title }}"></a>
                        </div>
                        <div class="flex space-x-2 text-primary ">
                            <?php
                            if ($item->price != 0 && $item->sale_price != null) {
                                echo "<span class='text-primary line-through'>€ $item->price</span>";
                                echo "<span>$item->sale_price</span>";
                            } elseif ($item->price != 0) {
                                echo "<span>€ $item->price</span>";
                            } else {
                                echo '<span>€ N/A</span>';
                            }
                            ?>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-bold">{{ $relatedProduct->marche }}</span>
                            <span class="text-sm">{{ $relatedProduct->title }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                    aria-label="Slide 0" data-carousel-slide-to="0"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 1" data-carousel-slide-to="1"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 2" data-carousel-slide-to="2"></button>
                <button type="button"
                    class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                    aria-current="false" aria-label="Slide 3" data-carousel-slide-to="3"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
@endunless
