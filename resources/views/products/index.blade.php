@extends('template')
@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Preview-Image</td>
                <td>Description</td>
                <td>Price</td>
                <td>Size</td>
                <td>Sustainability</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                @foreach ($products as $product)
                    <td>{{ $product->id }}</td>
                    <td class="text-capitalize">{{ $product->name }}</td>
                    <td><img src=" {{ $product->img }}"></td>
                    <td>{{ $product->description }}</td>
                    <td> &euro; {{ $product->price }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->sustainability == true ? 'Sustainable' : 'Not Sustainable' }}</td>
                    <td><button class="btn"><a href="{{route('product.show',$product->id)}}">Show</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
