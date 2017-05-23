

    @extends('admin.layouts.master')

    @section('content')
        <div class="container background-grey bottom-border">
            <div class="row padding-vert-60">
                <div class="p-y-3 section">
                    <div class="container">
                        <div class="row">

                            <main class="col-md-6">
                                <div class="card m-y-1">
                                    <div class="bg-info card-block text-center text-xs-center">
                                        <h2 class=" achei list-group-item ">Artigos Achados
                                            <span class="label label-default label-pill pull-right">{{count($achados)}}</span>
                                        </h2>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        @foreach($achados as $key => $value)

                                            <a href="{{url('levantamentos',$value->id)}}" class="list-group-item achei contentor">
                                                <h2><strong>{{ $value->designacao }}
                                                        <span class="label label-default label-pill pull-right">
                                                <img src="{{asset('img/'.$value->foto)}}" class="img-circle pull-right" style="width:50px">
                                                </span></strong></h2>
                                                <p>
                                                <h5><strong>Local Achado</strong></h5>
                                                {{ $value->local }}
                                                </p>
                                                <div class="button-wrapper">
                                                    <div class="layer"></div>
                                                    <button class="main-button fa fa-info">
                                                        <div class="ripple"></div>
                                                    </button>
                                                </div>

                                            </a>
                                        @endforeach

                                    </ul>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--</div>--}}
    @endsection


