@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
            <h1>Registar Utente</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {!! implode('', $errors->all('
                        <li class="error">:message</li>
                        ')) !!}
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {!! Form::open(['route' => 'utentes.store', 'class' => 'form-horizontal']) !!}
    {{ csrf_field() }}
    <div class="form-group">
        {!! Form::label('nome', trans('Nome'), ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('nome', old('nome'), ['class'=>'form-control', 'placeholder'=> trans('Nome Completo')]) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('telefone', trans('Telefone'), ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::number('telefone', old('telefone'), ['class'=>'form-control', 'placeholder'=> trans('Celular')]) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('rota_id', trans('Rota'), ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('rota_id', $rotas, old('rota_id'), ['class'=>'form-control']) !!}
        </div>
       <div class="col-sm-2">
            {!! Form::text('preco', old('preco'), ['class'=>'form-control']) !!}
        </div>
        {!! Form::label('data_viagem', trans('Data de Viagem'), ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-2">
            {!! Form::date('data_viagem', old('data_viagem'), ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="container">
        <fieldset>
            <legend margin-left="20"><h2 align="left" >Bagagem</h2></legend>
            <a class="btn btn-primary" href="javascript:void(0)" id="addInput">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Adicionar Campo
            </a>
            <br/>
            <div id="dynamicDiv">
                <p>
                    <br/>
                    <input type="text" name="designacao" id="inputeste" size="30" value="" placeholder="" />
                    <a class="btn btn-danger" href="javascript:void(0)" id="remInput">
                        <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                        {{--Remover Campo--}}
                    </a>
                </p>
            </div>
        </fieldset>
        </div>
    {!! Form::hidden('tipo', 'cliente') !!}

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2" align="center">
            <a class="btn btn-primary" href="javascript:void(0)" id="addInput">
                <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
               Salvar
            </a>
            {{--{!! Form::submit('Salvar', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}--}}
            {!! Form::submit('Salvar', ['class' => 'btn btn-lg btn-primary pull-right']) !!}
        </div>
    </div>

    {!! Form::close() !!}

@endsection



