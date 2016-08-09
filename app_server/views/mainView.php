<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form method="POST" id="login">
        <h2>Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required focus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p>Don't have an account? <a href="#register">Register!</a></p>
        <p>Forgot your password? <a href="#restorePassword">Restore!</a></p>
      </form>
      <form method="POST" class="hidden" id="register">
        <h2>Register</h2>
        <label for="inputEmail" class="sr-only">User Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="User Name" required focus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required focus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Repeat Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <p>Already have an account? <a href="#login">Login!</a></p>
      </form>
      <form method="POST" class="hidden" id="restorePassword">
        <h2>Restore password</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required focus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Restore</button>
        <p>Do you remember you password? <a href="#login">Login!</a></p>
      </form>
    </div>
  </div>
</div>
<script src="/public/js/login.js"></script>