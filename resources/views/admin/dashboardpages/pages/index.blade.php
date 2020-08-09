@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'pages', 'create' => route('admin.pages.create'),'Side_address'=> 'Create Page'])

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>{{ __('title') }}</th>
            <th>{{ __('fulltext') }}</th>
            <th>{{ __('date') }}</th>
           
            <th>{{ __('image') }}</th>
            <th>{{ __('Created at') }}</th>
            <th>{{ __('Action') }}</th>

        </tr>
    </thead>
    <tbody >
        @forelse ($pages as $page)
      
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td>{{ $page->fulltext }}</td>
                <td>{{ $page->date }}</td>
                <td>
                <img src="{{ $page->image ? 'http://127.0.0.1:8000/images/'.$page->image : 'http://127.0.0.1:8000/storage/images/defaultimage.jpg'}}" alt="" width="100px">
            </td>
                <td>{{$page->created_at ?  $page->created_at->diffForHumans() : null}}</td>
                <td>
                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-primary btn-xs">
                        <span class="fa fa-pencil-ruler"></span>
                    </a>  
                    <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" id="delete-modal-form">
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

{{ $pages->links() }}
@endcomponent
@include('admin.partials.delete-modal')

@endsection
