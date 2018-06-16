@extends('layouts.app')

@section('content')

    <div class="card-body">

        @include('common.errors')

        <form action="{{ url('task') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="task-name" class="col-sm-3 col-form-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-6 offset-sm-3">
                    <button type="submit" class="btn btn-primary">Add Task</button>
                </div>
            </div>

        </form>

    </div>
    @if (count($tasks) > 0)
        <div class="card">
            <div class="card-header">
                Current Tasks
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>

                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                                <form action="{{ url('task/'.$task->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
