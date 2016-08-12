(function($) {
  var loginForm = $('#login'),
      registerForm = $('#register'),
      restorePasswordForm = $('#restorePassword'),
      header = $('h3.panel-title');

  $(document).ready(init);

  function showLoginForm() {
    var h = $(loginForm).attr('data-header');
    header.text(h);
    $(loginForm).removeClass("hidden");
    $(registerForm).addClass("hidden");
    $(restorePasswordForm).addClass("hidden");
  }

  function showRegisterForm() {
    var h = $(registerForm).attr('data-header');
    header.text(h);
    $(loginForm).addClass("hidden");
    $(registerForm).removeClass("hidden");
    $(restorePasswordForm).addClass("hidden");
  }

  function showRestorePasswordForm() {
    var h = $(restorePasswordForm).attr('data-header');
    header.text(h);
    $(loginForm).addClass("hidden");
    $(registerForm).addClass("hidden");
    $(restorePasswordForm).removeClass("hidden");
  }

  function submitLangForm() {
    $('#langForm').submit();
  }

  function init() {
    $('#langForm').find('a').on('click', submitLangForm);
    $(loginForm).find('a.register-link').on('click', showRegisterForm);
    $(loginForm).find('a.restore-link').on('click', showRestorePasswordForm);
    $(registerForm).find('a.login-link').on('click', showLoginForm);
    $(restorePasswordForm).find('a.login-link').on('click', showLoginForm);
  }

  function validateLogin() {}

  function validateRegister() {}

  function validateRestore() {}

})(jQuery);