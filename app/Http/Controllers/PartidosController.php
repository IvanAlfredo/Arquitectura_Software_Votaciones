<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $partidos=Partido::orderBy('Sigla', 'asc')->get();
      return view("partido.index")->withPartido($partidos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("partido.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido = new Partido([
            'Sigla' => $request->get('Sigla'),
            'Descripcion' => $request->get('Descripcion'),
            'CandidatoPresidente' => $request->get('CandidatoPresidente'),
            'CandidatoVicepresidente' => $request->get('CandidatoVicepresidente'),
            'Estado' => 'V'
        ]);
        $aprtido->save();
        
        return view('partido.show')->withPartido($partido);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $partidos=Partido::where('Sigla','=', $id)->get();
     $partido=$partidos[0];
     return view("partido.show")->withPartido($partido);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partido=Partido::find($id);
        return view("partido.edit")->withPartido($partido);   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partido=Partido::find($id);
        $partido->Sigla=$request->get('Sigla');
        $partido->Descripcion=$request->get('Descripcion');
        $partido->CandidatoPresidente=$request->get('CandidatoPresidente');
        $partido->CandidatoVicepresidente=$request->get('CandidatoVicepresidente');
        $partido->Estado=$request->get('Estado');
        $partido->save();
        //dd($votacion);
        //var_dump($votacion);
//     return view("votacion.show")->withVotacion($votacion);   
        
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partido=Partido::find($id);
        $partido->Estado='E';
        $partido->save();
        return view("partido.show")->withPartido($partido);   

    }
}
