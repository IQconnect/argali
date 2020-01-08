@php
  $madeby = option('logo-madeby')['url'];
@endphp

<footer class="section footer">
  <div class="container">
    <div class="footer__wrapper">
      <nav class="footer__nav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer__menu']) !!}
        @endif
      </nav>
      <a class="footer__madeby" href="http://iqconnect.pl/">
        <img src="{{ $madeby }}" alt="IQ Connect - Nowoczesa strona internetowa dla Twojej firmy - Strony internetowe | Realizacje Video">
      </a>
    </div>
  </div>
</footer>

<script>
  $(function() {
      $('.form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          type: 'post',
          url: 'http://argali.com.pl/mail.php',
          data: $(this).serialize(),
          success: function () {
            alert('Wiadomość została wysłana!');
          }
        });
      });
  });
</script>