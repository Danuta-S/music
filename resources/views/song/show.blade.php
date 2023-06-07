@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-link" href="{{ route('song.index') }}">Atpakaļ</a>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h1 class="card-title">{{ $song->title ?? ''}}</h1>
                </li>
                <li class="list-group-item">
                    <p class="card-title">Izpildītājs: <b>{{ $song->artist->artistTitle ?? ''}}</b></p>
                </li>
                <li class="list-group-item">
                    <p class="card-text">Dziesmas garums: {{ $song->length ?? ''}} </p>
                </li>
                <li class="list-group-item">
                    <p class="card-text">Izlaišanas gads: {{ $song->released ?? ''}} </p>
                </li>
                <li class="list-group-item">
                    <p class="card-text">Dziesmas vārdu autors: <b>{{ $song->lyric->author ?? ''}}</b></p>
                </li>
            </ul>
        </div>
    </div>
@endsection
