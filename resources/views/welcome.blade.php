<x-layout {{-- De esta forma de llaman a las plantilla de blade --}}
meta-title="Home"
meta-description="This is the Home Page"
> 
    <h1>Pagina de Inicio</h1>
    <x-slot:sidebar> {{--Definiendo un variable (Propiedades del componente) --}}
        Home Sidebar
    </x-slot:sidebar>
</x-layout>   