@extends('layout.template')

@section('content')
    <a href="{{ route('blog.create') }}" class="btn btn-info">Add Post Here</a>
    <div class="row">
            @foreach ($data as $datum)
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$datum->title}}</h3>
                        <h5 class="card-title">{{$datum->subtitle}}</h5>

                        <form action="{{ route('blog.destroy',$datum->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('blog.show',$datum->id) }}" class="btn btn-info">Read More</a>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
@endsection
