@extends('layouts.app')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            Jauns dziesmas teksts
        </div>
        <div class="card-body">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h4 class="alert-heading">Nepieciešams pielabot datus, lai saglabātu!</h4>
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
            <form method="post" action="{{ $action }}">
                @csrf
                @isset($lyric)
                    @method("PATCH")
                @endisset
               <div class="form-group">
                    <label for="name">Dziesmas nosaukums:</label>
                    <input type="text" class="form-control" name="title" value="{{ $lyric->title ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="author">Dziesmas vārdu autors:</label>
                    <input type="text" class="form-control" name="author"  value="{{ $lyric->author ?? ''}}" />
                </div>
                <div class="form-group">
                    <label for="text">Dziesmas teksts:</label>
                    <textarea class="form-control" name="text" rows="25">{{ $lyric->text ?? ''}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Saglabāt</button>
                <a class="btn btn-link" href="{{ route('lyrics.index') }}">Atpakaļ</a>

            </form>
        </div>
@endsection
