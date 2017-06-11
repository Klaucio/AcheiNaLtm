<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>

{{--//fields dinamicos--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{--<!-- SCRIPTS -->--}}
<!-- JQuery -->
{{--<script type="text/javascript" src="{{ url('js')}}/jquery-2.2.3.min.js"></script>--}}
{{--<!-- Bootstrap tooltips -->--}}
<script type="text/javascript" src="{{ url('js')}}/tether.min.js"></script>
{{--<!-- Bootstrap core JavaScript -->--}}
{{--<!-- MDB core JavaScript -->--}}
<script src="{{ url('js')}}/jquery-3.2.1.min.js"></script>
{{--<script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>--}}
<script src="{{ url('js/js')}}/bootstrap.min.js"></script>
<script src="{{ url('js')}}/jquery-ui.min.js"></script>
<script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
<script src="{{ url('quickadmin/js') }}/main.js"></script>
<script src="{{ url('js')}}/mdb.min.js"></script>

{{--<!-- Chart.js para dados estatísticos -->--}}
<script  src="{{ url('js')}}/chart.min.js"></script>


<script>
    new WOW().init();
</script>
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>--}}


<script>

    $('.datepicker').datepicker({
        autoclose: true,
        dateFormat: "{{ config('quickadmin.date_format_jquery') }}"
    });

    $('.datetimepicker').datetimepicker({
        autoclose: true,
        dateFormat: "{{ config('quickadmin.date_format_jquery') }}",
        timeFormat: "{{ config('quickadmin.time_format_jquery') }}"
    });

    $('#datatable').dataTable( {
        "language": {
            "url": "{{ trans('quickadmin::strings.datatable_url_language') }}"
        }
    });

</script>

<script type="text/javascript">
    $('#search').on('keyup',function () {
        $value=$(this).val();
        $.ajax({
            type:'GET',
            url:'{!!URL::to('search')!!}',
            data:{'search':$value},
            success:function (data) {
                $('tbody').html(data);
            }
        });
    })
</script>
