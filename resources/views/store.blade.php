<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Skin Type Created Successfully</h1>

    <div>
        <h2>{{ $skinType->category }}</h2>
        <p><strong>Description:</strong> {{ $skinType->description }}</p>
        <p><strong>Product Recommendations:</strong> {{ $skinType->product_recommendations }}</p>
    </div>

    <div>
        <a href="{{ route('/index') }}">Back to Skin Types List</a>
    </div>


</body>
</html>