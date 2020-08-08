@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'edit '. $user->name])

{!! Form::model($user, ['route' => ['admin.admin_users.update', $user->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}

@include('admin.pages.admins.form')

{!! Form::close() !!}
@endcomponent

@endsection

