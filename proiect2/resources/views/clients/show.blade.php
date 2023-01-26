@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            View Task
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('clients.index')
}}">Inapoi</a>
            </div>
            <div class="form-group">
                <strong>Nume: </strong> {{ $task->name }}
            </div>
            <div class="form-group">
                <strong>Prenume: </strong> {{ $task->prenume }}
            </div>
            <div class="form-group">
                <strong>Username: </strong> {{ $task->username}}
            </div>
            <div class="form-group">
                <strong>Emal: </strong> {{ $task->email }}
            </div>
            <div class="form-group">
                <strong>Oras: </strong> {{ $task->oras }}
            </div>
            <div class="form-group">
                <strong>Strada: </strong> {{ $task->strada }}
            </div>
            <div class="form-group">
                <strong>Tara: </strong> {{ $task->tara }}
            </div>
            <div class="form-group">
                <strong>nrinreg: </strong> {{ $task->nrinreg }}
            </div>
            <div class="form-group">
                <strong>tipcard: </strong> {{ $task->tipcard }}
            </div>
        </div>
    </div>
@endsection
