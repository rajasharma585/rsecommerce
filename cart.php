<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/riode/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 08:30:46 GMT -->
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
        <main class="main cart">
            <div class="page-content pt-7 pb-10">
                <div class="step-by pr-4 pl-4">
                    <h3 class="title title-simple title-step active"><a href="cart.php">1. Shopping Cart</a></h3>
                    <h3 class="title title-simple title-step"><a href="checkout.php">2. Checkout</a></h3>
                    <h3 class="title title-simple title-step"><a href="order.php">3. Order Complete</a></h3>
                </div>
                <div class="container mt-7 mb-2">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 pr-lg-4">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th><span>Product</span></th>
                                        <th></th>
                                        <th><span>Price</span></th>
                                        <th><span>quantity</span></th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <figure>
                                                <a href="product-simple.php">
                                                    <img src="images/products/product18.jpg" width="100" height="100"
                                                        alt="product">
                                                </a>
                                            </figure>
                                        </td>
                                        <td class="product-name">
                                            <div class="product-name-section">
                                                <a href="product-simple.php">Converse Training Shoes</a>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">₹129.99</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-group">
                                                <button class="quantity-minus d-icon-minus"></button>
                                                <input class="quantity form-control" type="number" min="1"
                                                    max="1000000">
                                                <button class="quantity-plus d-icon-plus"></button>
                                            </div>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">₹129.99</span>
                                        </td>
                                        <td class="product-close">
                                            <a href="#" class="product-remove" title="Remove this product">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <figure>
                                                <a href="product-simple.php">
                                                    <img src="images/products/product19.jpg" width="100" height="100"
                                                        alt="product">
                                                </a>
                                            </figure>

                                        </td>
                                        <td class="product-name">
                                            <div class="product-name-section">
                                                <a href="product-simple.php">Women Beautiful Headgear</a>
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">₹98.00</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="input-group">
                                                <button class="quantity-minus d-icon-minus"></button>
                                                <input class="quantity form-control" type="number" min="1"
                                                    max="1000000">
                                                <button class="quantity-plus d-icon-plus"></button>
                                            </div>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount">₹98.00</span>
                                        </td>
                                        <td class="product-close">
                                            <a href="#" class="product-remove" title="Remove this product">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="cart-actions mb-6 pt-4">
                                <a href="shop.php" class="btn btn-dark btn-md btn-rounded btn-icon-left mr-4 mb-4"><i
                                        class="d-icon-arrow-left"></i>Continue Shopping</a>
                                <button type="submit"
                                    class="btn btn-outline btn-dark btn-md btn-rounded btn-disabled">Update
                                    Cart</button>
                            </div>
                            <div class="cart-coupon-box mb-8">
                                <h4 class="title coupon-title text-uppercase ls-m">Coupon Discount</h4>
                                <input type="text" name="coupon_code"
                                    class="input-text form-control text-grey ls-m mb-4" id="coupon_code" value=""
                                    placeholder="Enter coupon code here...">
                                <button type="submit" class="btn btn-md btn-dark btn-rounded btn-outline">Apply
                                    Coupon</button>
                            </div>
                        </div>
                        <aside class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
                                <div class="summary mb-4">
                                    <h3 class="summary-title text-left">Cart Totals</h3>
                                    <table class="shipping">
                                        <tr class="summary-subtotal">
                                            <td>
                                                <h4 class="summary-subtitle">Subtotal</h4>
                                            </td>
                                            <td>
                                                <p class="summary-subtotal-price">₹426.99</p>
                                            </td>
                                        </tr>
                                        <tr class="sumnary-shipping shipping-row-last">
                                            <td colspan="2">
                                                <h4 class="summary-subtitle">Calculate Shipping</h4>
                                                <ul>
                                                    <li>
                                                        <div class="custom-radio">
                                                            <input type="radio" id="flat_rate" name="shipping"
                                                                class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="flat_rate">Flat
                                                                rate</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-radio">
                                                            <input type="radio" id="free-shipping" name="shipping"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="free-shipping">Free
                                                                shipping</label>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="custom-radio">
                                                            <input type="radio" id="local_pickup" name="shipping"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="local_pickup">Local
                                                                pickup</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="shipping-address">
                                        <label>Shipping to <strong>CA.</strong></label>
                                        <div class="select-box">
                                            <select name="country" class="form-control">
                                                <option value="us" selected>United States (US)</option>
                                                <option value="uk"> United Kingdom</option>
                                                <option value="fr">France</option>
                                                <option value="aus">Austria</option>
                                            </select>
                                        </div>
                                        <div class="select-box">
                                            <select name="country" class="form-control">
                                                <option value="us" selected>California</option>
                                                <option value="uk">Alaska</option>
                                                <option value="fr">Delaware</option>
                                                <option value="aus">Hawaii</option>
                                            </select>
                                        </div>
                                        <input type="text" class="form-control" name="code" placeholder="Town / City" />
                                        <input type="text" class="form-control" name="code" placeholder="ZIP" />
                                        <a href="#" class="btn btn-md btn-dark btn-rounded btn-outline">Update
                                            totals</a>
                                    </div>
                                    <table class="total">
                                        <tr class="summary-subtotal">
                                            <td>
                                                <h4 class="summary-subtitle">Total</h4>
                                            </td>
                                            <td>
                                                <p class="summary-total-price ls-s">₹426.99</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <a href="checkout.php" class="btn btn-dark btn-rounded btn-checkout">Proceed to
                                        checkout</a>
                                </div>
                            </div>
                        </aside>
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


<!-- Mirrored from d-themes.com/html/riode/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 08:30:48 GMT -->
</html>