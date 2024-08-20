<div>
    <label for="title">Title:</label> <br>
    <input id="title" name="title" type="text" value="{{ old('form-title', $post->title) }}">
    @error('form-title')
        <br>
        <small style="color: red"> {{ $message }} </small>
    @enderror
</div> <br>

<div>
    <label for="body">Body:</label> <br>
    <input id="body" name="body" type="text" value="{{ old('form-body', $post->body) }}">
    @error('form-body')
        <br>
        <small style="color: red"> {{ $message }} </small>
    @enderror
</div> <br>