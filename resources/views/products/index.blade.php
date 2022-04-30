@extends('template')
@section('content')
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
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
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->sustainability == true ? 'Sustainable' : 'Not Sustainable' }}</td>
                    <td><button><a href="{{route('product.show',$product->id)}}">Visualizza</a></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
