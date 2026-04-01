@extends('layouts.app')

@section('content')

<h2>Add Student</h2>

<form method="POST" action="/students/store">
@csrf

<input type="text" name="name" class="form-control mb-2" placeholder="Name">
<input type="text" name="course" class="form-control mb-2" placeholder="Course">
<input type="text" name="phone" class="form-control mb-2" placeholder="Phone">
<input type="email" name="email" class="form-control mb-2" placeholder="Email">

<h5>Marks</h5>
<input type="number" id="mark1" name="mark1" class="form-control mb-2" placeholder="Mark 1">
<input type="number" id="mark2" name="mark2" class="form-control mb-2" placeholder="Mark 2">
<input type="number" id="mark3" name="mark3" class="form-control mb-2" placeholder="Mark 3">

<!-- TOTAL DISPLAY -->
<input type="text" id="total" class="form-control mb-2" placeholder="Total" readonly>

<button type="button" onclick="calculateTotal()" class="btn btn-warning mb-2">
    Calculate Total
</button>

<button class="btn btn-success">Save</button>

</form>

<script>
function calculateTotal() {
    let m1 = parseInt(document.getElementById('mark1').value) || 0;
    let m2 = parseInt(document.getElementById('mark2').value) || 0;
    let m3 = parseInt(document.getElementById('mark3').value) || 0;

    let total = m1 + m2 + m3;

    document.getElementById('total').value = total;
}
</script>

@endsection