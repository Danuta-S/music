@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('lyrics.create') }}" class="btn btn-primary">Pievienot dziesmu tekstu</a>
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
                    <td>Autors</td>
                    <td>Teksts</td>
                    <td class="text-end">Darbības</td>
                </tr>
                </thead>

                <tbody>
                @foreach($lyrics as $lyric)
                    <tr>
                        <td>{{$lyric->id}}</td>
                        <td>{{$lyric->title}}</td>
                        <td>{{$lyric->author}}</td>
                        <td>{{$lyric->text}}</td>
                        <td class="text-end">
                            <a href="{{ route('lyrics.show',$lyric->id)}}" class="btn btn-primary">Skatīt</a>
                            <a href="{{ route('lyrics.edit',$lyric->id)}}" class="btn btn-secondary">Labot</a>
                            <form action="{{ route('lyrics.destroy', $lyric->id)}}" method="post" class="d-inline">
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
