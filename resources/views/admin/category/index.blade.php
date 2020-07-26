@extends('template.home')
@section('sub-title', 'Category')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif
  <a href="{{ route('category.create')}}" class="btn btn-info btn-sm">Add Category</a>
  <br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($category as $result => $hasil)
      <tr>
        <td>{{ $result + $category->firstitem() }}</td>
        <td>{{ $hasil->name }}</td>
        <form action="{{ route('category.destroy', $hasil->id )}}" method="POST">
          @csrf
          @method('delete')
          <td><a href="{{ route('category.edit', $hasil->id )}}" class="btn btn-primary btn-sm">Edit</a>
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
      </tr>
      @endforeach 
    </tbody>
  </table>
  {{ $category->links()}}
@endsection