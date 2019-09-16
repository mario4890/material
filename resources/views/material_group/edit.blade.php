@extends('layout.app')

@section('title', 'Grupy materiałowe')
@section('content')
    <div class="card">
        <form action="{{ route('edit_update_materialGroup', ['material_group_id' => $material_id]) }}" method="post">
            {{ csrf_field() }}
            <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                <span>Edytuj grupę materiałów</span>
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
                        <label class="input-group-text" for="inputGroupSelect01">Nadgrupa</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="parent_group_id">
                        <option selected value="0">Wybierz...</option>
                        @foreach($materialGroupList as $materialGroup)
                            <option value="{{ $materialGroup->id }}">{{ $materialGroup->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    </div>
@endsection

