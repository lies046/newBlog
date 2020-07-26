@extends('template.home')
@section('sub-title', 'Add Post')
@section('content')

@if(count($errors)>0)
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
    {{ $error }}
  </div>
  @endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif

<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label>Title</label>
  <input type="text" class="form-control" name="title">
</div>
<div class="form-group">
  <label>Category</label>
  <select class="form-control" name="category_id">
    <option value="" holder>Select Category</option>  
    @foreach($category as $result)
    <option value="{{ $result->id }}">{{ $result->name }}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label>Content</label>
  <textarea class="form-control" name="content"></textarea>
</div>
<div class="form-group">
  <label>Image</label>
  <input type="file" class="form-control" name="image">
</div>

<div class="form-group">
  <button class="btn btn-primary btn-block">save category</button>
</div>
</form>
@endsection