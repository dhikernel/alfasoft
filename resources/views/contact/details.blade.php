@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Contato</h1>

    <div class="card">
        <div class="card-header">
            Detalhes do Contato Voltar
        </div>
        <div class="card-body">
            <h5 class="card-title">Nome: {{ $contact->name }}</h5>
            <h5 class="card-title">E-mail: {{ $contact->email }}</h5>
            <h5 class="card-title">Mensagem: {{ $contact->message }}</h5>
        </div>
        <div class="card-footer text-muted">
            Data de criação: {{ $contact->created_at }}
        </div>
    </div>
</div>
@endsection
