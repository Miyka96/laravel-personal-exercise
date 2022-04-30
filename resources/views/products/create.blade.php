@extends('template')
@section('content')

<form action="{{route('product.store')}}" method="post">
    @csrf 

    <div class="form-group">
        <label for="name">Product name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Insert Product name">
    </div>
    <div class="form-group">
        <label for="description">Product description</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Insert Product description">
    </div>
    <div class="form-group">
        <label for="price">Product price</label>
        <input type="number" class="form-control" name="price" id="price" min="0" step="all">
    </div>
    <div class="form-group">
        <label for="size">Product size</label>
        <input type="text" class="form-control" name="size" id="size" placeholder="Insert product size">
    </div>
    <div class="form-group">
        <label for="sustainability">Product sustainability</label>
        <select class="form-control" name="sustainability" id="sustainsustainability">
            <option value="true">Sustainable</option>
            <option value="false">Not Sustainable</option>
        </select>
    </div>

    <button class="btn btn-primary" type="submit">
        Submit
    </button>

</form>

@endsection