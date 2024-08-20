<x-layout meta-title="Blog" meta-description="this page show our blog">

    <h1>Blog</h1>

    <h2><a href="{{ route('posts.create') }}">Create a new post</a></h2>

    @foreach ($posts as $post)
    <div style="display: flex; align-items:baseline">
        <h3>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        </h3> &nbsp;
        <a href="{{ route('posts.edit',$post->id) }}">edit</a> &nbsp;
        <form action="{{ route('posts.destroy',$post)}}" method="POST">
            @csrf @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </div>
    @endforeach
</x-layout>
