@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buat buku baru</div>

                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'books.store']) !!}
                    
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::text('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('penerbit') ? ' has-error' : '' }}">
                            {!! Form::label('penerbit', 'Penerbit') !!}
                            {!! Form::text('penerbit', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('penerbit') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('tanggal_terbit') ? ' has-error' : '' }}">
                            {!! Form::label('tanggal_terbit', 'Tanggal Terbit') !!}
                            {!! Form::date('tanggal_terbit', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('tanggal_terbit') }}</small>
                        </div>

                        <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                            {!! Form::label('stock', 'Stock') !!}
                            {!! Form::number('stock', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            <small class="text-danger">{{ $errors->first('stock') }}</small>
                        </div>

                        <br>
                        <div class="btn-group pull-right">                            
                            {!! Form::submit("Simpan", ['class' => 'btn btn-success']) !!}
                        </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection