<?php
    $background_logo = './assets/images/brands/none-background_logo.svg';
    $catagories = [
        "Sách mầm non",
        "Sách thiều nhi",
        "Sách kỹ năng",
        "Sách kinh doanh",
        "Sách mẹ và bé",
        "Sách văn học",
        "Sách tham khảo",
    ];
    $account_info = [
        'signin',
        'signup',
    ]
?>

<style>
    .navbar {
        height: 92px;
    }
    .logo {
        height: 100%;
    }
</style>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container h-100">
            <a class="navbar-brand" href="#">
                <img src="<?php echo $background_logo?>" alt="logo" class="logo h-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Topnav -->
            <div class="d-flex flex-column">
                <div id="topnav">
                    <div class="justify-content-between d-flex" id="navbarSupportedContent" >
                        <form class="d-flex w-50" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">
                                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            </button>
                        </form>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Account
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($account_info as $item) { ?>
                                        <li>
                                            <a class="dropdown-item" href="#"><?php echo $item ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- nav main -->
                <div id="nav-main">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php foreach($catagories as $item) { ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"><?php echo $item?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>