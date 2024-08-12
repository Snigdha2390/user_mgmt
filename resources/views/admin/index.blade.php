<link rel="stylesheet" type="text/css" href="resources/css/style.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<style>
  body{

background-color: #eee;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
}


.card{

width: 400px;
padding: 20px;
border:none;
}



.account{

    font-weight: 500;
font-size: 17px;
}

.contact{

    font-size: 13px;
}

.form-control{
text-indent: 14px;
}

.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #4a148c;
outline: 0;
box-shadow: none;
}

.inputbox{

margin-bottom: 10px;
position: relative;
}

.inputbox i{

    position: absolute;
left: 8px;
top: 12px;
color: #dadada;
}


.form-check-label{

font-size: 13px;
}

.form-check-input {
width: 14px;
height: 15px;
margin-top: 5px;

}

.forgot {
font-size: 14px;
text-decoration: none;
color: #4A148C;
}

.mail{

color: #4a148c;
text-decoration: none;
}


.form-check{

cursor: pointer;
}

.btn-primary {
color: #fff;
background-color: #4A148C;
border-color: #4A148C;
}
  </style>
<div class="card">

  <div class="text-center intro">
   <img src="image/employee-icon-png-17.jpg" width="160">
    <span class="d-block account">Don't have account yet?</span>
  </div>

  <div class="mt-4 text-center">
      
      <h4 >Log In.</h4>
      <span>Login with your admin credentials</span>

      <div class="mt-3 inputbox">

       <input type="text" class="form-control" name="" placeholder="Email">
      
           
           <i class="fa fa-user"></i>
         
      </div>


      <div class="inputbox">

       <input type="text" class="form-control" name="" placeholder="Password">
       <i class="fa fa-lock"></i>
          
      </div>

  </div>


  <div class="d-flex justify-content-between">

   <div class="form-check">
     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
     <label class="form-check-label" for="flexCheckDefault">
       Keep me Logged in
     </label>
   </div>

   <div>
       <a href="#" class="forgot">Forgot Password?</a>
   </div>
      
  </div>

  <div class="mt-2">


   <button class="btn btn-primary btn-block">Log In</button>
      

  </div>


 
  


</div>