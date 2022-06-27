<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cidade;
use App\Models\trabalho_final;

class Cidades01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $lista = cidades_01::All();
        //dd($lista);
        return view('cidades.index',['lista_cidades'=>$lista]);
    }
}
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
    // public function create()
    // {
    //     return view('cidades.create');
    // }
    // public function store(Request $request)
    // {
    //     // dd($request);
    //     cidades::create($request->all());
    //     return redirect()->route('cidades.index');
    // }
    // public function destroy($id)
    // {
    //     // dd($id);
    //     $clube = cidades::findOrFail($id);
    //     $clube->delete();
    //     return  redirect()->route('cidades.index');
    // }
    // public function edit($id)
    // {
    //     // dd($id);
    //     $cidade = cidades::findOrFail($id);
    //     return view('cidades.edit',['cidade'=>$cidade]);
    // }
    // public function update(Request $request, $id)
    // {
    //     // dd($id);
    //     $cidade = cidades::findOrFail($id);
    //     $data = [
    //         'nome'=> $request['nome'],
    //         'fundacao'=> $request['fundacao']
    //     ];
    //     $cidade->update($data);
    //     return redirect()->route('cidades.index');
    // }


// namespace App\Http\Controllers;

// use App\Http\Requests\Storecidades_01Request;
// use App\Http\Requests\Updatecidades_01Request;
// use App\Models\cidades_01;

// class Cidades01Controller extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\Storecidades_01Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Storecidades_01Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\cidades_01  $cidades_01
//      * @return \Illuminate\Http\Response
//      */
//     public function show(cidades_01 $cidades_01)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\cidades_01  $cidades_01
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(cidades_01 $cidades_01)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\Updatecidades_01Request  $request
//      * @param  \App\Models\cidades_01  $cidades_01
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Updatecidades_01Request $request, cidades_01 $cidades_01)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\cidades_01  $cidades_01
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(cidades_01 $cidades_01)
//     {
//         //
//     }
// }
