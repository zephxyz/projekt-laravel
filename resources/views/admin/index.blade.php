<x-app-layout>
    
    <h1 class="text-xl">All products</h1>
    
    <a href="{{ route('product.create') }}">Create</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><img src="{{$product->image_url}}" alt="" class="max-w-[150px]" ></td> <!-- class="max-w-[5rem]" -->
                
                <td>
                    <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                    <a href="{{ route('product.show', $product->id) }}">Show</a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <h1 class="text-xl">All categories</h1>
    <a href="{{ route('category.create') }}">Create</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}">Edit</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
</x-app-layout>