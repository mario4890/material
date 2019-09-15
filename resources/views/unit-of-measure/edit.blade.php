@extends('layout.app')

@section('title', 'Jednostki miary')
@section('content')
    <div class="card">
        <form action="{{ route('edit_update_unitOfMeasure', ['unit_id' => $unit_id]) }}" method="post">
            <input type="hidden" name="unit_id" value="{{ $unit_id }}">
            {{ csrf_field() }}
            <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <span>Edycja jednostki miary</span>
                <input type="submit" class="btn btn-primary" value="Zapisz jednostkę">
            </h5>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nazwa</span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Nazwa" aria-label="Nazwa" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2">Skrót</span>
                    </div>
                    <input type="text" name="short_name" class="form-control" placeholder="Skrót" aria-label="Skrót" aria-describedby="basic-addon2">
                </div>
            </div>
        </form>
    </div>
@endsection
