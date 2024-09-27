@extends('address::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('address.name') !!}</p>
@endsection
