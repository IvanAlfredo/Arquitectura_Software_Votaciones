@extends('layouts.app')
@section('contenido')
<h3>Resultados</h3>  
<table>
  <tr>
    <th>Sigla</th>
    <th>Descripcion</th>
    <th>Candidato Presidente</th>
    <th>Candidato Vicepresidente</th>
    <th>Estado</th>
    <th>Operacion</th>  
  </tr>   
  @foreach ($partidos as $partido)
  <tr>
    <td>{{$partido->Sigla}}</td>
    <td>{{$partido->Descripcion}}</td>
    <td>{{$partido->CandidatoPresidente}}</td>
    <td>{{$partido->CandidatoVicepresidente}}</td>
    <td>{{$partido->Estado}}</td>
    <td><form method="POST" action="{{route('partido.destroy',$partido->id)}}">
      {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="eliminar"> 
    </form></td>
    @endforeach

  </table>  
  @endsection
