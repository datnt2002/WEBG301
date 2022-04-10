@extends('puppywebsite.PuppyWebsiteMaster.PuppyMaster')

@section('main')
    <table width="100%" border="1">
        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Area</th>
            <th>Breeds</th>
            <th>Detail</th>
            <th>Image</th>
            <th>Color</th>
        </tr>
        <tr>
            @foreach($result as $each):
                <td>{{$each->id}}</td>
                <td>{{$each->name}}</td>
                <td>{{$each->gender}}</td>
                <td>{{$each->area}}</td>
                <td>{{$each->breedsID}}</td>
                <td>{{$each->Detail}}</td>
                <td>
                    <img src="{{$each->image}}" alt="">

                </td>
                <td>{{$each->color}}</td>
            @endforeach
        </tr>
    </table>
@endsection