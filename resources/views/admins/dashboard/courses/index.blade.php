@extends('admins.dashboard.master')

@section('content')

@if (!Auth::guard('admin')->user()->is_supervisor)
    <td class="text-center">
        <a href="{{ route('courses.create') }}" class="btn btn-round btn-primary">Add Course</a>
    </td>
@endif
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All Courses</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>image</th>
                            <th>Course Name</th>
                            <th>H/week</th>
                            <th>Monthes</th>
                            <th>feeses</th>
                            <th>seats</th>
                            <th>description</th>
                            @if (!Auth::guard('admin')->user()->is_supervisor)
                            <th>actions</th>
                            @else 
                            <th>students</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)

                            <tr>
                                <td> <img src="{{ $course->image ? $course->image  : asset('assets/images/noImage.png') }}" alt="Image" height="45" width="45"></td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->h_week }}</td>
                                <td>{{ $course->monthes }}</td>
                                <td>{{ $course->feeses }}</td>
                                <td>{{ $course->seats }}</td>
                                <td>{{ Str::limit($course->description, 40) }}</td>

                                @if (!Auth::guard('admin')->user()->is_supervisor)
                                <td>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a title="Edit" href="{{ route('courses.edit', $course->id) }}"
                                            class="btn btn-round btn-primary"><i class="nc-icon nc-settings"></i></a>
                                        <button title="Delete" type="submit" class="btn btn-round btn-danger"><i
                                                class="nc-icon nc-simple-remove"></i></button>
                                    </form>

                                </td>
                                @else
                                <td>
                                    <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Coureses ({{ $course->students->count() }})
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        @foreach ($course->students as $student)
                                          <a class="dropdown-item" href="#">{{$student->name}}</a>
                                        @endforeach
                                    </div>
                                </td>
                                @endif
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $courses->links() }}
            </div>
        </div>


    </div>

@stop
