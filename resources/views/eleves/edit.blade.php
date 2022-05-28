@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
 <h1 class="display-3">Update a Student</h1>
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 <br />
 @endif
 <form method="post" action="{{ route('eleves.update', $eleve->id) }}">
 @method('PATCH')
 @csrf
 <div class="form-group">
 <label for="first_name">First Name:</label>
 <input type="text" class="form-control" name="first_name" value={{ $eleve->first_name }} />
 </div>
 <div class="form-group">
 <label for="last_name">Last Name:</label>
 <input type="text" class="form-control" name="last_name" value={{ $eleve->last_name }} />
 </div>
 <div class="form-group">
 <label for="email">Email:</label>
 <input type="text" class="form-control" name="email" value={{ $eleve->email }} />
 </div>
 <div class="form-group">
 <label for="city">Filliere:</label>
 <input type="text" class="form-control" name="filliere" value={{ $eleve->filliere }} />
 </div>
 <div class="form-group">
 <label for="country">Ville:</label>
 <input type="text" class="form-control" name="ville" value={{ $eleve->ville }} />
 </div>
 <div class="form-group">
 <label for="Photo">Job Title:</label>
 <input type="text" class="form-control" name="photo" value={{ $eleve->photo }} />
 </div>
 <button type="submit" class="btn btn-primary">Update</button>
 </form>
 </div>
</div>
@endsection