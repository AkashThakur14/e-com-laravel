@extends('master')

@section('content')
    <div class=" custom-search row ">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Result for Product</h3>
                <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
                @foreach ($products as $item)
                    <div class=" row search-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class=" trending-img" src="{{ $item ->gallary }}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <div class="trending-disc">
                                    <h2>{{ $item ->name }}</h2>
                                    <h5>{{ $item->description }}</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4">
                           <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                        </div>

                    </div>
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
        </div>
    </div>
@endsection
