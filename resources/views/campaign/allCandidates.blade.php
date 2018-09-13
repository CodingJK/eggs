@extends('layouts.admin')
@section('admin_content')
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Candidate</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Show</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                    <tr >
                        <td>{{$candidate->fullname()}}</td>
                        <td>{{$candidate->email}}</td>
                        <td>{{$candidate->phone}}</td>
                        <td><img src='/storage/upload/{{$candidate->getProperty("path")}}' class='img-thumbnail' style='height
                            :50px;'></td>
                        <td>
                            {{$candidate->getProperty('title')}}
                        </td>
                        <td>
                            <div class="form-check   ">
                                <input type="checkbox" class="form-check-input show" value="{{$candidate->id}}" @if($candidate->display==true) checked @endif>
                              </label>
                            </div>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="6" class='text-center'>
                        {{ $candidates->links() }}
                    </td>
                </tr>
            </tbody>
            
            
        </table>

        <script>
            $('.show').change(function(){
                $.get("/show/"+this.value,     
                     function(data) {
                    console.log(data);       
            })});
        </script>
    

@stop