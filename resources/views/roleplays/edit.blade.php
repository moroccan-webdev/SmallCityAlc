@extends('partials.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Create Roleplay</h2>
                    <h5>Fill the following form in order to add a new user to the database</h5>
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
              <div class="panel-heading">Create Roleplay</div>
              {!! Form::model($roleplay,['method' => 'PATCH', 'action' => ['RoleplayController@update', $roleplay->id],'files'=> true]) !!}
              <div class="form-group">
                {!! form::text('name', null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                {!! form::text('city', null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                {!! form::text('center', null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                  {!! form::select('level_id',[''=>'choose category']+$levels, null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                {!! form::textarea('body', null,['class'=>'form-control'])!!}
              </div>
              <div class="form-group">
                {!! form::submit('Update Roleplay', ['class'=>'btn btn-primary'])!!}
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