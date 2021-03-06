@extends('partials.master')

@section('title')
All Feedbacks
@endsection

@section('content')
<div class="container">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Feedbacks</h2>
                    <h5>All teachers feedback are listed in the following panel</h5>
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
                    <td>Id</td>
                    <td>Title</td>
                    <td>Body</td>
                    <td>Actions</td>
                  </thead>
                  <tbody>
                    @if($feedbacks)
                      @foreach($feedbacks as $feedback)
                    <tr>
                      <td>{{ $feedback->id }}</td>
                      <td>{{str_limit($feedback->title,30)}}</td>
                      <td>{{str_limit($feedback->body,40)}}</td>
                      <td style="display: inline-block;">
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['feedbacks.show', $feedback->id], 'method' => 'get']) !!}
                            <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div style="display: inline-block;">
                          {!! Form::open(['route' => ['feedbacks.destroy', $feedback->id], 'method' => 'DELETE']) !!}
                            <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa fa-trash'></i></button>
                          {!! Form::close() !!}
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    @else
                      <tr>
                        <td colspan="4">There is no feedback to show.</td>
                      </tr>
                  @endif
                  </tbody>
              </table>
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <div class="pull-mmiddle" id="pagination">
                    {{ $feedbacks->links() }}
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
