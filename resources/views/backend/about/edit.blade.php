@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('about.update',['about' => $about->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="col-sm-6">
            <div class="form-group form-float">
                <div class="form-line">
                    <input name="header" type="text" required class="form-control" value="{{$about->header}}">
                    <label class="form-label">Header</label>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group form-float">
                <div class="form-line">
                    <input name="number" type="text" required class="form-control" value="{{$about->number}}">
                    <label class="form-label">Number</label>
                </div>
            </div>
        </div>
                 <div class="col-sm-6">
            <div class="form-group form-float">
                <div class="form-line">
                    <input name="image" style="visibility: hidden" type="file"  class="form-control  post-image" id="postImage" >

                    <label for="postImage" style="cursor: pointer">
                    <img class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$about->image)}}">
                    </label>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="form-group form-float">
                    <div class="form-line">
                        <textarea name="contents" id="tinymce" aria-hidden="true"> {{$about->content}} </textarea>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit about</button>
                </div>
            </div>
        </div>
    </form>
@endcomponent