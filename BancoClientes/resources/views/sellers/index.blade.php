@extends('layout')
@section('content')
<a class="btn btn-primary" href="#" role="button">Adicionar Vendedor</a>
<table class="table">
  <thead class="table-secondary">
    <tr>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Clientes</th>
        <th scope="col">Opções  </th>
    </tr>
  </thead>
  <tbody>
  @foreach ($sellers as $seller)
        <tr>
            <td>{{ $seller->name }}</td>
            <td>{{ $seller->mail }}</td>
            <td>{{ $seller->clients()->count() }}</td>
            <td>
                <button title="Abrir" class="btn btn-open"><a href="#">
                    <ion-icon name="eye" class="eye-btn"></ion-icon> </a></button>
                <button title="Editar" class="btn btn-edit"><a href="#">
                    <ion-icon name="create" class="edit-btn"></ion-icon></a></button>
                <button title="Deletar" class=" btn btn-delete">
                    <ion-icon name="trash" class="trash-btn"></ion-icon></button>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection