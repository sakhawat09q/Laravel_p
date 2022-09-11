<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                    <form action="{{URL::to('update-course/'.$course->id)}}" method="post">
                        {{csrf_field()}}
                <div class="form-group">
                    <label for="">Course Name</label>
                    <input type="text" class="form-control" name="course_name"value="{{$course->course_name}}" placeholder="Enter course name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Course Code</label>
                    <input type="text" class="form-control" name="course_code"value="{{$course->course_code}}" placeholder="Enter course code">
                </div>
                <div class="form-group">
                    <label for="">Course Type</label>
                    <select class="form-control" name="course_type"id=""value="{{$course->course_type}}">
                    <option>SELECT TYPE</option>
                     <option value="CSE"{{$course->course_type=='CSE'? 'selected':''}}>CSE</option>
                    <option>ECONOMICS</option>
                    <option>MATH</option>
                    <option>LAW</option>
                    </select>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{URL::to('courses')}}"type="button" class="btn btn-dark">Courses List</a>
                
                </form>
                
            </div>
        </div>
        
    </div>
</body>
</html>
