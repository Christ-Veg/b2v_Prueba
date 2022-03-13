<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Asignar preguntas.') }}s
        </h2>
    </x-slot>
    <div class="row container">
        <div class="col-md-12">
            <form class="row" action="\asigna" method="POST">
                @csrf
                <input type="text" value="{{ $id }}" hidden name="id_test" id="id_test">
                <select class="form-select" aria-label="Disabled select example" id="id_user" name="id_user">
                    <option selected>Open this select menu</option>
                    @foreach ($users as $user)
                        <option value='{{ $user->id }}'>{{ $user->id }} {{ $user-> name }}</option>
                    @endforeach
                </select>
                <p>

                </p>
                <div class="col-11">
                    <button type="submit" class="btn btn-primary btn-block">Asignar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>