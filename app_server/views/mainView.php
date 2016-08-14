<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-8">
              <h3 class="panel-title"><?php echo $lc['headerLogin'];?></h3>
            </div>
            <div class="col-xs-4">
              <form action="/" method="POST" class="pull-right" id="langForm">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo strtoupper($curLang);?> <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><?php echo $curLang == 'en' ? 'RU' : 'EN';?></a></li>
                  </ul>
                </div>
                <input type="hidden" name="switchTo<?php echo $curLang == 'en' ? 'Ru' : 'En';?>" value="do">
              </form>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="alert alert-danger <?php if (!isset($data['error'])) echo 'hidden' ?>" role="alert">
            <?php
              echo $lc[$data['error']];
            ?>
          </div>
          <form method="POST" id="login" action="/login/login" data-header="<?php echo $lc['headerLogin'];?>">
            <div class="form-group">
              <label for="loginEmail" class="sr-only"><?php echo $lc['email'];?></label>
              <input type="email" id="loginEmail" class="form-control" placeholder="<?php echo $lc['email'];?>" name="email" required focus>
            </div>
            <div class="form-group">
              <label for="loginPassword" class="sr-only"><?php echo $lc['password'];?></label>
              <input type="password" id="loginPassword" class="form-control" placeholder="<?php echo $lc['password'];?>" name="password" required>
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
          <form enctype="multipart/form-data" method="POST" class="hidden" id="register" action="/login/register" data-header="<?php echo $lc['headerRegister'];?>">
            <div class="form-group">
              <label for="registerUsername" class="sr-only"><?php echo $lc['username'];?></label>
              <input type="text" id="registerUsername" class="form-control" placeholder="<?php echo $lc['username'];?>" name="username" required focus>
            </div>
            <div class="form-group">
              <label for="registerEmail" class="sr-only"><?php echo $lc['email'];?></label>
              <input type="email" id="registerEmail" class="form-control" placeholder="<?php echo $lc['email'];?>" name="email" required focus>
            </div>
            <div class="form-group">
              <label for="registerPassword" class="sr-only"><?php echo $lc['password'];?></label>
              <input type="password" id="registerPassword" class="form-control" placeholder="<?php echo $lc['password'];?>" name="password" required>
            </div>
            <div class="form-group">
              <label for="registerPasswordRepeat" class="sr-only"><?php echo $lc['passwordRepeat'];?></label>
              <input type="password" id="registerPasswordRepeat" class="form-control" placeholder="<?php echo $lc['repeatPassword'];?>" name="passwordRepeat" required>
            </div>
            <hr>
            <div class="form-group">
              <label for="registerLocation" class="sr-only"><?php echo $lc['location'];?></label>
              <input type="text" id="registerLocation" class="form-control" placeholder="<?php echo $lc['location'];?>" name="location" focus>
            </div>
            <div class="form-group">
              <label for="registerSite" class="sr-only"><?php echo $lc['site'];?></label>
              <input type="text" id="registerSite" class="form-control" placeholder="<?php echo $lc['site'];?>" name="website" focus>
            </div>
            <div class="form-group">
              <label for="registerBirth" class="sr-only"><?php echo $lc['dateOfBirth'];?></label>
              <input type="date" id="registerBirth" class="form-control" placeholder="<?php echo $lc['dateOfBirth'];?>" name="dateOfBirth" focus>
            </div>
            <div class="form-group">
              <input type="hidden" name="MAX_FILE_SIZE" value="1000">
              <input type="file" name="avatar">
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lc['register'];?></button>
            </div>
            <div class="form-group">
              <p><?php echo $lc['haveAccaunt'];?>? <a href="javascript:void(0)" class="login-link"><?php echo $lc['login'];?>!</a></p>
            </div>
          </form>
          <form method="POST" class="hidden" id="restorePassword" action="/login/restore" data-header="<?php echo $lc['headerRestorePassword'];?>">
            <div class="form-group">
              <label for="restoreEmail" class="sr-only"><?php echo $lc['email'];?></label>
              <input type="email" id="restoreEmail" class="form-control" placeholder="<?php echo $lc['email'];?>" name="email" required focus>
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $lc['restore'];?></button>
            </div>
            <div class="form-group">
              <p><?php echo $lc['rememberPassword'];?>? <a href="javascript:void(0)" class="login-link"><?php echo $lc['login'];?>!</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/public/js/login.js"></script>