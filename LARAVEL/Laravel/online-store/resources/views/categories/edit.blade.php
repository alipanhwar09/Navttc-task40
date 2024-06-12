@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>{{ isset($category) ? 'Edit Category' : 'Add Category' }}</h2>
            <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST">
                @csrf
                @if(isset($category))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ isset($category) ? $category->name : '' }}">
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Add' }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
