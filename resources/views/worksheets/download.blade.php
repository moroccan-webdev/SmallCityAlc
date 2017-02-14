@extends('partials.master')

@section('title')
Download Worksheet
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">Page Download</h2>
                    <h5>Download your file from the download button and leave a feedback if you want to !</h5>
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
                <div class="panel-heading">Download Link</div>
                  <div class="col-md-8">
                    <br>
                    <p>Click on the next button to download The generated PDF of worksheets.</p>
                    <br>
                  </div>
                  <div class="col-md-2 col-md-offset-1">
                    <br>
                    <a href="{{ URL::to( '/pdfs/' . $filename )}}" class="btn btn-warning" target="_blank"><i class="fa fa-download" aria-hidden="true" style="margin-right:3px;"></i>Download</a>
                  </div>

                  <div class="col-md-8">
                    <br>
                    <p>Do you want to leave us a feedback ?</p>
                    <br>
                  </div>
                  <div class="col-md-2 col-md-offset-1">
                    <br>
                    <a href="{{ route('feedbacks.create')}}" class="btn btn-warning" target="_blank"><i class="fa fa-commenting" aria-hidden="true" style="margin-right:3px;"></i>Feedback</a>
                  </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
