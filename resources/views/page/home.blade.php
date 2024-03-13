@extends('layouts.layout')

@section('title', 'benvenuti | Home')

@section('content')

<section class="w-100">

    <div class="container-fluid  position-relative  jumbo" >

        <div class="btn-series">current series</div>

    </div>

    <div class="w-75 container-fluid ">

        <div class="row row-cols-6">

            @foreach ( $cards as $element )
                <div class="col ">

                    <img class="comics-cards w-100 mt-5" src="{{ $element['thumb'] }}" alt="">

                    <p class="mt-3 text-uppercase ">{{ $element['title'] }}</p>

                </div>
            @endforeach

        </div>

        <button>load more</button>
    </div>

</section>

@endsection
