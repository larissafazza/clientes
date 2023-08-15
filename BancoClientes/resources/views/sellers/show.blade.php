@extends('layout')
@section('content')
<div class="body-container">
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input value="{{ $seller->name }}" type="text" class="form-control" id="name" name="name" aria-describedby="name" disabled>
    </div>
    <div class="mb-3">
        <label for="mail" class="form-label">Email</label>
        <input value="{{ $seller->mail }}" type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" disabled>
    </div>
    <button title="Deletar" class="btn btn-danger" onclick="event.preventDefault(); if (confirm('Tem certeza que deseja deletar?')) document.getElementById('delete-form').submit();">Deletar</button>
    <form id="delete-form" action="{{ route('sellers.destroy', ['seller' => $seller->id]) }}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <a href="{{ route('sellers.edit', ['seller' => $seller->id]) }}" class="btn btn-primary">Editar</a>
    <a href="{{ route('sellers.index', ['seller' => $seller->id]) }}" class="btn btn-outline-secondary">Voltar</a>
</div>
@endsection
