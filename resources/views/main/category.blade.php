@extends('components.layout')

@section('content')
    @include('components.sub-categories')
    <div class=" relative w-11/12 bg-primary mx-auto px-5 py-7 md:px-12 text-white lg:hidden z-20">
        <span class="text-sm">Passeggini</span>
        <p class="font-bold my-1">I MIGLIORI PASSEGGINI PER LE VOSTRE PASSEGGIATE</p>
        <p class="text-sm">La nostra esperienza al tuo servizio. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quis, illo!
        </p>
    </div>
    <x-filter :brands="$brands" />
    <x-products :products="$items" />
    <x-other-categories />
@endsection
