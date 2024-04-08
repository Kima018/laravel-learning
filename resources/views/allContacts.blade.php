@extends('layout')
@section('allContacts')

    <div class="w-full py-10 flex flex-col justify-center items-center min-h-56">
        @foreach($allContacts as $singleContact)
            <h1>{{$singleContact->email}}</h1>
        @endforeach

    </div>

@endsection
