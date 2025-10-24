@extends('layouts.app')

@section('title', 'Test Page')
@section('description', 'Test page for Laravel rendering')

@section('content')
<div class="container">
    <h1>Laravel Test Page</h1>
    <p>If you can see this, Laravel is working correctly!</p>
    <p>Current time: {{ now()->format('Y-m-d H:i:s') }}</p>
    <p>Route: {{ Route::currentRouteName() }}</p>
</div>
@endsection