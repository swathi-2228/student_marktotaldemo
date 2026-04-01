@extends('layouts.app')

@section('content')

<h2>Student List</h2>

<a href="/students/create" class="btn btn-primary mb-3">Add Student</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
<tr>
    <th>Name</th>
    <th>Course</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Total</th>
</tr>

@foreach($students as $s)
<tr>
    <td>{{ $s->name }}</td>
    <td>{{ $s->course }}</td>
    <td>{{ $s->phone }}</td>
    <td>{{ $s->email }}</td>
    <td>{{ $s->total }}</td>
</tr>
@endforeach

</table>

@endsection