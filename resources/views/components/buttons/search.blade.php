<div class="lg:hidden relative">
    <div onclick="searchBar()"> <svg xmlns="http://www.w3.org/2000/svg" width="16.586" height="16.997"
            viewBox="0 0 16.586 16.997">
            <path id="Path_240" data-name="Path 240"
                d="M13030.52,305.48a5.1,5.1,0,1,1,5.1-5.1A5.1,5.1,0,0,1,13030.52,305.48Zm4.06.36a6.826,6.826,0,1,1,1.228-1.18l4.262,4.48a.85.85,0,0,1-1.234,1.17Z"
                transform="translate(-13023.716 -293.58)" fill-rule="evenodd"></path>
        </svg>
    </div>

    <div id="searchBar" class="fixed flex top-0 left-0 w-[100%] h-[250px] bg-white z-30  " style="display:none">

        <div class="flex py-2 mx-5  w-full h-auto border-b border-red-500">

            <div>
                <a href="javascript:void(0);" onclick="closeSearchbar()"> <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" width="24px" height="24px">
                        <path d="M20 11H7.83L13.42 5.41L12 4L4 12L12 20L13.41 18.59L7.83 13H20V11Z" fill="black">
                        </path>
                    </svg>
                </a>
            </div>
            <form action="/" class="w-full ml-5 relative">
                <input type="text" placeholder="Ricerca..." class="border-b border-black w-full focus:outline-none"
                    name="search">
                <button type='submit' class="absolute right-0 top-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.586" height="16.997" viewBox="0 0 16.586 16.997">
                        <path id="Path_240" data-name="Path 240"
                            d="M13030.52,305.48a5.1,5.1,0,1,1,5.1-5.1A5.1,5.1,0,0,1,13030.52,305.48Zm4.06.36a6.826,6.826,0,1,1,1.228-1.18l4.262,4.48a.85.85,0,0,1-1.234,1.17Z"
                            transform="translate(-13023.716 -293.58)" fill-rule="evenodd" />
                    </svg>
                </button>
            </form>

        </div>

    </div>


</div>

<script>
    function searchBar() {
        var x = document.getElementById("searchBar");
        if (x.style.display == "flex") {
            x.style.display = "none";
        } else
            x.style.display = "flex";
    }


    function closeSearchbar() {
        var x = document.getElementById("searchBar");
        x.style.display = "none";
    }
</script>
