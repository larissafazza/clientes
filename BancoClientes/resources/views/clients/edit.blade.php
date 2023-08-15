@extends('layout')
@section('content')
<div class="body-container">
    <form class="form" action="{{ route('clients.update', ['client' => $client->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Usando o campo oculto _method -->
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input value="{{ $client->name }}" type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input value="{{ $client->mail }}" type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="person_type_id" class="form-label">Tipo de Pessoa</label>
            <select class="form-select" name="person_type_id" aria-label="Default select example" required>
                <option value="{{ $client->person_type_id }}" selected disabled>{{ $client->personType->type }}</option>
                <option value="1">Pessoa Física</option>
                <option value="2">Pessoa Jurídica</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="sellers" class="form-label">Vendedores</label><br>
            @foreach ($sellers as $seller)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="seller{{ $seller->id }}" name="sellers[]" value="{{ $seller->id }}" {{ in_array($seller->id, $client->sellers->pluck('id')->toArray()) ? 'checked' : '' }}>
                    <label class="form-check-label" for="seller{{ $seller->id }}">{{ $seller->name }}</label>
                </div>
            @endforeach
        </div>

        <div class="mb-3 phones">
            <label for="phone" class="form-label">Telefone</label>
            @foreach ($client->phones as $phone)
                <input type="phone" class="form-control mb-3" name="phones[]" value="{{ $phone->number }}" aria-describedby="phone" required>
            @endforeach
            <div class="d-flex justify-content-center align-items-center">
                <button id="addInputButton" type="button" onclick="newPhoneInput()" class="phone-button btn btn-outline-secondary">Adicionar outro telefone</button>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<script>
    let phoneCount = 1; // To keep track of phone inputs

    function newPhoneInput() {
        const phonesDiv = document.querySelector('.phones'); // Get the "phones" div
        const addInputButton = document.getElementById('addInputButton'); // Get the "Adicionar outro telefone" button
        const newPhoneInput = document.createElement('input'); // Create a new input element
        newPhoneInput.type = 'phone';
        newPhoneInput.classList.add('form-control', 'mb-3');
        newPhoneInput.name = `phones[]`; // Use array notation for multiple values
        newPhoneInput.setAttribute('aria-describedby', 'phone');

        phonesDiv.insertBefore(newPhoneInput, addInputButton.parentNode); // Insert the new input before the button's parent element

        phoneCount++;
    }
</script>
@endsection
