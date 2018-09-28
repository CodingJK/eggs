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
        <tr style='border:none;'>
            <th colspan="4" class='text-left'>
                <a href="/allCandidates" class="btn btn-primary">Back to all candidates</a> 
            </th>
            <th colspan="4" class='text-right'>
                (<span id="spnumber"></span>/10)SP = Secondary Prize
            </th>

        </tr>
        <tr>
            <th colspan="8" class='text-right'>DQ = Disqualified</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Candidate</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Time</th>
            <th>DQ</th>
            <th>SP</th>
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
            <td>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input show" value="{{$candidate->id}}" @if($candidate->display==true)
                    checked @endif>
                    </label>
                </div>
            </td>
            <td>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input sp" id='sp{{$candidate->id}}' value="{{$candidate->id}}" @if($candidate->sp==true)
                    checked @endif @if ($candidate->display==true ) disabled @endif>
                    </label>
                </div>
            </td>
            


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
            <td colspan='8' >
                <div class="text-center">
                    {{ $candidates->links() }}
                </div>
            </td>
        </tr>


    </tbody>


</table>

<script>
    getPrizeNumber();
            $('.show').change(function(){
                let that = this;
                $.get("/show/"+this.value,    
                function(data){
                    if (data.candidate.display==true){
                        $('#tr'+data.candidate.id).addClass('danger');
                        $('#sp'+data.candidate.id).attr('disabled',true);
                        $('#gp'+data.candidate.id).attr('disabled',true);
                        $("#sp"+data.candidate.id)[0].checked = false;
                        $("#gp"+data.candidate.id)[0].checked = false;
                    }else{
                        $("#tr"+data.candidate.id).removeClass('danger');
                        $('#sp'+data.candidate.id).attr('disabled',false);
                        $('#gp'+data.candidate.id).attr('disabled',false);
                    }
                });
                getPrizeNumber();
           });

           $('.sp').change(function(){
               var that = this;
                $.get("/sp/"+this.value,    
                function(data){
                    if (data.sp_number=="FULL") {
                        alert("There are already 10 Secondary Prizes now.");
                        that.checked = false;
                    }else{
                        if (data.candidate.sp==true){
                            $("#gp"+data.candidate.id)[0].checked = false;
                        }else{
                            
                        }
                    }
                });
                getPrizeNumber();    
           });

           $('.gp').change(function(){
               var that = this;
                $.get("/gp/"+this.value,    
                function(data){
                    if (data.sp_number=="FULL") {
                        alert("There are already 1 Grand Prizes now.");
                        that.checked = false;
                    }else{
                        if (data.candidate.gp==true){
                            $("#sp"+data.candidate.id)[0].checked = false;
                        }else{
                            
                        }
                    }
                });
                getPrizeNumber();     
           });

           function getPrizeNumber(){
               $.get('/prizeNumber',function(data){
                   $('#spnumber').text(data.sp);
                   $('#gpnumber').text(data.gp);
               });
           }
</script>



@stop