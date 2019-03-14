@extends('layouts.frontend')
@section('content')
    <div role="main" class="main">

        <div class="slider-container " style="max-height: 500px;">
            <div style="max-height: 500px" id="revolutionSlider" class="slider " data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    {{--rev_slider--}}
                    {{--rev_slider_wrapper--}}
                @foreach($sliders as $slider)
                    <li data-transition="fade" class="slide-overlay slide-overlay-level-7">
                        <img class="img-responsive"  style="opacity: 1" src="{{asset('photo/'.$slider->image)}}" alt="Banner">
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class=" register">
            <div class="row">
                <div class="col-md-6 register-left">
                    <p class="pppp" style="color: #fff;">Amazon Biznesinizə bizim Təcrübəli komandamızla başlamaq istəyirsinizsə qeydiyyatdan keçin</p>
                </div>
                <div class="col-md-6 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!--<h3 class="register-heading">Apply as a Employee</h3>-->
                            <form action="/mail" method="post">
                                @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="name" type="text" required="required" class="form-control" placeholder="Ad *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="surname" type="text" required="required" class="form-control" placeholder="Soyad *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input name="city" type="text" class="form-control" placeholder="Şəhər" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" required="required"   class="form-control" placeholder="Email *" value="" />
                                        </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" required="required"   class="form-control" placeholder="Telefon *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text"   name="age" class="form-control" placeholder="Qeyd" value="" />
                                            </div>
                                            <input style="background-color:#F28F00" type="submit" class="btnRegister col-md-12"  value="QEYDIYYATDAN KEÇ"  >
                                    </div>
                                </div>
                            </form>

                            <!-- 											<input style="     margin: 0 auto ;background-color:#F28F00; width:30%;border: none;
                            border-radius: 1.5rem;margin-top: 2%;cursor: pointer;background: #F28F00;color: #fff;font-weight: 600;" type="submit" class="btnRegister"  value="Register"/ > -->

                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <section class="section section-height-3 bg-color-grey-scale-1 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row">
                <div class="col appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">

                       @foreach($testimonials as $testimonial)

                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                    <div class="testimonial-author">
                                        <img  style="width: 120px;" src="{{asset('photo/'.$testimonial->fot)}}" class="img-fluid rounded-circle"  alt="Banner">


                                    </div>
                                    <blockquote>
                                        <p class="text-color-dark text-5 line-height-5 mb-0">{!! $testimonial->content !!}</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-3">{{$testimonial->fullname}}</strong></p>
                                    </div>
                                    <div>
                                        <p class="text-color-dark text-2 line-height-5 mb-0">{{$testimonial->workplace}}.</p>
                                    </div>
                                </div>
                            </div>
                           @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>



    </div>
@endsection