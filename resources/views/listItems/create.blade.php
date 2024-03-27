{{-- @extends('layouts.app') --}}

@section('content')
    <div class="container">
        <h1>New Item</h1>
        <form action="{{ route('listItems.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="is_complete">completed</label>
                <checkbox class="form-control" id="is_complete" name="is_complete" rows="5" required></checkbox>
            </div>
            <div class="form-group">
                <label for="created_at">created Date</label>
                <input type="datetime-local" class="form-control" id="created_at" name="created_at" required>
            </div>
            <div class="form-group">
                <label for="updated_at">updated Date</label>
                <input type="datetime-local" class="form-control" id="updated_at" name="updated_at" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Item</button>
        </form>
    </div>
@endsection
