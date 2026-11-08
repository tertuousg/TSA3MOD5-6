@extends('layouts.app')
@section('title','Welcome')
@section('content')
<div class="card"><h1>Welcome Back!</h1><p class="muted">{{ today()->format('l, F d, Y') }}</p><p>Here are your tasks scheduled for today.</p></div>
<h2>Today's Tasks ({{ $tasks->count() }})</h2>
@forelse($tasks as $task)
<div class="card task"><div><h3>{{ $task->title }}</h3><span class="muted">{{ $task->task_date->format('F d, Y') }}</span></div><span class="badge {{ $task->status === 'completed' ? 'completed' : 'pending' }}">{{ $task->status }}</span></div>
@empty<div class="card">No tasks scheduled for today.</div>@endforelse
@endsection
