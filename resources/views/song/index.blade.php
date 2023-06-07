@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('song.create') }}" class="btn btn-primary">Pievienot dziesmu</a>
        </div>
        <div class="card-body">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
            @endif
            <table class="table table-primary table-striped table-hover">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Nosaukums</td>
                    <td>Izpildītājs</td>
                    <td>Garums</td>
                    <td class="text-end">Darbības</td>
                </tr>
                </thead>

                <tbody>
                @foreach($songs as $song)
                    <tr>
                        <td>{{$song->id}}</td>
                        <td>{{$song->title}}</td>
                        <td>{{$song->artist->artistTitle}}</td>
                        <td>{{$song->length}}</td>
                        <td class="text-end">
                            <a href="{{ route('song.show',$song->id)}}" class="btn btn-primary">Skatīt</a>
                            <a href="{{ route('song.edit',$song->id)}}" class="btn btn-secondary">Labot</a>
                            <form action="{{ route('song.destroy', $song->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="confirm('Vai tiešām dzēst?')">Dzēst</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
