@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'users', 'create' => route('admin.users.create'),'Side_address'=> 'Create User'])

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('name') }}</th>
            <th>{{ __('email') }}</th>
            <th>{{ __('Created at') }}</th>
            <th>{{ __('Action') }}</th>

        </tr>
    </thead>
    <tbody >
        @forelse ($users as $user)
        {{-- {{dd( $user->image)}} --}}
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{$user->created_at ?  $user->created_at->diffForHumans() : null}}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-xs">
                        <span class="fa fa-pencil-ruler"></span>
                    </a>  
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" id="delete-modal-form">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs delete-modal-btn">
                                <span class="fa fa-trash"></span>
                            </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">
                    <div class="alert alert-warning text-center" role="alert">
                        <strong>{{ __('no data') }}</strong>
                    </div>
                </td>
            </tr>
        @endforelse

    </tbody>
</table>
{{-- @endtable --}}

{{ $users->links() }}
@endcomponent
@include('admin.partials.delete-modal')

@endsection
