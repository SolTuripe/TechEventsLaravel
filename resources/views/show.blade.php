@extends('layouts.app')

@section('content')
<x-header/>

<div></div>
<div class=" d-flex justify-content-center">

    <div  style="width: 10rem;">
        <img class='rounded-pill opacity-25'src="{{asset('/storage/image/event/'.$event->img)}}"  class="border border-2 rounded-3" alt="Card image cap">
    </div>



        <div class=" p-3 rounded-pill card border-light d-flex" style="width: 60rem;">

        <div class="d-flex  flex-column justify-content-center card-body">
                <h2><b class="card-text d-flex justify-content-center">{{$event->title}}</b> </h2>
                <p class=" d-flex justify-content-center "><i> ⭐ ⭐ ⭐ ⭐  {{ $event->name }}</i> </p>
                <p class="card-text d-flex justify-content-center ">{{$event->text}}</p>
                <p class="card-date d-flex justify-content-center"><i>{{$event->date_time}}</i> </p>
                <b class="d-flex justify-content-center ">Maximum users allowed: {{$event->users_max}}</b>
                <hr>
                <p class='card-text  p-3 mb-1 bg-light  d-flex justify-content-center '> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora consectetur voluptate laudantium iste  sapiente libero, et autem  
                vero eligendi quam cum doloribus vel temporibus tempore aliquam repellendus. Aspernatur, itaque nostrum?
                    Lorem ipsum dolor sit amet consecteturr ab est, quo tempora saepe modi hic quas quam nesciunt accusamus facilis incidunt. Modi commodi inventore eos sapiente. Enim?
                </p>
                <hr>
                <br><br>
                    <div class="d-flex  justify-content-center rounded-3  p-2 mb-2 ">  
                        <form action="{{route('enroll', $event->id)}}" method="POST">
                        @csrf 
                        <button type="submit" class=" btn btn-outline-success">Enroll in Course</button>
                        </form>
                    
                    </div>
                
                    <div class=" d-flex justify-content-center " ><a class="rounded-pill btn btn-outline-light  p-3 mb-3 bg-light" style="width: 7rem;" href="{{ route('landing') }}">↩️</a></div>    
        </div>
        </div>

    </div>



@endsection