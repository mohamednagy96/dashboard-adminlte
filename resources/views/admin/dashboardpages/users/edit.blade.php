@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'edit '. $user->name])

{!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}

@include('admin.pages.users.form')

{!! Form::close() !!}
@endcomponent

@endsection

