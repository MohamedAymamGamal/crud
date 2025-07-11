
    <h1>Users</h1>
    <a href="{{ route('users.create') }}">Create New User</a>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }}
                <a href="{{ route('users.edit', $user) }}">Edit</a>
                <form method="POST" action="{{ route('users.destroy', $user) }}" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
