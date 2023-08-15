@extends('layout')
@section('content')
<div class="body-container">
    <a class="btn btn-primary" href="{{ route('sellers.create') }}" role="button">Adicionar Vendedor</a>
    <table class="table">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Clientes</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($sellers as $seller)
            <tr>
                <td>{{ $seller->name }}</td>
                <td>{{ $seller->mail }}</td>
                <td>{{ $seller->clients()->count() }}</td>
                <td>
                    <button title="Abrir" class="btn btn-open"><a href="{{ route('sellers.show', ['seller' => $seller->id]) }}">
                        <ion-icon name="eye" class="eye-btn"></ion-icon> </a></button>
                    <button title="Editar" class="btn btn-edit"><a href="{{ route('sellers.edit', ['seller' => $seller->id]) }}">
                        <ion-icon name="create" class="edit-btn"></ion-icon></a></button>
                    <button title="Deletar" class="btn btn-delete" onclick="event.preventDefault(); if (confirm('Tem certeza que deseja deletar?')) document.getElementById('delete-form-{{ $seller->id }}').submit();">
                        <ion-icon name="trash" class="trash-btn"></ion-icon>
                    </button>

                    <form id="delete-form-{{ $seller->id }}" action="{{ route('sellers.destroy', ['seller' => $seller->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection