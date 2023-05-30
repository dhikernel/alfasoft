@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Mensagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <a href="{{url('/detalhes')}}/{{$contact->id}}" class="btn btn-info product-btn"><i class="fa fa-eye"></i> Detalhes </a>
                            <a href="{{ url('/editar') }}/{{$contact->id}}" class="btn btn-primary product-btn"><i class="fa fa-edit"></i> Editar </a>
                            {{-- <a href="javascript:;" data-href="{{url('/')}}/admin/leiloes/{{$contact->id}}/delete" data-toggle="modal" data-target="#confirm-delete"class="btn btn-danger product-btn"><i class="fa fa-trash">Deletar</i></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
