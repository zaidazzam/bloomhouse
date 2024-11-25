<?php
// Example array of categories
$categories = [
    [
        'name' => 'Hand Bouquet',
        'image' => './assets/images/logos/anivlogo-removebg-preview.png',
        'link' => './category.html',
        'products_count' => 33
    ],
    [
        'name' => 'Flower Arrangements',
        'image' => './assets/images/logos/anivlogo-removebg-preview.png',
        'link' => './category.html',
        'products_count' => 40
    ],
    [
      'name' => 'Flower Arrangements',
      'image' => './assets/images/logos/anivlogo-removebg-preview.png',
      'link' => './category.html',
      'products_count' => 40
    ],
    [
      'name' => 'Flower Arrangements',
      'image' => './assets/images/logos/anivlogo-removebg-preview.png',
      'link' => './category.html',
      'products_count' => 40
  ],
  [
    'name' => 'Flower Arrangements',
    'image' => './assets/images/logos/anivlogo-removebg-preview.png',
    'link' => './category.html',
    'products_count' => 40
  ],
    // Add more categories as needed
];
?>

<div class="mb-lg-7 bg-light py-4" data-aos="fade-in">
  <div class="container">
    <p class="small fw-bolder text-uppercase tracking-wider mb-3 text-muted text-center">
      Shop By Categories
    </p>
    <div class="row gx-3 align-items-center">
      <div class="col-12 justify-content-center justify-content-md-between align-items-center d-flex flex-wrap">
        <?php foreach ($categories as $category): ?>
          <div class="m-4 ms-md-0 mt-md-0 mb-md-0 box-flower rounded-circle col-md-2 col-sm-4 col-lg-2">
            <a class="d-block" href="<?= $category['link']; ?>" data-bs-toggle="tooltip" data-bs-placement="top">
              <img class="img-fluid d-table mx-auto" src="<?= $category['image']; ?>" alt="<?= $category['name']; ?>" />
            </a>
            <p class="title"><?= $category['name']; ?></p>
            <p class="product"><?= $category['products_count']; ?> Product</p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
