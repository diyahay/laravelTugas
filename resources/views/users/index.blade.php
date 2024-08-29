<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    </div>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Users</h1>
    <form action="{{ route('users.index') }}" method="GET">
        <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search users...">
        <button type="submit">Search</button>
    </form>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @if($user->is_active)
                            <form action="{{ route('users.deactivate', $user) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-secondary">Deactivate</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
