@extends('template.home')
@section('sub-title', 'Tag')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success')}}
</div>
@endif
  <a href="{{ route('tag.create')}}" class="btn btn-info btn-sm">Add Tag</a>
  <br><br>
  <table class="table table-striped table-hover table-sm table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Tag Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tag as $result => $hasil)
      <tr>
        <td>{{ $result + $tag->firstitem() }}</td>
        <td>{{ $hasil->name }}</td>
        <form action="{{ route('tag.destroy', $hasil->id )}}" method="POST">
          @csrf
          @method('delete')
          <td><a href="{{ route('tag.edit', $hasil->id )}}" class="btn btn-primary btn-sm">Edit</a>
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
      </tr>
      @endforeach 
    </tbody>
  </table>
  {{ $tag->links()}}
@endsection