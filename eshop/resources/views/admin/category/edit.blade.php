@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit/Update a Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" value="{{ $category->description }}" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $category->status=="1"? 'checked' : '' }} name="status">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" {{ $category->popular=="1"? 'checked' : '' }} name="popular">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" value="{{ $category->meta_description }}" class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keywords" value="{{ $category->meta_keyword }}" class="form-control" rows="3"></textarea>
                </div>
                @if( $category->image )
                <img src="{{ asset('assets/uploads/category'.$category->image) }}" alt="category images">
                @endif
                <div class="col-md-12">
                    <label for="">Image</label>
                    <input type="file" name="image">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
