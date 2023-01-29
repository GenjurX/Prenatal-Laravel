<div class="border-b">
    <div class="flex justify-between py-5 px-5 mx:auto md:px-12 items-center w-full ">

        <x-buttons.hamburger-menu :categories="$categories" />

        <a href="/">
            @include('components.icons.prenatal-logo')
        </a>
        <form action="/" class="hidden ml-20 relative w-full lg:flex">
            <input class="w-full border-b text-sm py-2 focus:outline-none" type="text" name="search"
                placeholder="Che prodotto stai cercando?" />
            <button type="submit" class="absolute top-3 right-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.586" height="16.997" viewBox="0 0 16.586 16.997">
                    <path id="Path_240" data-name="Path 240"
                        d="M13030.52,305.48a5.1,5.1,0,1,1,5.1-5.1A5.1,5.1,0,0,1,13030.52,305.48Zm4.06.36a6.826,6.826,0,1,1,1.228-1.18l4.262,4.48a.85.85,0,0,1-1.234,1.17Z"
                        transform="translate(-13023.716 -293.58)" fill-rule="evenodd" />
                </svg>

            </button>

        </form>

        <div class=" ml-20 flex-none hidden items-center lg:flex justify-between gap-3 ">
            <div class="flex items-center ">
                <div class="text-right uppercase xxs mt-1 ">
                    <span>Prenota&Ritira <br>In negozio</span>
                </div>
                <div class=" ml-0 my-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>

                </div>
            </div>

            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3h-2V4H6v16h12v-2h2v3a1 1 0 0 1-1 1H5zm13-6v-3h-7v-2h7V8l5 4-5 4z" />
                        </svg>
                    </button>
                </form>
            @else
                <a href="/login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                        <path id="Path_288" data-name="Path 288"
                            d="M12482.71,231.55a4.852,4.852,0,1,1,4.852-4.852A4.857,4.857,0,0,1,12482.71,231.55Zm8.132,3.368a11.466,11.466,0,0,0-4.37-2.741,6.648,6.648,0,1,0-7.523,0,11.518,11.518,0,0,0-7.738,10.873h1.8a9.7,9.7,0,0,1,19.406,0h1.8A11.425,11.425,0,0,0,12490.842,234.918Z"
                            transform="translate(-12471.21 -220.05)" />
                    </svg>

                </a>
            @endauth
        </div>

        <div class="flex gap-3 items-center lg:hidden">

            @include('components.buttons.search')

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                height="18" viewBox="0 0 18 18">
                <defs>
                    <clipPath id="clip-path">
                        <rect id="Rectangle_241" data-name="Rectangle 241" width="18" height="18"
                            transform="translate(13058.223 292.32)" fill="none" />
                    </clipPath>
                </defs>
                <g id="Group_211" data-name="Group 211" transform="translate(-13058.223 -292.32)">
                    <g id="Group_210" data-name="Group 210" clip-path="url(#clip-path)">
                        <path id="Path_238" data-name="Path 238"
                            d="M13060.741,309.147l.784-11.089,11.384.046.76,11.09Zm14.275.456-.932-12.268a.561.561,0,0,0-.561-.52h-12.614a.563.563,0,0,0-.562.52l-.939,12.38a.562.562,0,0,0,.561.605h14.5a.563.563,0,0,0,.563-.564A.536.536,0,0,0,13075.017,309.6Z" />
                        <path id="Path_239" data-name="Path 239"
                            d="M13067.217,292.32a4.508,4.508,0,0,0-4.5,4.5v2.243a.563.563,0,0,0,1.126,0v-2.243a3.376,3.376,0,1,1,6.752,0v2.243a.563.563,0,0,0,1.126,0v-2.243A4.508,4.508,0,0,0,13067.217,292.32Z" />
                    </g>
                </g>
            </svg>

        </div>
    </div>
    <div class="w-full py-3 text-xs hidden lg:flex relative">
        <div class=" flex px-12 space-x-5 ">
            @foreach ($categories as $category)
                <div class="hover:text-primary cursor-pointer focus:text-primary"><a
                        href="/category/{{ $category->id }}">{{ $category->name }}</a></div>
            @endforeach

        </div>
        <div class="absolute right-11 ">
            <div class="text-primary font-bold hover:cursor-pointer">Tu e Prénatal</div>
        </div>
    </div>
</div>
