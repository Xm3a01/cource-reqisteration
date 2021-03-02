@extends('admins.dashboard.master')

@section('content')

    <td class="text-center">
        <a href="{{ route('managers.create') }}" class="btn btn-round btn-primary">Add Manager</a>
    </td>

    <div class="card">
        <div class="card-header custom-table">
            <h4 class="card-title"> All Managers</h4>
        </div>
        <div class="card-body">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th> Phone</th>
                            <th> Whatsapp</th>
                            <th> Adress</th>
                            <th> Gender</th>
                            <th>Course belong to</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($managers as $manager)

                            <tr>
                                <td>{{ $manager->id }}</td>
                                <td>{{ $manager->name }}</td>
                                <td>{{ $manager->email }}</td>
                                <td>{{ $manager->phone }}</td>
                                <td>{{ $manager->whatsapp }}</td>
                                <td>{{ $manager->address }}</td>
                                <td>{{ $manager->gender == 0 ? 'Male' : 'Female' }}</td>
                                <td class="btn-rotate dropdown"> 
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Courses({{ $manager->courses->count() }})
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($manager->courses as $item)   
                                           <li class="dropdown-item" >{{$item->name}}</li>
                                        @endforeach
                                    </div>
                                   </td>

                                <td>
                                    <form action="{{ route('managers.destroy', $manager) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('managers.edit', $manager) }}" class="btn btn-round btn-primary"><i
                                                class="nc-icon nc-settings"></i></a>

                                        <button type="submit" class="btn btn-round btn-danger"><i
                                                class="nc-icon nc-simple-remove"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{$managers->links()}}
            </div>
        </div>


    </div>


@stop
