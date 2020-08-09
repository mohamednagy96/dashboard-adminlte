@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>__('create post')])
{!! Form::open(['route' => 'admin.posts.store','enctype' => 'multipart/form-data']) !!}
@include('admin.dashboardpages.posts.form')
{!!Form::close()!!}
@endcomponent



@endsection