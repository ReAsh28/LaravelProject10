
@extends('products.layout')

@section('content')
    <br>
    <div class="container p-5">
        <div class="row">
            <div class="col align-self-start">
                <a href="{{route('products.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>
        <br>

        @if (!empty($success))
        <div class="alert alert-success" role="alert">
            {{ $success }}
        </div>
        @endif

        <br>
        
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Details</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($products as $item)
                    <tr>
                        <th scope="row">{{$item['id']}}</th>
                        <td>{{$item['name']}}</td>
                        <td><img src="/images/{{$item['image']}}" alt="" width="200px"></td>
                        <td>{{$item['details']}}</td>
                        <td>
                            <a href="{{route('products.show', $item['id'])}}" class="btn btn-info">Show</a>
                            @auth
                               <form action="{{route('products.destroy', $item['id'])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{route('products.edit', $item['id'])}}" class="btn btn-primary">Edit</a>
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
            {!! $products->links("pagination::bootstrap-4") !!}
        </table>
    </div>
@endsection