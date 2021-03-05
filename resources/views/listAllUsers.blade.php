<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
          </tr>
        </thead>
    @foreach ($users as $user)
        
    
        <tbody>
            <tr>
                <th scope="col">{{ $user->id }}</th>
                <th scope="col">{{ $user->name }}</th>
                <th scope="col">{{ $user->email }}</th>
                <th scope="col">
                    <a href="{{ route('user.edit',['user'=>$user->id]) }}" class="link-warning">Editar usuario</a>

                    <form action="{{ route('user.destroy',['user'=>$user]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="user" value="{{ $user->id }}">
                        <input type="submit" value="Excluir usuario">
                    </form>
                </th>
            </tr>
          
        </tbody>
    @endforeach
      </table>
      <a href="{{ route('user.index') }}" class="link-warning">Voltar para o inicio</a>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>