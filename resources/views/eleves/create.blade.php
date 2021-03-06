@extends('base')
@section('main')
<div class="row">
<div class="col-sm-8 offset-sm-2">
 <h1 class="display-3">Add a Student</h1>
 <div>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div><br />
 @endif
 <form method="post" action="{{ route('eleves.store') }}">
 @csrf
 <div class="form-group">
 <label for="first_name">First Name:</label>
 <input type="text" class="form-control" name="first_name"/>
 </div>
 <div class="form-group">
 <label for="last_name">Last Name:</label>
 <input type="text" class="form-control" name="last_name"/>
 </div>
 <div class="form-group">
 <label for="email">Email:</label>
 <input type="text" class="form-control" name="email"/>
 </div>
 <div class="form-group">
 <label for="city">Filliere:</label>
 <input type="text" class="form-control" name="filliere"/>
 </div>
 <div class="form-group">
 <label for="country">ville:</label>
 <input type="text" class="form-control" name="ville"/>
 </div>
 <div class="form-group">
 <label for="job_title">Photo:</label>
 <input type="text" class="form-control" name="photo"/>
 </div>
 <button type="submit" class="btn btn-primaryoutline">Add Student</button>
 </form>
</div>
</div>
</div>
@endsection
