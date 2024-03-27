<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mnada | All Users</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>System Users</h1>
            <a href="{{ route('users.create') }}" class="btn btn-success">New ➕</a>
            <table class="table border mt-4">
                <thead>
                    <tr>
                        <th>Name</th>
                        {{-- <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th> --}}
                        <th>Email</th>
                        {{-- <th>Gender</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name  }}</td>
                                {{-- <td>{{ $user->mname  }}</td>
                                <td>{{ $user->lname  }}</td> --}}
                                <td>{{ $user->email  }}</td>
                                {{-- <td>{{ $user->pnumber}}</td>
                                <td>{{ $user->gender }}</td> --}}
                                <td class="d-flex">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn ">🖋️</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-">🗑️</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <div>
                </tbody>
            </table>
        </div>
    @endsection
</body>

</html>
