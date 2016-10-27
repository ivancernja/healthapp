@extends('layouts.master')

@section('content')

<h1>Uredi Karton - Naziv Kartona </h1>
<p class="lead">Uredi zdravstveni karton: <a href="{{ route('kartoni.index') }}">Vrati se na sve kartone.</a></p>
<hr>

{!! Form::model($karton, [
    'method' => 'PATCH',
    'route' => ['kartoni.update', $karton->id]
]) !!}

<div class="form-group">
    {!! Form::label('OIB', 'OIB:', ['class' => 'control-label']) !!}
    {!! Form::text('OIB', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Datumrodjenja', 'Datum rodjenja:', ['class' => 'control-label']) !!}
    {!! Form::text('Datumrodjenja', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Imeiprezime', 'Ime i prezime:', ['class' => 'control-label']) !!}
    {!! Form::text('Imeiprezime', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('MBO', 'MBO:', ['class' => 'control-label']) !!}
    {!! Form::text('MBO', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Azuriraj Karton', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop
