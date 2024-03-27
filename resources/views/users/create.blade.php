@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New Auctioneer</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            {{-- name            
            email            
            email_verified_at 
            password          
            remember_token    
            created_at        
            updated_at   --}}

            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" id="name" required>
            </div>
            {{-- <div class="form-group">
                <label for="mname">Middle Name</label>
                <input type="text" name="mname" class="form-control" id="mname">
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" required>
            </div> --}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            {{-- <div class="form-group">
                <label for="pnumber">Phone Number</label>
                <input type="text" name="pnumber" id="pnumber" class="form-control"required>
            </div> --}}
            {{-- <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select> --}}
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
