@extends('layout.app')

@section('title', 'Materiał')
@section('content')
    <div class="card">
        <form action="{{ route('edit_update_material', ['material_id' => $material_id]) }}" method="post">
            {{ csrf_field() }}
            <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <span>Edycja materiału</span>
                <input type="submit" class="btn btn-primary" value="Zapisz materiał">
            </h5>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nazwa</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nazwa" aria-label="Nazwa"
                           aria-describedby="basic-addon1" name="name">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="materialGroup">Jednostka miary</label>
                    </div>
                    <select class="custom-select" id="materialGroup" name="unit">
                        <option selected value="">Wybierz...</option>
                        @foreach($unitList as $unit)
                            <option value="{{ $unit->name }}">{{ $unit->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">Kod</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Kod" aria-label="Kod"
                           aria-describedby="basic-addon3" name="code">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="materialGroup">Grupa materiałowa</label>
                    </div>
                    <select class="custom-select" id="materialGroup" name="materialGroup">
                        <option selected value="">Wybierz...</option>
                        @foreach($materialGroupList as $materialGroup)
                            <option value="{{ $materialGroup->name }}">{{ $materialGroup->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>
@endsection
