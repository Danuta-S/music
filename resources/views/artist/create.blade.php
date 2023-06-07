@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Dziesmas izpildītājs
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h4 class="alert-heading">Nepieciešams pielabot datus, lai saglabātu!</h4>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ $action }}">
                @csrf
                @isset($artist)
                    @method("PATCH")
                @endisset

                <div class="form-group">
                    <label for="artistTitle">Izpildītājs:</label>
                    <input type="text" class="form-control" name="artistTitle" value="{{ $artist -> artistTitle ?? old('artistTitle')}}" />
                </div>
                <div class="form-group">
                    <label for="country">Valsts:</label>
                    <input list="country" class="form-control" name="country" value="{{ $artist -> country ?? old('country')}}" />
                    <datalist id="country">
                        <option {{ $artist -> country ?? old('country') == 'Latvija' ? "selected" : ""}} value="Latvija">Latvija</option>
                        <option {{ $artist -> country ?? old('country') == 'Amerikas Savienotās Valstis' ? "selected" : ""}} value="Amerikas Savienotās Valstis">Amerikas Savienotās Valstis</option>
                        <option {{ $artist -> country ?? old('country') == 'Lielbritānija' ? "selected" : ""}} value="Lielbritānija">Lielbritānija</option>
                        <option {{ $artist -> country ?? old('country') == 'Zviedrija' ? "selected" : ""}} value="Zviedrija">Zviedrija</option>
                        <option {{ $artist -> country ?? old('country') == 'Vācija' ? "selected" : ""}} value="Vācija">Vācija</option>
                        <option {{ $artist -> country ?? old('country') == 'Lietuva' ? "selected" : ""}} value="Lietuva">Lietuva</option>
                        <option {{ $artist -> country ?? old('country') == 'Austrālija' ? "selected" : ""}} value="Austrālija">Austrālija</option>
                        <option {{ $artist -> country ?? old('country') == 'Austrija' ? "selected" : ""}} value="Austrija">Austrija</option>
                        <option {{ $artist -> country ?? old('country') == 'Beļģija' ? "selected" : ""}} value="Beļģija">Beļģija</option>
                        <option {{ $artist -> country ?? old('country') == 'Brazīlija' ? "selected" : ""}} value="Brazīlija">Brazīlija</option>
                        <option {{ $artist -> country ?? old('country') == 'Bulgārija' ? "selected" : ""}} value="Bulgārija">Bulgārija</option>
                        <option {{ $artist -> country ?? old('country') == 'Čīle' ? "selected" : ""}} value="Čīle">Čīle</option>
                        <option {{ $artist -> country ?? old('country') == 'Dānija' ? "selected" : ""}} value="Dānija">Dānija</option>
                        <option {{ $artist -> country ?? old('country') == 'Dienvidāfrika' ? "selected" : ""}} value="Dienvidāfrika">Dienvidāfrika</option>
                        <option {{ $artist -> country ?? old('country') == 'Ēģipte' ? "selected" : ""}} value="Ēģipte">Ēģipte</option>
                        <option {{ $artist -> country ?? old('country') == 'Francija' ? "selected" : ""}} value="Francija">Francija</option>
                        <option {{ $artist -> country ?? old('country') == 'Grieķija' ? "selected" : ""}} value="Grieķija">Grieķija</option>
                        <option {{ $artist -> country ?? old('country') == 'Horvātija' ? "selected" : ""}} value="Horvātija">Horvātija</option>
                        <option {{ $artist -> country ?? old('country') == 'Igaunija' ? "selected" : ""}} value="Igaunija">Igaunija</option>
                        <option {{ $artist -> country ?? old('country') == 'Islande' ? "selected" : ""}} value="Islande">Islande</option>
                        <option {{ $artist -> country ?? old('country') == 'Itālija' ? "selected" : ""}} value="Itālija">Itālija</option>
                        <option {{ $artist -> country ?? old('country') == 'Izraēla' ? "selected" : ""}} value="Izraēla">Izraēla</option>
                        <option {{ $artist -> country ?? old('country') == 'Īrija' ? "selected" : ""}} value="Īrija">Īrija</option>
                        <option {{ $artist -> country ?? old('country') == 'Japāna' ? "selected" : ""}} value="Japāna">Japāna</option>
                        <option {{ $artist -> country ?? old('country') == 'Jaunzēlande' ? "selected" : ""}} value="Jaunzēlande">Jaunzēlande</option>
                        <option {{ $artist -> country ?? old('country') == 'Kanāda' ? "selected" : ""}} value="Kanāda">Kanāda</option>
                        <option {{ $artist -> country ?? old('country') == 'Kolumbija' ? "selected" : ""}} value="Kolumbija">Kolumbija</option>
                        <option {{ $artist -> country ?? old('country') == 'Krievija' ? "selected" : ""}} value="Krievija">Krievija</option>
                        <option {{ $artist -> country ?? old('country') == 'Ķīna' ? "selected" : ""}} value="Ķīna">Ķīna</option>
                        <option {{ $artist -> country ?? old('country') == 'Meksika' ? "selected" : ""}} value="Meksika">Meksika</option>
                        <option {{ $artist -> country ?? old('country') == 'Nīderlande' ? "selected" : ""}} value="Nīderlande">Nīderlande</option>
                        <option {{ $artist -> country ?? old('country') == 'Norvēģija' ? "selected" : ""}} value="Norvēģija">Norvēģija</option>
                        <option {{ $artist -> country ?? old('country') == 'Polija' ? "selected" : ""}} value="Polija">Polija</option>
                        <option {{ $artist -> country ?? old('country') == 'Portugāle' ? "selected" : ""}} value="Portugāle">Portugāle</option>
                        <option {{ $artist -> country ?? old('country') == 'Rumānija' ? "selected" : ""}} value="Rumānija">Rumānija</option>
                        <option {{ $artist -> country ?? old('country') == 'Somija' ? "selected" : ""}} value="Somija">Somija</option>
                        <option {{ $artist -> country ?? old('country') == 'Spānija' ? "selected" : ""}} value="Spānija">Spānija</option>
                        <option {{ $artist -> country ?? old('country') == 'Šveice' ? "selected" : ""}} value="Šveice">Šveice</option>
                        <option {{ $artist -> country ?? old('country') == 'Turcija' ? "selected" : ""}} value="Turcija">Turcija</option>
                        <option {{ $artist -> country ?? old('country') == 'Ukraina' ? "selected" : ""}} value="Ukraina">Ukraina</option>
                        <option {{ $artist -> country ?? old('country') == 'Venecuēla' ? "selected" : ""}} value="Venecuēla">Venecuēla</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="active" value="1" {{ ($artist -> active ?? old('active')) == 1 ? "checked" : ""}}/>
                        <label class="form-check-label" for="defaultCheck1">Aktīvs izpildītājs</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Saglabāt</button>
                <a class="btn btn-link" href="{{ route('artist.index') }}">Atpakaļ</a>

            </form>
        </div>
    </div>
@endsection
