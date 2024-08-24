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
    <h1>Edit Skin Type</h1>

    <form action="{{ route('skintypes.update', $skinType->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="category" value="{{ $skinType->category }}">
        <textarea name="description">{{ $skinType->description }}</textarea>
        <textarea name="product_recommendations">{{ $skinType->product_recommendations }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection

</body>
</html>