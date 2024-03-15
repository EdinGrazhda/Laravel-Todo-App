<x-task-layout>

    <x-slot name="title">
        Update Todo
    </x-slot>

    <div class="container my-5 ">
        <div class="text-box mb-3 d-flex justify-content-between  align-items-center">
            <h4 class="h4">Update Todo</h4>
            <a href="{{ route('todo.home') }}"><button class="btn btn-primary">Back</button></a>
        </div>
    
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('todo.store') }}" method="POST">
                            @csrf

                            @method('POST')
                            <div>
                                <label for="" class="form-label mt-4">Task Name</label>
                                <input type="text" placeholder="Task Name" name="name" class="form-control" value="{{ $task->name }}">
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div>
                                <label for="" class="form-label mt-4">Work</label>
                                <input type="text" name="work" placeholder="Work" value="{{ $task->work }}" class="form-control">
                                @error('work') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div>
                                <label for="" class="form-label mt-4">Due Date</label>
                                <input type="date" value="{{ $task->dueDate }}" name="dueDate" class="form-control">
                                @error('dueDate') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success mt-4">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
       
    </div>



</x-task-layout>