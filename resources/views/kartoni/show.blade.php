@extends('layouts.master')

@section('content')

<h3>{{ $karton->Imeiprezime }}</h3>
<p><strong>OIB:</strong> {{ $karton->OIB}}</p>
<p><strong>Datum rođenja:</strong> {{ $karton->Datumrodjenja}}</p>
<p><strong>MBO:</strong> {{ $karton->MBO}} </p>
<hr>

<p><a href="{{ route('kartoni.index') }}" class="btn btn-info">Vrati se na sve kartone</a>
<a href="{{ route('kartoni.edit', $karton->id) }}" class="btn btn-primary">Uredi Karton</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['kartoni.destroy', $karton->id]
]) !!}
    {!! Form::submit('Izbrisite ovaj karton', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</p>

@stop
