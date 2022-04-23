@extends('PuppyWebsiteMaster.PuppyMaster')
@section('main')
    @include('partials.adminNav')
    @include('partials.LeftNav')
    <div class="container-fluid">
        <div class="content-page" style="padding: 0 0 100px 0">
            <div class="content">
                <table class="table table-striped table-centered mb-0 ">
                    <tr>
                        <th>Breed</th>
                    </tr>
                    @foreach($breed as $each)
                        <tr>
                            <td>{{$each->bread}}</td>
                            <td class="table-action">
                                <a href="{{Route('breed.update',['id'=>$each->id])}}" class="action-icon">
                                    <i class="mdi mdi-pencil"></i></a>
                                <a href="#" class="action-icon">
                                    <i class="mdi mdi-delete"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
