@extends('admin.layouts.master')

@section('content')

    {{--<div class="row">--}}
        {{--<div class="col-sm-10 col-sm-offset-2">--}}
            <h3>Registar Encomenda</h3>

            {{--@if ($errors->any())--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                        {{--{!! implode('', $errors->all('--}}
                        {{--<li class="error">:message</li>--}}
                        {{--')) !!}--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    {!! Form::open(['name' => 'add_me','id'=>'add_me','class' => 'form-horizontal']) !!}
    {{ csrf_field() }}
    <div class="form-group" align="center">
        {{--{!! Form::label('nome', trans('Nome'), ['class'=>'col-sm-2 control-label']) !!}--}}
        <div class="col-sm-5">
            {!! Form::text('nome', old('nome'), ['class'=>'form-control', 'placeholder'=> trans('Nome do Remetente')]) !!}
        </div>
        {{--{!! Form::label('telefone', trans('Telefone'), ['class'=>'col-sm-2 control-label']) !!}--}}
        <div class="col-sm-6">
            {!! Form::number('telefone', old('telefone'), ['class'=>'form-control', 'placeholder'=> trans('Celular do Remetente')]) !!}
        </div>
    </div>

    <div class="form-group" align="center">
        {{--{!! Form::label('nome', trans('Nome'), ['class'=>'col-sm-2 control-label']) !!}--}}
        <div class="col-sm-5">
            {!! Form::text('nome_receptor', old('nome_receptor'), ['class'=>'form-control', 'placeholder'=> trans('Nome do Destinatario')]) !!}
        </div>
        {{--{!! Form::label('telefone', trans('Telefone'), ['class'=>'col-sm-2 control-label']) !!}--}}
        <div class="col-sm-6">
            {!! Form::number('telefone_receptor', old('telefone_receptor'), ['class'=>'form-control', 'placeholder'=> trans('Celular do Destinatario')]) !!}
        </div>
    </div>

    <div class="form-group" align="center">
        {{--{!! Form::label('nome', trans('Nome'), ['class'=>'col-sm-2 control-label']) !!}--}}
        <div class="col-sm-5">
            {!! Form::text('destino', old('destino'), ['class'=>'form-control', 'placeholder'=> trans('Destino')]) !!}
        </div>
        {{--{!! Form::label('telefone', trans('Telefone'), ['class'=>'col-sm-2 control-label']) !!}--}}
        <div class="col-sm-6">
            {!! Form::number('preco', old('preco'), ['class'=>'form-control', 'placeholder'=> trans('Preco')]) !!}
        </div>
    </div>

        <fieldset>
            <legend margin-left="20"><h2 align="left" >Bagagem</h2></legend>
            <a class="btn btn-primary" href="javascript:void(0)" id="addInput">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                Adicionar Campo
            </a>
            <br/>
            <div id="dynamicDiv">
                <p>
                </p>
            </div>
        </fieldset>

    {!! Form::hidden('tipo', 'cliente') !!}

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2" align="center">

            <a class="btn btn-lg btn-primary pull-right" id="submit" name="submit">
                <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                Salvar
            </a>
    </div>
    </div>

    {!! Form::close() !!}

@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var i=1;
            $('#addInput').click(function(){
                i++;
                $('#dynamicDiv').append('<tr id="row'+i+'"><td><input type="text" name="designacao[]" placeholder="Nome do Item" class="form-control name_list"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove</button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
            $('#submit').click(function(){
                $.ajax({
                    url:'{!!URL::to('encomendas')!!}',
                    method:"POST",
                    data:$('#add_me').serialize(),
                    success: function(data)
                    {
                        alert('Salvo com Sucesso!');
                        $('#add_me')[0].reset();
                    }
                });
            });
        });
    </script>
@stop



