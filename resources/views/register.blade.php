@extends('welcome')

@section('content')
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endsection
