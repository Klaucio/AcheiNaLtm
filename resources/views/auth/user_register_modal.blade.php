<!-- Button trigger modal -->
<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify " role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header form-header mdb-gradient">
                <h3><i class="fa fa-user"></i> Registe-Se</h3>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="">
                    {!! Form::open(['route'=>'register',  'class' => 'form-horizontal','method'=>"POST"]) !!}
                    {{ csrf_field() }}
                    {{--<i class="fa fa-check fa-4x mb-1 animated rotateIn"></i>--}}
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        {!! Form::text('nome', '', ['class'=>'form-control','id'=>'nome','value'=>"{{ old('nome') }}",'required','autofocus']) !!}
                        <label for="nome">Nome Completo</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        {!! Form::text('name', '', ['class'=>'form-control','id'=>'name','value'=>"{{ old('name') }}",'required','autofocus']) !!}
                        <label for="name">Nome do Utilizador</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        {!! Form::email('email', '', ['class'=>'form-control','id'=>'email','value'=>"{{ old('email') }}",'required']) !!}
                        <label for="email">Email</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-phone prefix"></i>
                        {!! Form::text('telefone', '', ['class'=>'validate']) !!}
                        <label for="form8">Telefone</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        {!! Form::password('password', ['class'=>'form-control','id'=>'password','required']) !!}
                        <label for="password">Password</label>
                    </div>
                    <div class="md-form{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <i class="fa fa-lock prefix"></i>
                        {!! Form::password('password_confirmation', ['class'=>'validade','id'=>'password-confirm','required']) !!}
                        <label for="password-confirm">Confirme a senha</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                        @endif
                    </div>


                    {{--<div class="text-center">--}}
                    {{--<button class="btn btn-indigo">Sign up</button>--}}
                    {{--<hr>--}}
                    {{--<fieldset class="form-group">--}}
                    {{--<input type="checkbox" id="checkbox1">--}}
                    {{--<label for="checkbox1">Subscribe me to the newsletter</label>--}}
                    {{--</fieldset>--}}
                    {{--</div>--}}
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer mdb-gradient justify-content-center">
                <button type="submit" class="btn btn-default waves-effect">REGISTAR</button>

            </div>
        </div>
    {!! Form::close() !!}

    <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->
