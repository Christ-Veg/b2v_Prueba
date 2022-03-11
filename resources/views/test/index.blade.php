<x-app-layout>
<!--Si es usuario de tipo 1 (normal) entonces mostramos los test a contestar-->
    @if (Auth::user()->rol == 1)
        <x-slot name="header">
            <h2 class="h4 font-weight-bold">
                {{ __('Usted tiene disponibles los siguientes cuestionarios:') }}
            </h2>
        </x-slot>
    <!--Verificamos que no este vacia la BD-->
        @if( isset($test) )
                <span class="h2">No hay cuestionarios por contestar. Espera tu turno.</span>
            
        @endif
    @else
        <x-slot name="header">
            <h2 class="h4 font-weight-bold">
                {{ __('Bienvenido ' ) }} {{Auth::user()->name }}
            </h2>
        </x-slot>
                <span class="h2">Proximamente</span>
    @endif

</x-app-layout>