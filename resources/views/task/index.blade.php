<x-task-layout>

    <x-slot name="Task Data">
        <h3>Todos</h3>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="my-5 d-flex justify-content-between align-item-center">
                <h3>All Todos</h3>
                <a href="{{ route('todo.create') }}" class="btn btn-primary btn-lg">Add Todo</a>
            </div>
            <div>
               
               <table class="table table-stripped table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Work</th>
                        <th>Due Date</th>
                        <th>Action</th>
                    </tr>
                    @foreach($task as $tasks)
                    <tr valign='middle'>
                        <td>{{ $tasks->id }}</td>
                        <td>{{ $tasks->name }}</td>
                        <td>{{ $tasks->work }}</td>
                        <td>{{ $tasks->dueDate }}</td>
                        <td>
                            <button class="btn btn-success"><a class="text-decoration-none text-light" href="{{url('task/'.$tasks->id.'/edit')}}">Edit</a></button> 
                            <button class="btn btn-danger"><a class="text-decoration-none text-light" onclick="return confirm('Are you sure ?')" href="{{url('task/'.$tasks->id.'/destroy')}}">Delete</a></button> 
                         </td>
                    </tr>
                    @endforeach
               </table>

            </div>
        </div>
    </div>
</x-task-layout>