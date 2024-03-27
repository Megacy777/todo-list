<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Auctions') }}
        </h2>
    </x-slot>

    <x-slot name="body">
        <div>
            <form action="{{ route('auctions.store') }}" method="post">
                @csrf
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
                            @foreach ($auctions as $auction)
                                <tr>
                                    <td>{{ $auction->title }}</td>
                                    <td>{{ $auction->description }}</td>
                                    <td>{{ $auction->start_date->format('d/m/Y') }}</td>
                                    <td>{{ $auction->end_date->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('auctions.edit', $auction->id) }}" class="btn">🖋️</a>
                                        <form action="{{ route('auctions.destroy', $auction->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">🗑️</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </x-slot>
</x-app-layout>
   