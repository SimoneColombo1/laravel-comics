@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')


<section class="background"></section>

<section class="jumbo">
<div>
    @foreach ($comics as $comic)
    <div>
       <img src="{{$comic['thumb']}}">
       <span>
        {{$comic['title']}}
       </span>
    </div>

    @endforeach
</div>
</section>

@endsection
