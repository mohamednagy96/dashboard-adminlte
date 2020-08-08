@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>__('create User')])
{!! Form::open(['route' => 'admin.admin_users.store','enctype' => 'multipart/form-data']) !!}
@include('admin.pages.admins.form')
{!!Form::close()!!}
@endcomponent



@endsection

