@extends('layout.app')

@section('title', 'Materiał')
@section('content')
    <div class="card">
        <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <span>Lista grup materiałów</span>
            <button type="button" onclick="document.location='{{ route('new_materialGroup') }}'" class="btn btn-primary">Nowa grupa</button>
        </h5>
        <div class="card-body">
            <ul class="list-group">
                @foreach($materialGroupList as $group)
                    <li class="list-group-item" style="display: flex; justify-content: space-between; align-items: center;">
                        <span>{{ $group->name }}</span>
                        <button type="button" class="btn btn-primary" onclick="document.location='{{ route('edit_materialGroup', ['material_group_id' => $group->id ]) }}'">Edytuj grupę</button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
