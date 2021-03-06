<?php
$logo = str_replace( site_url(), '', get_template_directory_uri() . '/public/img/logo.svg' );

if ( file_exists( ABSPATH . $logo ) ) {
	$logo = file_get_contents( ABSPATH . $logo );
} else {
	$logo = '';
}
?>
<footer class="page__footer footer">
  <div class="container">
    <div class="footer__flex">
      <div class="logo footer__logo">
	      <?php echo $logo?>
      </div>
      <div class="company-info footer__company-info">
        <p class="company-info__item">Пн-Вс 10:00 - 20:00</p>
        <span class="company-info__separator"></span>
        <p class="company-info__item">г.Санкт-Петербург</p>
        <p class="company-info__item">ул. Верности, 17</p>
      </div>
      <div class="company-links footer__company-links">
        <div class="socials-line company-links__item company-links__socials-line">
          <div class="socials-line__item">
            <a target="_blank" href="https://vk.com/laser_lady_spb" class="socials-line__item-link">
              <span class="icon-vk"></span>
            </a>
          </div>
          <div class="socials-line__item">
            <a target="_blank" href="https://www.instagram.com/laser_lady_spb/" class="socials-line__item-link">
              <span class="icon-instagram"></span>
            </a>
          </div>
        </div>
        <div class="company-links__item">
          <a href="tel:+79816986908" class="company-links__item-link">+7(981)698-69-08</a>
        </div>
        <div class="company-links__item">
          <a href="mailto:laser_lady@mail.ru" class="company-links__item-link">laser_lady@mail.ru</a>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
