@component('backend.components.form',$settings)
    {{-- Component content--}}
        <form id="form_validation" action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="fot" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img class="img-responsive thumbnail post-img-preview" src="{{asset('admin/images/image-gallery/thumb/thumb-15.jpg')}}">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="fullname" type="text" required class="form-control">
                        <label class="form-label">Full name</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="workplace" type="text" required class="form-control">
                        <label class="form-label">Company</label>
                    </div>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                       <textarea name="contentss" id="tinymce" aria-hidden="true"> </textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Create testimonail</button>
                </div>
            </div>
        </div>
    </form>
@endcomponent