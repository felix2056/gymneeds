<div class="cart-popup-wrapper cart-popup-wrapper--hidden" role="dialog" aria-modal="true"
    aria-labelledby="CartPopupHeading" data-cart-popup-wrapper="">
    <div class="cart-popup" data-cart-popup="" tabindex="-1">
        <div class="cart-popup__header">
            <h2 id="CartPopupHeading" class="cart-popup__heading">Just added to your cart</h2>
            <button class="cart-popup__close" aria-label="Close" data-cart-popup-close=""><svg aria-hidden="true"
                    focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 40 40">
                    <path
                        d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z"
                        class="layer"></path>
                </svg></button>
        </div>
        <div class="cart-popup-item">
            <div class="cart-popup-item__image-wrapper hide" data-cart-popup-image-wrapper="">
                <div class="cart-popup-item__image cart-popup-item__image--placeholder"
                    data-cart-popup-image-placeholder="">
                    <div data-placeholder-size=""></div>
                    <div class="placeholder-background placeholder-background--animation"></div>
                </div>
            </div>
            <div class="cart-popup-item__description">
                <div>
                    <h3 class="cart-popup-item__title" data-cart-popup-title=""></h3>
                    <ul class="product-details" aria-label="Product details" data-cart-popup-product-details=""></ul>
                </div>
                <div class="cart-popup-item__quantity">
                    <span class="visually-hidden" data-cart-popup-quantity-label=""></span>
                    <span aria-hidden="true">Qty:</span>
                    <span aria-hidden="true" data-cart-popup-quantity=""></span>
                </div>
            </div>
        </div>

        <a href="/products/cart.php" class="cart-popup__cta-link btn btn--secondary-accent" aria-describedby="a11y-external-message">
            View cart (<span data-cart-popup-cart-quantity=""></span>)
        </a>

        <div class="cart-popup__dismiss">
            <button class="cart-popup__dismiss-button text-link text-link--accent" data-cart-popup-dismiss="">
                Continue shopping
            </button>
        </div>
    </div>
</div>

<div id="shopify-section-header" class="shopify-section">
    <style>
    .site-header__logo-image {
        max-width: 190px;
    }

    .site-header__logo-image {
        margin: 0;
    }
    </style>


    <div id="SearchDrawer" class="search-bar drawer drawer--top" role="dialog" aria-modal="true" aria-label="Search"
        data-predictive-search-drawer="">
        <div class="search-bar__interior">
            <div class="search-form__container" data-search-form-container="">
                <form class="search-form search-bar__form" action="/search" method="get" role="search">
                    <div class="search-form__input-wrapper">
                        <input type="text" name="q" placeholder="Search" role="combobox" aria-autocomplete="list"
                            aria-owns="predictive-search-results" aria-expanded="false" aria-label="Search"
                            aria-haspopup="listbox" class="search-form__input search-bar__input"
                            data-predictive-search-drawer-input="" autocorrect="off" autocomplete="off"
                            autocapitalize="off" spellcheck="false">
                        <input type="hidden" name="options[prefix]" value="last" aria-hidden="true">
                        <div class="predictive-search-wrapper predictive-search-wrapper--drawer"
                            data-predictive-search-mount="drawer"></div>
                        <div style="position: absolute !important; overflow: hidden; clip: rect(0 0 0 0); height: 1px; width: 1px; margin: -1px; padding: 0; border: 0;"
                            data-search-announcer="" aria-live="polite" aria-atomic="true"></div>
                    </div>

                    <button class="search-bar__submit search-form__submit" type="submit" data-search-form-submit="">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                            viewBox="0 0 37 40">
                            <path
                                d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z">
                            </path>
                        </svg>
                        <span class="icon__fallback-text">Submit</span>
                    </button>
                </form>

                <div class="search-bar__actions">
                    <button type="button" class="btn--link search-bar__close js-drawer-close">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                            viewBox="0 0 40 40">
                            <path
                                d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z"
                                class="layer"></path>
                        </svg>
                        <span class="icon__fallback-text">Close search</span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div data-section-id="header" data-section-type="header-section" data-header-section="">


        <style>
        .announcement-bar {
          background-color: #cccccc;
        }

        .announcement-bar__link:hover {
          background-color: #b3b3b3;
        }

        .announcement-bar__message {
          color: #ffffff;
        }
        </style>

        <div class="announcement-bar" role="region" aria-label="Announcement">
            <p class="announcement-bar__message">Free shipping when you spend more than $100</p>
        </div>


        <header class="site-header border-bottom logo--left" role="banner">
            <div class="grid grid--no-gutters grid--table site-header__mobile-nav">
                <div class="grid__item medium-up--one-quarter logo-align--left">
                    <h1 class="h2 site-header__logo">


                        <a href="/" class="site-header__logo-image" aria-describedby="a11y-external-message">

                            <img class="js lazyautosizes ls-is-cached lazyloaded"
                                src="//cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_300x300.jpeg?v=1599306792"
                                data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                data-aspectratio="2.8350515463917527" data-sizes="auto" alt="gym-needed"
                                style="max-width: 190px"
                                data-srcset="//cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_180x.jpeg?v=1599306792 180w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_360x.jpeg?v=1599306792 360w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_540x.jpeg?v=1599306792 540w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_720x.jpeg?v=1599306792 720w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_900x.jpeg?v=1599306792 900w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1080x.jpeg?v=1599306792 1080w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1296x.jpeg?v=1599306792 1296w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1512x.jpeg?v=1599306792 1512w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1728x.jpeg?v=1599306792 1728w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_2048x.jpeg?v=1599306792 2048w"
                                sizes="190px"
                                srcset="//cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_180x.jpeg?v=1599306792 180w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_360x.jpeg?v=1599306792 360w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_540x.jpeg?v=1599306792 540w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_720x.jpeg?v=1599306792 720w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_900x.jpeg?v=1599306792 900w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1080x.jpeg?v=1599306792 1080w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1296x.jpeg?v=1599306792 1296w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1512x.jpeg?v=1599306792 1512w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_1728x.jpeg?v=1599306792 1728w, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_2048x.jpeg?v=1599306792 2048w">
                            <noscript>

                                <img src="//cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_190x.jpeg?v=1599306792"
                                    srcset="//cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_190x.jpeg?v=1599306792 1x, //cdn.shopify.com/s/files/1/0477/4284/5085/files/WhatsApp_Image_2020-09-05_at_4.47.31_PM_190x@2x.jpeg?v=1599306792 2x"
                                    alt="gym-needed" style="max-width: 190px;">
                            </noscript>
                        </a>
                    </h1>
                </div>


                <nav class="grid__item medium-up--one-half small--hide" id="AccessibleNav" role="navigation">
                    <ul class="site-nav list--inline" id="SiteNav">
                        <li>
                            <a href="/" class="site-nav__link site-nav__link--main"
                                aria-current="page" aria-describedby="a11y-external-message">
                                <span class="site-nav__label">Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="/collections/men.php" class="site-nav__link site-nav__link--main"
                                aria-describedby="a11y-external-message">
                                <span class="site-nav__label">Men</span>
                            </a>
                        </li>

                        <li>
                            <a href="/collections/women.php" class="site-nav__link site-nav__link--main"
                                aria-describedby="a11y-external-message">
                                <span class="site-nav__label">Women</span>
                            </a>
                        </li>


                        <li>
                            <a href="/collections/accessories.php" class="site-nav__link site-nav__link--main"
                                aria-describedby="a11y-external-message">
                                <span class="site-nav__label">Accessories</span>
                            </a>
                        </li>
                    </ul>
                </nav>


                <div class="grid__item medium-up--one-quarter text-right site-header__icons">
                    <div class="site-header__icons-wrapper">

                        <button type="button"
                            class="btn--link site-header__icon site-header__search-toggle js-drawer-open-top">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-search"
                                viewBox="0 0 37 40">
                                <path
                                    d="M35.6 36l-9.8-9.8c4.1-5.4 3.6-13.2-1.3-18.1-5.4-5.4-14.2-5.4-19.7 0-5.4 5.4-5.4 14.2 0 19.7 2.6 2.6 6.1 4.1 9.8 4.1 3 0 5.9-1 8.3-2.8l9.8 9.8c.4.4.9.6 1.4.6s1-.2 1.4-.6c.9-.9.9-2.1.1-2.9zm-20.9-8.2c-2.6 0-5.1-1-7-2.9-3.9-3.9-3.9-10.1 0-14C9.6 9 12.2 8 14.7 8s5.1 1 7 2.9c3.9 3.9 3.9 10.1 0 14-1.9 1.9-4.4 2.9-7 2.9z">
                                </path>
                            </svg>
                            <span class="icon__fallback-text">Search</span>
                        </button>



                        <a href="/products/cart.php" class="site-header__icon site-header__cart"
                            aria-describedby="a11y-external-message">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-cart"
                                viewBox="0 0 37 40">
                                <path
                                    d="M36.5 34.8L33.3 8h-5.9C26.7 3.9 23 .8 18.5.8S10.3 3.9 9.6 8H3.7L.5 34.8c-.2 1.5.4 2.4.9 3 .5.5 1.4 1.2 3.1 1.2h28c1.3 0 2.4-.4 3.1-1.3.7-.7 1-1.8.9-2.9zm-18-30c2.2 0 4.1 1.4 4.7 3.2h-9.5c.7-1.9 2.6-3.2 4.8-3.2zM4.5 35l2.8-23h2.2v3c0 1.1.9 2 2 2s2-.9 2-2v-3h10v3c0 1.1.9 2 2 2s2-.9 2-2v-3h2.2l2.8 23h-28z">
                                </path>
                            </svg>
                            <span class="icon__fallback-text">Cart</span>
                            <div id="CartCount" class="site-header__cart-count hide" data-cart-count-bubble="">
                                <span data-cart-count="">0</span>
                                <span class="icon__fallback-text medium-up--hide">items</span>
                            </div>
                        </a>


                        <button type="button"
                            class="btn--link site-header__icon site-header__menu js-mobile-nav-toggle mobile-nav--open"
                            aria-controls="MobileNav" aria-expanded="false" aria-label="Menu">
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger"
                                viewBox="0 0 37 40">
                                <path
                                    d="M33.5 25h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2zm0-11.5h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2zm0 23h-30c-1.1 0-2-.9-2-2s.9-2 2-2h30c1.1 0 2 .9 2 2s-.9 2-2 2z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close"
                                viewBox="0 0 40 40">
                                <path
                                    d="M23.868 20.015L39.117 4.78c1.11-1.108 1.11-2.77 0-3.877-1.109-1.108-2.773-1.108-3.882 0L19.986 16.137 4.737.904C3.628-.204 1.965-.204.856.904c-1.11 1.108-1.11 2.77 0 3.877l15.249 15.234L.855 35.248c-1.108 1.108-1.108 2.77 0 3.877.555.554 1.248.831 1.942.831s1.386-.277 1.94-.83l15.25-15.234 15.248 15.233c.555.554 1.248.831 1.941.831s1.387-.277 1.941-.83c1.11-1.109 1.11-2.77 0-3.878L23.868 20.015z"
                                    class="layer"></path>
                            </svg>
                        </button>

                    </div>

                </div>
            </div>

            <nav class="mobile-nav-wrapper medium-up--hide" role="navigation">
                <ul id="MobileNav" class="mobile-nav">
                    <li class="mobile-nav__item border-bottom">
                        <a href="/" class="mobile-nav__link" aria-current="page"
                            aria-describedby="a11y-external-message">
                            <span class="mobile-nav__label">Home</span>
                        </a>
                    </li>

                    <li class="mobile-nav__item border-bottom">

                        <a href="/collections/men.php" class="mobile-nav__link" aria-describedby="a11y-external-message">
                            <span class="mobile-nav__label">Men</span>
                        </a>

                    </li>

                    <li class="mobile-nav__item border-bottom">
                        <a href="/collections/women.php" class="mobile-nav__link" aria-describedby="a11y-external-message">
                            <span class="mobile-nav__label">Women</span>
                        </a>
                    </li>

                    <li class="mobile-nav__item">
                        <a href="/collections/accessories.php" class="mobile-nav__link" aria-describedby="a11y-external-message">
                            <span class="mobile-nav__label">Accessories</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>


    </div>




</div>