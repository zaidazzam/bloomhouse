<!-- Main Section -->
<div class="container">
    <div class="row">
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ftco-animate blog-detail">
                        <h1 style="font-size: 36px; font-weight: 500">8 Tips For Shopping</h1>
                        <span style="font-size: 16px; font-weight: 200">18 Januari 2000</span>
                        <center class="my-4">
                            <img class="img-fluid centered-image" src="./assets/images/products/bunga3.jpg" alt="Deskripsi bunga" title="Bunga">
                        </center>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit,
                            quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam
                            porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore
                            perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae
                            voluptates soluta architecto tempora.</p>
                        <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat
                            sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem
                            soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore
                            amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae
                            suscipit!</p>
                        <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
                        <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut,
                            in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia
                            doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi
                            consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis
                            commodi aut, adipisci.</p>
                        <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo
                            quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis
                            quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero
                            sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
                        <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum
                            quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis
                            porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates
                            aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.
                        </p>
                        <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio
                            similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam
                            iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga
                            eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus
                            culpa, tenetur recusandae!</p>
                        <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci
                            quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis
                            est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident,
                            pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus
                            praesentium, rerum ipsa debitis, inventore?</p>
                        <div class="tag-widget post-tag-container mb-5 mt-5">
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Life</a>
                                <a href="#" class="tag-cloud-link">Sport</a>
                                <a href="#" class="tag-cloud-link">Tech</a>
                                <a href="#" class="tag-cloud-link">Travel</a>
                            </div>
                        </div>
                    </div>

                    <!-- Side Bar Content -->
                    <div class="col-lg-4 sidebar ftco-animate">
                        <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon ion-ios-search"></span>
                                    <input type="text" class="form-control"
                                        placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="heading">Categories</h3>
                            <ul class="categories mt-3 mb-5">
                                <?php
                                $categories = [
                                    ["name" => "Roses", "count" => 12],
                                    ["name" => "Tulips", "count" => 22],
                                    ["name" => "Orchids", "count" => 37],
                                    ["name" => "Sunflowers", "count" => 42],
                                    ["name" => "Lilies", "count" => 14],
                                    ["name" => "Daisies", "count" => 140],
                                ];
                                foreach ($categories as $category) {
                                    echo '<li><a href="#">' . 
                                            '<p class="categories">' . $category['name'] . '</p>' .
                                            '<p class="count">(' . $category['count'] . ')</p>' .
                                         '</a></li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="sidebar-box ftco-animate">
                            <h3 CLASS="heading">Tag Cloud</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">shop</a>
                                <a href="#" class="tag-cloud-link">products</a>
                                <a href="#" class="tag-cloud-link">shirt</a>
                                <a href="#" class="tag-cloud-link">jeans</a>
                                <a href="#" class="tag-cloud-link">shoes</a>
                                <a href="#" class="tag-cloud-link">dress</a>
                                <a href="#" class="tag-cloud-link">coats</a>
                                <a href="#" class="tag-cloud-link">jumpsuits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-lg-12">
            <!-- Blog Comments -->
            <div class="container" data-aos="fade-in">
                            <div class="row g-3">
                            <?php
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
                            foreach ($posts as $post) {
                                echo '
                                <div class="col-12 col-lg-4" data-aos="fade-left">
                                <div class="new-box-detail p-4 d-flex h-100 justify-content-start flex-column rounded">
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
                    <center>
                        <div class="btn-semua">
                            <a href="/blog">Semua Artikel</a>
                        </div>
                    </center>
        
                    </div>
    </div>
</div>