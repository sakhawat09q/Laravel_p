<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    <div class="container">
        <div class="row">
            <div class="col-6">
                    <form action="{{URL::to('store-course')}}" method="post">
                        {{csrf_field()}}
                <div class="form-group">
                    <label for="">Course Name</label>
                    <input type="text" class="form-control" name="course_name"id=""  placeholder="Enter course name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Course Code</label>
                    <input type="text" class="form-control" name="course_code" id="" placeholder="Enter course code">
                </div>
                <div class="form-group">
                    <label for="">Course Type</label>
                    <select class="form-control" name="course_type"id="">
                    <option>SELECT TYPE</option>
                    <option>CSE</option>
                    <option>ECONOMICS</option>
                    <option>MATH</option>
                    <option>LAW</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Active Status</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" name="active_status" class="form-check-input" value="1">Is_Active
                       </label>
                    </div>
               </div>
                <div class="row">
                 <div class="col-6">
                  <div class="form-group">
                    <label for="date" class="btn btn-info">Join Date</label>
                    <input type="date"name="join_date">
                  </div>
                 </div>
                </div>
                <p>Gender</p>
                <div class="form-group mt-2 ml-2">
                    <input type="radio" class="form-check-input" name="gender" value="Male">
                    <label class="mr-4">Male</label>
                    
                    <input type="radio" class="form-check-input" name="gender" value="Female">
                    <label class="mr-4">Female</label>
                    
                    <input type="radio" class="form-check-input"  name="gender" value="Other">
                    <label class="mr-4">Other</label>

 
                </div>

            <div class="form-group">
                <label>Select your skill here</label>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="option[]" value="Developing">Developing
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="option[]" value="Networking">Networking
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="option[]" value="Circuiting" >Circuiting
                    </label>
                </div>
            </div>
              
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{URL::to('courses')}}"type="button" class="btn btn-dark">Courses List</a>
                
                </form>
                
            </div>
        </div>
        
    </div>
</body>
</html>
