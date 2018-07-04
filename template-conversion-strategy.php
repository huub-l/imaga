<?
/**
 * Template Name: Conversion - Strategy
 */

use IMAGA\Theme\Assets;
?>

<? while (have_posts()) : the_post(); ?>

  <div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0">
    <div class="container py-0">

      <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 pt-6 pl-5">
          <h1 class="display-1 mb-4">Discover insights that matters to your bottom line with our Conversion Optimization Process</h1>
          <p class="lead mb-5">We’ll let the insights and data guide us when we start working on fixing what matters most to your customers</p>
        </div>
      </div>

    </div>
    <div class="bg-conversion-strategy"></div>
    <a class="scroll-arrow bg-green" href="#wordpress"><i class="fa fa-chevron-down"></i></a>
  </div>

<section class="bg-yellow">
  <div class="container">
    <div class="row text-center">
      <div class="col-3">
        <a href="/conversion-optimization/conversion-research">
          <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-research-light.svg');?>" alt="Conversion Research">
          <h4 class="text-white">Conversion<br>Research</h4>
        </a>
      </div>
      <div class="col-3 conversion-arrow">
        <a href="/conversion-optimization/conversion-strategy">
          <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-strategy-light.svg');?>" alt="Conversion Strategy">
          <h4 class="text-white">Conversion<br>Strategy</h4>
        </a>
      </div>
      <div class="col-3">
        <a href="/conversion-optimization/conversion-design">
          <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-design-light.svg');?>" alt="Conversion Design">
          <h4 class="text-white">Conversion<br>Design</h4>
        </a>
      </div>
      <div class="col-3">
        <a href="/conversion-optimization/conversion-build">
          <img class="img-fluid mb-2" src="<?= Assets\asset_path('images/icons/conversion-build-light.svg');?>" alt="Conversion Build">
          <h4 class="text-white">Conversion<br>Build</h4>
        </a>
      </div>
    </div>
  </div>
</section>



  <section class="bg-light">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
          <h1 class="display-2 mb-4">We’ll discover the right conversion optimization data and insights for your customers</h1>
          <p class="lead mb-4">Conversion Optimization Research and good, clean data is key to getting the valuable insights, making the right business decisions and moving your company forward</p>
          <p class="lead">Conversion optimization is a process. Amateurs follow best practices and don't know where to begin. Experts follow frameworks and processes. This free course will teach you the process of optimization.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center py-5">
          <img class="img-fluid" src="<?= Assets\asset_path('images/insights-diagram.png'); ?>" alt="Insights">
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-8">
          <p class="lead mb-3">Conversion Optimization Research and good, clean data is key to getting the valuable insights, making the right business decisions and moving your company forward.</p>
          <p class="lead">We view Conversion optimization work as a process. We don’t just assume what might be wrong and we certainly don’t just start ‘fixing’ and changing your website without doing the research first.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container text-center">
      <div class="row">
        <div class="col-12">
          <h1 class="display-2 mb-4">When do you need what kind of data?</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-4">
          <p class="lead">Qualitative<br>Conversion data</p>
          <a href="#Learn-more" class="btn btn-orange btn-lg">Learn more</a>
        </div>
        <div class="col-4">
          <p class="lead">Quantitative<br>Conversion data</p>
          <a href="#Learn-more" class="btn btn-orange btn-lg">Learn more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <? get_template_part('templates/sections/brands','banner'); ?>
  </section>

<? endwhile; ?>
