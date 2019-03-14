@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($abouts as $about)
        <tr>
            <td>{{$about->id}}</td>
            <td>
                <img width="150" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$about->image)}}">
            </td>
            <td>{{$about->header}}</td>
            <td>{!! $about->content !!}</td>
            <td>{{$about->number}}</td>

            <td>
                <form action="{{route('about.destroy',['about' => $about->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('about.edit',['about' => $about->id])}}"><i class="material-icons">edit</i></a>

                </form>
            </td>
        </tr>
    @endforeach
@endcomponent