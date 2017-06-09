@extends('admin.layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {!! implode('', $errors->all('
                        <li class="error">:message</li>
                        ')) !!}
                    </ul>
                </div>
            @endif
            <div class="form-group col-md-6">
                <div class="input-group">
                    <span class="input-group-addon">Pesquisar</span>
                    <input type="text" class="form-control" id="search" name="search">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                       <span class="item" margin-right="20">
                           <form name="add_me" id="add_me">
                                <table class="table table-bordered table-hover table-striped tabela" style="table-layout: fixed" id="tabela">
                        {{--<thead>--}}
                                    {{----}}
                                    {{--</thead>--}}
                                    <tbody>

                        </tbody>
                    </table>


                           </form>

                        </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2" align="center">

                    <a class="btn btn-lg btn-primary pull-center" id="submit" name="submit">
                        <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                        Reclamar
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('javascript')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#submit').click(function(){
                $.ajax({
                    url:'{!!URL::to('updatelevant')!!}',
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

        $('#search').on('keyup',function () {
            $value=$(this).val();
            $.ajax({
                type:'GET',
                url:'{!!URL::to('searchlevant')!!}',
                data:{'search':$value},
                success:function (data) {
                    $('tbody').html(data);
                }
            });
        })
    </script>
@stop