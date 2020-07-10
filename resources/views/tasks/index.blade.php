@extends('layouts.app')

@section('content')
    <div class="container d-flex mt-5 col-md-6">
        <form action="{{ url('tasks') }}" method="POST" class="input-group mb-3">
            {{ csrf_field() }}
            <input type="text" name="name" id="task-name" class="form-control" placeholder="What needs to be done?">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary">Add task</button>
            </div>
        </form>
    </div>
    @include('layouts.error')
    <!-- Task Block -->
    @if (count($tasks) > 0)
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="pl-4 pb-2 bg-light notes">
                        <div class="d-flex flex-row align-items-center notes-title">
                            <h4>Current tasks</h4>
                        </div>
                    </div>
                    <div class="p-3 bg-color">
                        @foreach ($tasks as $task)
                            <div class="d-flex align-items-center">
                                <label><input type="checkbox" class="option-input radio"><span class="label-text">{{ $task->name }}</span></label>
                            <div>
                                <form action="{{ url('tasks/' . $task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn border-info">Delete</button>
                                </form></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
