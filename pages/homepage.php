<!-- Declaring variables -->
<?php
    $banner_images = [
        "https://theme.hstatic.net/1000237375/1000756917/14/slider_item_1_image.jpg?v=1061",
        "https://theme.hstatic.net/1000237375/1000756917/14/slider_item_2_image.jpg?v=1062",
        "https://theme.hstatic.net/1000237375/1000756917/14/slider_item_5_image.jpg?v=1062"
    ];
    $sales_products = [
        [
            'name' => 'Think and grow rich',
            'linkAffi' => 'https://amzn.to/47sWog1',
            'linkImg' => 'https://m.media-amazon.com/images/I/41GGJ9cYRqL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'The Lean Startup',
            'linkAffi' => 'https://amzn.to/40A7VrN',
            'linkImg' => 'https://m.media-amazon.com/images/I/51PAIR77wJL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'The $100 Startup Fire Your Boss Do What You Love and Work Better to Live',
            'linkAffi' => 'https://s.click.aliexpress.com/e/_DECVvcX',
            'linkImg' => 'https://ae01.alicdn.com/kf/Se449ad1eb4cf44d790350c695b2fc6b7j/The-100-Startup-Fire-Your-Boss-Do-What-You-Love-and-Work-Better-to-Live-More.jpg_.webp',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Beyond Happiness: How Authentic Leaders Prioritize Purpose and People for Growth and Impact',
            'linkAffi' => 'https://amzn.to/49wupxS',
            'linkImg' => 'https://m.media-amazon.com/images/I/41sNF7bYX2L.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Trusted Leader: 8 Pillars That Drive Results',
            'linkAffi' => 'https://amzn.to/475bx7J',
            'linkImg' => 'https://m.media-amazon.com/images/I/51GB3TXNLbL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Money: Master the Game: 7 Simple Steps to Financial Freedom',
            'linkAffi' => 'https://amzn.to/47nJoIy',
            'linkImg' => 'https://m.media-amazon.com/images/I/611T2YWNsiL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Powerful Phrases for Dealing with Difficult People',
            'linkAffi' => 'https://amzn.to/476IksJ',
            'linkImg' => 'https://m.media-amazon.com/images/I/51UEasZ6K1L.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Trump: The Art of the Deal',
            'linkAffi' => 'https://amzn.to/466Lmfn',
            'linkImg' => 'https://m.media-amazon.com/images/I/51PHRtxl4NL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'The Making of a Manager: What to Do When Everyone Looks to You',
            'linkAffi' => 'https://amzn.to/47nKOTo',
            'linkImg' => 'https://m.media-amazon.com/images/I/71NmNSBW1PL._SY466_.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Your Next Five Moves: Master the Art of Business Strategy',
            'linkAffi' => 'https://amzn.to/46avWXD',
            'linkImg' => 'https://m.media-amazon.com/images/I/51C1EdbZwLL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Blue Ocean Strategy, Expanded Edition: How to Create Uncontested Market Space and Make the Competition Irrelevant',
            'linkAffi' => 'https://amzn.to/3SBUiGn',
            'linkImg' => 'https://m.media-amazon.com/images/I/610tS1EpU0L.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => '$100M Offers: How to Make Offers So Good People Feel Stupid Saying No',
            'linkAffi' => 'https://amzn.to/46ccFoL',
            'linkImg' => 'https://m.media-amazon.com/images/I/41GqbVAnxeL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Built to Sell: Creating a Business That Can Thrive Without You',
            'linkAffi' => 'https://amzn.to/47anUiC',
            'linkImg' => 'https://m.media-amazon.com/images/I/51rKSHggH6L.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
        [
            'name' => 'Shoe Dog: A Memoir by the Creator of Nike',
            'linkAffi' => 'https://amzn.to/3QxwOj7',
            'linkImg' => 'https://m.media-amazon.com/images/I/51SGjt9pPlL.jpg',
            'priceOld' => '12$',
            'price' => '15$'
        ],
    ];
    $sections = [
        "Featured products",
        "New products",
        "Multiple watched products",
    ]
?>

<style>
    .banner-slider {
        height: 400px;
    }
    .product-item {
        position: relative;
    }
    .btn-add {
        position: absolute;
        bottom: 12px;
    }
</style>
<!-- Banner -->
<section id="banner" class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide banner-slider" data-bs-ride="carousel">
        <div class="carousel-inner h-100">
            <div class="carousel-item h-100 active">
            <img src="<?php echo $banner_images[0]?>" class="d-block w-100 h-100" alt="images_banner_1">
            </div>
            <div class="carousel-item h-100">
            <img src="<?php echo $banner_images[1]?>" class="d-block w-100 h-100" alt="images_banner_2">
            </div>
            <div class="carousel-item h-100">
            <img src="<?php echo $banner_images[2]?>" class="d-block w-100 h-100" alt="images_banner_3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Sale -->
<section id="sales-products">
   <div class="container">
        <h1 class="bg-dark text-center text-white">Sales</h1>
        <div id="content-section">
           <div class="row">
                <?php foreach($sales_products as $item) { ?>
                        <div class="card col-lg-2 product-item">
                            <img src="<?php echo $item['linkImg'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['name']?></h5>
                                <div class="d-flex justify-content-between mb-5">
                                    <h5 class="card-title"><?php echo $item['priceOld']?></h5>
                                    <h5 class="card-title"><?php echo $item['price']?></h5>
                                </div>
                                <a href="<?php echo $item['linkAffi']?>" class="btn btn-primary btn-add" target="_blank">Go somewhere</a>
                            </div>
                        </div>
                <?php } ?>
           </div>
        </div>
   </div>
</section>
