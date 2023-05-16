@extends('base')

@section('content')

<h1>
    {{$subject->name}}
</h1>


{{$subject->code}}

<br>

{{$subject->department_id}}

@endsection