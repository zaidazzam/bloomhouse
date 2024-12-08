<!-- Main Section-->
<div class="container">
    <div class="row">
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-lg-last ftco-animate">
                        <div class="row">
                            <?php
                            $blogs = [
                                [
                                    "title" => "Even the all-powerful Pointing has no control about the blind texts",
                                    "date" => "April 9, 2019",
                                    "author" => "Admin",
                                    "comments" => 3,
                                    "image" => "./assets/images/banners/banner-1.jpg",
                                    "description" => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
                                ],
                                [
                                    "title" => "Even the all-powerful Pointing has no control about the blind texts",
                                    "date" => "April 9, 2019",
                                    "author" => "Admin",
                                    "comments" => 3,
                                    "image" => "./assets/images/products/bunga2.jpg",
                                    "description" => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
                                ],
                                [
                                    "title" => "Even the all-powerful Pointing has no control about the blind texts",
                                    "date" => "April 9, 2019",
                                    "author" => "Admin",
                                    "comments" => 3,
                                    "image" => "./assets/images/products/bunga2.jpg",
                                    "description" => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
                                ],
                                [
                                    "title" => "Even the all-powerful Pointing has no control about the blind texts",
                                    "date" => "April 9, 2019",
                                    "author" => "Admin",
                                    "comments" => 3,
                                    "image" => "./assets/images/products/bunga2.jpg",
                                    "description" => "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
                                ],
                            ];

                            foreach ($blogs as $blog) {
                                ?>
                            <div class="col-md-12 d-flex ftco-animate">
                                <div class="blog-entry align-self-stretch d-md-flex content-blog">
                                    <a href="/detail-blog" class="block-20"
                                        style="background-image: url(<?php echo $blog['image']; ?>);">
                                    </a>
                                    <div class="text d-block pl-md-4 mx-4   ">
                                        <div class="meta mb-3 d-flex">
                                            <div class="me-2"><a href="#"><?php echo $blog['date']; ?></a></div>
                                            <div class="me-2"><a href="#"><?php echo $blog['author']; ?></a></div>
                                            <div><a href="#" class="meta-chat"><span
                                                        class="icon-chat"></span><?php echo $blog['comments']; ?></a></div>
                                        </div>
                                        <h3 class="heading title-blog"><a href="#"><?php echo $blog['title']; ?></a></h3>
                                        <p class="sutitle-blog"><?php echo $blog['description']; ?></p>
                                        <p><a href="/detail-blog" class="btn btn-primary new py-2 px-3">Read more</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <div class="block-27">
                                    <ul class="pagination">
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .col-md-8 -->

                    <div class="col-lg-4 sidebar ftco-animate">
                        <div class="">
                            <form action="#" class="search-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control py-2 filter-search rounded-start"
                                        placeholder="Search" aria-label="Search">
                                    <button type="submit" class="btn btn-search">
                                        <i class="ri-search-2-line ri-lg align-middle"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-box ftco-animate mt-4 mb-4">
                            <h3 class="heading">Flower Article Categories</h3>
                            <ul class="categories mt-3 mb-5">
                                <?php
                                $categories = [['name' => 'Flower Care Tips', 'count' => 12], ['name' => 'Flower Arrangements', 'count' => 22], ['name' => 'Flower Meaning & Symbolism', 'count' => 37], ['name' => 'Seasonal Flowers', 'count' => 42], ['name' => 'Flower Delivery Services', 'count' => 14], ['name' => 'Wedding Flowers', 'count' => 140], ['name' => 'Flower Gift Ideas', 'count' => 29], ['name' => 'Flower Gardening Tips', 'count' => 9]];
                                foreach ($categories as $category) {
                                    echo '<li><a href="#">' . '<p class="categories">' . $category['name'] . '</p>' . '<p class="count">(' . $category['count'] . ')</p>' . '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 class="heading">Tag Cloud</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">flower care</a>
                                <a href="#" class="tag-cloud-link">arrangements</a>
                                <a href="#" class="tag-cloud-link">meaning</a>
                                <a href="#" class="tag-cloud-link">gardening</a>
                                <a href="#" class="tag-cloud-link">delivery</a>
                                <a href="#" class="tag-cloud-link">wedding flowers</a>
                                <a href="#" class="tag-cloud-link">gift ideas</a>
                                <a href="#" class="tag-cloud-link">seasonal flowers</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
