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
                            <th>{{ trans('quickadmin::admin.roles-index-title') }}</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($encomendas as $$encomenda)
                            <tr>
                                <td></td>
                                <td>


                                </td>
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

