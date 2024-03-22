<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-image:url("images/clasic.jpg");
      background-size:cover; 
    }

    .container {
      max-width: 500px;
      margin-top: 50px;
      background-color:rgba(0,0,0,0.7);
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      padding: 30px;
    }

    .form-label {
      font-weight: 600;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>
</head>
<body>
  
  <div class="container text-light mx-auto" >
    <h1 class="mb-4">Registration Form</h1>
    <form action="reg_handle.php" method='POST'>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Enter your address" name="address" required>
      </div>
      <div class="mb-3">
        <label for="number" class="form-label">Number</label>
        <input  type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="number" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="userId" class="form-label">User ID</label>
        <input type="text" class="form-control" id="userId" placeholder="Enter your user ID" name="user_id" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>
      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" name="pwd" required>
      </div>
      <button type="submit" class="btn btn-primary px-4" name="submit">Submit</button>
      <button type="reset" class="btn btn-danger px-4 mx-3" name="Reset">Reset</button>
    </form>
  </div>
    <script>
      
        window.addEventListener('load', function(e) { 
          console.log('The page has finished loading.'); 

          //Listner method for contact no input
          document.querySelector('#phone').addEventListener('input', function() {
            var phone = this.value;
            var isValid = /^[0-9]+$/.test(phone);
            if(!isValid){
              this.value=phone.slice(0,phone.length-1);
            }
            this.value=this.value.slice(0,9);
          });

          //Listner method for pwd fields
          document.querySelector('#confirmPassword').addEventListener('change', function() {
            var cpwd = this.value;
            var pass = document.querySelector('#password').value;
            if(cpwd != pass){
              this.value = '';
              document.querySelector('#password').value = '';
              alert('Password do not match.!');
              
            }
            this.value=this.value.slice(0,9);
          });
        });

        //
        document.querySelector('#name').addEventListener('input', function() {
            var name = this.value;
            var isValid = /^[a-zA-Z\s]+$/.test(name);
            if(!isValid){
              this.value=name.slice(0,name.length-1);
            }
        });

    </script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
