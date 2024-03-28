@extends('master')

@section('content')
<div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"
        style="min-width: 100%; max-width: 100%; height: 520px;" data-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://motionarray.imgix.net/preview-1847370-e7ckYzdbGvrB4i6f-large.jpg?w=660&q=60&fit=max&auto=format"
                    class="d-block w-100" alt="..." style="min-width: 100%; max-width: 100%; height: 500px;" />
                <div class="carousel-caption d-none d-md-block">
                    <a href="/search" style="text-decoration: none; color: white;">
                        <h2>CLOTHS</h2>
                    </a>
                    <h3 style="color: black;">Click here for hot sale</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://as2.ftcdn.net/v2/jpg/04/87/18/99/1000_F_487189984_gMi84oHVh08azpPw7FpA5nFS7puxlgoj.jpg"
                    class="d-block w-100" alt="..." style="min-width: 100%; max-width: 100%; height: 500px;" />
                <div class="carousel-caption d-none d-md-block">
                    <a href="/search" style="text-decoration: none; color: white;">
                        <h2>FOODS</h2>
                    </a>
                    <h3>Buy now today</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/cosmetics-sale-banner-design-template-a1d0da0f82bb9b20822e73c3916f35cf_screen.jpg?ts=1661365942"
                    class="d-block w-100" alt="..." style="min-width: 100%; max-width: 100%; height: 500px;" />
                <div class="carousel-caption d-none d-md-block">
                    <a href="/search" style="text-decoration: none; color: white;">
                        <h2>COSMETICS</h2>
                    </a>
                    <h3>For your beauty</h3>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 class=""
        style="background-color: white; border-bottom: 5px solid #f53d2d; position: sticky; top: 119px; z-index: 1;">Hot
        Trend Now</h1>
    <div class="row">
        @foreach($productList as $product)
        @if($product->is_active)
        <a href="{{ route('products.product-detail', $product->product_id) }}" class="col-lg-2 col-md-4 col-sm-12"
            style="margin-bottom: 10px; text-decoration: none; padding-right: 0;">
            <div class="card" style="min-height: 100%; min-width: 100%; text-decoration: none;">
                <img src="{{ $product->product_img }}" class="card-img-top" alt="Product Image"
                    style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h6 class="card-title text-truncate">{{ $product->product_name }}</h6>
                    @if($product->sale_price > 0)
                    <div class="d-flex justify-content-between card-text text-truncate mt-auto">
                        <del class="card-text text-truncate mt-auto">{{ $product->price }}$</del>
                        <p class="card-text text-truncate mt-auto">
                            =&gt;{{ number_format($product->price * (100 - $product->sale_price) / 100) }}$
                        </p>
                    </div>
                    @else
                    <p class="card-text text-truncate mt-auto">{{ number_format($product->price) }}$</p>
                    @endif
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
</div>

@endsection