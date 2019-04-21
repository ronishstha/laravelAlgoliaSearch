<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
</head>
<body>
<div class="aa-input-container" id="aa-input-container">
    <div>
        <img src="{{ $product->image }}" alt="">
        <h1>{{ $product->title }}</h1>
        <li>Price: {{ $product->price }}</li>
        <p>{{ $product->description }}</p>
    </div>
</div>
</body>
</html>
