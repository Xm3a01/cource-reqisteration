@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('galleries.create')}}" class="btn btn-round btn-primary">Add Event</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All galleries</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>title</th>
                            <th>content</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $gallery)
                        <tr>
                            <td>{{$gallery->title}}</td>
                            <td>{{Str::limit($gallery->content , 80 , '')}}</td>
                            <td>
                                
                                <a  href="{{route('galleries.edit' , $gallery->id)}}" class="btn btn-round btn-primary"><i
                                        class="nc-icon nc-settings"></i></a>

                                <button   onclick="checkDelete(event)" class="btn btn-round btn-danger"><i
                                        class="nc-icon nc-simple-remove"></i></button>
                            <form action="{{route('galleries.destroy' , $gallery->id)}}" method="post" id="deleteFrom" style="display:none" >  
                                @csrf
                                @method('DELETE')
                            </form>

                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$galleries->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
