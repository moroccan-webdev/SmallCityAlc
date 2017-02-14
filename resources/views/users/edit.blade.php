@extends('partials.master')

@section('title')
Edit User
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Edit User</h2>
                    <h5>Fill in the following form in order to edit the user</h5>
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
              <div class="panel-heading">Edit User</div>
              {!! Form::model($user,['method' => 'PATCH', 'action' => ['UserController@update', $user->id],'files'=> true]) !!}
                  <div class="form-group">
                    {!! form::text('name', null,['class'=>'form-control','placeholder'=>'Name'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])!!}
                  </div>
                  <div class="form-group">

                      {!! form::select('level_id',[''=>'choose category']+$levels, null,['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">

                      {!! form::select('role_id',[''=>'choose role']+$roles, null,['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('class', null,['class'=>'form-control','placeholder'=>'Class'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('phone', null,['class'=>'form-control','placeholder'=>'Phone'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::file('avatar',['class'=>'form-control','placeholder'=>'image'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::submit('Update User', ['class'=>'btn btn-primary'])!!}
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
