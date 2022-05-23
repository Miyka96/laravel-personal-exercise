@extends('template')
@section('content')

    <div class="container mb-5">
        hello test
    </div>
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
                    <td><button class="btn btn-primary"><a class="text-white" href="{{route('product.show',$product->id)}}">Show</a></button></td>
                    <td>
                        <form action="{{route('product.destroy',$product->id)}}" method="post">
                            @CSRF
                            @method('delete')
                            <button class="btn btn-primary" type="submit" onclick="return confirm('Delete this record?')"> Delete</button>
                        </form>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
