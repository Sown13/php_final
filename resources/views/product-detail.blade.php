@extends('master')


@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/product-detail.css') }}" />

<div class="card w-100">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Product Detail</b></div>
            <div class="col col-md-6 text-end">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">View All</a>
                <form action="{{ route('cart.store', ['product_id' => $product->product_id]) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-success btn-sm">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!-- Rest of the product details -->
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Product Name</b></label>
            <div class="col-sm-10">
                {{ $product->product_name }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Price</b></label>
            <div class="col-sm-10">
                {{ $product->price }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Description</b></label>
            <div class="col-sm-10">
                {{ $product->description }}
            </div>
        </div>
        <div class="row mb-4">
            <label class="col-sm-2 col-label-form"><b>Product Image</b></label>
            <div class="col-sm-10">
                <img src="{{ $product->product_img }}" width="200" class="img-thumbnail" />
            </div>
        </div>
    </div>
</div>

@endsection('content')
