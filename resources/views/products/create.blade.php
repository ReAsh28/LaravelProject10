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
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Details</label>
            <textarea name="details" cols="80" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input class="form-control" type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection