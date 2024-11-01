<style>
.section {
    margin-left: -20px;
    margin-right: -20px;
    font-family: "Raleway", san-serif;
    overflow-x: hidden;
}

.section h1 {
    text-align: center;
    text-transform: uppercase;
    color: #808a97;
    font-size: 35px;
    font-weight: 700;
    line-height: normal;
    display: inline-block;
    width: 100%;
    margin: 50px 0 0;
}

.section ul {
    list-style-type: disc;
    padding-left: 15px;
}

.section:nth-child(even) {
    background-color: #fff;
}

.section:nth-child(odd) {
    background-color: #f1f1f1;
}

.section .section-title img {
    display: table-cell;
    vertical-align: middle;
    width: auto;
    margin-right: 15px;
}

.section h2,
.section h3 {
    display: inline-block;
    vertical-align: middle;
    padding: 0;
    font-size: 24px;
    font-weight: 700;
    color: #808a97;
    text-transform: uppercase;
}

.section .section-title h2 {
    display: table-cell;
    vertical-align: middle;
    line-height: 25px;
}

.section-title {
    display: table;
}

.section h3 {
    font-size: 14px;
    line-height: 28px;
    margin-bottom: 0;
    display: block;
}

.section p {
    font-size: 13px;
    margin: 25px 0;
}

.section ul li {
    margin-bottom: 4px;
}

.landing-container {
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
    padding: 50px 0 30px;
}

.landing-container:after {
    display: block;
    clear: both;
    content: '';
}

.landing-container .col-1,
.landing-container .col-2 {
    float: left;
    box-sizing: border-box;
    padding: 0 15px;
}

.landing-container .col-1 img {
    width: 100%;
}

.landing-container .col-1 {
    width: 55%;
}

.landing-container .col-2 {
    width: 45%;
}

.premium-cta {
    background-color: #808a97;
    color: #fff;
    border-radius: 6px;
    padding: 20px 15px;
}

.premium-cta:after {
    content: '';
    display: block;
    clear: both;
}

.premium-cta p {
    margin: 7px 0;
    font-size: 14px;
    font-weight: 500;
    display: inline-block;
    width: 60%;
}

.premium-cta a.button {
    border-radius: 6px;
    height: 60px;
    float: right;
    background: url(<?php echo YWMMQ_ASSETS_URL?>/images/upgrade.png) #ff643f no-repeat 13px 13px;
    border-color: #ff643f;
    box-shadow: none;
    outline: none;
    color: #fff;
    position: relative;
    padding: 9px 50px 9px 70px;
}

.premium-cta a.button:hover,
.premium-cta a.button:active,
.premium-cta a.button:focus {
    color: #fff;
    background: url(<?php echo YWMMQ_ASSETS_URL?>/images/upgrade.png) #971d00 no-repeat 13px 13px;
    border-color: #971d00;
    box-shadow: none;
    outline: none;
}

.premium-cta a.button:focus {
    top: 1px;
}

.premium-cta a.button span {
    line-height: 13px;
}

.premium-cta a.button .highlight {
    display: block;
    font-size: 20px;
    font-weight: 700;
    line-height: 20px;
}

.premium-cta .highlight {
    text-transform: uppercase;
    background: none;
    font-weight: 800;
    color: #fff;
}

.section.one {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/01-bg.png);
    background-repeat: no-repeat;
    background-position: 85% 75%
}

.section.two {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/02-bg.png);
    background-repeat: no-repeat;
    background-position: 15% 100%
}

.section.three {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/03-bg.png);
    background-repeat: no-repeat;
    background-position: 85% 75%
}

.section.four {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/04-bg.png);
    background-repeat: no-repeat;
    background-position: 15% 100%
}

.section.five {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/05-bg.png);
    background-repeat: no-repeat;
    background-position: 85% 75%
}

.section.six {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/06-bg.png);
    background-repeat: no-repeat;
    background-position: 15% 100%
}

.section.seven {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/07-bg.png);
    background-repeat: no-repeat;
    background-position: 85% 75%
}

.section.eight {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/08-bg.png);
    background-repeat: no-repeat;
    background-position: 15% 100%
}

.section.nine {
    background-image: url(<?php echo YWMMQ_ASSETS_URL?>/images/09-bg.png);
    background-repeat: no-repeat;
    background-position: 85% 75%
}

@media (max-width: 768px) {
    .section {
        margin: 0
    }

    .premium-cta p {
        width: 100%;
    }

    .premium-cta {
        text-align: center;
    }

    .premium-cta a.button {
        float: none;
    }
}

@media (max-width: 480px) {
    .wrap {
        margin-right: 0;
    }

    .section {
        margin: 0;
    }

    .landing-container .col-1,
    .landing-container .col-2 {
        width: 100%;
        padding: 0 15px;
    }

    .section-odd .col-1 {
        float: left;
        margin-right: -100%;
    }

    .section-odd .col-2 {
        float: right;
        margin-top: 65%;
    }
}

@media (max-width: 320px) {
    .premium-cta a.button {
        padding: 9px 20px 9px 70px;
    }

    .section .section-title img {
        display: none;
    }
}
</style>
<div class="landing">
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __( 'Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Minimum Maximum Quantity%2$s to benefit from all features!', 'yith-woocommerce-minimum-maximum-quantity' ), '<span class="highlight">', '</span>' ); ?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e( 'UPGRADE', 'yith-woocommerce-minimum-maximum-quantity' ); ?></span>
                    <span><?php _e( 'to the premium version', 'yith-woocommerce-minimum-maximum-quantity' ); ?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="one section section-even clear">
        <h1><?php _e( 'Premium Features', 'yith-woocommerce-minimum-maximum-quantity' ); ?></h1>

        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/01.png" alt="<?php _e( 'Quantity restrictions', 'yith-woocommerce-minimum-maximum-quantity' ); ?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/01-icon.png" alt="icon 01" />

                    <h2><?php _e( 'Quantity restrictions', 'yith-woocommerce-minimum-maximum-quantity' ); ?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'With the premium version of the plugin, you will be free to apply %1$srestrictions%2$s to the purchase process according to the number of products in the cart, or to the amount of elements selected by users. And there is more: the restriction process can also be applied to %1$sproduct categories%2$s and %1$stags,%2$s depending on the related objects available in the cart.', 'yith-woocommerce-minimum-maximum-quantity' ), '<b>', '</b>' ); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="two section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/02-icon.png" alt="icon 02" />

                    <h2><?php _e( 'Spend amount restrictions', 'yith-woocommerce-minimum-maximum-quantity' ); ?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'Even the spend amount can be managed with the plugin, with the freedom to set a %1$sminimum and maximum spend amount%2$s on the cart total. Moreover, you can monitor the spend amount considering the products of the same category or tag. More and more solutions for the best result.', 'yith-woocommerce-minimum-maximum-quantity' ), '<b>', '</b>' ); ?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/02.png" alt="<?php _e( 'Spend restriction', 'yith-woocommerce-minimum-maximum-quantity' ); ?>" />
            </div>
        </div>
    </div>
    <div class="three section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/03.png" alt="<?php _e( 'Purchase rules', 'yith-woocommerce-minimum-maximum-quantity' ); ?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/03-icon.png" alt="icon 03" />

                    <h2><?php _e( 'Purchase rules', 'yith-woocommerce-minimum-maximum-quantity' ); ?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'If you have decided to apply restrictions to your shop, it is vital that your users are well informed about the %1$sconditions%2$s you decided to apply for the purchase of particular products of your store. Activate the complete display of the purchase %1$srules%2$s in the product detail page, choosing their best position in order to let your users complete their orders with no hitches.', 'yith-woocommerce-minimum-maximum-quantity' ), '<b>', '</b>' ); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="four section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/04-icon.png" alt="icon 04" />

                    <h2><?php _e( 'Error messages ', 'yith-woocommerce-minimum-maximum-quantity' ); ?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'The more restrictions you will apply to the cart, the more your users could encounter problems in completing their orders. Activate %1$serror messages%2$s and customize them in the best way to give always the necessary information to complete a purchase process.', 'yith-woocommerce-minimum-maximum-quantity' ), '<b>', '</b>' ); ?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/04.png" alt="<?php _e( 'Error messages', 'yith-woocommerce-minimum-maximum-quantity' ); ?>" />
            </div>
        </div>
    </div>
    <div class="five section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/05.png" alt="<?php _e( 'Product exclusion', 'yith-woocommerce-minimum-maximum-quantity' ); ?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/05-icon.png" alt="icon 05" />

                    <h2><?php _e( 'Product exclusion', 'yith-woocommerce-minimum-maximum-quantity' ); ?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'When you have a vast shop, you could need to apply different strategies on your products. If you have configured restrictions, %1$syou can exclude one or more products%2$s to let your users purchase them directly.', 'yith-woocommerce-minimum-maximum-quantity' ), '<b>', '</b>' ); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="six section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/06-icon.png" alt="icon 06" />

                    <h2><?php _e( 'Bulk actions', 'yith-woocommerce-minimum-maximum-quantity' ); ?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'Vey often you need to apply the same edit to more products of the shop, and this action can require an annoying amount of time. The plugin has been conceived with a section where you can apply a %1$ssingle action on more products,%2$s adding particular restrictions about quantity and spend amount for the products of the carts.', 'yith-woocommerce-minimum-maximum-quantity' ), '<b>', '</b>' ); ?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YWMMQ_ASSETS_URL ?>/images/06.png" alt="<?php _e( 'Bulk actions', 'yith-woocommerce-minimum-maximum-quantity' ); ?>" />
            </div>
        </div>
    </div>
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __( 'Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Minimum Maximum Quantity%2$s to benefit from all features!', 'yith-woocommerce-minimum-maximum-quantity' ), '<span class="highlight">', '</span>' ); ?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e( 'UPGRADE', 'yith-woocommerce-minimum-maximum-quantity' ); ?></span>
                    <span><?php _e( 'to the premium version', 'yith-woocommerce-minimum-maximum-quantity' ); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>