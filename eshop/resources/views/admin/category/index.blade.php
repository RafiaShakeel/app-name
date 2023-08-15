@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3><strong>Category page</strong></h3>
    </div>
    <div class="card_body">
        <table class="table table-bordered table-stripped" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($categories))
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            
                            <img src="{{ asset('assets/uploads/category/'.$category->image) }}" class="cust_img" alt="Image here">
                        </td>
                        <td class="text-center">
                            <a href="{{ url('edit-prod/'.$category->id) }}" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger">Delete</button>
                        </td>   
                    </tr>
                @endforeach    
                @else
                
                <tr>
                    <td colspan="5" style="text-align: center;">No data to show</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
