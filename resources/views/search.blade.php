@extends('master')

@section('content')
    <div class=" custom-search row ">
        <div class="col-sm-4">
            <a href="">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h3>Result for Product</h3>
                @foreach ($products as $item)
                    <div class=" search-item">
                        <a href="detail/{{ $item['id'] }}">
                            <img class=" trending-img" src="{{ $item['gallary'] }}">
                            <div class="trending-disc">
                                <h2>{{ $item['name'] }}</h2>
                                <h5>{{ $item['description'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
