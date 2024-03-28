<?php

function template_header($title)
{
    echo <<<EOT
    <div class="header-wrapper mb-3 sticky-top">
    <div class="nav-bar-wrapper d-flex justify-content-center p-2">
        <nav class="navbar navbar-expand navbar1-size">
            <div class="container-fluid" style="padding-left: 0;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-start" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/shop">Seller Centre</a>
                        <a class="nav-link active" href="/start-selling">Start Selling</a>
                        <a class="nav-link active" href="#">Download</a>
                        <a class="nav-link disabled" aria-disabled="true">Follow Us On <i class="fa-brands fa-facebook"
                                style="padding-left: 4px; font-size: 15px;"></i></a>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="padding-right: 0;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Notifications</a>
                        <a class="nav-link active" href="#">Help</a>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <button class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="color: white; font-size: 13px;">Languages</button>
                                    <ul class="dropdown-menu dropdown-menu">
                                        <li><button class="dropdown-item" onclick="handleLanguageChange('ENG')">English</button></li>
                                        <li><button class="dropdown-item" onclick="handleLanguageChange('VIE')">Vietnamese</button></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <a class="nav-link active" href="/user">John Doe</a>
                        <button class="btn btn-danger nav-link" onclick="logout()">Logout</button>
                        <a class="nav-link active" href="/signup" style="font-weight: 600;">Sign Up</a>
                        <a class="nav-link active" href="/login" style="font-weight: 600;">Login</a>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="header-with-search-bar d-flex justify-content-center p-2">
        <div class="navbar2-size row">
            <a href="/" class="col-2 d-flex align-self-center shopmee-logo">
                <div class="align-bottom" style="padding-right: 5px;">
                    <i class="fa-solid fa-bag-shopping fa-2xl" style="font-size: 45px;"></i>
                </div>
                <h4>Shopmee</h4>
            </a>
            <div class="container-fluid col-9">
                <form onsubmit="handleSubmitSearch(event)" class="d-flex form-style" role="search">
                    <input class="form-control me-2" type="search" name="search" onchange="handleInputChange(event)"
                        placeholder="Search" aria-label="Search" style="border: 0;">
                    <button class="btn btn-outline-success search-button" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="d-flex justify-content-around sale" style="padding-top: 4px;">
                    <a class="nav-link" href="#">Sale 20%</a>
                    <a class="nav-link" href="#">Sale 40%</a>
                    <a class="nav-link" href="#">Sale 50%</a>
                    <a class="nav-link" href="#">Sale 60%</a>
                    <a class="nav-link" href="#">Sale 80%</a>
                    <a class="nav-link" href="#">Sale 90%</a>
                    <a class="nav-link" href="#" aria-current="page">FreeShip</a>
                    </div>
                </div>
                <a class="col-1 align-self-center position-relative" href={"/cart"} style={{ textDecoration: "none", color: "white" }}>
                <span class="position-absolute start-50 translate-middle badge rounded-pill bg-white text-bg-orange" style={{ color: "orange", top: '-8px' }} >
                ?
                <span className="visually-hidden">unread messages</span>
                        </span>
                        <i class="fa-solid fa-cart-shopping fa-2xl">
                        </i>
                </a>
            </div>
        </div>
    </div>
EOT;
}
// Template footer
function template_footer()
{
    $year = date('Y');
    echo <<<EOT
    <div class="footer-wrapper d-flex justify-content-center">
    <div class="footer-sizing">
        <div class="footer-top row d-flex justify-content-start">
            <div class="footer-top-list col-sm">
                <div class="footer-top-list-title">CUSTOMER SERVICE</div>
                <div class="custom-list-item">Help Centre</div>
                <div class="custom-list-item">Shopme Blog</div>
                <div class="custom-list-item">Shopmee Mall</div>
                <div class="custom-list-item">How To Buy</div>
                <div class="custom-list-item">How To Sell</div>
                <div class="custom-list-item">Payment</div>
                <div class="custom-list-item">Shipping</div>
                <div class="custom-list-item">Contact Us</div>
            </div>
            <div class="footer-top-list col-sm">
                <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                <div class="custom-list-item">Help Centre</div>
                <div class="custom-list-item">Shopme Blog</div>
                <div class="custom-list-item">Shopmee Mall</div>
                <div class="custom-list-item">How To Buy</div>
                <div class="custom-list-item">How To Sell</div>
                <div class="custom-list-item">Payment</div>
                <div class="custom-list-item">Shipping</div>
                <div class="custom-list-item">Contact Us</div>
            </div>
            <div class="footer-top-list col-sm">
                <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                <div class="custom-list-item">Help Centre</div>
                <div class="custom-list-item">Shopme Blog</div>
                <div class="custom-list-item">Shopmee Mall</div>
                <div class="custom-list-item">How To Buy</div>
                <div class="custom-list-item">How To Sell</div>
                <div class="custom-list-item">Payment</div>
                <div class="custom-list-item">Shipping</div>
                <div class="custom-list-item">Contact Us</div>
            </div>
            <div class="footer-top-list col-sm">
                <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                <div class="custom-list-item">Help Centre</div>
                <div class="custom-list-item">Shopme Blog</div>
                <div class="custom-list-item">Shopmee Mall</div>
                <div class="custom-list-item">How To Buy</div>
                <div class="custom-list-item">How To Sell</div>
                <div class="custom-list-item">Payment</div>
                <div class="custom-list-item">Shipping</div>
                <div class="custom-list-item">Contact Us</div>
            </div>
            <div class="footer-top-list col-sm">
                <div class="footer-top-list-title">ABOUT SHOPMEE</div>
                <div class="custom-list-item">Help Centre</div>
                <div class="custom-list-item">Shopme Blog</div>
                <div class="custom-list-item">Shopmee Mall</div>
                <div class="custom-list-item">How To Buy</div>
                <div class="custom-list-item">How To Sell</div>
                <div class="custom-list-item">Payment</div>
                <div class="custom-list-item">Shipping</div>
                <div class="custom-list-item">Contact Us</div>
            </div>
        </div>
        <div class="footer-bot d-flex">
            <div class="p-2 flex-grow-1">© 2024 ShopMee. All Rights Reserved .</div>
            <div class="p-2">
                Country & Region:
                Singapore
                Indonesia
                Thailand
                Malaysia
                Vietnam
                Philippines
                Brazil
                México
                Colombia
                Chile
                Taiwan
            </div>
        </div>
    </div>
</div>
EOT;
}
