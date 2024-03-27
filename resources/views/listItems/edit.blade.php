{{-- @extends('layouts.app') --}}

@section('content')
    <div class="container">
        <h1>Edit Item</h1>
        <form action="{{ route('listItems.update', $listItem->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $listItem->name }}" required>
            </div>
            <div class="form-group">
                <label for="is_complete">completed</label>
                <checkbox class="form-control" id="is_complete" name="is_complete" rows="5" required>{{ $listItem->is_complete }}</checkbox>
            </div>
            <div class="form-group">
                <label for="created_at">Start Date</label>
                <input type="datetime-local" class="form-control" id="created_at" name="created_at" value="{{ $listItem->created_at }}" required>
            </div>
            <div class="form-group">
                <label for="updated_at">updated Date</label>
                <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" value="{{ $listItem->updated_at }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
@endsection
