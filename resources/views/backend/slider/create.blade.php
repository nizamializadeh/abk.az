@component('backend.components.form',$setting)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image[]" style="visibility: hidden;" type="file" required class="form-control  post-image" id="postImage" multiple >

                        <label for="postImage" style="cursor: pointer">
                        <img class="img-responsive thumbnail post-img-preview" src="{{asset('admin/images/creat.jpg')}}">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Creat</button>
                </div>
            </div>
        </div>
    </form>
@endcomponent