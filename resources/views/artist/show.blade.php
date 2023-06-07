@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-link" href="{{ route('artist.index')}}">Atpakaļ</a>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">Izpildītājs</div>
                <div class="col-sm-10 border-left">{{ $artist->artistTitle ?? ''}}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Valsts</div>
                <div class="col-sm-10 border-left">{{ $artist->country }}</div>
            </div>

            <div class="row">
                <div class="col-sm-2">Aktīvs izpildītājs</div>
                <div class="col-sm-10 border-left">{{ $artist->active ? 'Jā' : 'Nē' }}</div>
            </div>
        </div>

    </div>
@endsection
