<x-app-layout>

    <form action={{ route("category.store") }} method="post" >
    @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Create</button>
    </form>
</x-app-layout>
