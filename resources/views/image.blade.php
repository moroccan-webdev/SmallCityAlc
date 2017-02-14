@extends('partials.master')

@section('title')
Plan
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="main_test fix">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="head_title text-center fix">
                    <h2 class="text-uppercase">The Plan Of Small City</h2>
                    <!--<h5>Fill the following form in order to add a new user to the database</h5>-->
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
                <div class="panel-heading">Small City Architecture</div>
                  <div class="col-md-12 col-sm-12 col-xs-12" id="smallcityplan">
                      <div class="col-md-4" id="imagediv">
                        hero
                      </div>
                      <div class="col-md-4" id="imagediv">
                        hero two
                      </div>
                      <div class="col-md-4" id="imagediv">
                        hero three
                      </div>
                      <div class="col-md-4" id="imagediv">
                        hero
                      </div>
                      <div class="col-md-4" id="imagediv">
                        hero two
                      </div>
                      <div class="col-md-4" id="div1">
                        <div id="div">
                          this is the embeded dev
                        </div>
                      </div>
                      <div class="col-md-4" id="imagediv">
                        hero
                      </div>
                      <div class="col-md-4" id="imagediv">
                        hero two
                      </div>
                      <div class="col-md-4" id="imagediv">
                        hero three
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$(document).ready(function(){
    $("#div1").mouseleave(function(){
        $("#div").hide(1000);
    });
    $("#div1").mouseenter(function(){
        $("#div").show(1000);
    });

});
</script>
@endsection
