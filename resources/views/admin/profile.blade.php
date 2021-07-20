@extends('admin.layouts.master')
@section('content')
<div id="app">
    <admin-profile v-bind:users="{{ $users }}"></admin-profile>
</div>
@endsection

