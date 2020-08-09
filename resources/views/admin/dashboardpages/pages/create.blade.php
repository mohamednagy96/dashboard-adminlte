@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>__('Create Page')])
{!! Form::open(['route' => 'admin.pages.store','enctype' => 'multipart/form-data']) !!}
@include('admin.dashboardpages.pages.form')
{!!Form::close()!!}
@endcomponent



@endsection