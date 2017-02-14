@extends('partials.master')

@section('title')
All Worksheets
@endsection

@section('content')
<div class="container">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Worksheets</h2>
                    <h5>All Teacher worksheets are listed in the following panel</h5>
                </div>
                <div class="col-md-2">
                  {!! Form::open(['route' => ['worksheets.create'], 'method' => 'get']) !!}
                    <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-plus" aria-hidden="true"></i>Create Worksheets</button>
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
                    <td>Id</td>
                    <td>Level</td>
                    <td>Slot</td>
                    <td>Students</td>
                    <td>Created At</td>
                    <td>Teacher</td>
                  </thead>
                  <tbody>
                    @if($worksheets)
                      @foreach($worksheets as $worksheet)
                    <tr>
                      <td>{{ $worksheet->id }}</td>
                      <td>{{ $worksheet->level->level }}</td>
                      <td>{{ $worksheet->slot->daterange }}</td>
                      <td>{{ $worksheet->students }}</td>
                      <td>{{ $worksheet->created_at }}</td>
                      <td>{{ $worksheet->teacher }}</td>
                      <td></td>
                    </tr>
                    @endforeach
                    @else
                      <tr>
                        <td colspan="4">There is no worksheet to show.</td>
                      </tr>
                  @endif
                  </tbody>
              </table>
              <div class="box-footer no-padding">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <div class="pull-mmiddle" id="pagination">
                    {{ $worksheets->links() }}
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
