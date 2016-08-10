(function($) {
  var loginForm = $('#login'),
      registerForm = $('#register'),
      restorePasswordForm = $('#restorePassword'),
      header = $('h3.panel-title');

  $(document).ready(init);

  function showLoginForm() {
    header.text('Login');
    $(loginForm).removeClass("hidden");
    $(registerForm).addClass("hidden");
    $(restorePasswordForm).addClass("hidden");
  }

  function showRegisterForm() {
    header.text('Register');
    $(loginForm).addClass("hidden");
    $(registerForm).removeClass("hidden");
    $(restorePasswordForm).addClass("hidden");
  }

  function showRestorePasswordForm() {
    header.text('Restore password');
    $(loginForm).addClass("hidden");
    $(registerForm).addClass("hidden");
    $(restorePasswordForm).removeClass("hidden");
  }

  function init() {
    $(loginForm).find('a.register-link').on('click', showRegisterForm);
    $(loginForm).find('a.restore-link').on('click', showRestorePasswordForm);
    $(registerForm).find('a.login-link').on('click', showLoginForm);
    $(restorePasswordForm).find('a.login-link').on('click', showLoginForm);
  }

  function validateLogin() {}

  function validateRegister() {}

  function validateRestore() {}

})(jQuery);