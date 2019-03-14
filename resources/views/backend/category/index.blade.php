@extends('layouts.backend')

@section('content')

    <div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul style="    padding: 0px 0px 20px 0px;background: #fff; font-weight: bold;font-size: 20px;">
                        @foreach(languages() as $language)
                            <li class="col-md-2"><a  href="{{route('category.index',['lang_id' => $language->id])}}">{{$language->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="product-status-wrap drp-lst">
                    <h4>Departments List</h4>
                    <div class="add-product">
                        <a href="{{route('category.create')}}">Add Category</a>
                    </div>
                    <div class="asset-inner">
                        <table  id="myTable" class="display">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>logo</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody >
                                @foreach($categories as $category)
                                    {{--model opened --}}
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('category.destroy',['category' => $category->id])}}" method="post">
                                                        {{ method_field('delete') }}
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </form>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{--modal close --}}
                                    <tr class = "item ">
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td><img src="{{asset('uploads/category/'.$category->logo)}}" alt=""> </td>

                                        <td>

                                            <a href="{{route('category.edit',['category' => $category->id])}}"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                            </tbody>
                                @endforeach
                        </table>
                    </div>
                    <div class="custom-pagination">
                        {{--<nav aria-label="Page navigation example">--}}
                            {{--<ul class="pagination">--}}
                                {{--<li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
                            {{--</ul>--}}
                        {{--</nav>--}}
                    </div>
                </div>
            </div>
        </div>



@endsection
