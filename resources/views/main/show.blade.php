@extends('components.layout')
@section('content')
    @include('components.show_header')
    <x-product :item="$item" :related_products="$related_products" />
    <x-other-categories />
@endsection
