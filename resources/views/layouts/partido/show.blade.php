@extends('layouts.app')
@section('contenido')
    <h3>Partidos registrados</h3>  

    <div>Sigla: {{$partidos->Sigla}} </div>
    <div>Descripcion: {{$partidos->Descripcion}} </div>
    <div>Candidato Presidente: {{$partidos->CandidatoPresidente}} </div>
    <div>Candidato Vicepresidente: {{$partidos->CandidatoVicepresidente}} </div>
    <div>Estado: {{$partidos->Estado}} </div>
   
@endsection
