
<x-app-layout>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        <label for="price">Price</label>
        <input type="number" name="price" id="price">
        <label for="image_url">Image URL</label>
        <input type="url" name="image_url" id="image_url">

        <label for="category_id">Category</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Create</button>
</form>
</x-app-layout>
