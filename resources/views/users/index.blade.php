@extends('partials.master')

@section('title')
All Users
@endsection

@section('content')
<div class="container">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Users</h2>
                    <h5>All users are listed in the following panel</h5>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
              <table class="table panel panel-default">
                  <thead class="panel-heading">
                    <td>Image</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Level</td>
                    <td>Role</td>
                    <td>Room</td>
                    <td>Phone</td>
                    <td>Actions</td>
                  </thead>
                  <tbody>
                    @if($users)
                      @foreach($users as $user)
                    <tr>
                      <td>
                        <div>
                        <img src="/images/{{$user->avatar}}" alt=""  id="avatar">
                      </div>
                      </td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->level_id }}</td>
                      <td>{{ $user->role->role }}</td>
                      <td>{{ $user->class }}</td>
                      <td>{{ $user->phone }}</td>
                      <td style="display: inline-block;">
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['users.show', $user->id], 'method' => 'get']) !!}
                            <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['users.edit', $user->id], 'method' => 'get']) !!}
                            <button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                            <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa fa-trash'></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['getPDF', $user->id], 'method' => 'GET']) !!}
                            <button type="submit" class="btn btn-info btn-xs"><i class="fa fa-print" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    @else
                      <tr>
                        <td colspan="4">There is no user to show.</td>
                      </tr>
                  @endif
                  </tbody>
              </table>
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <div class="pull-mmiddle" id="pagination">
                    {{ $users->links() }}
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
