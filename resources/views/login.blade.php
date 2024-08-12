<link rel="stylesheet" type="text/css" href="resources/css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    height: 100vh;
    background: linear-gradient(to top, #c9c9ff 50%, #9090fa 90%) no-repeat;
}
.container{
    margin: 50px auto;
}
.panel-heading{
    text-align: center;
    margin-bottom: 10px;
}
#forgot{
    min-width: 100px;
    margin-left: auto;
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
.form-inline label{
    padding-left: 10px;
    margin: 0;
    cursor: pointer;
}
.btn.btn-primary{
    margin-top: 20px;
    border-radius: 15px;
}
.panel{
    min-height: 380px;
    box-shadow: 20px 20px 80px rgb(218, 218, 218);
    border-radius: 12px;
}
.input-field{
    border-radius: 5px;
    padding: 5px;
    display: flex;
    align-items: center;
    cursor: pointer;
    border: 1px solid #ddd;
    color: #4343ff;
}
input[type='text'],
input[type='password']{
    border: none;
    outline: none;
    box-shadow: none;
    width: 100%; 
}
.fa-eye-slash.btn{
    border: none;
    outline: none;
    box-shadow: none;
}
img{
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
    position: relative;
}
a[target='_blank']{
    position: relative;
    transition: all 0.1s ease-in-out;
}

.bordert{
    border-top: 1px solid #aaa;
    position: relative;
}
.bordert:after{
    content: "or connect with";
    position: absolute;
    top: -13px;
    left: 33%;
    background-color: #fff;
    padding: 0px 8px;
}
@media(max-width: 360px){
    #forgot{
        margin-left: 0;
        padding-top: 10px;
    }
    body{
        height: 100%;
    }
    .container{
        margin: 30px 0;
    }
    .bordert:after{
        left: 25%;
    }
}

</style>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<div class="container">
  <div class="row">
      <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
          <div class="panel border bg-white">
              <div class="panel-heading">
                  <h3 class="pt-3 font-weight-bold">Login</h3>
              </div>
              <div class="panel-body p-3">
                  <form action="login_script.php" method="POST">
                      <div class="form-group py-2">
                          <div class="input-field">
                              <span class="far fa-user p-2"></span>
                              <input type="text" placeholder="Username or Email" required>
                          </div>
                      </div>
                      <div class="form-group py-1 pb-2">
                          <div class="input-field">
                              <span class="fas fa-lock px-2"></span>
                              <input type="password" placeholder="Enter your Password" required>
                              <button class="btn bg-white text-muted">
                                  <span class="far fa-eye-slash"></span>
                              </button>
                          </div>
                      </div>
                      <div class="form-inline">
                          <input type="checkbox" name="remember" id="remember">
                          <label for="remember" class="text-muted">Remember me</label>
                          <a href="#" id="forgot" class="font-weight-bold">Forgot password?</a>
                      </div>
                      <div class="btn btn-primary btn-block mt-3">Login</div>
                      <div class="text-center pt-4 text-muted">Don't have an account? <a href="#">Sign up</a>
                      </div>
                  </form>
              </div>
              
          </div>
      </div>
  </div>
</div>