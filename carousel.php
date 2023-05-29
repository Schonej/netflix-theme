<!-- Swiper -->
<div class="container-fluid mb-5 text-white late">
  <h3 class="mb-3">Trending</h3>
  <div class="swiper mySwiper mb-5">
    <div class="swiper-wrapper">

        <?php foreach($newArr as $arr) {; ?>
          <div class="swiper-slide">
            <div class="image">
              <img src="<?php echo 'https://www.themoviedb.org/t/p/w220_and_h330_face/' . $arr['backdrop_path']; ?>"></img>
            </div>
          </div>
        <?php };?>

    </div>
  </div>

  <h3 class="mb-3">Action</h3>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

        <?php foreach($tvArr as $tv) {; ?>
          <div class="swiper-slide">
            <div class="image">
              <img src="<?php echo 'https://www.themoviedb.org/t/p/w220_and_h330_face/' . $tv['backdrop_path']; ?>"></img>
            </div>
          </div>
        <?php };?>

    </div>
  </div>
</div>