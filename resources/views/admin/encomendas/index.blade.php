@extends('admin.layouts.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <p>{!! link_to_route('encomendas.create', trans('Novo'), [], ['class' => 'btn btn-success']) !!}</p>

    @if($encomendas->count() > 0)
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">{{ trans('quickadmin::admin.roles-index-roles_list') }}</div>
            </div>
            <div class="portlet-body">
                <table id="datatable" class="table table-striped table-hover table-responsive datatable">
                    <thead>
                        <tr>
                            <th>Emissor</th>
                            <th>Telefone Emissor</th>
                            <th>Receptor</th>
                            <th>Telefone Receptor</th>
                            <th>Destino</th>
                            <th>Data Envio</th>
                            <th>Preço</th>
                            {{--<th></th>--}}
                        </tr>
                    </thead>

                    <tbody>
{{--                    {{dd($encomendas)}}--}}
                        @foreach ($encomendas as $encomenda)
                            <tr>
{{--                                @foreach($encomenda-nte as $utente )<td></td><td></td>--}}
                                <td>{{$encomenda->first()->utentes->nome}}</td>
                                <td>{{$encomenda->first()->utentes->telefone}}</td>
{{--                                <td>{{$encomenda->updated_at}}</td>--}}
                                <td>{{$encomenda->nome_receptor}}</td>
                                <td>{{$encomenda->telefone_receptor}}</td>
                                <td>{{$encomenda->destino}}</td>
                                <td>{{$encomenda->created_at}}</td>
                                <td>MZN {{$encomenda->preco}}</td>
                                {{--<td>--}}
                                    {{--<i class="fa fa-eye" aria-hidden="true"></i>--}}
                                    {{--{!! link_to_route('users.edit', trans('quickadmin::admin.users-index-edit'), [$encomenda->id], ['class' => 'btn btn-xs btn-info']) !!}--}}
                                    {{--{!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . trans('quickadmin::admin.users-index-are_you_sure') . '\');',  'route' => array('users.destroy', $encomenda->id)]) !!}--}}
                                    {{--{!! Form::submit(trans('quickadmin::admin.users-index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}--}}
                                    {{--{!! Form::close() !!}--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        {{ trans('quickadmin::admin.roles-index-no_entries_found') }}
    @endif
@endsection

