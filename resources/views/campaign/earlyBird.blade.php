@extends('layouts.admin') 
@section('admin_content')
<style>
    td,
    th {
        vertical-align: middle !important;
    }
</style>
<table class="table table-striped">
    <thead>
        <tr>
            <th colspan=6>
                <a href="/allCandidates" class="btn btn-primary">Back to all candidates</a>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Candidate</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($candidates as $candidate)
        <tr id='tr{{$candidate->id}}' @if ($candidate->display==true) class='danger' @endif>
            <td>{{$candidate->id}}</td>
            <td style='
                            background-image:url("/upload/{{$candidate->images_sm}}");
                            background-position:center;
                            background-size:contain;
                            height:80px;
                            background-repeat:no-repeat;
                            cursor:pointer;
                        ' data-toggle="modal" data-target="#{{$candidate->id}}">
                {{-- <img src='' class='img-thumbnail' style='height:100px;'> --}}
            </td>

            <td>{{$candidate->fullname()}}</td>
            <td valign="middle">{{$candidate->phone}}</td>
            <td>{{$candidate->email}}</td>
            <td>{{$candidate->created_at}}</td>
            


            <!-- Modal -->
            <div class="modal fade" id="{{$candidate->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Candidate ID: {{$candidate->id}} / Candidate Name: {{$candidate->fullname()}}</h4>
                        </div>
                        <div class="modal-body">
                            <img src="/upload/{{$candidate->images}}" alt="" style='width:100%;' class='img-fluid img-thumbnail'>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </tr>
        @endforeach

        <tr>
            <td colspan=6>
                <div class="text-center">
                    {{ $candidates->links() }}
                </div>
            </td>
        </tr>
    </tbody>


</table>





@stop