@extends('layouts.main')
@section('content')

<div class="container">
    <h1>Create Student Page</h1>
    <form class="border border-light p-5" action="{{route('store')}}" method="POST">
        {{csrf_field()}}
        <p class="text-center h4 mb-4">Add Student Record</p>
        <label for="firstname" class="form-label">First Name</label>
        <div class="input-group mb-3">            
            <input type="text" name="firstname" class="form-control" placeholder="Justin" aria-label="first_name"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="lastname" class="form-label">Last Name</label>        
        <div class="input-group mb-3">
          <input type="text" name="lastname" class="form-control" placeholder="Trudeau" aria-label="last_name"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="email" class="form-label">Email</label>              
        <div class="input-group mb-3">
          <input type="text" name="email" lass="form-control" placeholder="jtrudeau@canada.ca" aria-label="email"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="phone" class="form-label">Phone</label>        
        <div class="input-group mb-3">
          <input type="text" name="phone" class="form-control" placeholder="514-123-4567" aria-label="phone"
            aria-describedby="basic-addon2" />
        </div>
        
        <div class="input-group mb-3">
          <button type="submit" class="btn btn-info my-4 btn-block" value="Submit" aria-label="submit"
                  aria-describedby="basic-addon2">Add Student Data</button>
        </div>
    </form>    
</div>

@endsection