@extends('layouts.main')

@section('page-title')
Homepage
@endsection


@section("page-content")
<section class="my-container">
    
    <div class="comics">
        <button>
            <h2>CURRENT SERIES</h2>
        </button>

        
        @foreach ($comics as $comic)
        <div class="comic" >
            <img src="{{$comic['thumb']}}" alt="">
            <h5>{{$comic['series']}}</h5>
        </div>
        @endforeach
            
        
    </div>
    <div class="d-flex">
        <button class="my-secondary-btn">
            LOAD MORE
        </button>
    </div>
</section>

@endsection