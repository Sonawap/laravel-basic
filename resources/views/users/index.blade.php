@extends('layout.app')

@section('content')
    @foreach ($users as $user)
        <p>{{ $user->name }} - {{ $user->email }}</p>
    @endforeach
@endsection
