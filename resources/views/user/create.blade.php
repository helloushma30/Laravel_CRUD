@extends('layout.template')

@section('content')

<form action="{{ route('blog.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title">
      </div>
    <div class="mb-3">
        <label class="form-label">SubTitle</label>
        <input type="text" class="form-control" name="subtitle">
      </div>
      <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea rows="3" id="editor" name="content"></textarea>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>

@endsection
