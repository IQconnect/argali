<div class="side-box">
  <div class="fb-page" data-href="https://www.facebook.com/ApartamentyJuno/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/ApartamentyJuno/" class="fb-xfbml-parse-ignore">
      <a href="https://www.facebook.com/ApartamentyJuno/">
        Apartamenty Juno
      </a>
    </blockquote>
  </div>
  <div class="side-box__fb-button">
    <i class="fab fa-facebook-f"></i>
  </div>
</div>

<footer class="footer">
  <img class="footer__bg" src="@asset('images/footer.png')" alt="background" />
  <div class="container">
    <div class="footer__content">
      <div class="footer__left">
        <img
          src="{{ get_field('logo-white', 'options')['url'] }}"
          alt="Apartamenty Juno"
          class="footer__logo"
        />
        <nav class="footer__nav-wrapper" data-nav>
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'header__menu']) !!}
            @endif
        </nav>
      </div>
      <a href="http://iqconnect.pl/">
        <img class="footer__by" src="@asset('images/iq.png')" alt="logo" />
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
          url: 'https://apartamentyjuno.pl/mail.php',
          data: $(this).serialize(),
          success: function () {
            alert('Wiadomość została wysłana!');
          }
        });
      });
  });
</script>

<script async defer src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2"></script>
