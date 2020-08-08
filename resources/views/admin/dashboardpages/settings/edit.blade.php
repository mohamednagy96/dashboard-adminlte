@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'Setting'])

            <form action="{{ route('admin.settings.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="app_name">App name</label>
                    <input type="text" name="app_name" class="form-control @error('app_name') is-invalid @enderror" id="app_name"
                           placeholder="App name" value="{{ old('app_name', config('settings.app_name')) }}">
                    @error('app_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Change Setting</button>
            </form>
        </div>
    </div>
@endsection