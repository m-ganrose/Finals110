@extends('layouts.admin')

<link rel="stylesheet" href="../dist/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../dist/css/style.css" type="text/css">
@section('title')
 Navigatu Add Event
@endsection


@section('content')



    <!-- Hero Section Begin -->
  
        <section class="hero bg-black">
            <div class="container">
                <div id="heroSlider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../Sources/hero-1.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="hero__text">
                                            <div class="label">Adventure</div>
                                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                            <p>After 30 days of travel across the world...</p>
                                            <a href="#" class="btn btn-primary"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../Sources/hero-1.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="hero__text">
                                            <div class="label">Adventure</div>
                                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                            <p>After 30 days of travel across the world...</p>
                                            <a href="#" class="btn btn-primary"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../Sources/hero-1.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="hero__text">
                                            <div class="label">Adventure</div>
                                            <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                            <p>After 30 days of travel across the world...</p>
                                            <a href="#" class="btn btn-primary"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#heroSlider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#heroSlider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad bg-black">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="/watch">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/trending/trend-1.jpg">
                                        <img src="../Sources/trending/trend-1.jpg" alt="" class="product__item__pic set-bg">
                                        
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/trending/trend-2.jpg">
                                        <img src="../Sources/trending/trend-2.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/trending/trend-3.jpg">
                                        
                                        <img src="../Sources/trending/trend-3.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/trending/trend-4.jpg">
                                        
                                        <img src="../Sources/trending/trend-4.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/trending/trend-5.jpg">
                                        <img src="../Sources/trending/trend-5.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/trending/trend-6.jpg">
                                        <img src="../Sources/trending/trend-6.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Episodes</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/popular/popular-1.jpg">
                                        <img src="../Sources/popular/popular-1.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Sen to Chihiro no Kamikakushi</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/popular/popular-2.jpg">
                                        <img src="../Sources/popular/popular-2.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/popular/popular-3.jpg">
                                        <img src="../Sources/popular/popular-3.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/popular/popular-4.jpg">
                                        <img src="../Sources/popular/popular-4.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Rurouni Kenshin: Meiji Kenkaku Romantan</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/popular/popular-5.jpg">
                                        <img src="../Sources/popular/popular-5.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/popular/popular-6.jpg">
                                        <img src="../Sources/popular/popular-6.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Monogatari Series: Second Season</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Live Action</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/live-1.jpg">
                                        <img src="../Sources/live/live-1.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shouwa Genroku Rakugo Shinjuu</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/live-2.jpg">
                                        <img src="../Sources/live/live-2.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/live-3.jpg">
                                        <img src="../Sources/live/live-3.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/live-4.jpg">
                                        <img src="../Sources/live/live-4.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/live-5.jpg">
                                        <img src="../Sources/live/live-5.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Sources/live-6.jpg">
                                        <img src="../Sources/live/live-6.jpg" alt="" class="product__item__pic set-bg">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Kizumonogatari II: Nekketsu-hen</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Anime News</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="../Sources/tv-1.jpg">
                                <img src="../Sources/sidebar/tv-1.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="img/sidebar/tv-2.jpg">
                            <img src="../Sources/sidebar/tv-2.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                               
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="img/sidebar/tv-3.jpg">
                        <img src="../Sources/sidebar/tv-3.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                               
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="img/sidebar/tv-4.jpg">
                    <img src="../Sources/sidebar/tv-4.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                               
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="img/sidebar/tv-5.jpg">
                <img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                               
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
            </div>
            <div class="product__sidebar__view__item set-bg mix day"
            data-setbg="img/sidebar/tv-5.jpg">
            <img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                           
            <div class="ep">18 / ?</div>
            <div class="view"><i class="fa fa-eye"></i> 9141</div>
            <h5><a href="#">Fate stay night unlimited blade works</a></h5>
        </div>

        <div class="product__sidebar__view__item set-bg mix day"
        data-setbg="img/sidebar/tv-5.jpg">
        <img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                       
        <div class="ep">18 / ?</div>
        <div class="view"><i class="fa fa-eye"></i> 9141</div>
        <h5><a href="#">Fate stay night unlimited blade works</a></h5>
    </div>

    <div class="product__sidebar__view__item set-bg mix day"
    data-setbg="img/sidebar/tv-5.jpg">
    <img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
                   
    <div class="ep">18 / ?</div>
    <div class="view"><i class="fa fa-eye"></i> 9141</div>
    <h5><a href="#">Fate stay night unlimited blade works</a></h5>
</div>

<div class="product__sidebar__view__item set-bg mix day"
data-setbg="img/sidebar/tv-5.jpg">
<img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
               
<div class="ep">18 / ?</div>
<div class="view"><i class="fa fa-eye"></i> 9141</div>
<h5><a href="#">Fate stay night unlimited blade works</a></h5>
</div>

<div class="product__sidebar__view__item set-bg mix day"
data-setbg="img/sidebar/tv-5.jpg">
<img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
               
<div class="ep">18 / ?</div>
<div class="view"><i class="fa fa-eye"></i> 9141</div>
<h5><a href="#">Fate stay night unlimited blade works</a></h5>
</div>

<div class="product__sidebar__view__item set-bg mix day"
data-setbg="img/sidebar/tv-5.jpg">
<img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
               
<div class="ep">18 / ?</div>
<div class="view"><i class="fa fa-eye"></i> 9141</div>
<h5><a href="#">Fate stay night unlimited blade works</a></h5>
</div>

<div class="product__sidebar__view__item set-bg mix day"
data-setbg="img/sidebar/tv-5.jpg">
<img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
               
<div class="ep">18 / ?</div>
<div class="view"><i class="fa fa-eye"></i> 9141</div>
<h5><a href="#">Fate stay night unlimited blade works</a></h5>
</div>

<div class="product__sidebar__view__item set-bg mix day"
data-setbg="img/sidebar/tv-5.jpg">
<img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
               
<div class="ep">18 / ?</div>
<div class="view"><i class="fa fa-eye"></i> 9141</div>
<h5><a href="#">Fate stay night unlimited blade works</a></h5>
</div>

<div class="product__sidebar__view__item set-bg mix day"
data-setbg="img/sidebar/tv-5.jpg">
<img src="../Sources/sidebar/tv-5.jpg" alt="" class="product__sidebar__view__item set-bg mix day years">
               
<div class="ep">18 / ?</div>
<div class="view"><i class="fa fa-eye"></i> 9141</div>
<h5><a href="#">Fate stay night unlimited blade works</a></h5>
</div>

        </div>
    </div>
   
</div>
</div>
</div>
</div>
</section>








@endsection
<script src="../dist/js/player.js"></script>
<script src="../dist/js/jquery.nice-select.min.js"></script>
<script src="../dist/js/mixitup.min.js"></script>
<script src="../dist/js/jquery.slicknav.js"></script>
<script src="../dist/js/owl.carousel.min.js"></script>
<script src="../dist/js/main.js"></script>

@section('scripts')

@endsection