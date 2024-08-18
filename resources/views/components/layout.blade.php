{{-- Esto es una plantilla de Blade --}}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}">
    <title> {{ $metaTitle ?? 'content' }} </title>
</head>

<body>
    
    <x-navigation />

    {{ $slot }}

    @isset($sidebar)
        {{-- Forma de colocar un elemento opcional --}}
        <div id="sidebar">
            <h3>sidebar</h3>
            <div>
                {{ $sidebar }}
            </div>
        </div>
    @endisset
</body>

</html>
