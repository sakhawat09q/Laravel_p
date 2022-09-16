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
                   
                   <!-- course Name update     -->
                <div class="form-group">
                    <label for="">Course Name</label>
                    <input type="text" class="form-control" name="course_name"value="{{$course->course_name}}" placeholder="Enter course name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Course Code</label>
                    <input type="text" class="form-control" name="course_code"value="{{$course->course_code}}" placeholder="Enter course code">
                </div>

                <!-- course type update -->
                <div class="form-group">
                    <label for="">Course Type</label>
                    <select class="form-control" name="course_type"id=""value="{{$course->course_type}}">
                    <option>SELECT TYPE</option>
                    <option value="CSE"{{$course->course_type=='CSE'? 'selected':''}}>CSE</option>
                    <option value="ECONOMICS"{{$course->course_type=='ECONOMICS'? 'selected':''}}>ECONOMICS</option>
                    <option value="MATH"{{$course->course_type=='MATH'? 'selected':''}}>MATH</option>
                    <option value="LAW"{{$course->course_type=='LAW'? 'selected':''}}>LAW</option>
                    </select>
                </div>
                <!-- gender -->
            <div class="form-group">
                <label>Gender</label>
                <br />
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                    <label class="form-check-label" {{ $course -> Gender == 'Male' ? 'checked' :''}} for="inlineRadio3">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                    <label class="form-check-label" {{ $course -> Gender == 'Female' ? 'checked' :''}} for="inlineRadio3">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
                    <label class="form-check-label" {{ $course -> Gender == 'other' ? 'checked' :''}} for="inlineRadio3">Other</label>
                </div>    
            </div>
              <!-- Active_status check -->
                <div class="form-group">
                  <label>Active Status</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" name="active_status" class="form-check-input" checked value="1">Is_Active
                       </label>
                    </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{URL::to('courses')}}"type="button" class="btn btn-dark">Courses List</a>
                
                </form>
                
            </div>
        </div>
        
    </div>
</body>
</html>
