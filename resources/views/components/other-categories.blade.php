<div class="bg-[#2C5B89] my-10 h-auto ">

    <div class="flex">
        <span class="text-xl top-10 text-white mx-auto mb-5 mt-10">Esplora la categoria per
            attributi
        </span>
    </div>

    <div class="flex flex-col text-white top-40 md:grid md:grid-cols-3 pb-10">


        @foreach ($categories as $category)
            <div class="flex justify-center space-x-2 mt-5">
                <a href="/category/{{ $category->id }}"
                    class="border rounded-full px-5 py-1 hover:bg-white hover:text-blue-500">{{ $category->name }}</a>
            </div>
        @endforeach


    </div>
</div>
