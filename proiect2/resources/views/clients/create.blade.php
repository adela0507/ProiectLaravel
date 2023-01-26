@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Adaugă Sarcina noua</div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(array('route' => 'clients.store','method'=>'POST')) }}
            <div class="form-group">
                <label for="name">Nume</label>
                <input type="text" name="name" class="form-control"
                       value="{{old('name') }}">
            </div>
            <div class="form-group">
                <label for="description">Prenume</label>

                <textarea name="description" class="form-control"
                          rows="3">{{old('prenume') }}</textarea>
            </div>
                <div class="form-group">
                    <label for="description">Username</label>

                    <textarea name="description" class="form-control"
                              rows="3">{{old('username') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Email</label>

                    <textarea name="description" class="form-control"
                              rows="3">{{old('email') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Oras</label>

                    <textarea name="description" class="form-control"
                              rows="3">{{old('oras') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">Strada</label>

                    <textarea name="description" class="form-control"
                              rows="3">{{old('strada') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">tara</label>

                    <textarea name="description" class="form-control"
                              rows="3">{{old('tara') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">nrinreg</label>

                    <textarea name="description" class="form-control"
                              rows="3">{{old('nrinreg') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="description">tipcard</label>

                    <textarea name="description" class="form-control"
                              rows="3">{{old('tipcard') }}</textarea>
                </div>
            <div class="form-group">
                <input type="submit" value="Adauga Sarcina" class="btn btn-info">
                <a href="{{ route('clients.index') }}" class="btn btndefault">Cancel</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
