@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('events.create')}}" class="btn btn-round btn-primary">Add Event</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All Events</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>Event Name</th>
                            <th>place</th>
                            <th>content</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td>{{$event->name}}</td>
                            <td>{{$event->place}}</td>
                            <td>{{Str::limit($event->content , 80 , '')}}</td>
                            <td>
                                
                            <a  href="{{route('events.edit' , $event->id)}}" class="btn btn-round btn-primary"><i
                                    class="nc-icon nc-settings"></i></a>

                            <button  onclick="checkDelete(event)" class="btn btn-round btn-danger"><i
                                    class="nc-icon nc-simple-remove"></i></button>
                        
                            <form style="display: none" action="{{route('events.destroy' , $event->id)}}" method="post" id="deleteForm">  
                                @csrf
                                @method('DELETE')
                             </form>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$events->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
