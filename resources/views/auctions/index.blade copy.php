<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mnada | All Auctions</title>
</head>



<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>List of Auctions</h1>
            <a href="{{ route('auctions.create') }}" class="btn btn-success">Create Auction ➕</a>
            <table class="table border mt-4">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @foreach ($auctions as $auction)
                            <tr>
                                <td>{{ $auction->title }}</td>
                                <td>{{ $auction->description }}</td>
                                <td>{{ $auction->start_date->format('d/m/Y') }}</td>
                                <td>{{ $auction->end_date->format('d/m/Y') }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('auctions.edit', $auction->id) }}" class="btn ">🖋️</a>
                                    <form action="{{ route('auctions.destroy', $auction->id) }}" method="POST"
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
