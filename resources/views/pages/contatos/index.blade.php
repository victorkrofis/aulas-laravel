@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap aling-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h1">Contatos</h1>
</div>

<div>
<form action="{{ route('contatos.index') }}" method="GET">
    <input type="text" name="pesquisar" placeholder="Digite para Buscar">
    <button type="submit">pesquisar</button>

    @can('acessoPageContatos', Auth::user())
    <a type="button" href="{{ route('contatos.create.get') }}" class="btn btn-success float-end">
        incluir
    </a>
    @endcan

    
</form>

<div class="table-responsive mt-4">
@if ($findcontatos->isEmpty())
<p>nao existe dados</p>
@else
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Numero</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($findcontatos as $contatos)
          <tr>
            <td>{{ $contatos->nome }}</td>
            <td>{{ $contatos->numero }}</td>
            <td>{{ $contatos->email }}</td>
            <td>
                <form style="display: inline;" action={{ route('contatos.delete', $contatos->id) }} method="POST">
                @csrf
                @method('DELETE')
                
                <button type="submit" class="btn btn-danger btn-sm">
                    Excluir
                </button>
                </form>

                <form style="display: inline;" action="{{ route('contatos.update.get', $contatos->id)}} method="POST">
            @csrf 
            @method('GET')
            <button type="submit" class="btn btn-primary btn-sm">
                Alterar
            </button>
        </form>
            </td>
          </tr>
        @endforeach
    </tbody>
</table>
@endif
</div>

</div>
@endsection