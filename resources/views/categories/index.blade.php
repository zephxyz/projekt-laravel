<x-app-layout>
    <h1>Categories</h1>
    
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><a href="{{ route('product.index', ["categoryId" => $category->id])}}">{{ $category->name }}</a></td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
