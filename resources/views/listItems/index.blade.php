<div>
    ListItems
    @foreach ($listItems as $listItem)
    {{$listItem}}   {{-- this is a print statement   --}}
    @endforeach

</div>


{{-- @extends('layouts.app') --}}

@section('content')
    <div class="container">
        <h1>List of Items</h1>
        <a href="{{ route('listItems.create') }}" class="btn btn-success">Add Item</a>
        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>Completed</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listItems as $listItem)
                    <tr>
                        <td>{{ $listItem->name }}</td>
                        <td>{{ $listItem->is_complete }}</td>
                        <td>{{ $listItem->created_at }}</td>
                        <td>{{ $listItem->updated_at }}</td>
                        <td>
                            <a href="{{ route('listItems.edit', $listItem->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('listItems.destroy', $listItem->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
