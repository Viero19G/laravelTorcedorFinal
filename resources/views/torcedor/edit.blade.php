<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cria Torcedor</title>
</head>
<body>
    <h1>Cadastro Torcedores</h1>
    
    <form action="{{ route('torcedor.update',['id'=>$torcedor->id])}}" method="POST">
        @csrf
        @method('PUT')
        <p>Nome</p>
        <input type="text" name="nome" value="{{$torcedor->nome}}">
        <br>
        <p>Id Cidade</p>
        <input type="text" name="idcidade">
        <br>
        <p>Id Time</p>
        <input type="text" name="idTime">
        <br>
        <input type="submit">
    </form>
</body>
</html>