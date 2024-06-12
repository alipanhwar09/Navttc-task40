

@extends('layouts.master')

@section('title', 'All Posts')

@section('content')
    <h2>All Posts</h2>

@foreach($posts as $post)
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text">{{ $post->content }}</p>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <h3 class="card-title">Comments</h3>
            @foreach($post->comments as $comment)
                <div class="media mb-3">
                    <div class="media-body">
                        <h5 class="mt-0">{{ $comment->name }}</h5>
                        <p>{{ $comment->comment }}</p>
                    </div>
                </div>
            @endforeach

            <form method="POST" action="{{ route('comments.store') }}" class="mb-3">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endforeach

@endsection



    
    

