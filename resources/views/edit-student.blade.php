<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body> 
<div class="container" style="margin-top:20px">
         <div class="row">
             <div class="col-md-12"> 
                 <h2>Edit Student</h2>
                 @if(Session::has('success'))
                 <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
                 </div>
                 @endif
                 <form method="GET" action="{{url('update-student/')}}">
                    @csrf
                    <input type = "hidden" name="id" value="{{$data->id}}">
                   <div class="md-3">
                       <label class="form-label">Name</label>
                       <input type="text" class="form-control" name="name"
                       placeholder="Enter Name" value="{{$data->name}}">
                       @error('name')
                       <div class="alert alert-danger" role="alert">
                           {{$message}}  
                       </div>
                       @enderror
                     </div>
                     <div class="md-3">
                       <label class="form-label"></label>
                       <input type="email" class="form-control" name="email"
                       placeholder="Enter email" value="{{$data->email}}">
                       @error('email')
                       <div class="alert alert-danger" role="alert">
                           {{$message}}  
                       </div>
                       @enderror
                     </div>
                     <div class="md-3">
                       <label class="form-label"></label>
                       <input type="phone" class="form-control" name="phone"
                       placeholder="Enter phone" value="{{$data->phone}}">
                       @error('phone')
                       <div class="alert alert-danger" role="alert">
                           {{$message}}  
                       </div>
                       @enderror
                     </div>
                     <div class="md-3">
                       <label class="form-label"></label>
                       <input type="text" class="form-control" name="address"
                        placeholder="Enter Address" value="{{$data->address}}">
                       @error('address')
                       <div class="alert alert-danger" role="alert">
                           {{$message}}  
                       </div>
                       @enderror
                     </div>
                     <button type="submit"class="btn btn-primary">Save</button>
                     <a href="{{url('student-list')}}" class="btn btn-danger" >Back</a>
              
                    </form>
             </div>
         </div>
</div>
    </body>
</html>