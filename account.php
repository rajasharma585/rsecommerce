<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/riode/account.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 08:35:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Riode - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>


    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/sticky-icon/stickyicon.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>

<body>
    <div class="page-wrapper">
        <?php require ('header.php')?>
        <!-- End Header -->
        <main class="main account">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.php"><i class="d-icon-home"></i></a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mt-4 mb-10 pb-6">
                <div class="container">
                    <h2 class="title title-center mb-10">My Account</h2>
                    <div class="tab tab-vertical gutter-lg">
                        <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#orders">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#downloads">Downloads</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#address">Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#account">Account details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Logout</a>
                            </li>
                        </ul>
                        <div class="tab-content col-lg-9 col-md-8">
                            <div class="tab-pane active" id="dashboard">
                                <p class="mb-0">
                                    Hello <span>User</span> (not <span>User</span>? <a href="#" class="text-primary">Log
                                        out</a>)
                                </p>
                                <p class="mb-8">
                                    From your account dashboard you can view your
                                    <a href="#orders" class="link-to-tab text-primary">recent orders, manage your
                                        shipping and
                                        billing
                                        addresses,<br>and edit your password and account details</a>.
                                </p>
                                <a href="shop.php" class="btn btn-dark btn-rounded">Go To Shop<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                            <div class="tab-pane" id="orders">
                                <table class="order-table">
                                    <thead>
                                        <tr>
                                            <th class="pl-2">Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th class="pr-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="order-number"><a href="#">#3596</a></td>
                                            <td class="order-date"><span>February 24, 2021</span></td>
                                            <td class="order-status"><span>On hold</span></td>
                                            <td class="order-total"><span>₹900.00 for 5 items</span></td>
                                            <td class="order-action"><a href="#"
                                                    class="btn btn-primary btn-link btn-underline">View</a></td>
                                        </tr>
                                        <tr>
                                            <td class="order-number"><a href="#">#3593</a></td>
                                            <td class="order-date"><span>February 21, 2021</span></td>
                                            <td class="order-status"><span>On hold</span></td>
                                            <td class="order-total"><span>₹290.00 for 2 items</span></td>
                                            <td class="order-action"><a href="#"
                                                    class="btn btn-primary btn-link btn-underline">View</a></td>
                                        </tr>
                                        <tr>
                                            <td class="order-number"><a href="#">#2547</a></td>
                                            <td class="order-date"><span>January 4, 2021</span></td>
                                            <td class="order-status"><span>On hold</span></td>
                                            <td class="order-total"><span>₹480.00 for 8 items</span></td>
                                            <td class="order-action"><a href="#"
                                                    class="btn btn-primary btn-link btn-underline">View</a></td>
                                        </tr>
                                        <tr>
                                            <td class="order-number"><a href="#">#2549</a></td>
                                            <td class="order-date"><span>January 19, 2021</span></td>
                                            <td class="order-status"><span>On hold</span></td>
                                            <td class="order-total"><span>₹680.00 for 5 items</span></td>
                                            <td class="order-action"><a href="#"
                                                    class="btn btn-primary btn-link btn-underline">View</a></td>
                                        </tr>
                                        <tr>
                                            <td class="order-number"><a href="#">#4523</a></td>
                                            <td class="order-date"><span>Jun 6, 2021</span></td>
                                            <td class="order-status"><span>On hold</span></td>
                                            <td class="order-total"><span>₹564.00 for 3 items</span></td>
                                            <td class="order-action"><a href="#"
                                                    class="btn btn-primary btn-link btn-underline">View</a></td>
                                        </tr>
                                        <tr>
                                            <td class="order-number"><a href="#">#4526</a></td>
                                            <td class="order-date"><span>Jun 19, 2021</span></td>
                                            <td class="order-status"><span>On hold</span></td>
                                            <td class="order-total"><span>₹123.00 for 8 items</span></td>
                                            <td class="order-action"><a href="#"
                                                    class="btn btn-primary btn-link btn-underline">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="downloads">
                                <p class="mb-4 text-body">No downloads available yet.</p>
                                <a href="#" class="btn btn-primary btn-link btn-underline">Browser Products<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                            <div class="tab-pane" id="address">
                                <p class="mb-2">The following addresses will be used on the checkout page by default.
                                </p>
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="card card-address">
                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase">Billing Address</h5>
                                                <p>John Doe<br>
                                                    Riode Company<br>
                                                    Steven street<br>
                                                    El Carjon, CA 92020
                                                </p>
                                                <a href="#" class="btn btn-link btn-secondary btn-underline">Edit <i
                                                        class="far fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="card card-address">
                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase">Shipping Address</h5>
                                                <p>You have not set up this type of address yet.</p>
                                                <a href="#" class="btn btn-link btn-secondary btn-underline">Edit <i
                                                        class="far fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <form action="#" class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" name="first_name" required="">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" name="last_name" required="">
                                        </div>
                                    </div>

                                    <label>Display Name *</label>
                                    <input type="text" class="form-control mb-0" name="display_name" required="">
                                    <small class="d-block form-text mb-7">This will be how your name will be displayed
                                        in the account section and in reviews</small>

                                    <label>Email Address *</label>
                                    <input type="email" class="form-control" name="email" required="">
                                    <fieldset>
                                        <legend>Password Change</legend>
                                        <label>Current password (leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control" name="current_password">

                                        <label>New password (leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control" name="new_password">

                                        <label>Confirm new password</label>
                                        <input type="password" class="form-control" name="confirm_password">
                                    </fieldset>

                                    <button type="submit" class="btn btn-primary">SAVE CHANGES</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main -->
        <?php require ('footer.php')?>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.php" class="sticky-link">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="shop.php" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.php" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.php" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="demo1.php">Home</a>
                </li>
                <li>
                    <a href="shop.php" class="active">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="shop-classic-filter.php">Classic Filter</a></li>
                                <li><a href="shop-left-toggle-sidebar.php">Left Toggle Filter</a></li>
                                <li><a href="shop-right-toggle-sidebar.php">Right Toggle Sidebar</a></li>
                                <li><a href="shop-horizontal-filter.php">Horizontal Filter </a>
                                </li>
                                <li><a href="shop-navigation-filter.php">Navigation Filter</a></li>

                                <li><a href="shop-off-canvas-filter.php">Off-Canvas Filter </a></li>
                                <li><a href="shop-top-banner.php">Top Banner</a></li>
                                <li><a href="shop-inner-top-banner.php">Inner Top Banner</a></li>
                                <li><a href="shop-with-bottom-block.php">With Bottom Block</a></li>
                                <li><a href="shop-category-in-page-header.php">Category In Page Header</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>
                                <li><a href="shop-grid-3cols.php">3 Columns Mode</a></li>
                                <li><a href="shop-grid-4cols.php">4 Columns Mode</a></li>
                                <li><a href="shop-grid-5cols.php">5 Columns Mode</a></li>
                                <li><a href="shop-grid-6cols.php">6 Columns Mode</a></li>
                                <li><a href="shop-grid-7cols.php">7 Columns Mode</a></li>
                                <li><a href="shop-grid-8cols.php">8 Columns Mode</a></li>
                                <li><a href="shop-list-mode.php">List Mode</a></li>
                                <li><a href="shop-pagination.php">Pagination</a></li>
                                <li><a href="shop-infinite-ajaxscroll.php">Infinite Ajaxscroll </a></li>
                                <li><a href="shop-loadmore-button.php">Loadmore Button</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 3
                            </a>
                            <ul>
                                <li><a href="shop-category-grid-shop.php">Category Grid Shop</a></li>
                                <li><a href="shop-category%2bproducts.php">Category + Products</a></li>
                                <li><a href="shop-default-1.php">Shop Default 1 </a>
                                </li>
                                <li><a href="shop-default-2.php">Shop Default 2</a></li>
                                <li><a href="shop-default-3.php">Shop Default 3</a></li>
                                <li><a href="shop-default-4.php">Shop Default 4</a></li>
                                <li><a href="shop-default-5.php">Shop Default 5</a></li>
                                <li><a href="shop-default-6.php">Shop Default 6</a></li>
                                <li><a href="shop-default-7.php">Shop Default 7</a></li>
                                <li><a href="shop-default-8.php">Shop Default 8</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="product.php">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.php">Simple Product</a></li>
                                <li><a href="product-featured.php">Featured &amp; On Sale</a></li>
                                <li><a href="product.php">Variable Product</a></li>
                                <li><a href="product-variable-swatch.php">Variation Swatch
                                        Product</a></li>
                                <li><a href="product-grouped.php">Grouped Product </a></li>
                                <li><a href="product-external.php">External Product</a></li>
                                <li><a href="product-in-stock.php">In Stock Product</a></li>
                                <li><a href="product-out-stock.php">Out of Stock Product</a></li>
                                <li><a href="product-upsell.php">Upsell Products</a></li>
                                <li><a href="product-cross-sell.php">Cross Sell Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-vertical.php">Vertical Thumb</a></li>
                                <li><a href="product-horizontal.php">Horizontal Thumb</a></li>
                                <li><a href="product-gallery.php">Gallery Type</a></li>
                                <li><a href="product-grid.php">Grid Images</a></li>
                                <li><a href="product-masonry.php">Masonry Images</a></li>
                                <li><a href="product-sticky.php">Sticky Info</a></li>
                                <li><a href="product-sticky-both.php">Left & Right Sticky</a></li>
                                <li><a href="product-left-sidebar.php">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.php">With Right Sidebar</a></li>
                                <li><a href="product-full.php">Full Width Layout </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Features</a>
                            <ul>
                                <li><a href="product-sale.php">Sale Countdown</a></li>
                                <li><a href="product-hurryup.php">Hurry Up Notification </a></li>
                                <li><a href="product-attribute-guide.php">Attribute Guide </a></li>
                                <li><a href="product-sticky-cart.php">Add Cart Sticky</a></li>
                                <li><a href="product-thumbnail-label.php">Labels on Thumbnail</a>
                                </li>
                                <li><a href="product-more-description.php">More Description
                                        Tabs</a></li>
                                <li><a href="product-accordion-data.php">Data In Accordion</a></li>
                                <li><a href="product-tabinside.php">Data Inside</a></li>
                                <li><a href="product-video.php">Video Thumbnail </a>
                                </li>
                                <li><a href="product-360-degree.php">360 Degree Thumbnail </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.php">About</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="account.php">Login</a></li>
                        <li><a href="faq.php">FAQs</a></li>
                        <li><a href="error-404.php">Error 404</a>
                            <ul>
                                <li><a href="error-404.php">Error 404-1</a></li>
                                <li><a href="error-404-1.php">Error 404-2</a></li>
                                <li><a href="error-404-2.php">Error 404-3</a></li>
                                <li><a href="error-404-3.php">Error 404-4</a></li>
                            </ul>
                        </li>
                        <li><a href="coming-soon.php">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.php">Blog</a>
                    <ul>
                        <li><a href="blog-classic.php">Classic</a></li>
                        <li><a href="blog-listing.php">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.php">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.php">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.php">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.php">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.php">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.php">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.php">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.php">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.php">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.php">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.php">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="element.php">Elements</a>
                    <ul>
                        <li>
                            <a href="#">Elements 1</a>
                            <ul>
                                <li><a href="element-accordions.php">Accordions</a></li>
                                <li><a href="element-alerts.php">Alert &amp; Notification</a></li>

                                <li><a href="element-banner-effect.php">Banner Effect

                                    </a></li>
                                <li><a href="element-banner.php">Banner
                                    </a></li>
                                <li><a href="element-blog-posts.php">Blog Posts</a></li>
                                <li><a href="element-breadcrumb.php">Breadcrumb
                                    </a></li>
                                <li><a href="element-buttons.php">Buttons</a></li>
                                <li><a href="element-cta.php">Call to Action</a></li>
                                <li><a href="element-countdown.php">Countdown
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 2</a>
                            <ul>
                                <li><a href="element-counter.php">Counter </a></li>
                                <li><a href="element-creative-grid.php">Creative Grid

                                    </a></li>
                                <li><a href="element-animation.php">Entrance Effect

                                    </a></li>
                                <li><a href="element-floating.php">Floating

                                    </a></li>
                                <li><a href="element-hotspot.php">Hotspot

                                    </a></li>
                                <li><a href="element-icon-boxes.php">Icon Boxes</a></li>
                                <li><a href="element-icons.php">Icons</a></li>
                                <li><a href="element-image-box.php">Image box

                                    </a></li>
                                <li><a href="element-instagrams.php">Instagrams</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 3</a>
                            <ul>

                                <li><a href="element-categories.php">Product Category</a></li>
                                <li><a href="element-products.php">Products</a></li>
                                <li><a href="element-product-banner.php">Products + Banner

                                    </a></li>
                                <li><a href="element-product-grid.php">Products + Grid

                                    </a></li>
                                <li><a href="element-product-single.php">Product Single

                                    </a>
                                </li>
                                <li><a href="element-product-tab.php">Products + Tab

                                    </a></li>
                                <li><a href="element-single-product.php">Single Product

                                    </a></li>
                                <li><a href="element-slider.php">Slider

                                    </a></li>
                                <li><a href="element-social-link.php">Social Icons </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 4</a>
                            <ul>
                                <li><a href="element-subcategory.php">Subcategory

                                    </a></li>
                                <li><a href="element-svg-floating.php">Svg Floating

                                    </a></li>
                                <li><a href="element-tabs.php">Tabs</a></li>
                                <li><a href="element-testimonials.php">Testimonials
                                    </a></li>
                                <li><a href="element-titles.php">Title</a></li>
                                <li><a href="element-typography.php">Typography</a></li>
                                <li><a href="element-vendor.php">Vendor

                                    </a></li>
                                <li><a href="element-video.php">Video

                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="https://d-themes.com/buynow/riodehtml">Buy Riode!</a></li>
            </ul>
            <!-- End MobileMenu -->
        </div>
    </div>
    <!-- sticky icons-->
	<!-- <div class="sticky-icons-wrapper">
		<div class="sticky-icon-links">
			<ul>
				<li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
				<li><a href="documentation.php"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
				</li>
				<li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
				</li>
				<li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
							now!</span></a></li>
			</ul>
		</div>
		<div class="demos-list">
			<div class="demos-overlay"></div>
			<a class="demos-close" href="#"><i class="close-icon"></i></a>
			<div class="demos-content scrollable scrollable-light">
				<h3 class="demos-title">Demos</h3>
				<div class="demos">
				</div>
			</div>
		</div>
	</div> -->
	<!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>


<!-- Mirrored from d-themes.com/html/riode/account.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 08:35:50 GMT -->
</html>