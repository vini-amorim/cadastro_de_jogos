@extends ('layout.app')

@section('title','Criar Novo Jogo')

@section('content')

<div class="container py-5">
      <h1>Cadastre um novo jogo!</h1>
  <form action="{{  route('jogos-store')  }}" method="POST">
    @csrf
    <div class="form-group">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <label for="categoria">Categoria </label>
            <input type="text" name="categoria" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <label for="ano_criacao">Ano de Criação</label>
            <input type="number" name="ano_criacao" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" name="valor" class="form-control">  
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
        </div>
    </div>
  </form>
</div>

@endsection