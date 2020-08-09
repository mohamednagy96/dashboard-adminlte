@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'edit '. $post->title])

{!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}

@include('admin.dashboardpages.posts.form')

{!! Form::close() !!}
@endcomponent

@endsection
