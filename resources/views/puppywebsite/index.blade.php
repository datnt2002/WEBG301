@extends('puppywebsite.PuppyWebsiteMaster.PuppyMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
@endsection

@section('main')
    <div class="content-page">
        <div class="content">

            <div class="container-fluid">
                <!-- start page title -->

                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <a href="#" class="btn btn-danger mb-2"><i
                                                class="mdi mdi-plus-circle mr-2"></i> Add Products</a>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <div id="products-datatable_wrapper"
                                         class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">

                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div id="products-datatable_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search"
                                                                         class="form-control form-control-sm"
                                                                         placeholder=""
                                                                         aria-controls="products-datatable">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table
                                                    class="table table-centered w-100 dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                                    id="products-datatable" role="grid"
                                                    aria-describedby="products-datatable_info" style="width: 1199px;">
                                                    <thead class="thead-light">
                                                    <tr role="row">
                                                        <th class="all">
                                                            Pet
                                                        </th>
                                                        <th class="all">
                                                            Name
                                                        </th>
                                                        <th class="all">
                                                            area
                                                        </th>
                                                        <th class="all">
                                                            Breed
                                                        </th>
                                                        <th class="all">
                                                            color
                                                        </th>
                                                        <th class="all"></th>
                                                        <th class="all"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pets as $each):
                                                    <tr role="row">
                                                        <td class="sorting_1">
                                                            <img src="{{$each->image}}"
                                                                 alt="contact-img"
                                                                 title="contact-img" class="rounded mr-3" height="48">
                                                        </td>
                                                        <td>
                                                            {{$each->name}}
                                                        </td>
                                                        <td style="">
                                                            {{$each->area}}
                                                        </td>
                                                        <td style="">
                                                            {{$each->breedsID}}
                                                        </td>

                                                        <td>
                                                            {{$each->color}}
                                                        </td>

                                                        <td>
                                                            <button class="btn btn-info"><a href=""></a>Update</button>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger"> <a href=""></a>Delete</button>
                                                        </td>

                                                        <td class="table-action" style="display: none;">
                                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                                    class="mdi mdi-eye"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                                    class="mdi mdi-square-edit-outline"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon"> <i
                                                                    class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                     id="products-datatable_paginate">
                                                    <ul class="pagination pagination-rounded">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="products-datatable_previous"><a href="#"
                                                                                                aria-controls="products-datatable"
                                                                                                data-dt-idx="0"
                                                                                                tabindex="0"
                                                                                                class="page-link"><i
                                                                    class="mdi mdi-chevron-left"></i></a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                                                        aria-controls="products-datatable"
                                                                                                        data-dt-idx="1"
                                                                                                        tabindex="0"
                                                                                                        class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                                                  aria-controls="products-datatable"
                                                                                                  data-dt-idx="2"
                                                                                                  tabindex="0"
                                                                                                  class="page-link">2</a>
                                                        </li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                                                  aria-controls="products-datatable"
                                                                                                  data-dt-idx="3"
                                                                                                  tabindex="0"
                                                                                                  class="page-link">3</a>
                                                        </li>
                                                        <li class="paginate_button page-item next"
                                                            id="products-datatable_next">
                                                            <a href="#" aria-controls="products-datatable"
                                                               data-dt-idx="4"
                                                               tabindex="0" class="page-link"><i
                                                                    class="mdi mdi-chevron-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>
    </div>
@endsection


{{--@section('main')--}}
{{--    <div class="container-fluid" >--}}

{{--            <div class="col-lg-9 ">--}}
{{--                <div class="right">--}}
{{--                    <table class="table ">--}}
{{--                        <thead class="thead-dark">--}}
{{--                        <tr>--}}
{{--                            <th>ID</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Gender</th>--}}
{{--                            <th>Area</th>--}}
{{--                            <th>Breeds</th>--}}
{{--                            <th>Detail</th>--}}
{{--                            <th>Image</th>--}}
{{--                            <th>Color</th>--}}
{{--                            <th>Function</th>--}}
{{--                            <th>Function</th>--}}
{{--                        </tr>--}}

{{--                            @foreach($pets as $each):--}}
{{--                        <tr>--}}
{{--                            <td>{{$each->id}}</td>--}}
{{--                            <td>{{$each->name}}</td>--}}
{{--                            <td>{{$each->gender}}</td>--}}
{{--                            <td>{{$each->area}}</td>--}}
{{--                            <td>{{$each->breedsID}}</td>--}}
{{--                            <td>{{$each->Detail}}</td>--}}
{{--                            <td>--}}

{{--                                <img src="{{$each->image}}" alt="Khong co anh">--}}
{{--                            </td>--}}
{{--                            <td>{{$each->color}}</td>--}}
{{--                            <td>--}}
{{--                                <button class="btn btn-info"><a href=""></a>Update</button>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <button class="btn btn-danger"> <a href=""></a>Delete</button>--}}
{{--                            </td>--}}
{{--                            @endforeach--}}
{{--                        </tr>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--@endsection--}}
