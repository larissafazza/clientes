@extends('layout')
@section('content')
<div class="body-container">
    <a class="btn btn-primary" href="{{ route('clients.create') }}" role="button">Adicionar Cliente</a>
    <table class="table">
    <thead class="table-secondary">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Pessoa</th>
            <th scope="col">Telefone</th>
            <th scope="col">Opções  </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->mail }}</td>
                <td>{{ $client->personType->type }}</td>
                <td>
                    @if ($client->phones->isNotEmpty())
                        {{ $client->phones->first()->number }}
                    @else
                        Nenhum telefone registrado
                    @endif
                </td>
                <td>
                    <button title="Abrir" class="btn btn-open"><a href="{{ route('clients.show', ['client' => $client->id]) }}">
                        <ion-icon name="eye" class="eye-btn"></ion-icon> </a></button>
                    <button title="Editar" class="btn btn-edit"><a href="{{ route('clients.edit', ['client' => $client->id]) }}">
                        <ion-icon name="create" class="edit-btn"></ion-icon></a></button>
                        <button title="Deletar" class="btn btn-delete" onclick="event.preventDefault(); if (confirm('Tem certeza que deseja deletar?')) document.getElementById('delete-form-{{ $client->id }}').submit();">
                        <ion-icon name="trash" class="trash-btn"></ion-icon>
                    </button>
                    <form id="delete-form-{{ $client->id }}" action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="POST" style="display: none;">
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