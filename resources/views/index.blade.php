@extends('master')
@section('main')

<div class="p-0">
    <!-- Highlight Book Section -->
    <div class="col mb-1 mx-5 py-2">
        <div class="row mx-5">
            <img style="height:250px; width:450px" src="{{ $random_book->image }}" alt="">
            <div class="col">
                <p class="border-bottom border-2 border-dark" style="font-size: 12px; width: 14%;"><b>IT REALLY COUNTS</b></p>
                <p class="fs-1 fw-bold lh-1">
                    <a class="text-decoration-none text-reset" href="/detail/{{ $random_book->id }}">{{ $random_book->title }}</a>
                </p>
                <p>{{ $random_book->description }}</p>
            </div>
        </div>
    </div>
    <!-- End section -->

    <!-- Latest Book Reviews -->
    <div class="col mb-2 mx-5 py-4">
        <div class="row mx-5 d-flex justify-content-between">
            <div class="mb-3">
                <h6 class="border-bottom border-3 border-dark pb-2" style="width: 14%;">LATEST BOOK REVIEWS</h6>
            </div>
        @foreach($latest_books as $book)
            <div class="card border-0" style="width: 19rem;">
                <img src="{{ $book->image }}" class="card-img-top rounded-0" alt="...">
                <div class="card-body p-0 pt-2">
                  <h5 class="card-title"><a class="text-decoration-none text-reset" href="/detail/{{ $book->id }}">{{ $book->title }}</a></h5>
                  <p class="card-text">{{ Str::limit($book->description, 50) }}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <!-- End section -->

    <!-- Book Series Review -->
    <div class="bg-dark" style="width: 100%;">
        <div class="col py-5 mx-5">
            <div class="row mx-5 d-flex justify-content-between">
                <div class="mb-3 text-white">
                    <h6 class="border-bottom border-3 border-white pb-2" style="width: 12%;">Book Series Review</h6>
                </div>

                @foreach($books as $book)
                <div class="card border-0 bg-dark text-white" style="width: 25rem;">
                    <img src="{{ $book->image }}" class="card-img-top rounded-0" alt="...">
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title my-3">{{ $book->title }}</h5>
                        <a href="/detail/{{ $book->id }}" class="btn btn-primary rounded-0 border-1 border-white bg-transparent">Read post</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End section -->
</div>
@endsection
