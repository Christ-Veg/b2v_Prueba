<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Usted tiene disponibles los siguientes cuestionarios:') }}
        </h2>
    </x-slot>
<!--Si es usuario de tipo 1 (normal) entonces mostramos los test a contestar-->
    @if (Auth::user()->rol == 1)
    <!--Verificamos que no este vacia la BD-->
        @if( isset($test) )
                <span class="h2">No hay preguntas aún que mostrar. ¡Agrega la primer pregunta hora!</span>
            @else
                <span class="h2">Proximamente</span>
        @endif
    @endif

    <!--@if (Auth::user()->rol == 2)-->
    
    <!--@endif-->
</x-app-layout>