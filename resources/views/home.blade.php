@extends('partials.master')

@section('title')
Home
@endsection

@section('content')
<section id="business" class="business bg-grey roomy-70">
    <div class="container">
        <div class="row">
            <div class="main_business">
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
                <div class="col-md-6">
                    <div class="business_slid">
                        <div class="slid_shap bg-grey"></div>
                        <div class="business_items text-center">
                            <div class="business_item">
                                <div class="business_img">
                                    <img src="assets/images/about-img1.jpg" alt="" />
                                </div>
                            </div>

                            <div class="business_item">
                                <div class="business_img">
                                    <img src="assets/images/about-img2.jpg" alt="" />
                                </div>
                            </div>

                            <div class="business_item">
                                <div class="business_img">
                                    <img src="assets/images/about-img3.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="business_item sm-m-top-50">
                        <h2 class="text-uppercase"><strong>SmallCity</strong> Project is made for you</h2>
                        <ul>
                            <li><i class="fa fa-arrow-circle-right"></i> Put Your Students In Real Life Situations</li>
                            <li><i class="fa  fa-arrow-circle-right"></i> To Practice English and To</li>
                            <li><i class="fa  fa-arrow-circle-right"></i> Speak As Native Speakers.</li>
                        </ul>
                        <p class="m-top-20">The atmosphere in the studio is bright, friendly and lively where you are bound
                           to meet new people whilst learning new creative skills.Our workshops are delivered by a team of
                           experienced professional artists. Before you join, we will invite you to come for a chat and to
                           look around to find out what interests you and to slot you into the right workshop for you.</p>

                        <div class="business_btn">
                          @if(Auth::guest())
                            {!! Form::open(['route' => 'login', 'method' => 'get']) !!}
                              <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-calendar" aria-hidden="true" style="padding-right:6px;"></i>Join A Workshop</button>
                            {!! Form::close() !!}
                          @elseif(Auth::user()->isAdmin() || Auth::user()->isTeacher())
                          <a href="{{ route('worksheets.create') }}" class="btn btn-primary m-top-20"><i class="fa fa-calendar" aria-hidden="true" style="padding-right:6px;"></i>Join A Workshop</a>
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End off Business section -->

<!--product section-->
<section id="product" class="product">
    <div class="container">
        <div class="main_product roomy-80">
            <div class="head_title text-center fix">
                <h2 class="text-uppercase">Last Term Workshops</h2>
                <h5>The performance of the Alc Tangier is increasing and it was very amazing in the last term</h5>
            </div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img1.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img1.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Cinema Roleplay</h5>
                                            <h6>- Amin Imran</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img2.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img2.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Coffe Roleplay</h5>
                                            <h6>- Mohammed Msassi</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img3.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img3.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Interview Roleplay</h5>
                                            <h6>- Rania Elidrissi</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img4.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img4.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Market Roleplay</h5>
                                            <h6>- Daniel Robin</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img1.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img1.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img2.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img2.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img3.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img3.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img4.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img4.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img1.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img1.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img2.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img2.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img3.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img3.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="port_item xs-m-top-30">
                                        <div class="port_img">
                                            <img src="assets/images/work-img4.jpg" alt="" />
                                            <div class="port_overlay text-center">
                                                <a href="assets/images/work-img4.jpg" class="popup-img">+</a>
                                            </div>
                                        </div>
                                        <div class="port_caption m-top-20">
                                            <h5>Your Work Title</h5>
                                            <h6>- Graphic Design</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!-- End off row -->
    </div><!-- End off container -->
</section><!-- End off Product section -->

@endsection

@section('scripts')

@endsection
