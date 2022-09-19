<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container">
    <h2>Course List</h2>
    <a href="{{URL::to('create')}}"type="button" class="btn btn-info">Create Course</a>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Code</th>
            <th>Gender</th>
            <th>Skills</th>
            <th>Join Date</th>
            <th>Active Status</th>
            <th>Action</th>
            
        </thead>
          <tbody>
          @if($courses)  
            @foreach($courses as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->course_name}}</td>
                <td>{{$c->course_type}}</td>
                <td>{{$c->course_code}}</td>
                <td>{{$c->Gender}}</td>
                //<td>{{$c->skill}}</td>
                <td>
                @php
                    $skills = json_decode($c->skill)
                @endphp
                @foreach($skills as $s)
                    {{ $s }},
                @endforeach
                </td>
                <td>{{$c->join_date}}</td>
                <td>{{$c->active_status == 1 ? 'Yes' :'No'}}</td>
                
                <td>
                    <a href="{{URL::to('edit-course/'.$c->id)}}"><i title="Edit" class="fa fa-pencil" style=color:dark></i></a>
                    <a href="{{URL::to('delete-course/'.$c->id)}}"><i title="Delete" class="fa fa-trash" style=color:dark></i></a>
                </td>
            </tr>
            @endforeach
         @else 
           <tr>
             <td colspan="4" class="text-center">No data found</td>
           </tr> 
          @endif  
          </tbody>
    </table>
    
</div>
    
</body>
</html>
