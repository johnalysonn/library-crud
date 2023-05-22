@extends('layout.layout')
@section('title', 'Home')
@section('content')
<div class="w-100">
    <div class="w-100 p-3">
        <h1 class="fs-2 font-weight-bold">Books</h1>
    </div>
    <div class="w-100 d-flex gap-4 p-3">
        @foreach($books as $book)
            <div class="card text-bg-dark text-dark" style="box-shadow: 0px 0px 10px #393737; border: none;">
                <img src="img/bg-book.jpg" class="card-img" style="width: 350px; filter:brightness(1);" alt="{{$book->title}}">
                <div class="card-img-overlay">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">{{$book->author}}</p>
                    <p class="card-text"><small>Criado em {{$book->created_at->format('d/m/Y')}}</small></p>
                    <div class="w-100 d-flex gap-3">
                        <a href="{{route('editBook', $book->id)}}" class="btn w-50 btn-primary"><i class='bx bx-edit'></i></a>
                        <form action="{{route('destroyBook', $book -> id)}}" class="w-50" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger w-100"><i class='bx bx-trash'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center align-items-center">
            <label>
                <a href="{{route('formCreateBook')}}">
                    <i class='bx bx-plus-circle fs-1'></i>
                </a>
            </label>
        </div>
    </div>
</div>


@endsection