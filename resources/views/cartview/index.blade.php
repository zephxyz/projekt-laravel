<x-app-layout>
<h1>Products in cart</h1>
<a href="{{ route('cart.empty') }}">Empty cart</a>
<a href="{{ route('product.index') }}">All Products</a>
<a href="{{ route('cart.empty') }}">Place order</a>
@foreach($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->price }}</p>
        <img src="{{$product->image_url}}" alt="" class="max-w-[150px]" >
        <a href="{{ route('cart.removeFromCart', $product->id) }}">Remove from Cart</a>
    </div>
@endforeach
</x-app-layout>