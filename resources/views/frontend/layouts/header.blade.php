    <sticky-header data-sticky-type="always">
        <header class="header-1 header-floating">
            <div class="container-fluid">
                <div class="header-grid-2">

                    <drawer-menu>
                        <nav class="header-nav drawer-menu">
                            <div class="d-lg-none header-nav-headings">
                                <a class="header-logo" href="/" aria-label="Consulo">
                                </a>
                                <drawer-opener class="svg-wrapper menu-close" data-drawer=".drawer-menu">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.00386 9.41816C7.61333 9.02763 7.61334 8.39447 8.00386 8.00395C8.39438 7.61342 9.02755 7.61342 9.41807 8.00395L12.0057 10.5916L14.5907 8.00657C14.9813 7.61605 15.6144 7.61605 16.0049 8.00657C16.3955 8.3971 16.3955 9.03026 16.0049 9.42079L13.4199 12.0058L16.0039 14.5897C16.3944 14.9803 16.3944 15.6134 16.0039 16.0039C15.6133 16.3945 14.9802 16.3945 14.5896 16.0039L12.0057 13.42L9.42097 16.0048C9.03045 16.3953 8.39728 16.3953 8.00676 16.0048C7.61624 15.6142 7.61624 14.9811 8.00676 14.5905L10.5915 12.0058L8.00386 9.41816Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12ZM3.00683 12C3.00683 16.9668 7.03321 20.9932 12 20.9932C16.9668 20.9932 20.9932 16.9668 20.9932 12C20.9932 7.03321 16.9668 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12Z"
                                            fill="currentColor" />
                                    </svg>
                                </drawer-opener>
                            </div>

                            <div class="row p-0">
                                <div class="col-md-5 p-0">
                                    {{-- <ul class="header-menu list-unstyled leftside_navbs">
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main menu-accrodion" href="/">
                                                Building a river of growth
                                            </a>
                                        </li>
                                    </ul> --}}
                                    <ul class="header-menu list-unstyled leftside_navbs">
                                        <li class="nav-item">
                                            <ul class="social-icons list-unstyled" data-aos="fade-up"
                                                data-aos-anchor=".footer-top">

                                                <li>
                                                    <a class="social-link text" href="/">
                                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="social-link text" href="/">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="social-link text" href="/">
                                                        <i class="bi bi-twitter-x"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="social-link text" href="/">
                                                        <i class="bi bi-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main" href="/"> Home </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main menu-accrodion" href="/about-us"> About
                                                Us
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main" href="/"> Companies </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main menu-accrodion" href="/">
                                                Careers
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 p-0 text-center">
                                    <li class="nav-item logo_li">
                                        <a class="menu-link menu-link-main logo_link" href="/">
                                            <img src="{{ Helper::getSettings('site_logo') ? asset(Helper::getSettings('site_logo')) : '/logo.png' }}"
                                                alt="logo-image">
                                        </a>
                                    </li>
                                </div>
                                <div class="col-md-5 p-0">
                                    {{-- <ul class="header-menu list-unstyled rightside_navbs">
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main menu-accrodion" href="/">
                                                Newsletter
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main" href="/"> Media </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main menu-accrodion" href="/"> Tee Times
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main" href="/">Hotel Reservation</a>
                                        </li>
                                    </ul> --}}
                                    <ul class="header-menu list-unstyled rightside_navbs">
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main menu-accrodion" href="/">
                                                Sustainability
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main" href="/news"> News </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main menu-accrodion" href="/"> Expansion
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="menu-link menu-link-main" href="/">Contact</a>
                                        </li>
                                        <li class="nav-item shop_now_item">
                                            <a class="menu-link menu-link-main menu-accrodion shop_now" href="/">
                                                Apply
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </drawer-menu>
                    <div class="header-actions d-flex align-items-center">
                        <drawer-opener class="svg-wrapper menu-open d-lg-none" data-drawer=".drawer-menu">
                            <svg width="52" height="52" viewBox="0 0 52 52" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="26" cy="26" r="25.5" fill="white" stroke="currentColor" />
                                <path
                                    d="M32.5 18.2857C32.5 17.5757 31.9179 17 31.2 17H14.3C13.5821 17 13 17.5757 13 18.2857C13 18.9958 13.5821 19.5714 14.3 19.5714H31.2C31.9179 19.5714 32.5 18.9957 32.5 18.2857ZM14.3 24.7143H37.7C38.4179 24.7143 39 25.29 39 26C39 26.7101 38.4179 27.2857 37.7 27.2857H14.3C13.5821 27.2857 13 26.7101 13 26C13 25.29 13.5821 24.7143 14.3 24.7143ZM14.3 32.4286H26C26.7179 32.4286 27.3 33.0042 27.3 33.7143C27.3 34.4243 26.7179 35 26 35H14.3C13.5821 35 13 34.4243 13 33.7143C13 33.0042 13.5821 32.4286 14.3 32.4286Z"
                                    fill="currentColor" />
                            </svg>
                        </drawer-opener>
                    </div>
                </div>
            </div>
        </header>
    </sticky-header>
