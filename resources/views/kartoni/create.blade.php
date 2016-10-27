@extends('layouts.master')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<h1> Dodaj karton </h1>

{!! Form::open([
    'route' => 'kartoni.store'
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


{!! Form::submit('Dodaj novi karton', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection
