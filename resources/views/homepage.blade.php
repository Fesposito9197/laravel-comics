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
        <div class="comic" >
            <img src="" alt="">
            <h5></h5>
        </div>
        
    </div>
    <div class="d-flex">
        <button class="my-secondary-btn">
            LOAD MORE
        </button>
    </div>
</section>

@endsection