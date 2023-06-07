@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Pievienot dziesmu!
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
                </div><br />
            @endif
            <form method="post" action="{{ $action }}">
                @csrf

                @isset($song)
                    @method("PATCH")
                @endisset

                <div class="form-group">
                    <label for="title">Nosaukums:</label>
                    <input type="text" class="form-control" name="title" value="{{ $song->title ?? ''}}" />
                </div>

                <div class="form-group">
                    <label for="artist_id">Izpildītājs:</label>

                    <select name="artist_id" class="form-control">
                        <option disabled hidden selected>-- Lūdzu izvēlieties izpildītāju --</option>

                        @foreach (\App\Models\Artist::all() as $artist)
                            <option value="{{ $artist->id }}" {{(isset($song) && ($song->artist_id == $artist->id)) ? 'selected' : ''}}>{{ $artist->artistTitle }}</option>
                        @endforeach

                    </select>
                </div>

                <div>
                    <label for="lyric_id">Dziesmas teksta autors:</label>
                    <select name="lyric_id" class="form-control">
                        <option disabled hidden selected>-- Lūdzu izvēlieties dziesmas teksta autoru --</option>

                        @foreach(\App\Models\Lyric::all() as $lyric)
                            <option value="{{ $lyric->id }}" {{(isset($song) && ($song->lyric_id == $lyric->id)) ? 'selected' : ''}}>{{ $lyric->author }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="released">Iznākšanas gads:</label>
                    <select name="released" id="released">
                        <option {{ $song -> released ?? old('released') == '2023' ? "selected" : ""}} value="2023">2023</option>
                        <option {{ $song -> released ?? old('released') == '2022' ? "selected" : ""}} value="2022">2022</option>
                        <option {{ $song -> released ?? old('released') == '2021' ? "selected" : ""}} value="2021">2021</option>
                        <option {{ $song -> released ?? old('released') == '2020' ? "selected" : ""}} value="2020">2020</option>
                        <option {{ $song -> released ?? old('released') == '2019' ? "selected" : ""}} value="2019">2019</option>
                        <option {{ $song -> released ?? old('released') == '2018' ? "selected" : ""}} value="2018">2018</option>
                        <option {{ $song -> released ?? old('released') == '2017' ? "selected" : ""}} value="2017">2017</option>
                        <option {{ $song -> released ?? old('released') == '2016' ? "selected" : ""}} value="2016">2016</option>
                        <option {{ $song -> released ?? old('released') == '2015' ? "selected" : ""}} value="2015">2015</option>
                        <option {{ $song -> released ?? old('released') == '2014' ? "selected" : ""}} value="2014">2014</option>
                        <option {{ $song -> released ?? old('released') == '2013' ? "selected" : ""}} value="2013">2013</option>
                        <option {{ $song -> released ?? old('released') == '2012' ? "selected" : ""}} value="2012">2012</option>
                        <option {{ $song -> released ?? old('released') == '2011' ? "selected" : ""}} value="2011">2011</option>
                        <option {{ $song -> released ?? old('released') == '2010' ? "selected" : ""}} value="2010">2010</option>
                        <option {{ $song -> released ?? old('released') == '2009' ? "selected" : ""}} value="2009">2009</option>
                        <option {{ $song -> released ?? old('released') == '2008' ? "selected" : ""}} value="2008">2008</option>
                        <option {{ $song -> released ?? old('released') == '2007' ? "selected" : ""}} value="2007">2007</option>
                        <option {{ $song -> released ?? old('released') == '2006' ? "selected" : ""}} value="2006">2006</option>
                        <option {{ $song -> released ?? old('released') == '2005' ? "selected" : ""}} value="2005">2005</option>
                        <option {{ $song -> released ?? old('released') == '2004' ? "selected" : ""}} value="2004">2004</option>
                        <option {{ $song -> released ?? old('released') == '2003' ? "selected" : ""}} value="2003">2003</option>
                        <option {{ $song -> released ?? old('released') == '2002' ? "selected" : ""}} value="2002">2002</option>
                        <option {{ $song -> released ?? old('released') == '2001' ? "selected" : ""}} value="2001">2001</option>
                        <option {{ $song -> released ?? old('released') == '2000' ? "selected" : ""}} value="2000">2000</option>
                        <option {{ $song -> released ?? old('released') == '1999' ? "selected" : ""}} value="1999">1999</option>
                        <option {{ $song -> released ?? old('released') == '1998' ? "selected" : ""}} value="1998">1998</option>
                        <option {{ $song -> released ?? old('released') == '1997' ? "selected" : ""}} value="1997">1997</option>
                        <option {{ $song -> released ?? old('released') == '1996' ? "selected" : ""}} value="1996">1996</option>
                        <option {{ $song -> released ?? old('released') == '1995' ? "selected" : ""}} value="1995">1995</option>
                        <option {{ $song -> released ?? old('released') == '1994' ? "selected" : ""}} value="1994">1994</option>
                        <option {{ $song -> released ?? old('released') == '1993' ? "selected" : ""}} value="1993">1993</option>
                        <option {{ $song -> released ?? old('released') == '1992' ? "selected" : ""}} value="1992">1992</option>
                        <option {{ $song -> released ?? old('released') == '1991' ? "selected" : ""}} value="1991">1991</option>
                        <option {{ $song -> released ?? old('released') == '1990' ? "selected" : ""}} value="1990">1990</option>
                        <option {{ $song -> released ?? old('released') == '1989' ? "selected" : ""}} value="1989">1989</option>
                        <option {{ $song -> released ?? old('released') == '1988' ? "selected" : ""}} value="1988">1988</option>
                        <option {{ $song -> released ?? old('released') == '1987' ? "selected" : ""}} value="1987">2087</option>
                        <option {{ $song -> released ?? old('released') == '1986' ? "selected" : ""}} value="1986">2086</option>
                        <option {{ $song -> released ?? old('released') == '1985' ? "selected" : ""}} value="1985">2021</option>
                        <option {{ $song -> released ?? old('released') == '1984' ? "selected" : ""}} value="1984">1984</option>
                        <option {{ $song -> released ?? old('released') == '1983' ? "selected" : ""}} value="1983">1983</option>
                        <option {{ $song -> released ?? old('released') == '1982' ? "selected" : ""}} value="1982">1982</option>
                        <option {{ $song -> released ?? old('released') == '1981' ? "selected" : ""}} value="1981">1981</option>
                        <option {{ $song -> released ?? old('released') == '1980' ? "selected" : ""}} value="1980">1980</option>
                        <option {{ $song -> released ?? old('released') == '1979' ? "selected" : ""}} value="1979">1979</option>
                        <option {{ $song -> released ?? old('released') == '1978' ? "selected" : ""}} value="1978">1978</option>
                        <option {{ $song -> released ?? old('released') == '1977' ? "selected" : ""}} value="1977">1977</option>
                        <option {{ $song -> released ?? old('released') == '1976' ? "selected" : ""}} value="1976">1976</option>
                        <option {{ $song -> released ?? old('released') == '1975' ? "selected" : ""}} value="1975">1975</option>
                        <option {{ $song -> released ?? old('released') == '1974' ? "selected" : ""}} value="1974">1974</option>
                        <option {{ $song -> released ?? old('released') == '1973' ? "selected" : ""}} value="1973">1973</option>
                        <option {{ $song -> released ?? old('released') == '1972' ? "selected" : ""}} value="1972">1972</option>
                        <option {{ $song -> released ?? old('released') == '1971' ? "selected" : ""}} value="1971">1971</option>
                        <option {{ $song -> released ?? old('released') == '1970' ? "selected" : ""}} value="1970">1970</option>
                        <option {{ $song -> released ?? old('released') == '1969' ? "selected" : ""}} value="1969">1969</option>
                        <option {{ $song -> released ?? old('released') == '1968' ? "selected" : ""}} value="1968">1968</option>
                        <option {{ $song -> released ?? old('released') == '1967' ? "selected" : ""}} value="1967">1967</option>
                        <option {{ $song -> released ?? old('released') == '1966' ? "selected" : ""}} value="1966">1966</option>
                        <option {{ $song -> released ?? old('released') == '1965' ? "selected" : ""}} value="1965">1965</option>
                        <option {{ $song -> released ?? old('released') == '1964' ? "selected" : ""}} value="1964">1964</option>
                        <option {{ $song -> released ?? old('released') == '1963' ? "selected" : ""}} value="1963">1963</option>
                        <option {{ $song -> released ?? old('released') == '1962' ? "selected" : ""}} value="1962">1962</option>
                        <option {{ $song -> released ?? old('released') == '1961' ? "selected" : ""}} value="1961">1961</option>
                        <option {{ $song -> released ?? old('released') == '1960' ? "selected" : ""}} value="1960">1960</option>
                        <option {{ $song -> released ?? old('released') == '1959' ? "selected" : ""}} value="1959">1959</option>
                        <option {{ $song -> released ?? old('released') == '1958' ? "selected" : ""}} value="1958">1958</option>
                        <option {{ $song -> released ?? old('released') == '1957' ? "selected" : ""}} value="1957">1957</option>
                        <option {{ $song -> released ?? old('released') == '1956' ? "selected" : ""}} value="1956">1956</option>
                        <option {{ $song -> released ?? old('released') == '1955' ? "selected" : ""}} value="1955">1955</option>
                        <option {{ $song -> released ?? old('released') == '1954' ? "selected" : ""}} value="1954">1954</option>
                        <option {{ $song -> released ?? old('released') == '1953' ? "selected" : ""}} value="1953">1953</option>
                        <option {{ $song -> released ?? old('released') == '1952' ? "selected" : ""}} value="1952">1952</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="length">Dziesmas garums:</label>
                    <input type="number" class="form-control" name="length" min="1" max="7" step="0.01" value="{{ $song->length ?? ''}}"/>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="positive" value="1" {{ ($song -> positive ?? old('positive')) == 1 ? "checked" : ""}}/>
                        <label class="form-check-label">Pozitīva dziesma</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Saglabāt</button>
                <a class="btn btn-link" href="{{ route('song.index') }}">Atpakaļ</a>

            </form>
        </div>
    </div>
@endsection
