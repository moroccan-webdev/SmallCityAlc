@extends('partials.master')

@section('title')
Edit Slot
@endsection

@section('stylesheets')
{!!Html::style('assets/plugins/daterangepicker/daterangepicker.css')!!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Edit Slot</h2>
                    <h5>Fill in the following field in order to edit the slot</h5>
                </div>
                @if (count($errors) > 0)
                  <div class="alert alert-danger" role="alert">
                    <strong>Errors:</strong>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </div>
                @endif
                @if (Session::has('success'))
                  <div class="alert alert-success" role="alert">
                  <strong>Success:</strong>{{Session::get('success')}}</div>
                @endif
            </div>
            <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
              <div class="panel-heading">Edit Slot</div>
              {!! Form::model($slot,['method' => 'PATCH', 'action' => ['SlotController@update', $slot->id],'files'=> true]) !!}
                  <div class="form-group">
                    <div class="col-md-2">
                      {{ Form::label('slug','Slug: ')}}
                    </div>
                    <div class="input-group col-md-5 col-md-offset-1">
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                        <input name="daterange" type="text" class="form-control pull-right" id="reservationtime">
                    </div>
                    <div class="col-md-3 form-group">
                    {{ Form::submit('Updadte Slot',  array('class' => 'btn btn-primary btn-lg btn-block'))}}
                    </div>
                  </div>
                {!! Form::close() !!}
              </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- jQuery 2.2.3 -->
{!!Html::script('assets/plugins/jQuery/jquery-2.2.3.min.js')!!}
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
{!!Html::script('assets/plugins/daterangepicker/daterangepicker.js')!!}
<!-- bootstrap datepicker -->
{!!Html::script('assets/plugins/datepicker/bootstrap-datepicker.js')!!}
<!-- bootstrap time picker -->
{!!Html::script('assets/plugins/timepicker/bootstrap-timepicker.min.js')!!}

<script>
  $(function () {
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 5,
      locale: {
            format: 'DD/MMM/YYYY h:mm A'
        }
      //format: 'MM/DD/YYYY h:mm A'
    });
  });
    //Date range picker
    $('#reservation').daterangepicker();

</script>
@endsection
