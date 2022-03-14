<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('View options') }}
        </h2>
    </x-slot>


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
                    <tr>
                        <td>{{ $tests[$id-1] -> id }}</td>
                        <td>{{ $tests[$id-1] -> pregunta }}</td>
                        <td>
                            @foreach ($options as $option)
                                @if ($option-> id_question == $tests[$id-1]->id)
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    {{ $option->option }} </label>
                                @endif
                            @endforeach
                        </td>
                        
                        <td>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="/test" class="btn btn-sm btn-primary ">Regresar</a>
                                </div>
                                <div class="col-md-3">
                                        <a href="/test/{{ $tests[$id-1]->id }}/addOption" class="btn btn-sm btn-warning btn-block ">Add Option</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!--@foreach ($tests as $test)
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
-->
                </tbody>
            </table>
</x-app-layout>