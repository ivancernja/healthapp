@extends('layouts.master')

@section('content')

<h1>Lista kartona</h1>
<p class="lead">Popis svih zdravstvenih kartona. <a href="{{ route('kartoni.create') }}">Dodaj novi karton?</a></p>

<hr>

@foreach($kartoni as $karton)
    <h3>{{ $karton->Imeiprezime }}</h3>
    <p>{{ $karton->OIB}}</p>
    <p>
        <a href="{{ route('kartoni.show', $karton->id) }}" class="btn btn-info">Pregled Kartona</a>
        <a href="{{ route('kartoni.edit', $karton->id) }}" class="btn btn-primary">Uredi Karton</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['kartoni.destroy', $karton->id]
        ]) !!}
            {!! Form::submit('Izbrisite ovaj karton', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </p>
    <hr>





@endforeach


@stop
