@props(['brands' => [], 'colors' => []])
<div class="flex px-6 mx-auto border mt-8 mb-7 w-[90%] rounded-full border-[#CCCCCC] lg:hidden">
    <div class="flex gap-2 py-3 mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
                d="M6.17 18a3.001 3.001 0 0 1 5.66 0H22v2H11.83a3.001 3.001 0 0 1-5.66 0H2v-2h4.17zm6-7a3.001 3.001 0 0 1 5.66 0H22v2h-4.17a3.001 3.001 0 0 1-5.66 0H2v-2h10.17zm-6-7a3.001 3.001 0 0 1 5.66 0H22v2H11.83a3.001 3.001 0 0 1-5.66 0H2V4h4.17zM9 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm6 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-6 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                fill="rgba(231,43,111,1)" />
        </svg>

        <div x-data="{ open: false }">
            <button @click="open= !open" class="text-primary mx-auto">FILTRI</button>
            <div x-show="open" class="absolute left-0 -mt-14 p-5 w-full h-96 bg-white z-50">
                <div class="flex justify-between ">
                    <span class="font-bold">Filtri</span>
                    <button @click="open= !open" class="text-white bg-primary rounded-full px-2">x</button>
                </div>
                <div class="flex flex-col mt-5">
                    <div x-data="{ show: false }">
                        <button @click="show= !show" class="text-primary mb-5">+ Filtra per Marca</button>
                        <form method="GET" x-show="show" class="grid grid-cols-2 gap-x-5">
                            @foreach ($brands as $brand)
                                <div class="flex space-x-2">
                                    <input type="checkbox" name="filter_brand[]" value="{{ $brand }}" />
                                    <label>{{ $brand }}</label>
                                </div>
                            @endforeach
                            <button class="mt-3 px-4 bg-primary border rounded-full text-white">Applica</button>

                        </form>

                    </div>
                    <div x-data="{ show: false }">
                        <button @click="show= !show" class="text-primary mb-5">+ Filtra per Colore</button>
                        <form method="GET" x-show="show" class="grid grid-cols-2 gap-x-5">
                            @foreach ($colors as $color)
                                <div class="flex space-x-2">
                                    <input type="checkbox" name="filter_color[]" value="{{ $color }}" />
                                    <label>{{ $color }}</label>
                                </div>
                            @endforeach
                            <button
                                class="absolute bottom-1 mt-3 px-4 bg-primary border rounded-full text-white">Applica</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<form method="GET" class="relative hidden mt-12 lg:flex pl-12 gap-2 mb-15">

    <div class="flex gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z" />
            <path
                d="M6.17 18a3.001 3.001 0 0 1 5.66 0H22v2H11.83a3.001 3.001 0 0 1-5.66 0H2v-2h4.17zm6-7a3.001 3.001 0 0 1 5.66 0H22v2h-4.17a3.001 3.001 0 0 1-5.66 0H2v-2h10.17zm-6-7a3.001 3.001 0 0 1 5.66 0H22v2H11.83a3.001 3.001 0 0 1-5.66 0H2V4h4.17zM9 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm6 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-6 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                fill="rgba(231,43,111,1)" />
        </svg>
        <span class="text-primary">FILTRI</span>
    </div>


    <div x-data="{ open: false }"
        class="items-center flex border rounded-full border-[#CCCCCC] px-4 gap-2 ml-5 hover:cursor-pointer hover:bg-gray-300">
        <span @click="open= !open"> Colore </span>
        <svg xmlns="http://www.w3.org/2000/svg" width="5.736" height="5.407" viewBox="0 0 5.736 5.407">
            <path id="Path_241" data-name="Path 241"
                d="M13031.138,1021.4a.312.312,0,0,1,.281.17.329.329,0,0,1,0,.33l-2.543,4.36a.32.32,0,0,1-.28.16c-.118,0,.428.97-.278-.16s-2.544-4.36-2.544-4.36a.325.325,0,0,1,0-.33.31.31,0,0,1,.281-.17Z"
                transform="translate(-13025.726 -1021.4)" fill="#4a4a44" fill-rule="evenodd" />
        </svg>
        <div x-show="open"
            class="absolute justify-center p-10 gap-x-10 mx-auto -bottom-44 z-50 bg-white grid grid-cols-5 shadow-lg rounded-sm">
            @foreach ($colors as $color)
                <div class="flex space-x-2">
                    <input type="checkbox" name="filter_color[]" value="{{ $color }}">
                    <label>{{ $color }}</label>
                </div>
            @endforeach
            <button
                class="mt-3 absolute bottom-2 left-10 px-4 bg-primary border rounded-full text-white">Applica</button>

        </div>
    </div>
    <div x-data="{ open: false }"
        class="items-center flex border rounded-full border-[#CCCCCC] px-4 gap-2  hover:cursor-pointer hover:bg-gray-300">
        <span @click="open= !open"> Marca </span>
        <svg xmlns="http://www.w3.org/2000/svg" width="5.736" height="5.407" viewBox="0 0 5.736 5.407">
            <path id="Path_241" data-name="Path 241"
                d="M13031.138,1021.4a.312.312,0,0,1,.281.17.329.329,0,0,1,0,.33l-2.543,4.36a.32.32,0,0,1-.28.16c-.118,0,.428.97-.278-.16s-2.544-4.36-2.544-4.36a.325.325,0,0,1,0-.33.31.31,0,0,1,.281-.17Z"
                transform="translate(-13025.726 -1021.4)" fill="#4a4a44" fill-rule="evenodd" />
        </svg>
        <div x-show="open"
            class="absolute justify-center p-10 gap-x-10 mx-auto -bottom-56 z-50 bg-white grid grid-cols-5 shadow-lg rounded-sm">
            @foreach ($brands as $brand)
                <div class="flex space-x-2">
                    <input type="checkbox" name="filter_brand[]" value="{{ $brand }}" />
                    <label>{{ $brand }}</label>
                </div>
            @endforeach

            <button class="mt-5 bg-primary border rounded-full text-white py-1">Applica</button>

        </div>
    </div>

</form>
