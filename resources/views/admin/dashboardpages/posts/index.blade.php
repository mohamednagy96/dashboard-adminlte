@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'posts', 'create' => route('admin.posts.create'),'Side_address'=> 'Create post'])

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('title') }}</th>
            <th>{{ __('shortbrief') }}</th>
            <th>{{ __('readmore') }}</th>
            <th>{{ __('image') }}</th>
            <th>{{ __('Created at') }}</th>
            <th>{{ __('Action') }}</th>

        </tr>
    </thead>
    <tbody >
        @forelse ($posts as $post)
        {{-- {{dd( $post->image)}} --}}
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                
                <td>{{ $post->shortbrief }}</td>
                <td>{{ $post->readmore}}</td>
                <td>
                <img src="{{ $post->image ? 'http://127.0.0.1:8000/images/'.$post->image : 'http://127.0.0.1:8000/storage/images/defaultimage.jpg'}}" alt="" width="100px">
            </td>
                <td>{{$post->created_at ?  $post->created_at->diffForHumans() : null}}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary btn-xs">
                        <span class="fa fa-pencil-ruler"></span>
                    </a>  
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" id="delete-modal-form">
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

{{ $posts->links() }}
@endcomponent
@include('admin.partials.delete-modal')

@endsection
