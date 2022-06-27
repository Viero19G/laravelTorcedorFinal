<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
</head>
<body>
    <h1>Times</h1>
        <a href="{{route ('times.create')}}">adicionar</a>
        <br>
        <br>
    <table>
        <thead>
            <th>ID</th>
            <th>idcidade</th>
            <th>Nome</th>
      
            <th>Editar</th>
            <th>Remover</th>
        </thead>

        <tbody>
            @foreach($lista_times as $times)
            <tr>
                <td>{{$times->id}}</td>
                <td>{{$times->idcidade}}</td>
                <td>{{$times->nome}}</td>
              
                <td>
                    <a href="{{route('times.edit',['id'=>$times->id])}}">Editar</a>
                </td>
                <td>
                
                    <form action="{{route('times.destroy',['id'=>$times->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="color: red;">Remover</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</body>
</html>