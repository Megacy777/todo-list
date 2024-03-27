@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Details</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="name" value="{{ $user->fname }}" required>
            </div>
            {{-- <div class= "form-group">
                <label for="mname">Middle Name</label>
                <input type="text" name="mname" id="mname" value="{{ $user->mname }}">
            </div>
            <div class= "form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" value="{{ $user->lname }}" required> --}}
            </div>
            <div class= "form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" required>
            </div>
            {{-- <div class= "form-group">
                <label for="pnumber">Phone Number</label>
                <input type="text" name="pnumber" id="pnumber" value="{{ $user->pnumber }}" required>
            </div>
            <div class= "form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" required>
                    <option value="male" @if ($user->gender === 'male') selected @endif>Male</option>
                    <option value="female" @if ($user->gender === 'female') selected @endif>Female</option>
                </select>
            </div> --}}
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
