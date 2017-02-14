@extends('partials.master')

@section('title')
Create Worksheet
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Worksheets Creation</h2>
                    <h5>Fill the following form in order to get the desired worksheets</h5>
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
              <div class="panel-heading">Worksheets Creation</div>
              {!! Form::open(['method' => 'Post', 'action' => 'WorksheetController@generate']) !!}
                  <div class="form-group">
                      {!! form::select('level_id',[''=>'Choose Level']+$levels, null,['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                      {!! form::select('slot_id',[''=>'Choose Slot']+$slots, null,['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('students', null,['class'=>'form-control','placeholder'=>'Your Students Number For Example : 12'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('room', null,['class'=>'form-control','placeholder'=>'Your Room Name  For Example : A1'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::submit('Create Worksheets', ['class'=>'btn btn-primary'])!!}
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
