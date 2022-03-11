<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Crear nuevo cuestionario.') }}
        </h2>
    </x-slot>
    <div class="row container">
        <div class="col-md-12">
            <form class="row" action="/test" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="n_test">Name</label>
                        <input type="text" class="form-control" id="n_test" name="n_test" required>
                    </div>
                    <div class="form-group">
                        <label for="d_test">Description</label>
                        <textarea class="form-control" id="d_test" name="d_test" rows="5" required></textarea>
                    </div>
                    <div class="row mt-4 col-5">
                            <a href="/dashboard" class="btn btn-outline-secondary btn-block">Cancel</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mt-5">
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>