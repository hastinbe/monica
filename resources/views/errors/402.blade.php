@extends('marketing.skeleton')

@section('content')

  <body class="marketing register">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 offset-md-3 offset-md-3-right">

        <div class="alert alert-danger">
          <h3><em class="fa fa-ban"></em> @lang('auth.not_authorized')</h3>

          @lang('settings.personalisation_paid_upgrade', ['url' => route('settings.subscriptions.index')])

          @if(isset($exception) && $exception->getMessage())
            <p class="message">{{ $exception->getMessage() }}</p>
          @endif

          <p><a href="">{{ trans('auth.back_homepage') }}</a></p>
        </div>

      </div>
    </div>
  </div>
  </body>

@endsection
