@extends('layout')

@section('title', 'Listado de Clips')

@section('content')
    <div class="container">
        <h1>Listado de Clips</h1>
        <ul>
            @foreach ($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endsection
