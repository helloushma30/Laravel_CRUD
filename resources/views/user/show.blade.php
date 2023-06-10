@extends('layout.template')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
          <h3 class="card-title">{{$blog->title}}</h3>
          <h5 class="card-title">{{$blog->subtitle}}</h5>
          <p class="card-text">{!!$blog->content!!}</p>
            <form action="{{ route('blog.destroy',$blog->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-info">Edit</a>
            </form>
        </div>
      </div>
</div>


@endsection
