@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'admins', 'create' => route('admin.admin_users.create'),'Side_address'=> 'Create admin'])

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
        @forelse ($admins as $admin)
        {{-- {{dd( $admin->image)}} --}}
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{$admin->created_at ?  $admin->created_at->diffForHumans() : null}}</td>
                <td>
                    <a href="{{ route('admin.admin_users.edit', $admin->id) }}" class="btn btn-primary btn-xs">
                        <span class="fa fa-pencil-ruler"></span>
                    </a>  
                    <form action="{{ route('admin.admin_users.destroy', $admin->id) }}" method="POST" id="delete-modal-form">
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

{{ $admins->links() }}
@endcomponent
@include('admin.partials.delete-modal')

@endsection
