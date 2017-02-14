@extends('partials.master')

@section('title')
View Request
@endsection

@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="head_title text-center fix">
                  <h2 class="text-uppercase">User Message</h2>
                  <h5>You can switch between messages using the left and right circled arrows</h5>
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
                <div class="col-md-12" id="title">
                    Title: {{$contact->subject}}
                </div>
                <div class="col-md-12" id="title">
                  <div class="col-md-1">
                    <a href="{{ route( 'contacts.show', $previous) }}" class="big_icon"
                       data-toggle="tooltip" title="Previous">
                       <i class="fa fa-arrow-circle-o-left big_icon" aria-hidden="false"></i></a>
                  </div>
                  <div class="col-md-6">
                    <div class="col-sm-12" id="blockonebody">
                        Body : {{$contact->body}}
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="col-sm-10 col-sm-offset-1" id="blockone">
                        Sender : {{$contact->name}}
                    </div>
                    <div class="col-sm-10 col-sm-offset-1" id="blockone">
                        From : {{$contact->email}}
                    </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                        Created At : {{$contact->created_at->diffForHumans()}}
                      </div>
                  </div>
                  <div class="col-md-1">
                    <a href="{{ route( 'contacts.show', $next) }}" class=""
                       data-toggle="tooltip" title="next">
                       <i class="fa fa-arrow-circle-o-right big_icon" aria-hidden="false"></i></a>
                  </div>
                </div>
            </div>
    </div>
</div>
@endsection
