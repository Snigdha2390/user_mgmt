<link rel="stylesheet" href="../assets/register.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
  

    <div class="registration-form">
        <form action="{{url('/')}}/edituser" method="post">
          @csrf   
          <h3 class="pt-3 font-weight-bold">User Detail</h3>
            <div class="form-group">
              <input type="text" class="form-control item" id="title" name="title" placeholder="Name" value="{{$data->name}}" class="@error('title') is-invalid @enderror">
            </div>
            <div class="form-group">
              <input type="text" class="form-control item" name="username" id="username" placeholder="Username" value="{{$data->username}}" class="@error('Username') is-invalid @enderror">
            </div>
            <div class="form-group">
              <input type="text" class="form-control item" name="email" id="email" placeholder="Email" value="{{$data->email}}" class="@error('email') is-invalid @enderror">
            </div>

            <div class="form-group">
                <input type="text" class="form-control item" name= "phone_number" value="{{$data->phone}}" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="date" class="form-control item" name="dob" id="birth-date" value="{{$data->dob}}" placeholder="Birth Date">
            </div>
            <div class="form-group">
              <input type="text" class="form-control item" name="address" id="address" value="{{$data->address}}" placeholder="Address">
            </div>
            <div class="form-group">
                <button class="btn btn-block create-account">Update User</button>
                <input type="hidden" name="userid" value="{{$data->id}}">
            </div>
        </form>
        
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
<script>
  $(document).ready(function(){
  //$('#birth-date').mask('00/00/0000');
  //$('#phone-number').mask('0000-0000');
 })
</script>
</html>
