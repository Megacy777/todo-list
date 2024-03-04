<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mnada | All Auctioneers</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>List of Auctioneers</h1>
            <a href="{{ route('auctioneers.create') }}" class="btn btn-success">Add New ➕</a>
            <table class="table border mt-4">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($auctioneers as $auctioneer)
                            <tr>
                                <td>{{ $auctioneer->fname  }}</td>
                                <td>{{ $auctioneer->mname  }}</td>
                                <td>{{ $auctioneer->lname  }}</td>
                                <td>{{ $auctioneer->email  }}</td>
                                <td>{{ $auctioneer->pnumber}}</td>
                                <td>{{ $auctioneer->gender }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('auctioneers.edit', $auctioneer->id) }}" class="btn ">🖋️</a>
                                    <form action="{{ route('auctioneers.destroy', $auctioneer->id) }}" method="POST"
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
