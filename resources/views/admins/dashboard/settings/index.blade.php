@extends('admins.dashboard.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> Side settings</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                @if(!is_null($setting))
                    <thead class=" text-primary">
                        <tr>
                            <th>Barnd Image</th>
                            <th>Name</th>
                            <th>Action </th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><img src="{{ $setting->images[1]->getUrl() ?? '' }}" alt="" height="40" width="40" class="rounded-full">
                            </td>
                            <td>{{ $setting->name ?? '' }}</td>
                            <td>

                                <a href="{{ route('settings.edit', $setting->id ?? '') }}"
                                    class="btn btn-round btn-primary"><i class="nc-icon nc-settings"></i></a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @else
                    <a href="{{route('settings.create')}}">Create new Setting</a>
                    @endif
                </table>
            </div>
        </div>
    </div>
    </div>

@stop
