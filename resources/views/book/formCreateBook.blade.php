@extends('layout.layout')
@section('title', 'Create Book')
@section('content')

<form action="{{route('createBook')}}" method="POST" class="p-5 d-flex flex-column gap-5 rounded-5 bg-white" style="box-shadow: 0px 0px 10px #d6cece;">
        @csrf

        <h2>Cadastro Livro</h2>

        <div class="d-flex gap-3 flex-column w-100">
            <div class="form-floating fs-6">
                <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Nome do Livro">
                <label for="floatingInput">Nome do Livro</label>
            </div>
            <div class="form-floating">
                <input type="text" name="author" class="form-control" id="floatingInput" placeholder="Autor">
                <label for="floatingInput">Autor</label>
            </div>
            <div class="col-6">
                <input class="btn btn-primary" type="submit" value="Cadastrar"></input>
            </div>
        </div>
    </form>

@endsection