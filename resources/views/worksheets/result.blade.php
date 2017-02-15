@extends('partials.master')

<!-- Downloadable version of styleshee as a view blade -->

@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="head_title text-center fix">
                  <h2 class="text-uppercase">Users</h2>
                  <h5>All users are shown in the following div</h5>
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
          @if($array)
            @foreach($array as $random_roleplays)
            <h1>worksheet </h1>
              @foreach($random_roleplays as $roleplay)
                <div class="col-md-10 col-md-offset-1">
                <div class="col-md-12" id="title">
                  <div class="col-md-8">
                    <div class="col-sm-12" id="blockone">
                        Roleplay: {{$roleplay->name}}
                    </div>
                    <div class="col-sm-12" id="blockonebody">
                        Body : {{strip_tags($roleplay->body)}}
                    </div>
                  </div>
                  <div class="col-md-4">
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          City : {{$roleplay->city}}
                      </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Center : {{$roleplay->center}}
                      </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Level : {{$roleplay->level->level}}
                      </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Created At : {{$roleplay->created_at}}
                      </div>
                  </div>
                </div>
            </div>
              @endforeach
            @endforeach
          @endif
    </div>
</div>
@endsection
