@extends('layout');

@section('title')
    Post
@endsection
@section('content')
    <h1>Post Page</h1>
@endsection

@section('sidebar')
    @parent
    <p>post sidebar</p>
@endsection


@push('style')
    <link rel="stylesheet" href="css/boostrap.css">
@endpush
