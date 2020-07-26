@extends('template.home')
@section('sub-title', 'Add Category')
@section('content')

<form action="{{ route('category.store')}}" method="POST">
@csrf
<div class="form-group">
  <label>Category</label>
  <input type="text" class="form-control" name="name">
</div>

<div class="form-group">
  <button class="btn btn-primary btn-block">save category</button>
</div>
</form>
@endsection