<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cria Times</title>
</head>
<body>
    <h1>Cadastro Times</h1>
    
    <form action="{{ route('times.update',['id'=>$time->id])}}" method="POST">
        @csrf
        @method('PUT')
        <p>Nome</p>
        <input type="text" name="nome" value="{{$time->nome}}">
        <br>
       
        <input type="submit">
    </form>
</body>
</html>