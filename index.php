<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="#">
  <link rel="stylesheet" href="./dist/app.css">
  <title>Audiophile e-commerce</title>
</head>

<body class="relative">
  <div class="hero-header-wrapper bg-mobile-hero md:bg-tablet-hero lg:bg-desktop-hero bg-100% parent child-bg-transparent">
    <?php include 'header.php' ?>
    
    <!-- HERO SECTION -->
    <div class="hero">
      <div class="container">
        <div
          class="max-w-327 md:max-w-[396px] mt-28 md:mt-32 lg:mt-24 xl:mt-32 mx-auto text-center lg:mx-0 lg:text-left">
          <p class="uppercase text-xs font-normal tracking-widest text-white text-opacity-50">new product</p>
          <h1 class="mt-6 uppercase text-36 md:text-5xl text-white tracking-wide">XX99 Mark II Headphones</h1>
          <p class="mt-6 text-base font-medium leading-25 text-white text-opacity-75">
            Experience natural, lifelike audio and exceptional build quality made for the passionate music enthusiast.
          </p>
          <a href="./single-product.php?id=4" class="btn-type-1 btn-type-1--brand mt-10">see product</a>
        </div>
      </div>
    </div>

  </div>

  <main class="pt-4 md:pt-[33px] lg:pt[79px] pb-[120px] lg:pb-40 relative">
    <div class="container">
      <!-- PRODUCT CATEGORY LIST -->
      <div class="grid md:grid-cols-3 gap-17 md:gap-2.5 lg:gap-7.5 items-center mt-24 md:mt-36 lg:mt-40">
        <div class="bg-light-grey rounded relative pt-20 pb-7.5 grid justify-items-center">
          <img class="w-40 lg:w-52 absolute -top-1/3 lg:-top-1/2"
            src="./assets/shared/desktop/image-category-thumbnail-headphones.png" alt="headphones">
          <h6 class="uppercase font-bold text-sm lg:text-lg tracking-1.07 lg:tracking-1.3">Headphones</h6>
          <a href="headphones.html" class="btn-type-2 mt-4.25 lg:mt-3.75">shop <img
              src="./assets/shared/desktop/icon-arrow-right.svg" alt="arrow right"></a>
        </div>
        <div class="bg-light-grey rounded relative pt-20 pb-7.5 grid justify-items-center">
          <img class="w-40 lg:w-52 absolute -top-1/3 lg:-top-1/2"
            src="./assets/shared/desktop/image-category-thumbnail-speakers.png" alt="headphones">
          <h6 class="uppercase font-bold text-sm lg:text-lg tracking-1.07 lg:tracking-1.3">speakers</h6>
          <a href="speakers.html" class="btn-type-2 mt-4.25 lg:mt-3.75">shop <img
              src="./assets/shared/desktop/icon-arrow-right.svg" alt="arrow right"></a>
        </div>
        <div class="bg-light-grey rounded relative pt-20 pb-7.5 grid justify-items-center">
          <img class="w-40 lg:w-52 absolute -top-1/3 lg:-top-1/2"
            src="./assets/shared/desktop/image-category-thumbnail-earphones.png" alt="headphones">
          <h6 class="uppercase font-bold text-sm lg:text-lg tracking-1.07 lg:tracking-1.3">earphones</h6>
          <a href="earphones.html" class="btn-type-2 mt-4.25 lg:mt-3.75">shop <img
              src="./assets/shared/desktop/icon-arrow-right.svg" alt="arrow right"></a>
        </div>
      </div>

      <!-- ZX9 SPEAKER -->
      <div
        class="mt-[7.5rem] md:mt-24 lg:mt-[10.5rem] py-16 lg:pt-28 lg:pb-28 px-6 lg:px-20 xl:pb-0 bg-brand bg-pattern-circles bg-no-repeat circles-pattern-position rounded flex flex-col lg:flex-row gap-8 md:gap-16 lg:gap-28 xl:gap-36 items-center  justify-center overflow-hidden">
        <picture class="lg:-mb-4 lg:self-center xl:self-end">
          <source media="(min-width: 1024px)" srcset="assets/home/desktop/image-speaker-zx9.png">
          <source media="(min-width: 768px)" srcset="assets/home/tablet/image-speaker-zx9.png">
          <img class="max-w-[5.75rem] md:max-w-[13.75rem] lg:max-w-[25.625rem] w-full"
            src="assets/home/mobile/image-speaker-zx9.png" alt="speaker">
        </picture>

        <div
          class="md:max-w-[21.875rem] lg:mt-3 lg:self-center xl:self-start grid items-center justify-items-center lg:justify-items-start text-center lg:text-left">
          <h2 class="uppercase text-36 md:text-5xl text-white tracking-wide">ZX9 speaker</h2>
          <p class="mt-6 text-base font-medium leading-25 text-white text-opacity-75">Upgrade to premium speakers
            that
            are phenomenally
            built to deliver truly remarkable sound.</p>
          <a class="mt-6 md:mt-10 btn-type-1 btn-type-1--black" href="./single-product.php?id=6">see product</a>
        </div>
      </div>

      <!-- ZX7 SPEAKER -->
      <div
        class="rounded mt-6 md:mt-8 lg:mt-12 py-[6.25rem] pl-6 md:pl-[3.875rem] lg:pl-24 bg-100% bg-no-repeat bg-speaker-zx7-mobile md:bg-speaker-zx7-tablet lg:bg-speaker-zx7-desktop">
        <h4 class="text-2xl tracking-wide font-bold uppercase">ZX7 speaker</h4>
        <a class="btn-type-1 btn-type-1--transparent mt-8" href="./single-product.php?id=5"> see product</a>
      </div>

      <!-- YX1 EARPHONES -->
      <div class="grid md:grid-cols-2 mt-6 md:mt-8 lg:mt-12 gap-y-6 md:gap-x-2.5 lg:gap-[1.875rem]">
        <picture>
          <source media="(min-width: 1024px)" srcset="./assets/home/desktop/image-earphones-yx1.jpg">
          <source media="(min-width: 768px)" srcset="./assets/home/tablet/image-earphones-yx1.jpg">
          <img class="rounded w-full h-full" src="./assets/home/mobile/image-earphones-yx1.jpg"
            alt="earphones yx1 model">
        </picture>

        <div class="bg-light-grey py-[6.25rem] pl-6 md:pl-[3.875rem] lg:pl-24 rounded items-stretch">
          <h4 class="text-2xl tracking-wide font-bold uppercase">YX1 EARPHONES</h4>
          <a class="btn-type-1 btn-type-1--transparent mt-8" href="./single-product.php?id=1"> see product</a>
        </div>
      </div>

      <div
        class="mt-[7.5rem] md:mt-24 lg:mt-[12.5rem] grid lg:grid-cols-2 items-center justify-items-center gap-y-10 md:gap-y-16 lg:gap-x-20">
        <picture class="lg:order-2">
          <source media="(min-width: 1024px)" srcset="./assets/shared/desktop/image-best-gear.jpg">
          <source media="(min-width: 768px)" srcset="./assets/shared/tablet/image-best-gear.jpg">
          <img width="540px" height="588px" class="rounded w-full" src="./assets/shared/mobile/image-best-gear.jpg"
            alt="man weared headphone">
        </picture>
        <article class="md:max-w-573 lg:max-w-445 lg:order-1 text-center lg:text-left">
          <h2 class="uppercase text-2xl md:text-4xl tracking-1 md:tracking-1.5 font-bold md:leading-44">Bringing you the
            <span class="text-brand">best</span>
            audio
            gear</h2>
          <p class="text-base font-medium leading-25 text-black text-opacity-50 mt-8"> Located at the heart of New
            York
            City, Audiophile is the premier store for high end headphones,
            earphones, speakers, and audio accessories. We have a large showroom and luxury demonstration
            rooms available for you to browse and experience a wide range of our products. Stop by our store
            to meet some of the fantastic people who make Audiophile the best place to buy your portable
            audio equipment.</p>
        </article>
      </div>
    </div>
  </main>

  <?php include 'footer.php'; ?>
  <script src="./dist/main.js"></script>
</body>

</html>