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

@endsection
