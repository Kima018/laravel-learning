@extends('layout')
@section('title','Welcome to site')

@section("homeSection")
    <div class="bg-white">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">

                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl mb-5">Dashboard blade</h1>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">{{$currentTime}}</h2>
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">trenutno je {{$hours}} sati</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt.
                        Qui
                        irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                </div>
            </div>
            @foreach($latestProducts as $product)
                <div>
                    <h3>{{$product->name}}</h3>
                    <p>{{$product->description}}</p>
                </div>
            @endforeach

            <form method="POST" action="/send-contact" class="flex flex-col gap-3 p-3">

                @if($errors->any())
                    <p>Greska: {{$errors->first()}}</p>
                @endif

                {{csrf_field()}}
                <input type="email" name="email" placeholder="enter email">
                <input type="text" name="subject" placeholder="enter subject">
                <textarea name="description"></textarea>
                <input type="submit" value="Submit">
            </form>


        </div>
    </div>
@endsection
