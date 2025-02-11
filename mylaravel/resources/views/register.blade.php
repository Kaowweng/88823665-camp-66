@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{url('/register')}}"onsubmit = "return allcheck(event)" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name"id = "name"class="form-control" placeholder="Full Name" oninput = "checkname()"/>
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">กรุณาระบบข้อมูล ชื่อ-สกุล</div>
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id= "email"class="form-control" placeholder="Email" oninput = "checkemail()"/>
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <div class="valid-feedback">อีเมลถูกต้อง</div>
            <div class="invalid-feedback">กรุณากรอกอีเมลให้ถูกต้อง</div>
          </div>
          <div class="input-group mb-3">
            <input type="password"name = "password" id= "password"class="form-control" placeholder="Password"oninput = "checkpassword()" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">กรุณากรอกรหัสผ่านให้ถูกต้อง</div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign up</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
          <!-- /.social-auth-links -->
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
  @endsection


@section('scripts')
<script>  

function checkname() {
    let name = $('#name').val().trim(); 
    if (name !== "" && name.length>=3) {
        $('#name').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#name').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
  }
    function checkemail() {
    let email = $('#email').val(); 
    let emailcorrect = /^[a-zA-Z0-9+-_%.]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]{2,}$/;
    if (emailcorrect.test(email)) {
          $('#email').removeClass('is-invalid').addClass('is-valid'); 
          return true;
    } else {
        $('#email').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
  }
    function checkpassword() {
    let passwordcorrect = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])[a-zA-Z0-9+-_%.]{8,}$/;
    let password = $('#password').val(); 
    if (passwordcorrect.test(password)) {
        $('#password').removeClass('is-invalid').addClass('is-valid'); 
        return true;
    } else {
        $('#password').removeClass('is-valid').addClass('is-invalid'); 
        return false;
    }
  }
    function allcheck(event){
      event.preventDefault();
      let checkbox = document.getElementById("flexCheckDefault").checked;
     let confirm =  checkname() &&checkemail() &&checkpassword() && checkbox ;
     let nametitle = confirm ? "Success" : "Error",
         nametext = !checkname()?"please input name ":!checkemail()?"please input email ":!checkpassword()?"please input password ":confirm ? "thank you for register" : "please verify all",
         typeicon = confirm ? "success" : "error";
      swal.fire({
        title:nametitle,
        text : nametext,
        icon:typeicon
      })
     if(confirm){
      event.target.submit();
     }
    }
  
</script>
@endsection