<x-app-layout>
    <a href="{{ route('product.index') }}">All Products</a>
   
    @isset($category)
    <h1>Products in category {{ $category->name }} </h1>
    @endisset
    
    
    
    

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><img src="{{$product->image_url}}" alt=""  ></td> <!-- class="max-w-[5rem]" -->
                
                <td>
                    
                    <a href="{{ route('product.show', $product->id) }}">Show</a>
                    <a href="{{ route('cart.addToCart', $product->id) }}">Add to Cart</a>
                    
                </td>
            </tr>
        @empty <td colspan="4">
            No products found
        </td>
        @endforelse
    </table>
</x-app-layout>