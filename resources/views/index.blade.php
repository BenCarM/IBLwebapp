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
    <h1>Skin Types</h1>
    <a href="{{ route('create') }}">Create New Skin Type</a>
    <ul>
        @foreach ($skinTypes as $skinType)
            <li>
                <a href="{{ route('show', $skinType->id) }}">{{ $skinType->category }}</a>
                <a href="{{ route('edit', $skinType->id) }}">Edit</a>
                <form action="{{ route('destroy', $skinType->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection


</body>
</html>