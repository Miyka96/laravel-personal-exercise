@extends('template')
@section('content')
    <div class="container-fluid">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$products->img}}">
            <div class="card-body">
                <h5 class="card-title">{{ $products->name }}</h5>
                <p class="card-text">{{ $products->description }}</p>
                <p class="card-text">&euro; {{ $products->price }}</p>
                <p class="card-text">{{ $products->size }}</p>
                <p class="card-text">{{ $products->sustainability == 1 ? 'Sustainable' : 'Not Sustainable' }}</p>
                <a href="{{route('product.edit',$products->id)}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
@endsection
