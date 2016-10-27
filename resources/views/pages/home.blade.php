@extends('layouts.master')

@section('content')

<h1>Evidencija zdravstvenih kartona</h1>
<p class="lead">Bolje spriječiti nego liječiti.<br>
"<i>Thomas Fuller</i>"</p>
<hr>

<a href="{{ route('kartoni.index') }}" class="btn btn-info">Pregled kartona</a>
<a href="{{ route('kartoni.create') }}" class="btn btn-primary">Dodaj novi karton</a>

@stop
