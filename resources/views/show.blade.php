<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <h1>{{ $skinType->category }}</h1>
    <p>Description: {{ $skinType->description }}</p>
    <p>Product Recommendations: {{ $skinType->product_recommendations }}</p>
@endsection
@if (Auth::check())
    <div>{{ Auth::user()->name }}</div>
@else
    <div>Guest</div>
@endif
</body>
</html>