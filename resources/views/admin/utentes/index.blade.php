@extends('admin.layouts.master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <p>{!! link_to_route('utentes.create', trans('Novo'), [], ['class' => 'btn btn-success']) !!}</p>

    @if($utentes->count() > 0)
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
                        @foreach ($utentes as $utente)
                            <tr>
                                <td>{{ $utente->nome }}</td>
                                <td>
                                    {{--{!! link_to_route('utentes.edit', trans('quickadmin::admin.roles-index-edit'), [$utente->id], ['class' => 'fa fa-pencil-square-o btn btn-md btn-info']) !!}--}}
                                    {{--{!! link_to_route('newDept', 'Departamento', [$utente->id], ['class' => 'fa fa-plus-circle btn btn-md btn-info']) !!}--}}
                                    {{--{!! link_to_route('utentes.show', '', [$utente->id], ['class' => 'fa fa-eye btn btn-md btn-info']) !!}--}}
                                    {{--{!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . trans('quickadmin::admin.roles-index-are_you_sure') . '\');',  'route' => ['faculdades.destroy', $utente->id]]) !!}--}}
                                    {{--{!! Form::submit(trans('quickadmin:departamentos:admin.roles-index-delete'), ['class' => 'fa fa-trash-o btn btn-md btn-danger']) !!}--}}
                                    {{--{!! Form::close() !!}--}}

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

    {{--<form name="add_me" id="add_me">--}}
        {{--<table class="table table-bordered" id="dynamic">--}}
            {{--<input type="text" name="name[]" id="name" placeholder="Enter Your Name" class="form-control name_list"/>--}}
            {{--<button type="button" name="add" id="add_input" class="btn btn-success">Add</button>--}}
        {{--</table>--}}
        {{--<input type="button" name="submit" id="submit" value="Submit"/>--}}
    {{--</form>--}}
@endsection

