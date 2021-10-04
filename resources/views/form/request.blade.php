@extends('layout.app')

@section('content')
    <p>UserAgent : {{ $request->userAgent() }} </p><br>
    <p>Url :{{ $request->url() }} </p><br>
    <p>Fullurl :{{ $request->fullUrl() }} </p><br>
    <p>Path :{{ $request->path() }} </p><br>
    <p>Route Name :{{ $request->route()->getName() }} </p><br>
    <p>Full Url with query :{{ $request-> fullUrlWithQuery(['page' => '2']) }} </p><br>
    <p>IP :{{ $request->ip() }} </p><br>
@endsection
