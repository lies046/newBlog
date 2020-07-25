@extends('template.home')
@section('content')
<h1>Category</h1>
@foreach($category as $result)

  <table class="table table-striped table-hover table-sm table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td>{{ $result->name }}</td>
        <td><a href="" class="btn btn-primary btn-sm">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
      </td>
      </tr>
    </tbody>
  </table>
@endforeach 
@endsection