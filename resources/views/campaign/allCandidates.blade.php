@extends('layouts.admin')
@section('admin_content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Candidate</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>City</th>
                <th>Image</th>
                <th>Title</th>
                <th>Votes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($candidates as $candidate)
                <tr>
                    <td>{{$candidate->fullname()}}</td>
                    <td>{{$candidate->email}}</td>
                    <td>{{$candidate->phone}}</td>
                    <td>{{$candidate->city}}</td>
                    <td><img src='/storage/upload/{{$candidate->getProperty("path")}}' class='img-thumbnail' style='height
                        :50px;'></td>
                    <td>{{$candidate->getProperty('title')}}</td>
                    <td>{{$candidate->getProperty('votes')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop