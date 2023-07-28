@extends('products.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <br>

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br>
    <form action="{{route('products.update', $product['id'])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="{{$product['name']}}" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
            <textarea name="details" cols="80" rows="5" class="form-control">{{$product['details']}}</textarea>
        </div>
        <div class="mb-3">
            <img src="/images/{{$product['image']}}" alt="" width="200px">
            <input class="form-control" type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection