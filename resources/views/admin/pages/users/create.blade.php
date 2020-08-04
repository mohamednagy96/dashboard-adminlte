@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>__('create User')])
{!! Form::open(['route' => 'admin.users.store','enctype' => 'multipart/form-data']) !!}
@include('admin.pages.users.form')
{!!Form::close()!!}
@endcomponent



@endsection

