@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <h1>Adicionar um novo evento</h1>
    <h4>Insira toda a informação sobre o evento.</h4>
    <a href="{{URL::route('evento.index')}}" class="btn btn-default">Voltar atrás</a>
    <hr>

    <form action="{{URL::route('evento.store')}}" method="POST">
        <div class="form-group">
            <label for="dia" class="control-label">Dia:</label>
            <input type="date" id="dia" name="dia" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hora" class="control-label">Hora:</label>
            <input type="time" id="hora" name="hora" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="local" class="control-label">Local:</label>
            <input type="text" id="local" name="local" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="assunto" class="control-label">Assunto:</label>
            <input type="text" id="assunto" name="assunto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao" class="control-label">Descrição:</label>
            <textarea id="descricao" name="descricao" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="curso" class="control-label">Curso:</label>
            <select id="curso" name="curso[]" class="form-control" multiple required>
                @foreach($cursos as $curso)
                    <option value="<?php echo $curso->id; ?>"><?php echo $curso->nome; ?></option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="disciplina" class="control-label">Disciplinas:</label>
            <select id="disciplina" name="disciplina[]" class="form-control" multiple required>
                @foreach($disciplinas as $disciplina)
                    <option value="<?php echo $disciplina->id; ?>"><?php echo $disciplina->nome; ?></option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Inserir">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
    </form>
</div>
@stop
