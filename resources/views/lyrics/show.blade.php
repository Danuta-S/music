@extends('layouts.app')

@section('content')
    <b class="card">
        <div class="card-header">
            <a class="btn btn-link" href="{{ route('lyrics.index')}}">Atpakaļ</a>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h1 class="card-title">{{ $lyric->title ?? ''}}</h1>
            </li>
            <li class="list-group-item">
                <p class="card-title">Autors: <b>{{ $lyric->author }}</b></p>
            </li>
            <li class="list-group-item">
                <label for="text">Teksts:</label>
                <textarea class="form-control" name="text" rows="25">{{ $lyric->text ?? ''}}</textarea>
            </li>
        </ul>
    </b>
@endsection
