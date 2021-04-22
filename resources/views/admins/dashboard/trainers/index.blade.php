@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('trainers.create')}}" class="btn btn-round btn-primary">Add Trainer</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All trainer</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Job Title</th>
                            <th>description</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trainers as $trainer)
                        <tr>
                            <td><img src="{{$trainer->image}}" alt="" height="40" width="40" class="rounded-full"></td>
                            <td>{{$trainer->name}}</td>
                            <td>{{$trainer->job_title}}</td>
                            <td>{{Str::limit($trainer->description , 80 , '')}}</td>
                            <td>
                                
                                <a  href="{{route('trainers.edit' , $trainer->id)}}" class="btn btn-round btn-primary"><i
                                        class="nc-icon nc-settings"></i></a>

                                <button   onclick="checkDelete(event)" class="btn btn-round btn-danger"><i
                                        class="nc-icon nc-simple-remove"></i></button>
                               <form action="{{route('trainers.destroy' , $trainer->id)}}" method="post" id="deleteFrom">  
                                @csrf
                                @method('DELETE')
                            </form>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$trainers->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
