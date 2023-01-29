@props(['categories'])
<div class="my-auto lg:hidden relative">
    <div onclick="myFunction()"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17">
            <path id="Path_237" data-name="Path 237"
                d="M12757.014,308.68h21a1.5,1.5,0,0,1,0,3h-21a1.5,1.5,0,0,1,0-3Zm21-11h-21a1.5,1.5,0,0,1,0-3h21a1.5,1.5,0,0,1,0,3Zm0,7h-21a1.5,1.5,0,0,1,0-3h21a1.5,1.5,0,0,1,0,3Z"
                transform="translate(-12755.514 -294.68)" fill="#4d4c4c" fill-rule="evenodd" />
        </svg>
    </div>

    <div id="myLinks" class="fixed top-0 left-0 flex w-[90%] h-[400px] bg-white z-30  " style="display:none">
        <div class="flex flex-col w-full mx-auto">

            <form action="/" class="flex sticky top-0 left-0 items-center border-b py-5 px-5">
                <input class="border-b w-full py-2 text-sm text-black border-black focus:outline-none" type="text"
                    name="category" placeholder="Che prodotto stai cercando?">
                <button type='submit' class="absolute right-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.586" height="16.997" viewBox="0 0 16.586 16.997">
                        <path id="Path_240" data-name="Path 240"
                            d="M13030.52,305.48a5.1,5.1,0,1,1,5.1-5.1A5.1,5.1,0,0,1,13030.52,305.48Zm4.06.36a6.826,6.826,0,1,1,1.228-1.18l4.262,4.48a.85.85,0,0,1-1.234,1.17Z"
                            transform="translate(-13023.716 -293.58)" fill-rule="evenodd" />
                    </svg>
                </button>
            </form>
            <div class="overflow-scroll">
                @foreach ($categories as $category)
                    <div class="flex relative items-center border-b py-5 px-5">
                        <span>{{ $category->name }}</span>
                        <a href="/category/{{ $category->id }}" class="absolute right-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z" />
                                <path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"
                                    fill="rgba(231,43,111,1)" />
                            </svg>


                        </a>

                    </div>
                @endforeach
            </div>

            <div class="flex flex-col sticky bottom-0 left-0">

                <a href="/login" class="flex mx-5 mt-4 bg-primary py-2 border rounded-full">
                    <span class="text-white  mx-auto">ACCEDI</span>
                </a>

                <div class="flex mt-4 mb-5 mx-auto text-primary space-x-1">
                    <span>Nuovo su prenatal?</span>
                    <a href="/register"><span>Registrati qui</span></a>
                </div>
            </div>


        </div>
        <div class="fixed right-6 top-2">
            <a href="javascript:void(0);" onclick="closeFunction()"> <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                </svg>
            </a>
        </div>
    </div>
</div>



<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display == "flex") {
            x.style.display = "none";
        } else
            x.style.display = "flex";
    }


    function closeFunction() {
        var x = document.getElementById("myLinks");
        x.style.display = "none";
    }
</script>
