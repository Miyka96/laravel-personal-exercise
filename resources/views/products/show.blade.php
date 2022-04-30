@extends('template')
@section('content')
    <h1>Name: {{$products->name}}</h1>
    <h3>Description: {{$products->description}}</h3>
    <h3>Price: &euro; {{$products->price}}</h3>
    <p>Size: {{$products->size}}</p>
    <p>Sustainability: {{ $products->sustainability == true ? 'Sustainable' : 'Not Sustainable' }}</p>
@endsection