@extends('admin.layouts.master')

@section('content')

    <div class="card text-xs-center">

        <div class="card-block">


            <div class="row">
                <div class="input-field col s4">
                    {{-- Espaçamento à esquerda --}}
                    <div>
                        <img src="{{ asset('/img/download.jpg') }}"  class="img-responsive img-thumbnail">
                    </div>
                    <section>
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>Descrição</th>
                            </tr>
                            <tr>
                                <td>{{$artigo->descricao}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>


                </div>
                <div class=" col s8">
                    <div class="card-header white-text" style="background-color:#7ADEDE">
                        <h3>{{$artigo->categoria->designacao}}</h3>

                    </div>
                    <div>
                        <ul class="nav nav-tabs">--}}
                            <li class="active"><a data-toggle="tab" href="#tab-1">Especificações</a></li>
                            <li><a href="#tab-2"></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade in active">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <th>Nome do artigo</th>
                                        <td>{{$artigo->designacao}}</td>
                                    </tr>
                                    <tr>
                                        <th>Categoria</th>
                                        <td>{{$artigo->categoria->designacao}}</td>
                                    </tr>
                                    <tr>
                                        <th>Data</th>
                                        <td>{{$artigo->data}}</td>
                                    </tr>
                                    <tr>
                                        <th>Local</th>
                                        <td>{{$artigo->local}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="{{route('levantamentos',$artigo->id)}}" class='btn  btn-success '> Reclamar </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



