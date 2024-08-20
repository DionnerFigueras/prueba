<x-layout
meta-title="Create a new post"
meta-description="A new post is created on this page"
>
<h1>Create a new Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.form-fields')
    <button type="submit">Created</button> <br> <br>
    
    <a href="{{ route('posts.index') }}">Back</a>
</form>
</x-layout>