<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>авторизация</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <style>
    .form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}

body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #eee;
}
  </style>
  <div class="container">

      <div class="col-md-12">
        <form 
        class="form-signin" 
        role="form" 
        method="POST" 
        action="<?=URL;?>admin/login"
         >

        <h2 class="form-signin-heading">Please sign in</h2>

        <div class="form-group">
              <input type="text" 
            class="form-control"
             placeholder="login"
              required autofocus
              name="login">
        </div>
        
        <div class="form-group">
          <input type="password"
                 class="form-control" 
                 placeholder="Password" required
                 name="password">
           <p><?if(isset($error)):echo $error; endif?></p>

          
      </div>

       <div class="form-group">
        <input 
        class="btn btn-lg btn-primary btn-block"
        type="submit" value="войти" name="enter" id="">
      </div>

      </form>

    </div>
      </div>
</body>

 
</html>

