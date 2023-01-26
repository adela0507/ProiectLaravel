@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"> Modificare informatii Sarcina</div>
        <div class="panel-body">
            <!—exista inregistrari in tabelul task 
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Eroare:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!—populez campurile formularului cu datele aferente din tabela task -->

            {!! Form::model($task, ['method' => 'PATCH','route' =>
           ['clients.update', $task->id]]) !!}
            <div class="form-group">
                <label for="name">Nume</label>
                <input type="text" name="name" class="form-control"
                       value="{{$task->name }}">
            </div>
            <div class="form-group">
                <label for="description">Prenume</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->prenume }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Username</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->username }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Email</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->email }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Oras</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->oras }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Strada</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->strada }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Tara</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->tara }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">nrinreg</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->nrinreg }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">tipcard</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $task->tipcard }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Salvare Modificari" class="btn
btn-info">
                <a href="{{route('clients.index') }}" class="btn btndefault">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
