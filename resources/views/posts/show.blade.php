<x-layout
meta-title="{{ $post->title }}"
meta-description="{{ $post->body }}"
> 
    <h2>{{ $post->title }}</h2>
    <h2>{{ $post->body }}</h2>
    <h2>{{ $post->created_at }}</h2>
    <h2>{{ $post->updated_at }}</h2>

    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layout>