<h1>Create User</h1>
<h2>{{$name1}}</h2>
<h2>{{$name2}}</h2>
{!! $name !!}


@if($name1 == 'Ahmed')
    <h5>Ahmed</h5>

@elseif($name1 == 'Ali')
    <h5>Ali</h5>

@else
    <h5>No Name</h5>

@endif

<br>

@unless(Auth::check())
   you are not signed in 
@endunless

<br>

@isset($name)
    name is defined and not null 
@endisset

<br>

@empty($name1)
    name1 is "empty"...
@endempty

<br>

@auth
    // The user is authenticated...
@endauth
 

<br>

@guest
    // The user is not authenticated...
@endguest


