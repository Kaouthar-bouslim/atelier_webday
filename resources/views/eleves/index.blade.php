<div class="col-sm-12">
@if(session()->get('success'))
 <div class="alert alert-success">
 {{ session()->get('success') }}
 </div>
@endif
@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
 <h1 class="display-3">Contacts</h1>
 <div>
 <a style="margin: 19px;" href="{{ route('eleves.create')}}" class="btn btn-primary">New Student</a>
 </div>
 <table class="table table-striped">
 <thead>
 <tr>
 <td>ID</td>
 <td>Name</td>
 <td>Email</td>
 <td>Filliere</td>
 <td>ville</td>
 <td>Photo</td>
 <td colspan = 2>Actions</td>
 </tr>
 </thead>
 <tbody>
 @foreach($eleves as $eleve)
 <tr>
 <td>{{$eleve->id}}</td>
 <td>{{$eleve->first_name}} {{$eleve->last_name}}</td>
 <td>{{$eleve->email}}</td>
 <td>{{$eleve->filliere}}</td>
 <td>{{$eleve->ville}}</td>
 <td>{{$eleve->photo}}</td>
 <td>
 <a href="{{ route('eleves.edit',$eleve->id)}}" class="btn btn-primary">Edit</a>
 </td>
 <td>
 <form action="{{ route('eleves.destroy', $eleve->id)}}" method="post">
 @csrf
 @method('DELETE')
 <button class="btn btn-danger" type="submit">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
<div>
</div>
@endsection