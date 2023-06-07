@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('artist.create') }}" class="btn btn-primary">Pievienot izpildītāju</a>
        </div>
        <div class="card-body">

            @if(session()->get('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div><br />
            @endif

            <table class="table table-primary table-striped table-hover">

                <thead>
                <tr>
                    <td>ID</td>
                    <td>Izpildītājs</td>
                    <td>Valsts</td>
                    <td>Vēl pastāv</td>

                    <td class="text-end">Darbības</td>
                </tr>
                </thead>

                <tbody>
                @foreach($artists as $artist)
                    <tr>
                        <td>{{$artist->id}}</td>
                        <td>{{$artist->artistTitle}}</td>
                        <td>{{$artist->country}}</td>
                        <td>{{$artist->active ? 'Jā' : 'Nē'}}</td>
                        <td class="text-end">
                            <a href="{{ route('artist.show',$artist->id)}}" class="btn btn-primary">Skatīt</a>
                            <a href="{{ route('artist.edit',$artist->id)}}" class="btn btn-secondary">Labot</a>
                            <form action="{{ route('artist.destroy', $artist->id)}}" method="post" class="d-inline">
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
