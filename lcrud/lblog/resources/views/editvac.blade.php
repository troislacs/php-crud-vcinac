@extends('layouts.main')
@section('content')


<div class="container">
    <h1>Edit Vac Page</h1>
    <form class="border border-light p-5" action="{{route('updatevac',$vac->id)}}" method="POST">
        {{csrf_field()}}
        <p class="text-center h4 mb-4">Edit Vaccination Record</p>
        <label for="firstname" class="form-label">First Name</label>
        <div class="input-group mb-3">            
            <input type="text" name="firstname" class="form-control" value="{{$vac->first_name}}" aria-label="first_name"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="lastname" class="form-label">Last Name</label>        
        <div class="input-group mb-3">
          <input type="text" name="lastname" class="form-control" value="{{$vac->last_name}}" aria-label="last_name"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="email" class="form-label">Email</label>              
        <div class="input-group mb-3">
          <input type="text" name="email" lass="form-control" value="{{$vac->email}}" aria-label="email"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="phone" class="form-label">Phone</label>        
        <div class="input-group mb-3">
          <input type="text" name="phone" class="form-control" value="{{$vac->phone}}" aria-label="phone"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="age" class="form-label">Age</label>              
        <div class="input-group mb-3">
          <input type="text" name="age" class="form-control" value="{{$vac->age}}" aria-label="age"
            aria-describedby="basic-addon2" />
        </div>
        
        <label for="brand" class="form-label">Brand of Vaccine</label>   
        <div class="input-group mb-3">
            <select class="form-select form-select-lg mb-3" name="brand" aria-label=".form-select-lg example">
              <option value="Pfizer" selected>Pfizer-Biotech (2 shots)</option>
              <option value="Moderna">Moderna (2 shots)</option>
              <option value="AstraZeneca">AstraZeneca (2 shots)</option>
              <option value="Janssen">Janssen (1 shot)</option>
            </select>
        </div>

        <label for="doses" class="form-label">Doses Applied</label>           
        <div class="input-group mb-3">
            <select class="form-select form-select-lg mb-3" name="doses" aria-label=".form-select-lg example">
                <option value="1" selected>1 Shot</option>
              <option value="2">2 Shots</option>
            </select>
        </div>

        
        <label for="completed" class="form-label">Completion Status</label>           
        <div class="input-group mb-3">
            <select class="form-select form-select-lg mb-3" name="completed" aria-label=".form-select-lg example">
              <option value="yes">Completed</option>
              <option value="no" selected>Not Completed</option>
            </select>
        </div>
        
        <div class="input-group mb-3">
          <button type="submit" class="btn btn-info my-4 btn-block" value="Submit" aria-label="submit"
                  aria-describedby="basic-addon2">Modify Vaccination Data</button>
        </div>
    </form>    
</div>

@endsection




