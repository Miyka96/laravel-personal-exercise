@extends('template')
@section('content')

<h1>Edit Product</h1>

<form action="{{route('product.update',$products->id)}}" method="post">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="name">Product name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Insert Product name" value="{{$products->name}}">
    </div>
    <div class="form-group">
        <label for="img">Product image</label>
        <input type="text" class="form-control" name="img" id="img" placeholder="Insert image url" value="{{$products->img}}">
    </div>
    <div class="form-group">
        <label for="description">Product description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Insert Product description" value="{{$products->description}}">
    </div>
    <div class="form-group">
        <label for="price">Product price</label>
        <input type="number" class="form-control" name="price" id="price" min="0" step="any" value="{{$products->price}}">
    </div>
    <div class="form-group">
        <label for="size">Product size</label>
        <input type="text" class="form-control" name="size" id="size" placeholder="Insert product size" value="{{$products->size}}">
    </div>
    <div class="form-group">
        <label for="sustainability">Product sustainability</label>
        <select class="form-control" name="sustainability" id="sustainability">
            <option {{$products->value== 1 ? 'selected' : ''}} value="1">Sustainable</option>
            <option {{$products->value== 0 ? 'selected' : ''}} value="0">Not Sustainable</option>
        </select>
    </div>

    <button class="btn btn-primary" type="submit">
        Edit
    </button>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif

</form>

@endsection