<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Add new option') }}
        </h2>
    </x-slot>

    <div class="row container">
        <div class="col-md-12">
        <form action="/option" method="POST">
                @csrf
                <input type="text" value="{{ $id }}" hidden name="id_question" id="id_question">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="option">Option Text </label>
                            <input type="text" class="form-control" id="option" name="option" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-9">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                    <div class="col-3">
                        <a href="/test" class="btn btn-outline-secondary btn-block">Cancel</a>
                    </div>
                </div>


            </form>
        </div>
    </div>
</x-app-layout>