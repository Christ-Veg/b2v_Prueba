<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Crear nuevo cuestionario.') }}
        </h2>
    </x-slot>
    <div class="row container">
        <div class="col-md-12">
            <form class="row" action="{{ route('questions.info.excel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                            <label for="ruta">Archivo de preguntas</label>
                            <input type="file" class="form-control" id="ruta" name="ruta" required>
                    </div>
                    <p>

                    </p>
                    <div class="col-11">
                            <button class="btn btn-primary btn-block">Submit</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mt-5">
                        <div class="row mt-4 col-4">
                            <a href="/dashboard" class="btn btn-outline-secondary btn-block">Cancel</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>