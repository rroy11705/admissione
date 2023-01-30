<header id="main-header">
    <div class="container align-items-center">
        <div class="logo-container">
            <a class="link logo m-0" href="index.php">
                admissione
            </a>
        </div>
        <div class="nav-bar-responsive">
            <div class="hamburger">
                <svg class="hamburger-icon" width="30" height="25" viewBox="0 0 40 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line class="hamburger-lines" x1="2.5" y1="2.5" x2="37.5" y2="2.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <line class="hamburger-lines" x1="2.5" y1="12.5" x2="37.5" y2="12.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <line class="hamburger-lines" x1="2.5" y1="22.5" x2="37.5" y2="22.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="nav-links-container">
                <div class="hamburger-cross">
                    <svg width="25" height="25" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line class="hamburger-lines" x1="3.52957" y1="3.7948" x2="25.5515" y2="23.3962" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <line class="hamburger-lines" x1="4.79481" y1="24.2681" x2="25.3832" y2="3.16595" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="nav-link">
                    <a class="link text-light-2<?php if(basename($_SERVER['PHP_SELF']) == "index.php"){ echo " active"; } else echo ""; ?>" href="/">
                        Home
                    </a>
                </div>
                <div class="nav-link">
                    <a class="link text-light-2" button-target="#company-pricing">
                        Pricing
                    </a>
                </div>
                <div class="nav-link">
                    <a class="link text-light-2" button-target="#company-testimonials">
                        Testimonials
                    </a>
                </div>
                <div class="nav-link">
                    <a class="link text-light-2" button-target="#company-faq">
                        FAQs
                    </a>
                </div>
                <div class="nav-link">
                    <a class="link text-light-2" button-target="#contact-intro">
                        Contact
                    </a>
                </div>
                <!-- <div class="nav-link">
                    <a class="link text-light-2<?php if(basename($_SERVER['PHP_SELF']) == "archive.php" || basename($_SERVER['PHP_SELF']) == 'post.php'){ echo " active"; } else echo ""; ?>" href="archive.php">
                        Archive
                    </a>
                </div> -->
            </div>
        </div>
        <div class="nav-call-to-action">
            <button onclick="location.href='tel:9330554104'" class="button opaque button-icon text-left" style="padding: 9px 25px;">
                <img src="./assets/images/call.svg" alt="Call" style="width:22px">
                <span style="display: grid;">
                    <span style="font-size:14px;font-family: 'Inter';">Call Us Now on</span>
                    <span>9330554104</span> 
                </span>
            </button>
        </div>
    </div>
</header>