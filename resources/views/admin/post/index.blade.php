@extends('template.home')
@section('sub-title', 'Post')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif
  <a href="{{ route('post.create')}}" class="btn btn-info btn-sm">Add Post</a>
  <br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Post</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($post as $result => $hasil)
      <tr>
        <td>{{ $result + $post->firstitem() }}</td>
        <td>{{ $hasil->title }}</td>
        <td>{{ $hasil->category->name }}</td>
        <form action="{{ route('post.destroy', $hasil->id )}}" method="POST">
          @csrf
          @method('delete')
          <td><a href="{{ route('post.edit', $hasil->id )}}" class="btn btn-primary btn-sm">Edit</a>
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
      </tr>
      @endforeach 
    </tbody>
  </table>
  {{ $post->links()}}
@endsection