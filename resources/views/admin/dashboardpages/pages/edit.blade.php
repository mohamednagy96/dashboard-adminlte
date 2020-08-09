@extends('admin.layouts.admin')
@section('content')

@component('admin.components.box', ['title'=>'edit '. $page->title])

{!! Form::model($page, ['route' => ['admin.pages.update', $page->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}

@include('admin.dashboardpages.pages.form')

{!! Form::close() !!}
@endcomponent

@endsection
