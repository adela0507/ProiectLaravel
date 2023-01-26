@extends('layouts.app')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="/products/create" class="btn btn-default">Adaugare Sarcina Noua</a>
                </div>
            </div>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th>Nume</th>
                    <th>Descriere</th>
                    <th>Descriere mare</th>
                    <th>poza</th>
                    <th>pret</th>

                    <th width="300">Actiune</th>
                </tr>
                @if (count($products) > 0)
                    @foreach ($products as $key => $task)

                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->desc}}</td>
                            <td>{{ $task->description}}</td>
                            <td>{{ $task->photo}}</td>
                            <td>{{ $task->price}}</td>

                            <td>
                                <a class="btn btn-success" href="{{
route('products.show',$task->id) }}">Vizualizare</a>
                                <a class="btn btn-primary" href="{{
route('products.edit',$task->id) }}">Modificare</a>
                                {{ Form::open(['method' => 'DELETE','route' =>
                               ['products.destroy', $task->id],'style'=>'display:inline']) }}
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
            {{$products->render()}}
        </div>
    </div>
@endsection
