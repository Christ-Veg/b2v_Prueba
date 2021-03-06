<x-app-layout>
<!--Si es usuario de tipo 1 (normal) entonces mostramos los test a contestar-->
    @if (Auth::user()->rol == 1)
        <x-slot name="header">
            <h2 class="h4 font-weight-bold">
                {{ __('Usted tiene disponibles los siguientes cuestionarios:') }}
            </h2>
        </x-slot>
    <!--Verificamos que no este vacia la BD-->
        @if( $tests -> isNotEmpty() ) 
        <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Quetion</th>
                        <th scope="col">Options</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($tests as $test)
                    <tr>
                        <td>{{ $test->id }}</td>
                        <td>{{ $test->pregunta }}</td>
                        <td>
                            @foreach ($options as $option)
                                @if ($option-> id_question == $test->id)
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ $option->option }} </label>
                                @endif
                            @endforeach
                        </td>
                        <td>
                            <div class="col-md-3">
                                <a href="/test" class="btn btn-sm btn-primary ">Enviar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else 
                <span class="h2">No hay cuestionarios por contestar. Espera tu turno.</span>
        @endif
    @else
        <x-slot name="header">
            <h2 class="h4 font-weight-bold">
                {{ __('Bienvenido ' ) }} {{Auth::user()->name }}
            </h2>
        </x-slot>

<!--Verificamos que no este vacia la BD-->
        @if( $tests -> isNotEmpty() ) 
        <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Question</th>
                        <th scope="col" class="center">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($questions as $question)
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->pregunta }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="/test/{{ $question->id }}/addOption" class="btn btn-sm btn-primary ">Add Option</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="/test/{{ $question->id }}/viewOption" class="btn btn-sm btn-primary ">View Options</a>
                                </div>
                                <div class="col-md-3">
                                        <a href="/test/{{$question->id}}/assignment" class="btn btn-sm btn-warning btn-block">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else 
                <span class="h2">No hay cuestionarios disponibles. Crea uno ahora.</span>
        @endif
    @endif

</x-app-layout>