<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
          <form method="POST" id="login">
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required focus>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="form-group">
              <p>Forgot your password? <a href="javascript:void(0)" class="restore-link">Restore!</a></p>
            </div>
            <div class="form-group">
              <p>Don't have an account? <a href="javascript:void(0)" class="register-link">Register!</a></p>
            </div>
          </form>
          <form method="POST" class="hidden" id="register">
            <div class="form-group">
              <label for="inputEmail" class="sr-only">User Name</label>
              <input type="text" id="inputEmail" class="form-control" placeholder="User Name" required focus>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required focus>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Repeat Password" required>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </div>
            <div class="form-group">
              <p>Already have an account? <a href="javascript:void(0)" class="login-link">Login!</a></p>
            </div>
          </form>
          <form method="POST" class="hidden" id="restorePassword">
            <div class="form-group">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required focus>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit">Restore</button>
            </div>
            <div class="form-group">
              <p>Do you remember you password? <a href="javascript:void(0)" class="login-link">Login!</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/public/js/login.js"></script>