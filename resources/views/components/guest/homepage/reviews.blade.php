<section>
  <div class="container" data-aos="fade-in">
    <h2 class="fs-1 fw-bold mb-3 text-center mb-5">Latest Blog</h2>
    <div class="row g-3">
      <?php
      // Sample array of blog posts
      $posts = [
        [
          "title" => "Amazing Service!",
          "author" => "John Doe",
          "location" => "London",
          "date" => "18th March 2018",
          "image" => "./assets/images/banners/banner-1.jpg",
          "content" => "I have shopped with them for a few years now. Very easy to select items, items always as described. Never had to return any item. Good value."
        ],
        [
          "title" => "Great Quality!",
          "author" => "Jane Smith",
          "location" => "New York",
          "date" => "5th April 2019",
          "image" => "./assets/images/logos/granopeninglogo.jpg",
          "content" => "High-quality products and fast shipping. Highly recommend shopping here!"
        ],
        [
          "title" => "Amazing Service!",
          "author" => "John Doe",
          "location" => "London",
          "date" => "18th March 2018",
          "image" => "./assets/images/banners/banner-3.jpg",
          "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem ipsum, beatae eaque minus iste quod tempore iusto modi maxime nisi quibusdam id quasi at explicabo corporis cum odit similique consequatur."
        ],
        // Add more posts here
      ];

      // Loop through each blog post
      foreach ($posts as $post) {
        echo '
        <div class="col-12 col-lg-4" data-aos="fade-left">
          <div class="bg-light p-4 d-flex h-100 justify-content-start flex-column rounded">
            <img class="img-responsive mb-3 rounded" src="' . $post['image'] . '" alt="' . htmlspecialchars($post['title']) . '" />
            <p class="fw-bolder lead mb-0">' . htmlspecialchars($post['title']) . '</p>
            <small class="text-muted d-block mb-2 fw-bolder mb-2 mt-2">
              ' . htmlspecialchars($post['author']) . ', ' . htmlspecialchars($post['location']) . ' / ' . htmlspecialchars($post['date']) . '
            </small>
            <p class="mb-3 truncated-content">' . htmlspecialchars($post['content']) . '</p>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
</section>
