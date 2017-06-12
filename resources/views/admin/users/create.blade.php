@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
{{--            <h1>{{ trans('quickadmin::admin.users-create-create_user') }}</h1>--}}

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
    <!--Form with header-->
    <div class="card">
        <div class="card-block">

            <!--Header-->
            <div class="form-header  primary-color-dark darken-4">
                <h3>{{ trans('quickadmin::admin.users-create-create_user') }}</h3>
            </div>
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    {!! Form::open(['route' => 'users.store', 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('nome', 'Nome', ['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('nome', old('nome'), ['class'=>'form-control', 'placeholder'=> 'Nome Completo']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('telefone', 'Telefone', ['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('telefone', old('telefone'), ['class'=>'form-control', 'placeholder'=> 'Número de Telefone']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('name', trans('quickadmin::admin.users-create-name'), ['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=> trans('quickadmin::admin.users-create-name_placeholder')]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', trans('quickadmin::admin.users-create-email'), ['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::email('email', old('email'), ['class'=>'form-control', 'placeholder'=> trans('quickadmin::admin.users-create-email_placeholder')]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', trans('quickadmin::admin.users-create-password'), ['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=> trans('quickadmin::admin.users-create-password_placeholder')]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id', trans('quickadmin::admin.users-create-role'), ['class'=>'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::select('role_id', $roles, old('role_id'), ['class'=>'form-control']) !!}
                        </div>
                    </div>




                </div>
                <div class="col-sm-2">
                </div>
            </div>



        </div>

        <!--Footer-->
        <div class="modal-footer">
            {{--<div class="text-center">--}}
                {{--<button class="btn ">Login</button>--}}
            {{--</div>--}}
            <div class="form-group">
                <div class="text-center">
                    {!! Form::submit(trans('quickadmin::admin.users-create-btncreate'), ['class' => 'btn btn-deep-purple']) !!}{{--btn btn-primary--}}
                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>
    <!--/Form with header-->




@endsection


