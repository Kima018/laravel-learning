@extends('layout')
@section('title','Shop')
@section("shopSection")
    <div class="bg-white">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Shop blade</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt.
                        Qui
                        irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>

                </div>
                @foreach($products as $product)
                    @if($product === "iPhone 14")
                        <h3>{{$product}} - SUPER SNIZENJE</h3>
                    @endif
                    <h3>{{$product}}</h3>
                @endforeach
            </div>
        </div>
    </div>
@endsection
