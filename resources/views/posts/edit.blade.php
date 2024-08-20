<x-layout
meta-title="Edit a post"
meta-description="A post is Edit on this page"
>
<h1>Edit a Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PATCH')

    @include('posts.form-fields')

    <button type="submit">Edited</button> <br> <br>
    
    <a href="{{ route('posts.index') }}">Back</a>
</form>
</x-layout>