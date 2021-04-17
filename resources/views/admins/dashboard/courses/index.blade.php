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
            <div class="table" id="app">
                {{-- <vue-table :courses = "{{ json_encode($courses) }}" :titles = {{json_encode($titles)}} ></vue-table> --}}
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
                                   

                                <a title="Edit" href="{{ route('courses.edit', $course->id) }}"
                                    class="btn btn-round btn-primary"><i class="nc-icon nc-settings"></i></a>
                                
                                <button title="Delete" onclick="checkDelete(event)"  class="btn btn-round btn-danger"><i
                                class="nc-icon nc-simple-remove"></i></button>

                                <form style="display: none" action="{{ route('courses.destroy', $course->id) }}" method="POST" id ="deleteFrom">
                                    @csrf
                                    @method('DELETE')
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

        {{-- <div id='modal_dialog'>
            <div class='title'>
            </div>
            <input type='button' value='yes' id='btnYes' />
            <input type='button' value='no' id='btnNo' />
        </div> --}}


    </div>

    {{-- <script src="/js/app.js"></script> --}}
@stop
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function checkDelete(e) {
        e.preventDefault();
        var deleteForm = document.getElementById('deleteFrom');
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                deleteForm.submit();
            }
        });
    }


</script>
