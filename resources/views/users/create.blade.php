@extends('partials.master')

@section('title')
Create User
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Create User</h2>
                    <h5>Fill the following form in order to add a new user</h5>
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
              <div class="panel-heading">Create User</div>
              {!! Form::open(['method' => 'Post', 'action' => 'UserController@store', 'files'=> true]) !!}
                  <div class="form-group">
                    {!! form::text('name', null,['class'=>'form-control','placeholder'=>'Name'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('email', null,['class'=>'form-control','placeholder'=>'Email'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('password', null,['class'=>'form-control','placeholder'=>'Password *********'])!!}
                  </div>
                  <div class="form-group">
                      {!! form::select('level_id',[''=>'Choose Level']+$levels, null,['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                      {!! form::select('role_id',[''=>'Choose Role']+$roles, null,['class'=>'form-control'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('stars', null,['class'=>'form-control','placeholder'=>'Stars'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('class', null,['class'=>'form-control','placeholder'=>'Room'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('phone', null,['class'=>'form-control','placeholder'=>'Phone : 0623121212'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('teacher', null,['class'=>'form-control','placeholder'=>'Teacher'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::file('avatar',['class'=>'form-control','placeholder'=>'image'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::submit('Create User', ['class'=>'btn btn-primary'])!!}
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
