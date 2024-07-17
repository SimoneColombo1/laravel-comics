@extends('layouts.app')

@section('page-title', 'homepage')

@section('main-content')


<section class="background"></section>

<section class="jumbo">
<div class="card">
    @foreach ($comics as $comic)
    <div class="card-content">
       <img src="{{$comic['thumb']}}">
       <span>
        {{$comic['title']}}
       </span>
    </div>

    @endforeach
</div>
</section>

@endsection
