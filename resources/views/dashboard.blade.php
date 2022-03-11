<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Usted tiene disponibles los siguientes tests:') }}
        </h2>
    </x-slot>
<!--Si es usuario de tipo 1 (normal) entonces mostramos los test a contestar-->
    @if (Auth::user()->rol == 2)
        @if( isset($tests['no_questions']) )
            <span class="h2">No hay cuestionarios por responder. ¡Espera tu turno!</span>
        @else
    @endif

</x-app-layout>