@extends('layouts.app')
@section('content')
    @foreach($data as $val)
        <h2> you name: {{$val->name}}</h2>
        <h2> you email: {{$val->email}}</h2>
    @endforeach

@endsection
