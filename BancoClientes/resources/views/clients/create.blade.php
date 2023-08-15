@extends('layout')
@section('content')
<div class="body-container">
    <form class="form">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="name" class="form-control" id="name" aria-describedby="name" required>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="person_type_id" class="form-label">Tipo de Pessoa</label>
            <select class="form-select" aria-label="Default select example" required>
                <option selected disabled>Selecione uma opção abaixo</option>
                <option value="1">Pessoa Física</option>
                <option value="2">Pessoa Jurídica</option>
            </select>
        </div>
        <div class="mb-3">
        <label for="sellers" class="form-label">Vendedores</label><br>
            @foreach ($sellers as $seller)
                <input type="checkbox" class="form-check-input" id="seller">
                <label class="form-check-label" for="seller">{{ $seller->name }}</label>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="photo">Foto</label><br>
            <input type="file" id="photo" name="photo" accept="image/png, image/jpeg" />
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="phone" class="form-control" id="phone" aria-describedby="phone" required>
            <div class="d-flex justify-content-center align-items-center">
                <button id="addInputButton" type="button" onclick="newPhoneInput()" class="phone-button btn btn-outline-secondary">Adicionar outro telefone</button>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection