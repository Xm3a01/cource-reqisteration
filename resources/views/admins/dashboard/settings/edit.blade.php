@extends('admins.dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Trainer</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('settings.update' , $setting->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$setting->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pl-3">
                            <div class="form-group">
                                <label for="image"> <button type="submit" class="btn btn-primary ">Upload brand 
                                        image</button></label>
                                <input type="file" class="form-control" placeholder="" name="image">

                            </div>
                        </div>
                    </div>

                    <h4>Meida Links</h4>
                    <hr>

                    <div class="mediaForm">
                        @foreach ($mediaTypes as $index => $type)
                            <div class="row">
                                <div class="col-md-4 pl-3">
                                    <div class="form-group row">
                                        <input type="checkbox" {{ $index == 0 ? 'checked hidden' : '' }}
                                            class="form-control col-md-4" id="media_{{ $index }}"
                                            onchange="event.preventDefault(); showField(this.id , {{ $index }})" id="">
                                        <label for="twitter" class="col-md-8">{{ $type }}</label>
                                    </div>
                                </div>

                                <div class="col-md-8 pl-5">
                                    <div class="form-group" id="url_{{ $index }}" style="display: none">
                                        <input type="text" value="{{ $index == 0 ? 'value' : '' }}" name="link[]" id=""
                                            class="form-control" placeholder="Media Url">
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Save Cahnage</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@stop

@section('scripts')
@endsection
<script>
    function showField(id, i) {
        console.log(id)
        if (id == 'media_' + i) {
            checkbox = document.getElementById('media_' + i);
            if (checkbox.checked)
                item = document.getElementById('url_' + i).style.display = "inline";
            else
                item = document.getElementById('url_' + i).style.display = "none";
        }
    }

</script>
