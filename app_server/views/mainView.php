<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Login</h3>
        </div>
        <div class="panel-body">
          <div class="alert alert-danger <?php if (!isset($data['error'])) echo 'hidden' ?>" role="alert">
            <?php
              echo $data['error'];
            ?>
          </div>
          <form method="POST" id="login" action="/login/login">
            <div class="form-group">
              <label for="inputEmail" class="sr-only"><?php echo $lc['email'];?></label>
              <input type="email" id="inputEmail" class="form-control" placeholder="<?php echo $lc['email'];?>" name="email" required focus>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only"><?php echo $lc['password'];?></label>
              <input type="password" id="inputPassword" class="form-control" placeholder="<?php echo $lc['password'];?>" name="password" required>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me" name="remember"> <?php echo $lc['rememberMe'];?>
                </label>
              </div>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lc['signin'];?></button>
            </div>
            <div class="form-group">
              <p><?php echo $lc['forgetPassword'];?>? <a href="javascript:void(0)" class="restore-link"><?php echo $lc['restore'];?>!</a></p>
            </div>
            <div class="form-group">
              <p><?php echo $lc['needAccaunt'];?>? <a href="javascript:void(0)" class="register-link"><?php echo $lc['register'];?>!</a></p>
            </div>
          </form>
          <form method="POST" class="hidden" id="register" action="/login/register">
            <div class="form-group">
              <label for="inputEmail" class="sr-only"><?php echo $lc['username'];?></label>
              <input type="text" id="inputEmail" class="form-control" placeholder="<?php echo $lc['username'];?>" name="username" required focus>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="sr-only"><?php echo $lc['email'];?></label>
              <input type="email" id="inputEmail" class="form-control" placeholder="<?php echo $lc['email'];?>" name="email" required focus>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only"><?php echo $lc['password'];?></label>
              <input type="password" id="inputPassword" class="form-control" placeholder="<?php echo $lc['password'];?>" name="password" required>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="sr-only"><?php echo $lc['passwordRepeat'];?></label>
              <input type="password" id="inputPassword" class="form-control" placeholder="<?php echo $lc['repeatPassword'];?>" name="password-repeat" required>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lc['register'];?></button>
            </div>
            <div class="form-group">
              <p><?php echo $lc['haveAccaunt'];?>? <a href="javascript:void(0)" class="login-link"><?php echo $lc['login'];?>!</a></p>
            </div>
          </form>
          <form method="POST" class="hidden" id="restorePassword" action="/login/restore">
            <div class="form-group">
              <label for="inputEmail" class="sr-only"><?php echo $lc['email'];?></label>
              <input type="email" id="inputEmail" class="form-control" placeholder="<?php echo $lc['email'];?>" name="email" required focus>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lc['restore'];?></button>
            </div>
            <div class="form-group">
              <p><?php echo $lc['rememberPassword'];?>? <a href="javascript:void(0)" class="login-link"><?php echo $lc['login'];?>!</a></p>
            </div>
          </form>
          <form action="/" method="POST" class="pull-right">
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                RU <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">EN</a></li>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/public/js/login.js"></script>