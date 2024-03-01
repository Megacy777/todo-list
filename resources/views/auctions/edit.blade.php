@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Auction</h1>
        <form action="{{ route('auctions.update', $auction->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $auction->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $auction->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ $auction->start_date }}" required>
            </div>
            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="{{ $auction->end_date }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Auction</button>
        </form>
    </div>
@endsection
