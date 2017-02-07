@extends('partials.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">students</h2>
                    <h5>All students are listed in the following div</h5>
                </div>
                <div class="col-md-12">
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

            </div>
            <div class="col-md-4">
              <div class="panel panel-default">
              <div class="panel-heading">Create Student</div>
              {!! Form::open(['method' => 'Post', 'action' => 'ShowerController@store', 'files'=> true]) !!}
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
                    {!! form::text('stars', null,['class'=>'form-control','placeholder'=>'Stars'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('class', null,['class'=>'form-control','placeholder'=>'Class'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('phone', null,['class'=>'form-control','placeholder'=>'Phone'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::text('teacher', null,['class'=>'form-control','placeholder'=>'Teacher'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::file('image',['class'=>'form-control','placeholder'=>'image'])!!}
                  </div>
                  <div class="form-group">
                    {!! form::submit('Create Student', ['class'=>'btn btn-primary'])!!}
                  </div>
                {!! Form::close() !!}
              </div>
            </div>
            <div class="col-md-8">
              <table class="table panel panel-default">
                  <thead class="panel-heading">
                    <td>Name</td>
                    <td>Email</td>
                    <td>Level</td>
                    <td>Stars</td>
                    <td>teacher</td>
                    <td>Actions</td>
                  </thead>
                  <tbody>
                    @if($showers)
                      @foreach($showers as $shower)
                    <tr>
                      <td>{{ $shower->name }}</td>
                      <td>{{ $shower->email }}</td>
                      <td>{{ $shower->level->level }}</td>
                      <td>{{ $shower->stars }}</td>
                      <td>{{ $shower->teacher }}</td>
                      <td><a href="{{Route('showers.show',$shower->id)}}" class="btn btn-primary btn-xs"><i class='fa fa-eye'></i></a>
                              <div class="btn-xs" style="display:inline-block">
                                {!! Form::open(['route' => ['showers.edit', $shower->id], 'method' => 'patch']) !!}
                                <button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                {!! Form::close() !!}
                              </div>
                              <div class="btn-xs" style="display:inline-block">
                                {!! Form::open(['route' => ['showers.destroy', $shower->id], 'method' => 'DELETE']) !!}
                								<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                								{!! Form::close() !!}
                              </div>
              						</td>
                          </tr>
                    </tr>
                    @endforeach
                    @else
                      <tr>
                        <td colspan="4">There is no student to show.</td>
                      </tr>
                  @endif
                  </tbody>
              </table>
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <div class="pull-mmiddle" id="pagination">
                    {{ $showers->links() }}
                    <!-- /.btn-group -->
                  </div>
                  <!-- /.pull-right -->
                </div>
              </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
