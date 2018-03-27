@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
  <div class="col-md-8">
    <div class="box box-solid">
      <div class="box-body" hidden="">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="../img/lvdc_login_(1).jpg" alt="First slide">

              <div class="carousel-caption">
                First Slide
              </div>
            </div>
            <div class="item">
              <img src="../img/lvdc_login_(2).jpg" alt="Second slide">

              <div class="carousel-caption">
                Second Slide
              </div>
            </div>
            <div class="item">
              <img src="../img/lvdc_login_(3).jpg" alt="Third slide">

              <div class="carousel-caption">
                Third Slide
              </div>
            </div>
            <div class="item">
              <img src="../img/lvdc_login_(4).jpg" alt="Fourth slide">

              <div class="carousel-caption">
                Fourth Slide
              </div>
            </div>
            <div class="item">
              <img src="../img/lvdc_login_(5).jpg" alt="Fifth slide">

              <div class="carousel-caption">
                Fifth Slide
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

  <!-- log-in form -->
  <div class="login-box">
      <div class="login-logo">
          <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>LV Diagnostic</b>Center') !!}</a>
      </div>
      <!-- log-in logo here -->
      <div class="login-box-body">
          <p class="login-box-msg">{{ trans('adminlte::adminlte.login_message') }}</p>
          <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
              {!! csrf_field() !!}

              <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                  <input type="text" name="name" class="form-control input-sm" value="{{ old('name') }}"
                         placeholder="Username">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                  <input type="password" name="password" class="form-control"
                         placeholder="{{ trans('adminlte::adminlte.password') }}">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="row">
                  <div class="col-xs-12">
                      <button type="submit"
                              class="btn btn-primary btn-block btn-flat">{{ trans('adminlte::adminlte.sign_in') }}</button>
                  </div>
                  <!-- /.col -->
              </div>
          </form>
      </div>
      <!-- /.login-box-body -->
  </div><!-- /.login-box -->
  <!-- /log-in form -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @yield('js')
@stop
