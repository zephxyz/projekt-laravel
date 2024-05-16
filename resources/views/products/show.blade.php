<x-app-layout class="text-white">
    <a href="{{ url()->previous() }}">Back</a>
    
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description}}</td>
                <td>{{ $product->price }}</td>
                <td><img src="{{$product->image_url}}" alt="" class="max-w-[150px]" ></td> 
            </tr>
       
    </table>
</x-app-layout>
