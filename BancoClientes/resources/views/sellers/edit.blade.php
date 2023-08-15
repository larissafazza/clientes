@extends('layout')
@section('content')
<div class="body-container">
    <form class="form" action="{{ route('sellers.update', ['seller' => $seller->id]) }}" method="POST">
        @csrf
        @method('PUT') <!-- Usando o campo oculto _method -->
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input value="{{ $seller->name }}" type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input value="{{ $seller->mail }}" type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="{{ route('sellers.index', ['seller' => $seller->id]) }}" class="btn btn-outline-secondary">Voltar</a>
    </form>
</div>
@endsection
