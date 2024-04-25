<?php

/**
 * Template Name: HomePage Template
 * Template Post Type: page
 *
 * @package ovs
 * @subpackage ovh
 * @since 1.0
 */

get_header();
?>

<!--Font Hack for Home-->
<style>
  @font-face {
    font-family: "brice-black-semicondensed-local";
    src: url("/wp-content/themes/ovh/fonts/brice/Brice-BlackSemiCondensed.otf");
    /*src: url("../fonts/brice/Brice-BlackSemiCondensed.otf");*/
    font-display: auto;
    font-style: normal;
    font-weight: 900;
    font-stretch: normal
  }

  .brice-black-semicondensed-local {
    font-family: brice-black-semicondensed-local, sans-serif !important
  }

  @font-face {
    font-family: "brice-regular-local";
    src: url("/wp-content/themes/ovh/fonts/brice/Brice-Regular.otf");
    /*src: url("../fonts/brice/Brice-Regular.otf");*/
    font-display: auto;
    font-style: normal;
    font-weight: 400;
    font-stretch: normal
  }

  .brice-reg {
    font-family: brice-regular-local, sans-serif !important
  }
</style>

<?php
// get the acf field product_carousel
$product_carousel_1 = get_field('carousel_products_1');
$product_carousel_2 = get_field('carousel_products_2');
?>


<div class="home-mobile mhome-container">

  <div class="mhome-1 w-100 mhome-row mhome-item">
    <img width="365" height="130" src="/wp-content/uploads/2023/01/Group-694.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="/wp-content/uploads/2023/01/Group-694.png 365w, /wp-content/uploads/2023/01/Group-694-300x107.png 300w" sizes="(max-width: 365px) 100vw, 365px">
  </div>
  <div class="mhome-2 w-100 mhome-row">
    <div class="w-50 mhome-2-1 mhome-item">
      <!--            <img class="center-image" src="https://orchardvalleyharvest.com/wp-content/uploads/2023/01/NutGroup.png" alt="A variety of nuts">-->
      <img class="center-image" src="/wp-content/uploads/2023/01/NutGroup.png" alt="A variety of nuts">
    </div>
    <div class="w-50 mhome-2-2 mhome-item">
      <!--            <img class="center-image" src="https://orchardvalleyh.wpengine.com/wp-content/uploads/2022/12/Group-794.png" alt="">-->
      <img class="center-image" src="/wp-content/uploads/2022/12/Group-794.png" alt="">
    </div>
  </div>
  <!--  Video  -->
  <div class="mhome-3 w-100 mhome-row mhome-item mhome-item-video">
    <div class="image-carousel">
      <div class="carousel-track">
        <?php if (have_rows('carousel_products_1')) : ?>
          <?php while (have_rows('carousel_products_1')) : the_row(); ?>
            <?php
            $product = get_sub_field('product');
            $color = get_sub_field('product_background');
            $product_images = get_field('product_images', $product);
            if ($product_images) :
              $first_image = $product_images[0];
            ?>
              <div class="carousel-item" style="background-color: <?= $color ?>">
                <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('carousel_products_1')) : ?>
          <?php while (have_rows('carousel_products_1')) : the_row(); ?>
            <?php
            $product = get_sub_field('product');
            $color = get_sub_field('product_background');
            $product_images = get_field('product_images', $product);
            if ($product_images) :
              $first_image = $product_images[0];
            ?>
              <div class="carousel-item" style="background-color: <?= $color ?>">
                <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!--  Pledge  -->
  <div class="mhome-4 w-100 mhome-row mhome-item">
    <img src="/wp-content/uploads/2022/12/Group-755-1.png">
    <div class="home-btn-wrapper align_right home-link brice-black-semicondensed-local"><a class="w-btn us-btn-style_1" title="Find Out More" href="/find-out-more/"><span class="w-btn-label">Find Out More</span></a></div>
  </div>
  <!-- Friends -->
  <div class="mhome-5 w-100 mhome-row mhome-item">
    <img class="center-image" src="/wp-content/uploads/2022/12/Group-795.png">
  </div>
  <div class="mhome-6 w-100 mhome-row mhome-item">
    <img class="center-image" src="/wp-content/uploads/2022/12/Group-702.png">
  </div>

  <div class="mhome-7 w-100 mhome-row">
    <div class="w-50 mhome-7-1 mhome-item">
      <img width="168" height="351" src="/wp-content/uploads/2023/01/Group-696.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="/wp-content/uploads/2023/01/Group-696.png 168w, /wp-content/uploads/2023/01/Group-696-144x300.png 144w" sizes="(max-width: 168px) 100vw, 168px">
    </div>
    <div class="w-50 mhome-7-2 mhome-item">
      <img width="256" height="405" src="/wp-content/uploads/2023/01/Group-697.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="/wp-content/uploads/2023/01/Group-697.png 256w, /wp-content/uploads/2023/01/Group-697-190x300.png 190w" sizes="(max-width: 256px) 100vw, 256px">
    </div>
  </div>

  <div class="mhome-8 w-100 mhome-row mhome-item">
    <img width="238" height="201" src="/wp-content/uploads/2023/01/Group-698.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy">
  </div>

  <div class="mhome-9 w-100 mhome-row mhome-item">
    <p class="brice-reg">Conscious Alliance support and feeds America's communities by sorting, packing and moving truckloads of healthy food - like our OVH snacks - to those in need.</p>
    <a class="home-link brice-black-semicondensed-local" target="_blank" href="https://consciousalliance.org/">FIND OUT MORE</a>
  </div>

  <div class="mhome-10 w-100 mhome-row mhome-item mhome-board">

    <div class="board-frame board-1 board-h1" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Frame2.png)">
      <div class="board-frame-inner"></div>
      <div class="board-pin"></div>
      <div class="board-frame-image" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Image1.png)"></div>
      <div class="board-frame-text brice-black-semicondensed">OVH supporting Conscious Alliance at The String Cheese Incident, Red Rocks, Colorado</div>
    </div>

    <div class="board-frame board-4 board-h2" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Frame2.png)">
      <div class="board-frame-inner"></div>
      <div class="board-pin"></div>
      <div class="board-frame-image" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Image2a.png)"></div>
      <div class="board-frame-text brice-black-semicondensed">OVH supporting Conscious Alliance at The String Cheese Incident, Red Rocks, Colorado</div>
    </div>

  </div>

  <!-- Falling Nuts -->
  <div class="mhome-11 w-100 mhome-row mhome-item">
    <video class="home-falling-nuts" autoplay="" loop="" muted="" playsinline="" style="">
      <source src="/wp-content/uploads/2023/02/FN1-1.mov" type='video/mp4; codecs="hvc1"'>
      <source src="/wp-content/uploads/2023/02/Falling-Nuts.webm" type="video/webm">
    </video>

    <div class="home-farmers">
      <p class="brice-black-condensed">FOUNDED BY FARMERS,</p>
      <p class="brice-black-condensed text-flair">WE ARE</p>
      <p class="brice-black-condensed">THE SNACKING BRAND</p>
      <p class="brice-semibold">THAT BELIEVES</p>
      <p class="brice-bold">IN BETTER</p>
    </div>
  </div>

  <!--  Video  -->
  <div class="mhome-12 w-100 mhome-row mhome-item mhome-item-video overflow-hidden">
    <div id="carousel-2" class="image-carousel">
      <div class="carousel-track">
        <?php if (have_rows('carousel_products_2')) : ?>
          <?php while (have_rows('carousel_products_2')) : the_row(); ?>
            <?php
            $product = get_sub_field('product');
            $color = get_sub_field('product_background');
            $product_images = get_field('product_images', $product);
            if ($product_images) :
              $first_image = $product_images[0];
            ?>
              <div class="carousel-item" style="background-color: <?= $color ?>">
                <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('carousel_products_2')) : ?>
          <?php while (have_rows('carousel_products_2')) : the_row(); ?>
            <?php
            $product = get_sub_field('product');
            $color = get_sub_field('product_background');
            $product_images = get_field('product_images', $product);
            if ($product_images) :
              $first_image = $product_images[0];
            ?>
              <div class="carousel-item" style="background-color: <?= $color ?>">
                <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- Good Food -->
  <div class="mhome-13 w-100 mhome-row mhome-item ">
    <img width="425" height="277" src="/wp-content/uploads/2022/12/Group-800.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="/wp-content/uploads/2022/12/Group-800.png 425w, /wp-content/uploads/2022/12/Group-800-300x196.png 300w" sizes="(max-width: 425px) 100vw, 425px">
  </div>

  <!--  Video  -->
  <div class="mhome-14 w-100 mhome-row mhome-item mhome-item-video overflow-hidden">
    <div id="carousel-3" class="image-carousel">
      <div class="carousel-track">
        <?php if (have_rows('carousel_products_1')) : ?>
          <?php while (have_rows('carousel_products_1')) : the_row(); ?>
            <?php
            $product = get_sub_field('product');
            $color = get_sub_field('product_background');
            $product_images = get_field('product_images', $product);
            if ($product_images) :
              $first_image = $product_images[0];
            ?>
              <div class="carousel-item" style="background-color: <?= $color ?>">
                <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php if (have_rows('carousel_products_1')) : ?>
          <?php while (have_rows('carousel_products_1')) : the_row(); ?>
            <?php
            $product = get_sub_field('product');
            $color = get_sub_field('product_background');
            $product_images = get_field('product_images', $product);
            if ($product_images) :
              $first_image = $product_images[0];
            ?>
              <div class="carousel-item" style="background-color: <?= $color ?>">
                <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>


  <!-- Indulge -->
  <div class="mhome-15 w-100 mhome-row mhome-item">
    <img width="363" height="163" src="/wp-content/uploads/2023/01/Group-602.png" class="attachment-full size-full" alt="" decoding="async" loading="lazy" srcset="/wp-content/uploads/2023/01/Group-602.png 363w, /wp-content/uploads/2023/01/Group-602-300x135.png 300w" sizes="(max-width: 363px) 100vw, 363px">
  </div>

</div>








<div id="home-container-v2">


  <div class="home-section home-1">
    <div class="home-col w-33 home-1-col-1  ">
      <div class="home-1-sub-1 h-100 home-item overflow-hidden">
        <div class="image-carousel">
          <div class="carousel-track">
            <?php if (have_rows('carousel_products_1')) : ?>
              <?php while (have_rows('carousel_products_1')) : the_row(); ?>
                <?php
                $product = get_sub_field('product');
                $color = get_sub_field('product_background');
                $product_images = get_field('product_images', $product);
                if ($product_images) :
                  $first_image = $product_images[0];
                ?>
                  <div class="carousel-item" style="background-color: <?= $color ?>">
                    <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('carousel_products_1')) : ?>
              <?php while (have_rows('carousel_products_1')) : the_row(); ?>
                <?php
                $product = get_sub_field('product');
                $color = get_sub_field('product_background');
                $product_images = get_field('product_images', $product);
                if ($product_images) :
                  $first_image = $product_images[0];
                ?>
                  <div class="carousel-item" style="background-color: <?= $color ?>">
                    <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="home-col w-66 home-1-col-2 ">
      <div class="home-1-sub-2 h-50 home-item">
        <img class="center-image" src="/wp-content/uploads/2022/12/right-thing.png" alt="">
      </div>
      <div class="w-100 h-50 flex-row">
        <div class="h-100 w-50 home-1-sub-3 home-item">
          <img class="center-image" src="/wp-content/uploads/2023/01/NutGroup.png" alt="A variety of nuts">
        </div>
        <div class="h-100 w-50 home-1-sub-4 home-item">
          <img class="center-image" src="/wp-content/uploads/2022/12/Group-794.png" alt="">
        </div>
      </div>
    </div>

  </div>


  <div class="home-section home-2">
    <div class="home-col w-75 home-2-col-1">
      <div class="home-2-sub-1 h-100 home-item">
        <img src="/wp-content/uploads/2022/12/Group-755-1.png">
        <div class="home-btn-wrapper align_right home-link brice-black-semicondensed-local"><a class="w-btn us-btn-style_1" title="Find Out More" href="/find-out-more/"><span class="w-btn-label">Find Out More</span></a></div>
      </div>

    </div>
    <div class="home-col w-25 home-2-col-2">
      <div class="home-2-sub-2 h-50 home-item">
        <img class="center-image" src="/wp-content/uploads/2022/12/Group-795.png">
      </div>
      <div class="home-2-sub-3 h-50 home-item">
        <img class="center-image" src="/wp-content/uploads/2022/12/Group-702.png">
      </div>
    </div>
  </div>


  <div class="home-section home-3">
    <div class="home-col w-33 home-3-col-1">
      <div class="home-3-sub-1 h-50 home-item">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player class="home-plates-lottie" src="/wp-content/themes/ovh/animations/Plate_Hover_Homepage.json" background="transparent" speed="1" style="width: auto; height: 100%;" hover></lottie-player>
        <!--            <img class="center-image" src="https://orchardvalleyh.wpengine.com/wp-content/uploads/2022/12/Component-5-–-2.png">-->
      </div>
      <div class="home-3-sub-2 h-50 home-item">
        <div class="home-feed">
          <p class="brice-bold">FEEDING</p>
          <p class="brice-black-condensed">A BETTER FUTURE</p>
          <p class="brice-bold">ONE MEAL</p>
          <p class="brice-bold">AT A TIME</p>
        </div>
      </div>
    </div>
    <div class="home-col w-66 home-3-col-2">
      <div class="home-3-sub-3 h-100 home-item home-board-frame">
        <div class="board-frame board-1 board-h1" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Frame2.png)">
          <div class="board-frame-inner"></div>
          <div class="board-pin"></div>
          <div class="board-frame-image" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Image1.png)"></div>
          <div class="board-frame-text brice-black-semicondensed">OVH supporting Conscious Alliance at The String Cheese Incident, Red Rocks, Colorado</div>
        </div>

        <div class="board-frame board-4 board-h2" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Frame2.png)">
          <div class="board-frame-inner"></div>
          <div class="board-pin"></div>
          <div class="board-frame-image" style="background-image: url(https://orchardvalleyharvest.com/wp-content/uploads/2022/12/Image2a.png)"></div>
          <div class="board-frame-text brice-black-semicondensed">OVH supporting Conscious Alliance at The String Cheese Incident, Red Rocks, Colorado</div>
        </div>

        <div class="board-link-h1">
          <div class="brice-bold hl1-1">GET</div>
          <div class="brice-black-condensed hl1-2">Involved</div>
          <div class="hl1-5">
            <img src="https://orchardvalldev.wpengine.com/wp-content/uploads/2023/02/wave-yellow.gif" alt="Yellow Waving Man">
            <!--                    <video autoplay muted loop>-->
            <!--                        <source src="/wp-content/uploads/2023/02/wave-a-1.mov" type='video/mp4; codecs="hvc1"'>-->
            <!--                        <source src="/wp-content/uploads/2023/02/wave-1.webm" type="video/webm" />-->
            <!--                    </video>-->


          </div>
          <div class="hl1-3">
            <p class="brice-reg">Conscious Alliance support and feeds America's communities by sorting, packing and moving truckloads of healthy food - like our OVH snacks - to those in need.</p>
            <a class="hl1-4 home-link brice-black-semicondensed-local" target="_blank" href="https://consciousalliance.org/">FIND OUT MORE</a>
          </div>
        </div>

        <!--            <a target="_blank" href="https://consciousalliance.org/"><img class="center-image" src="https://orchardvalleyh.wpengine.com/wp-content/uploads/2022/12/Mask-Group-525.png" alt=""></a>-->
      </div>
    </div>
  </div>



  <div class="home-section home-4">
    <div class="home-col w-100 home-4-col-1">

      <video class="home-falling-nuts" autoplay="" loop="" muted="" playsinline="" style="">
        <source src="/wp-content/uploads/2023/02/FN1-1.mov" type='video/mp4; codecs="hvc1"'>
        <source src="/wp-content/uploads/2023/02/Falling-Nuts.webm" type="video/webm">
      </video>


      <div class="home-4-sub-1 h-100 home-item">
        <div class="home-farmers">
          <p class="brice-black-condensed">FOUNDED BY FARMERS,</p>
          <p class="brice-black-condensed text-flair">WE ARE</p>
          <p class="brice-black-condensed">THE SNACKING BRAND</p>
          <p class="brice-semibold">THAT BELIEVES</p>
          <p class="brice-bold">IN BETTER</p>
        </div>
      </div>
    </div>
  </div>





  <div class="home-section home-5">
    <div class="home-col w-50 home-5-col-1  ">
      <div class="home-5-sub-1 h-70 home-item overflow-hidden">
        <div id="carousel-2" class="image-carousel">
          <div class="carousel-track">
            <?php if (have_rows('carousel_products_2')) : ?>
              <?php while (have_rows('carousel_products_2')) : the_row(); ?>
                <?php
                $product = get_sub_field('product');
                $color = get_sub_field('product_background');
                $product_images = get_field('product_images', $product);
                if ($product_images) :
                  $first_image = $product_images[0];
                ?>
                  <div class="carousel-item" style="background-color: <?= $color ?>">
                    <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('carousel_products_2')) : ?>
              <?php while (have_rows('carousel_products_2')) : the_row(); ?>
                <?php
                $product = get_sub_field('product');
                $color = get_sub_field('product_background');
                $product_images = get_field('product_images', $product);
                if ($product_images) :
                  $first_image = $product_images[0];
                ?>
                  <div class="carousel-item" style="background-color: <?= $color ?>">
                    <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="home-5-sub-2 h-30 home-item">
        <img class="center-image" src="/wp-content/uploads/2022/12/Group-800.png" alt="">
      </div>
    </div>

    <div class="home-col w-50 home-5-col-2 ">
      <div class="home-5-sub-3 h-30 home-item">
        <img class="center-image" src="/wp-content/uploads/2022/12/Group-740.png" alt="">
      </div>
      <div class="home-5-sub-4 h-70 home-item overflow-hidden">
        <div id="carousel-3" class="image-carousel">
          <div class="carousel-track">
            <?php if (have_rows('carousel_products_1')) : ?>
              <?php while (have_rows('carousel_products_1')) : the_row(); ?>
                <?php
                $product = get_sub_field('product');
                $color = get_sub_field('product_background');
                $product_images = get_field('product_images', $product);
                if ($product_images) :
                  $first_image = $product_images[0];
                ?>
                  <div class="carousel-item" style="background-color: <?= $color ?>">
                    <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php if (have_rows('carousel_products_1')) : ?>
              <?php while (have_rows('carousel_products_1')) : the_row(); ?>
                <?php
                $product = get_sub_field('product');
                $color = get_sub_field('product_background');
                $product_images = get_field('product_images', $product);
                if ($product_images) :
                  $first_image = $product_images[0];
                ?>
                  <div class="carousel-item" style="background-color: <?= $color ?>">
                    <img src="<?php echo $first_image['url']; ?>" alt="<?php echo $first_image['alt']; ?>">
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>