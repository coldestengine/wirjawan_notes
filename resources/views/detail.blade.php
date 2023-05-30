@extends('master')
@section('main')

<div class="container">
    <div class="col mb-5">
        <p class="border-bottom border-2 border-dark" style="font-size: 14px; width: 10%;"><b>IT REALLY COUNTS</b></p>

        <div class="col">
            <h1>{{ $book->title }}</h1>
            <p>{{ $book->description }}</p>
            <div class="row mb-3">
                <div class="col">
                    <p>By <b>{{ $book->author }}</b> | {{ date('d M, Y', $book->created_at->timestamp) }} <span class="btn btn-primary py-0 disabled ms-1" style="height: 20px; font-size: 12px;">{{ $book->reading_time}}</span></p>
                </div>
            </div>

            <img class="mb-4" style="height:600px; width:100%" src="{{ $book->image }}" alt="">

            <div class="col-5 mb-3">
                <div class="row">
                    <div class="col-1 ms-1">
                        <a href="https:\\www.linkedin.com"><i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i></a>
                    </div>
                    <div class="col-1 ms-1">
                        <a href="https:\\www.twitter.com"><i class="fab fa-twitter fa-2x" style="color: #55acee;"></i></a>
                    </div>
                    <div class="col-1 ms-1">
                        <a href="https:\\www.facebook.com"><i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i></a>
                    </div>
                    <div class="col-1 ms-1">
                        <a href="https:\\www.instagram.com"><i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i></a>
                    </div>
                </div>
            </div>

            <p>{{ $book->body }}</p>
        </div>
    </div>

    <div class="col mb-5">
        <p class="" style="font-size: 14px; width: 10%;"><b>Video Section</b></p>
        <iframe width="100%" height="700" src="https://www.youtube.com/embed/9HqoP25UNlU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</div>

@endsection
