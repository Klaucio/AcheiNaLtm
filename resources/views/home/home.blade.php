
@extends('admin.partials.front_header')
@section('title', 'Página Inicial')
@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(11).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">20 Photos to inspire you to visit Tatra Mountains</h1></li>
                        <li>
                            <p>Best places you should see, traditional dishes that you have to try</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-info btn-lg" rel="nofollow">See more!</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">10 Reasons you should spend winter holiday in mountains </h1>
                        </li>
                        <li>
                            <p>Best atractions and winter sports!</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-info btn-lg" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('http://mdbootstrap.com/img/Photos/Slides/img%20(97).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Weekend in the nature - the best way to relax</h1></li>
                        <li>
                            <p>8 Reasons why you need to spend more time in nature</p>
                        </li>
                        <li>
                            <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

        <div class="row">
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="{{ asset('/img/report_lost.png') }}"  class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Mesmerizing Landscapes</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.4s">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="{{ asset('/img/report_found.png') }}"  class="img-fluid" alt="">
                        {{--<img src="{{ asset('/img/download.jpg') }}"  class="img-responsive img-thumbnail">--}}
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Trevelers Toolbox</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <img src="{{ asset('/img/report_lost.png') }}"  class="img-fluid" alt="">
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block">
                        <!--Title-->
                        <h4 class="card-title">Mountain Rivers</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
    </div>
    <!--/.Content-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">Recent Trips</h5>
                    <ul>
                        <li><a href="#!">Balkans</a></li>
                        <li><a href="#!">Tatra Mountains</a></li>
                        <li><a href="#!">Norway Fjords</a></li>
                        <li><a href="#!">Baikal Lake</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">My guest articles</h5>
                    <ul>
                        <li><a href="#!">"Things I learn on the road"</a></li>
                        <li><a href="#!">"Low-budget traveling made simple"</a></li>
                        <li><a href="#!">"Talking with locals"</a></li>
                        <li><a href="#!">"Leaving things behind"</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Follow me on</h5>
                    <ul>
                        <li><a href="#!">Facebook</a></li>
                        <li><a href="#!">Instagram</a></li>
                        <li><a href="#!">Twitter</a></li>
                        <li><a href="#!">Pinterest</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4>Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5></li>
                <li><a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-info" rel="nofollow">Sign up!</a></li>
                <li><a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default" rel="nofollow">Learn more</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

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


@endsection
