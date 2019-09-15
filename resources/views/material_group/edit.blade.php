@extends('layout.app')

@section('title', 'Materiał')
@section('content')
    <div class="card">
        <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <span>Edycja materiału</span>
            <button type="button" class="btn btn-primary">Zapisz materiał</button>
        </h5>
        <div class="card-body">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nazwa</span>
                </div>
                <input type="text" class="form-control" placeholder="Nazwa" aria-label="Nazwa" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">j. miary</span>
                </div>
                <input type="text" class="form-control" placeholder="j. miary" aria-label="j. miary" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">Kod</span>
                </div>
                <input type="text" class="form-control" placeholder="Kod" aria-label="Kod" aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="materialGroup">Grupa materiałowa</label>
                </div>
                <select class="custom-select" id="materialGroup">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
    </div>
@endsection
