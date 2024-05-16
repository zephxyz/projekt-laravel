<x-app-layout>

    <form action={{ route("category.update", $category->id) }} method="post" >
    @csrf
    
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}">
        @method('PUT')

        
        <button type="submit">Edit</button>
    </form>
</x-app-layout>
