@extends('master')

@section('content')
<div>
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-2" style="background-color: #f5f5f5;">
            <h3>Cart Filter</h3>
            <div>
                <h6>By Type</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="byType-consumption"
                        onchange="handleInputChange(event, 'type', 'consumption')" checked>
                    <label class="form-check-label" for="byType-consumption">
                        Consumption
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="byType-cosmetics"
                        onchange="handleInputChange(event, 'type', 'cosmetics')" checked>
                    <label class="form-check-label" for="byType-cosmetics">
                        Cosmetics
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="byType-clothes"
                        onchange="handleInputChange(event, 'type', 'clothes')" checked>
                    <label class="form-check-label" for="byType-clothes">
                        Clothes
                    </label>
                </div>
            </div>
            <div>
                <h6>By Location</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="byLocation-hanoi">
                    <label class="form-check-label" for="byLocation-hanoi">
                        Hanoi
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="byLocation-hochiminh">
                    <label class="form-check-label" for="byLocation-hochiminh">
                        Hochiminh
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="byLocation-danang">
                    <label class="form-check-label" for="byLocation-danang">
                        Danang
                    </label>
                </div>
            </div>
            <div>
                <h6>By Price</h6>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Min" aria-label="Min" id="byPrice-min"
                        onchange="handleInputChange(event, 'minPrice', event.target.value)">
                    <span class="input-group-text">To</span>
                    <input type="number" class="form-control" placeholder="Max" aria-label="Max" id="byPrice-max"
                        onchange="handleInputChange(event, 'maxPrice', event.target.value)">
                </div>
            </div>
            <div>
                <h6>By Sale</h6>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Min" aria-label="Min" id="bySale-min"
                        onchange="handleInputChange(event, 'minSale', event.target.value)">
                    <span class="input-group-text">To</span>
                    <input type="number" class="form-control" placeholder="Max" aria-label="Max" id="bySale-max"
                        onchange="handleInputChange(event, 'maxSale', event.target.value)">
                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="row">
                <h3 class="col-4">Total price: <span style="color: red;">$</span> </h3>
                <button class="btn btn-danger col-7">Pay</button>
            </div>
            <div>
                <h3>Product related to search</h3>
                <select class="form-select" aria-label="Default select example"
                    onchange="handleInputChange(event, 'sort', event.target.value)">
                    <option selected>Sort</option>
                    <option value="priceDown">Sort By Price DESC<i class="fa-solid fa-arrow-up"></i></option>
                    <option value="priceUp">Sort By Price ASC<i class="fa-solid fa-arrow-down"></i></option>
                    <option value="saleDown">Sort By Sale DESC</option>
                    <option value="saleUp">Sort By Sale ASC</option>
                </select>
            </div>
            <div class="row">
                @foreach ($products as $product)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $product->product_img }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Price: {{ $product->price }}</p>
                            <p class="card-text">Sale: {{ $product->sale_price }}</p>
            

                            <form id="destroy-form" action="{{ route('cart.destroy', ['productId' => $product->product_id]) }}"
                                method="POST">
                                <button class="btn btn-primary" type="submit">Remove
                                    from Cart</button>
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection('content')