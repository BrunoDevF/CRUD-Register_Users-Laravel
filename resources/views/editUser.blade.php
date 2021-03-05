<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        
        <form action="{{ route('user.update',['user'=>$user->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Digite seu nome</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui..." value="{{$user->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Digite seu e-mail</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui..." value="{{$user->email}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Digite sua senha</label>
                <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui..." value="{{$user->password}}">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-outline-primary" value="Editar usuario">
            </div>
        </form> 
    </div>
    

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>