@extends('master')

@section('content')
    <div class=" custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach ($products as $item)
                    <div class="carousel-item {{ $item['id'] == 1 ? 'active' : '' }}">
                        <img class=" slider-img" src="{{ $item['gallary'] }}">
                        <div class="carousel-caption slider-text">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="trending-wrapper">
            <h3>Trending Product</h3>
            @foreach ($products as $item)
            <div class=" trending-item">
                <img class=" trending-img" src="{{ $item['gallary'] }}">
                <div class="trending-disc">
                    <h3>{{$item['name'] }}</h3>

                </div>
            </div>
        @endforeach
        </div>

    </div>

@endsection
