@extends('partials.master')

@section('content')
<div class="container">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Slots</h2>
                    <h5>All slots are listed in the following div</h5>
                </div>
                <div class="col-md-2">
                  {!! Form::open(['route' => ['slots.create'], 'method' => 'get']) !!}
                    <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-plus" aria-hidden="true"></i>Create Slot</button>
                  {!! Form::close() !!}
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
                    <td>Slot Id</td>
                    <td>Date Range</td>
                    <td>Actions</td>
                  </thead>
                  <tbody>
                    @if($slots)
                      @foreach($slots as $slot)
                    <tr>
                      <td>{{ $slot->id }}</td>
                      <td>{{ $slot->daterange }}</td>
                      <td style="display: inline-block;">
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['slots.show', $slot->id], 'method' => 'get']) !!}
                            <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['slots.edit', $slot->id], 'method' => 'get']) !!}
                            <button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['slots.destroy', $slot->id], 'method' => 'DELETE']) !!}
                            <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa fa-trash'></i></button>
                          {!! Form::close() !!}
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    @else
                      <tr>
                        <td colspan="4">There is no slot to show.</td>
                      </tr>
                  @endif
                  </tbody>
              </table>
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <div class="pull-mmiddle" id="pagination">
                    {{ $slots->links() }}
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
