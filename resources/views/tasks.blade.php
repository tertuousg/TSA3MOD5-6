@extends('layouts.app')
@section('title','Task List')
@section('content')
<div class="card"><h1>All Tasks</h1><p class="muted">Complete list of your scheduled activities.</p></div>
<h2>Total Tasks: {{ $tasks->count() }}</h2>
@forelse($tasks as $task)
<div class="card task"><div><h3>{{ $task->title }}</h3><span class="muted">Scheduled: {{ $task->task_date->format('F d, Y') }}</span></div><span class="badge {{ $task->status === 'completed' ? 'completed' : 'pending' }}">{{ $task->status }}</span></div>
@empty<div class="card">No tasks available.</div>@endforelse
@endsection
