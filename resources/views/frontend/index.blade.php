@extends('layouts.frontend')
@section('content')
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color:#36434e;width: 85%">
                <div class="modal-header" style="border: none;">
                    <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="table" style="    padding: 0px 46px;">
                            <div class="row" >
                                <div class="cell" style="color: white;font-family: arial;"><label for="call_fullname">Ad Soyad</label></div>
                                <div class="cel" style="padding-left: 76px"><input type="text" name="name"  class="form-control"></div>
                            </div>

                            <div class="row" >
                                <div class="cell" style="color: white;font-family: arial;"><label for="call_fullname">Telefon nömrəsi</label></div>
                                <div class="cel" style="padding-left: 38px"><input type="text" name="phone"  class="form-control"></div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button style="background-color: #F28F00" type="button" class="btn btn-secondary" data-dismiss="modal">
                        Zənginizi gözləyirəm
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div role="main" class="main">

        <div class="slider-container rev_slider_wrapper" style="max-height: 500px;">
            <div style="max-height: 500px" id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li data-transition="fade" class="slide-overlay slide-overlay-level-7">
                        <img  style="opacity: 1" src="{{asset('frontend/img/testimg.jpg')}}" alt="Banner">
                    </li>
                     <li data-transition="fade" class="slide-overlay slide-overlay-level-7">
                         <img src="{{asset('frontend/img/infonumdec-copie-1519x500.jpg')}}" alt="Banner">
                     </li>
                </ul>
            </div>
        </div>
        <div class=" register">
            <div class="row">
                <div class="col-md-6 register-left">
                    <p class="helvetica" style="color: #fff;font-size: 20px;">Amazon Biznesinizə bizim Təcrübəli komandamızla başlamaq istəyirsinizsə qeydiyyatdan keçin</p>
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
                                            <input type="text" required="required" class="form-control" placeholder="Ad *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="required" class="form-control" placeholder="Soyad *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Yaş" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="email" required="required" class="form-control" placeholder="Email *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" required="required"  name="txtEmpPhone" class="form-control" placeholder="Telefon *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text"   name="txtEmpPhone" class="form-control" placeholder="Şəhər" value="" />
                                            </div>
                                            <input style="background-color:#F28F00" type="submit" class="btnRegister col-md-12"  value="QEYDIYYATDAN KEÇ"  >
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
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                <div class="testimonial-author">
                                    <img  style="width: 120px;" src="{{asset('frontend/img/test32111.jpg')}}" class="img-fluid rounded-circle"  alt="Banner">

                                </div>
                                <blockquote>
                                    <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-3">- John Smith</strong></p>
                                </div>
                                <div>
                                    <p class="text-color-dark text-2 line-height-5 mb-0">Micrasoft.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
                                <div class="testimonial-author">
                                    <img src="img/clients/client-1.jpg" class="img-fluid rounded-circle" alt="">
                                </div>
                                <blockquote>
                                    <p class="text-color-dark text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                                </div>
                            </div>
                        </div>\

                    </div>

                </div>
            </div>
        </div>
    </section>



    </div>
@endsection