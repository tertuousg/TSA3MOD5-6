@extends('layouts.app')
@section('title','Profile')
@section('content')
<div class="card"><h1>My Profile</h1><p class="muted">Information retrieved from the users table.</p></div>
<div class="card"><h2>User Information</h2><div class="field"><strong>Username</strong><p>{{ $user->username }}</p></div><div class="field"><strong>Full Name</strong><p>{{ $user->full_name }}</p></div><div class="field"><strong>Email</strong><p>{{ $user->email }}</p></div><div class="field"><strong>User ID</strong><p>{{ $user->id }}</p></div></div>
@endsection
