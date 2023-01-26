@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            Lista sarcinilor
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="/clients/create" class="btn btn-default">Adaugare Sarcina Noua</a>
                </div>
            </div>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Oras</th>
                    <th>Strada</th>
                    <th>Tara</th>
                    <th>nrinreg</th>
                    <th>tipcard</th>

                    <th width="300">Actiune</th>
                </tr>
                @if (count($clients) > 0)
                    @foreach ($clients as $key => $task)
                        12
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->prenume }}</td>
                            <td>{{ $task->username }}</td>
                            <td>{{ $task->email }}</td>
                            <td>{{ $task->oras }}</td>
                            <td>{{ $task->strada }}</td>
                            <td>{{ $task->tara }}</td>
                            <td>{{ $task->nrinreg }}</td>
                            <td>{{ $task->tipcard }}</td>

                            <td>
                                <a class="btn btn-success" href="{{
route('clients.show',$task->id) }}">Vizualizare</a>
                                <a class="btn btn-primary" href="{{
route('clients.edit',$task->id) }}">Modificare</a>
                                {{ Form::open(['method' => 'DELETE','route' =>
                               ['clients.destroy', $task->id],'style'=>'display:inline']) }}
                                {{ Form::submit('Delete', ['class' => 'btn btndanger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">Nu exista sarcini!</td>
                    </tr>
                @endif
            </table>
            <!-- Introduce nr pagina -->
            {{$clients->render()}}
        </div>
    </div>
@endsection
