@extends('layout.app')

@section('title', 'Materiał')
@section('content')
    <div class="card">
        <h5 class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
            <span>Lista materiałów</span>
            <button type="button" class="btn btn-primary">Nowy materiał</button>
        </h5>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item" style="display: flex; justify-content: space-between; align-items: center;">
                    <span>Węgiel</span>
                    <button type="button" class="btn btn-primary">Edytuj materiał</button>
                </li>
                <li class="list-group-item list-group-item-secondary" style="display: flex; justify-content: space-between; align-items: center;">
                    <span>Metal</span>
                    <button type="button" class="btn btn-primary">Edytuj materiał</button>
                </li>
            </ul>
        </div>
    </div>
@endsection
