<html>
  <head>
    <title>GadgetReview</title>
    <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="login-box">
        <div class="row">
          <div class="col-md-6 login-left">
            <h2> Login Here </h2>
            <form action="validation.php" method="post">
              <div class="form-group">
                <label>Username</label>
                  <input type="text" name="user" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Password</label>
                  <input type="password" name="password" class="form-control" required />
              </div>
              <button type="submit" class="btn btn-primary">login </button>
            </form>
          </div>
          <div class="col-md-6 login-right">
            <h2> SignUp Here </h2>
            <form action="registration.php" method="post">
              <div class="form-group">
                <label>Username</label>
                  <input type="text" name="user" class="form-control" required />
              </div>
              <div class="form-group">
                <label>Password</label>
                  <input type="password" name="password" class="form-control" required />
              </div>
              <button type="submit" class="btn btn-primary">SignUp </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
