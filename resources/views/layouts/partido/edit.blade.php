@extends('layouts.app')
@section('contenido')
   <form class="form " method="POST" action="{{route('partido.update',$partidos->id)}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="patch">
      <label for="sigla" >Sigla</label>
      <input id="sigla" type="text" name="sigla"  required autofocus value="{{ $partidos->Sigla }}" ><br>
      <label for="descripcion" >Descripcion</label>
      <input id="descripcion" type="text" name="descripcion"  required autofocus value="{{ $partidos->Descripcion }}" ><br>
      <label for="presidente" >Candidato Presidente</label>
      <input id="presidente" type="text" name="presidente"  required autofocus value="{{ $partidos->CandidatoPresidente }}"><br>
      <label for="vicepresidente" >Candidato Vicepresidente</label>
      <input id="vicepresidente" type="text" name="vicepresidente"  required autofocus value="{{ $partidos->CandidatoVicepresidente }}" ><br>
      <label for="estado" >Estado</label>
      <input id="estado" type="text" name="estado"  required autofocus value="{{ $partidos->Estado }}" ><br>

      <button type="submit" >Actualizar</button>
    </form>
@endsection
