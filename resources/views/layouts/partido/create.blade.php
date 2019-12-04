@extends('layouts.app')
@section('contenido')
   <form class="form " method="POST" action="{{route('partido.store')}}">
    {{ csrf_field() }}
      <label for="sigla" >Sigla</label>
      <input id="sigla" type="text" name="sigla"  required autofocus ><br>
      <label for="descripcion" >Descripcion</label>
      <input id="descripcion" type="text" name="descripcion"  required autofocus ><br>
      <label for="presidente" >Candidato Presidente</label>
      <input id="presidente" type="text" name="presidente"  required autofocus ><br>
      <label for="vicepresidente" >Candidato Vicepresidente</label>
      <input id="vicepresidente" type="text" name="vicepresidente"  required autofocus ><br>
      <button type="submit" >Registrar</button>
    </form>
@endsection
