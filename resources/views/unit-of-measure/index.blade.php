@extends('layout.app')

@section('title', 'Materiał')
@section('content')
    <div class="card">
        <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <span>Lista jednostek</span>
            <button type="button" onclick="document.location='{{ route('new_unitOfMeasure') }}'" class="btn btn-primary">Nowa jednostka</button>
        </h5>
        <div class="card-body">
            <ul class="list-group">
                @foreach($unitList as $unit)
                <li class="list-group-item" style="display: flex; justify-content: space-between; align-items: center;">
                    <span>{{ $unit->name }}</span>
                    <button type="button" class="btn btn-primary" onclick="document.location='{{ route('edit_unitOfMeasure', ['unit-of-measure_id' => $unit->id ]) }}'">Edytuj materiał</button>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
