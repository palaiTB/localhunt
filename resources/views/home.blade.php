@extends('layouts.app')

@section('content')
    <profile username="{{Auth::user()->name}}"></profile>
@endsection
