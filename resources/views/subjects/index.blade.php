@extends('base')

@section('content')

<h1> 
  <a href="{{route('subjects.create')}}">
    Add a new Subject
  </a>

</h1>

@foreach ($subjects as $subject)
  <div class="d-flex justify-content-between">
      <div>
        <a href="{{route('subjects.show',$subject->id)}}">

          {{$subject->name}}
        </a>
      </div>

      <div>
        <a href="{{route('subjects.edit',$subject->id)}}">
            Edit
        </a>
      </div>
    
  </div>
      
@endforeach

@endsection