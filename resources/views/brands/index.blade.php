<!-- resources/views/brands/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-12">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        
        <div class="card">
            <div class="card-header">Brand List</div>
            <div class="card-body">
                <a href="{{ route('brands.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Brand</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($brands as $brand)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $brand->name }}</td>
                            <td>
                                <form action="{{ route('brands.destroy', $brand->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this brand?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    <span class="text-danger">
                                        <strong>No Brand Found!</strong>
                                    </span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $brands->links() }}

            </div>
        </div>
    
