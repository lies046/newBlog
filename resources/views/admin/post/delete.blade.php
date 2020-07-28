@extends('template.home')
@section('sub-title', 'Post that was deleted')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif

  <table class="table table-striped table-hover table-sm table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Post</th>
        <th>Category</th>
        <th>Tags</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($post as $result => $hasil)
      <tr>
        <td>{{ $result + $post->firstitem() }}</td>
        <td>{{ $hasil->title }}</td>
        <td>{{ $hasil->category->name }}</td>
        <td>@foreach($hasil->tags as $tag)
          <ul>
            <li>{{ $tag->name }}</li>
          </ul>
        @endforeach
        </td>
        <td><img src="{{ asset($hasil->image) }}" class="img-fluid" style="width: 100px"></td>
        <form action="{{ route('post.kill', $hasil->id )}}" method="POST">
          @csrf
          @method('delete')
          <td><a href="{{ route('post.restore', $hasil->id )}}" class="btn btn-info btn-sm">Restore</a>
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
      </tr>
      @endforeach 
    </tbody>
  </table>
  {{ $post->links()}}
@endsection