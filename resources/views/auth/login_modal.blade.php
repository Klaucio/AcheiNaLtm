
<!--Modal: Login Form-->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="title"><i class="fa fa-user"></i> Log in</h4>
            </div>
            <!--Body-->
            <form class="form-horizontal" role="form"  method="POST" action="{{ url('login') }}">
                <input type="hidden"  name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="email" name="email" id="form30" class="form-control"  value="{{ old('email') }}">
                    <label for="form30">{{ trans('quickadmin::auth.login-email') }}</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" name="password" id="form31" class="form-control">
                    <label for="form31">{{ trans('quickadmin::auth.login-password') }}</label>
                </div>



            </div>
            <!--Footer-->
            <div class="text-center modal-footer justify-content-center ">

                <div class="text-center mt-2">
                    <button class="btn btn-info"> {{ trans('quickadmin::auth.login-btnlogin') }}    <i class="fa fa-sign-in ml-1"></i></button>
                </div>
                {{--<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>--}}
            </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login Form-->