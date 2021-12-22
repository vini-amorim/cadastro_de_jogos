@extends ('layout.app')

@section('title','Editar Jogo')

@section('content')

<div class="container py-5">
      <h1>Cadastre um novo jogo!</h1>
  <form action="{{ route('jogos-update',['id'=>$jogos->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{$jogos->nome}}" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <label for="categoria">Categoria </label>
            <input type="text" name="categoria" value="{{$jogos->categoria}}" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <label for="ano_criacao">Ano de Criação</label>
            <input type="number" name="ano_criacao" value="{{$jogos->ano_criacao}}" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" name="valor" value="{{$jogos->valor}}" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" value="Atualizar" class="btn btn-success">
        </div>
    </div>
  </form>
</div>

@endsection