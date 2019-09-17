@extends('layout.app')

@section('title', 'Materiał')
@section('content')
    <div class="card">
        <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <span>Lista materiałów</span>
            <button type="button" class="btn btn-primary" onclick="document.location='{{ route('new_material') }}'">Nowy materiał</button>
        </h5>
        <div class="card-body">
            <ul class="list-group">
                @foreach($materialList as $material)
                    <li class="list-group-item" style="display: flex; justify-content: space-between; align-items: center;">
                        <span>{{ $material->name }}</span>
                        <button type="button" class="btn btn-primary" onclick="document.location='{{ route('edit_material', ['material_id' => $material->id ]) }}'">Edytuj materiał</button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
