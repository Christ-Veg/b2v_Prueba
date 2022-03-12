<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Edit test') }}
        </h2>
    </x-slot>

    <div class="row container">
        <div class="col-md-12">
            <form class="row" action=" {{ route ('questions.import.excel') }} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                        <div class="form-group">
                            <label for="ruta">Archivo</label>
                            <input type="file" class="form-control" id="ruta" name="ruta" required>
                        </div>
                        <div class="row mt-5">
                            <div class="col-9">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                        <div class="col-3">
                                <a href="/dashboard" class="btn btn-outline-secondary btn-block">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>