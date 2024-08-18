<x-layout {{-- De esta forma de llaman a las plantilla de blade --}}
meta-title="Blog"
meta-description="this page show our blog"
>
    <h1>Blog</h1>

    @foreach ( $posts as $post)
       <h2> {{ $post['title'] }} </h2> 
    @endforeach
</x-layout>