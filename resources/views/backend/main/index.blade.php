@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($calls as $call)
        <tr>
            <td>{{$call->id}}</td>
            <td>{{$call->name}}</td>
            <td>{{$call->phone}}</td>
            <td>{{$call->created_at}}</td>
        </tr>
    @endforeach
@endcomponent