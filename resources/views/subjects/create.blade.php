@extends('base')
@section('content')

<form action="/subjects"  method="POST">
@csrf
<div>
    <label >Name</label>
    <input type="text" name="name">
</div>
<div>
    <label >Code</label>
    <input type="text"  name="code">
</div>
<div>
    <label >Department Id</label>
    <input type="text"  name="department_id">
</div>
<button type="submit">Save</button>
</form>

@endsection