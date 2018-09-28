@extends('layouts.admin') 
@section('admin_content')
    <style>
        .gp{
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 600px;
            align-items: center;
        }
    </style>
    <div class="gp">
    
        @if ($gp)
            <div class="container text-center">
                <div>
                <h4>Grand Prize : {{$gp->fullname()}}</h4>
                </div>
                <img src="/upload/{{$gp->images}}" alt="" width="80%">
            </div>

        @else
        <h3>Grand Prize is not selected. </h3>
        
        @endif
        <div class="container text-right" style='margin-top:30px;'>
            @if ($gp)<a href="/changeGP" class="btn btn-warning">Change Grand Prize</a>@endif
            <a href="/allCandidates" class="btn btn-primary">Back to all candidates</a> 
        </div>    
    </div>

    



@stop