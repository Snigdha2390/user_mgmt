<link rel="stylesheet" href="assets/register.css">
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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
        <form action="{{url('/')}}/register" method="post">
          @csrf   
          <h3 class="pt-3 font-weight-bold">Registration</h3>
            <div class="form-group">
              <input type="text" class="form-control item" id="title" name="title" placeholder="Name" value="{{old('title')}}" class="@error('title') is-invalid @enderror">
              @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <input type="text" class="form-control item" name="username" id="username" placeholder="Username" value="{{old('username')}}" class="@error('Username') is-invalid @enderror">
              @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <input type="text" class="form-control item" name="email" id="email" placeholder="Email" value="{{old('email')}}" class="@error('email') is-invalid @enderror">
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password"  placeholder="Password" class="@error('password') is-invalid @enderror">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <input type="password" class="form-control item" name="password_confirmation" id="confirm_password" placeholder="Confirm Password" class="@error('confirm_password') is-invalid @enderror">
              @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name= "phone_number" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="form-group">
              <select class="form-control item" name= "user_type" id="user_type">
                <option>Select User type</option>
                <option value="0">0 (User)</option>
                <option value="1">1 (Admin)</option>
              </select>
              @error('user_type')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
            <div class="form-group">
                <input type="date" class="form-control item" name="dob" id="birth-date" placeholder="Birth Date">
            </div>
            <div class="form-group">
              <input type="text" class="form-control item" name="address" id="address" placeholder="Address">
            </div>
            <div class="form-group">
                <button class="btn btn-block create-account">Create Account</button>
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
