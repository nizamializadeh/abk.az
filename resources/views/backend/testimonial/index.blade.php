@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($testimonials as $testimonail)
        <tr>
            <td>{{$testimonail->id}}</td>
            {{--<td>--}}
                {{--<img src="{{asset('testimonails/'.$testimonail->image)}}" alt="" width="150">--}}
            {{--</td>--}}

            <td>

                <img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$testimonail->fot)}}">
            </td>
            <td>{{$testimonail->fullname}}</td>
            <td>{!!$testimonail->content!!}</td>
            <td>{{$testimonail->workplace}}</td>
            <td>

                <form action="{{route('testimonial.destroy',['testimonial' => $testimonail->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('testimonial.edit',['testimonial' => $testimonail->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent