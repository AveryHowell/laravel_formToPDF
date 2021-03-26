<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<form class="d-flex flex-column justify-content-center w-50 m-auto pt-5" method="post" action="submitmyform">
@csrf {{ csrf_field() }} 
<div class="form-group">
    <label for="exampleInputName">Name</label>
    <input class="form-control" type="text" name="name" value="{{ old("name")}}"/>	
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input class="form-control" type="text" name="email" value="{{ old("email")}}"/>	
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputDOB1">Phone Number</label>
    <input class="form-control" id="exampleInputPhoneNumber1" type="text" name="phone_number" value="{{ old("phone_number")}}">
  </div>
  <div class="form-group">
    <label for="exampleInputDOB1">Date of Birth</label>
    <input class="form-control" id="exampleInputDOB1" placeholder="Date of Birth" text="text" name="dob" value="{{ old("dob")}}">
  </div>
  <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
