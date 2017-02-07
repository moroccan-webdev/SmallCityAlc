@extends('partials.master')

@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="head_title text-center fix">
                  <h2 class="text-uppercase">students</h2>
                  <h5>All students are listed in the following div</h5>
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
                    Student Name : {{$shower->name}}
                </div>
                <div class="col-md-12" id="title">
                  <div class="col-md-1">
                    <a href="{{ route( 'showers.show', $previous) }}" class="big_icon"
                       data-toggle="tooltip" title="Previous">
                       <i class="fa fa-arrow-circle-o-left big_icon" aria-hidden="false"></i></a>
                  </div>
                  <div class="col-md-6">
                     <img src="/images/{{ $shower->image}}" id="image">
                  </div>
                  <div class="col-md-4">
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Email : {{$shower->email}}
                      </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Class : {{$shower->class}}
                      </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Stars :
                          @for ($i = 0; $i <= $shower->stars; $i++)
                              <i class="fa fa-star" aria-hidden="true"></i>
                          @endfor
                      </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Teacher : {{$shower->teacher}}
                      </div>
                      <div class="col-sm-10 col-sm-offset-1" id="blockone">
                          Created At : {{$shower->Created_at}}
                      </div>
                  </div>
                  <div class="col-md-1">
                    <a href="{{ route( 'showers.show', $next) }}" class=""
                       data-toggle="tooltip" title="next">
                       <i class="fa fa-arrow-circle-o-right big_icon" aria-hidden="false"></i></a>
                  </div>
                </div>
            </div>
    </div>
</div>
@endsection
