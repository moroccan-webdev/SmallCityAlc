<nav class="navbar navbar-default bootsnav navbar-fixed">
    <div class="navbar-top bg-grey fix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-callus text-left sm-text-center">
                        <ul class="list-inline">
                            <li><a href=""><i class="fa fa-phone"></i> Call us: +(212) 673 252 728</a></li>
                            <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: mohammed.msassi@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navbar-socail text-right sm-text-center">
                        <ul class="list-inline" >
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <!--<li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>-->
                            @if (Auth::guest())
                            <li>
                              {!! Form::open(['route' => 'login', 'method' => 'get']) !!}
                                <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
                              {!! Form::close() !!}
                            </li>
                            <li>
                              {!! Form::open(['route' => 'register', 'method' => 'get']) !!}
                                <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                              {!! Form::close() !!}
                            </li>
                            @else
                            <li>
                              {!! Form::open(['route' => 'logout', 'method' => 'POST']) !!}
                                <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-sign-out" aria-hidden="true"></i></button>
                              {!! Form::close() !!}
                            </li>
                            <li>
                            <div>
                              <img src="/images/{{Auth::user()->avatar}}" alt=""  id="avatar">
                            </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div>
   </div>

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->


    <div class="container">
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#brand">
                <img src="{{url('assets/images/logo.png')}}" class="logo" alt="">

                <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
            </a>

        </div>
        <!-- End Header Navigation -->

        <!-- navbar menu -->

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::guest() || Auth::user()->isTeacher() || Auth::user()->isStudent())
              <li id="headlinks" class="{{ Request::is('/') ? "active":""}}"><a href="{{ url('/') }}">Home</a></li>
              <li><a href="#features">About</a></li>
              <li><a href="#business">Service</a></li>
              <li id="headlinks" class="{{ Request::is('contacts/create') ? "active":""}}"><a href="{{ url('contacts/create') }}">Contact Us</a></li>
              <li id="headlinks" class="{{ Request::is('plan') ? "active":""}}"><a href="{{ url('/plan') }}">Plan</a></li>
              @elseif (Auth::user()->isAdmin())

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users
                    <span class=""></span></a>
                       <ul class="dropdown-menu">
                         <li ><a href="{{ route('users.index') }}">All Users</a></li>
                         <li ><a href="{{ route('users.create') }}">Create User</a></li>
                       </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Slots
                    <span class=""></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="{{ route('slots.index') }}">All Slots</a></li>
                         <li><a href="{{ route('slots.create') }}">Create Slot</a></li>
                       </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Roleplays
                    <span class=""></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="{{ route('roleplays.index') }}">All Roleplays</a></li>
                         <li><a href="{{ route('roleplays.create') }}">Create Roleplay</a></li>
                       </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Worksheets
                    <span class=""></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="{{ route('worksheets.index') }}">All Worksheets</a></li>
                         <li><a href="{{ route('worksheets.create') }}">Create Worksheet</a></li>
                       </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Feedbacks
                    <span class=""></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="{{ route('feedbacks.index') }}">All Feedbacks</a></li>
                         <li><a href="{{ route('feedbacks.create') }}">Create Feedback</a></li>
                       </ul>
                </li>

                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts
                    <span class=""></span></a>
                       <ul class="dropdown-menu">
                         <li><a href="{{ route('contacts.index') }}">All Contacts</a></li>
                         <li><a href="{{ route('contacts.create') }}">Create Contact</a></li>
                       </ul>
                </li>

                <li id="headlinks" class="{{ Request::is('/') ? "active":""}}"><a href="{{ url('/') }}">Home</a></li>
                <li id="headlinks"><a href="">Service</a></li>
                <li id="headlinks" class="{{ Request::is('contacts/create') ? "active":""}}"><a href="{{ url('contacts/create') }}">Contact Us</a></li>
                <li id="headlinks" class="{{ Request::is('plan') ? "active":""}}"><a href="{{ url('/plan') }}">Plan</a></li>
                @endif

            </ul>
        </div><!-- /.navbar-collapse -->
    </div>

</nav>
