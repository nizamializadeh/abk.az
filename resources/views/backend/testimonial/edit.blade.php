@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('testimonial.update',['testimonial' => $testimonial->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="fot" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$testimonial->fot)}}">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="fullname" type="text" required class="form-control" value="{{$testimonial->fullname}}">
                        <label class="form-label">Name</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="workplace" type="text" required class="form-control" value="{{$testimonial->workplace}}">
                        <label class="form-label">Company</label>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <textarea name="contents" id="tinymce" aria-hidden="true"> {{$testimonial->content}} </textarea>
                    </div>
                    <label class="form-label">Message</label>

                </div>
            </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit testimonail</button>
                </div>
            </div>
        </div>
    </form>
@endcomponent