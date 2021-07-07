@foreach($tasks as $task)    
    <li>
            <div class="task">
               {{$task->title}}
            </div>
            <div class="action">
                <a href="/edit/{{$task->id}}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href="/delete/{{$task->id}}"><i class="fa fa-trash-alt"></i></a> 
            </div>
    </li>
@endforeach