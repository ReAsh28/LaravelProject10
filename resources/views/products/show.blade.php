@extends('products.layout')

@section('content')
    <br>
    <div class="row">
        <div class="col align-self-start">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
    <br>

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$product['name']}}" disabled="disabled" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Details</label>
        <textarea name="details" cols="80" rows="5" disabled="disabled" class="form-control">{{$product['details']}}</textarea>
    </div>
    <div class="mb-3">
        <img src="/images/{{$product['image']}}" alt="" width="200px">
    </div>
@endsection