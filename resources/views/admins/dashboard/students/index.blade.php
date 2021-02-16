@extends('admins.dashboard.master')

@section('content')


    <td class="text-center">
        <a href="{{ route('students.create') }}" class="btn btn-round btn-primary">Add Student</a>
    </td>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All Students</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table ">
                    <thead class=" text-primary">
                        <tr>
                            <th> Name </th>
                            <th>User Name</th>
                            <th> Phone</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Birthday</th>
                            <th>Level</th>
                            <th>Job title</th>
                            <th>Coures time</th>
                            <th>whenWasthat</th>
                            <th>Whatsapp</th>
                            <th>Email</th>
                            <th> actions</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->username }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->gender == 0 ? 'Male' : 'Female' }}</td>
                                <td>{{ $student->birthday }}</td>
                                <td>{{ $student->level }}</td>
                                <td>{{ $student->job_title }}</td>
                                <td>{{ $student->coures_time }}</td>
                                <td>{{ $student->whenWasthat }}</td>
                                <td>{{ $student->whatsapp }}</td>
                                <td>{{ $student->email }}</td>
                                <td class="btn-rotate dropdown">
                                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Coureses ({{ $student->courses->count() }})
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($student->courses as $course)
                                          <a class="dropdown-item" href="#">{{$course->name}}</a>
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="{{ route('students.edit', $student->id) }}"
                                        class="btn btn-round btn-primary"><i class="nc-icon nc-settings"></i></a>

                                    <button type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>


    </div>

    </div>

    <style>
        

    </style>
@stop
