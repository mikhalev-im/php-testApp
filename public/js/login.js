(function($) {
  var loginForm = $('#login'),
      registerForm = $('#register'),
      restorePasswordForm = $('#restorePassword');

  $(document).ready(init);

  function showLoginForm() {
    $(loginForm).removeClass("hidden");
    $(registerForm).addClass("hidden");
    $(restorePasswordForm).addClass("hidden");
  }

  function showRegisterForm() {
    $(loginForm).addClass("hidden");
    $(registerForm).removeClass("hidden");
    $(restorePasswordForm).addClass("hidden");
  }

  function showRestorePasswordForm() {
    $(loginForm).addClass("hidden");
    $(registerForm).addClass("hidden");
    $(restorePasswordForm).removeClass("hidden");
  }

  function init() {
    $(loginForm).find('a[href="#register"]').on('click', showRegisterForm);
    $(loginForm).find('a[href="#restorePassword"]').on('click', showRestorePasswordForm);
    $(registerForm).find('a[href="#login"]').on('click', showLoginForm);
    $(restorePasswordForm).find('a[href="#login"]').on('click', showLoginForm);
  }

  function validateLogin() {}

  function validateRegister() {}

  function validateRestore() {}

})(jQuery);