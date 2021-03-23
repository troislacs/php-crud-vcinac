@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Home Page</h1>  
    @if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{session('successMsg')}}
    </div>
    @endif    

        <table class="table">
        <thead class="black white-text">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>   
                <th scope="col">Email</th>                
                <th scope="col">Phone</th>                
                <th scope="col">Age</th>          
                <th scope="col">Brand</th>                
                <th scope="col">Doses Applied</th>  
                <th scope="col">Completion Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $population = 20;
              $vacCompleted = 0;
        ?>
            @foreach($vacmodels as $vac)
            <?php
                if ($vac->completed==0)$vacCompleted ++;
            ?>
            <tr>
                <th scope="row">{{$vac->id}}</th>
                <td>{{$vac->first_name}}</td>
                <td>{{$vac->last_name}}</td>
                <td>{{$vac->email}}</td>
                <td>{{$vac->phone}}</td>
                <td>{{$vac->age}}</td>
                <td>{{$vac->brand}}</td>               
                <td>{{$vac->doses}}</td>
                <td>{{$vac->completed==0? 'YES':'NO'}}</td>    
                <td><a class="btn btn-raised btn-primary btn-sm" href="{{route('editvac',$vac->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>  || 
                    <form method="POST" id="delete-form-{{$vac->id}}" action="{{route('deletevac',$vac->id)}}" style="display:none;">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>
                    <button onclick="if (confirm('Are you sure to delete this record')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$vac->id}}').submit();
                    }
                    else{
                        event.preventDefault();
                    }
                            "
                    
                    class="btn btn-raised btn-danger btn-sm" href="{{route('deletevac',$vac->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a> 
                    
                </td>    
                </button>
            </tr>
            @endforeach            
        </tbody>
    </table>
    
    <?php
        echo "<hr>";
        echo "<h3><mark>".($vacCompleted/$population*100)."% of population completed vaccine, our target is 70% for herd immunity.";
        echo "Vaccination In Action!</mark></h3>";
    ?>
</div>



@endsection