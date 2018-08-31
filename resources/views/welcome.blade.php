@extends('layouts.base')

@section('title', 'YECE-Home Page | Youth Entrepreneurship Center for Empowerment')

@section('navbar')
    @parent

    <nav id=fixedTopNav class="navbar navbar-fixed-top main-navigation" itemscope itemtype=https://schema.org/SiteNavigationElement
         role=navigation>
        <div class=container>
            <div class=navbar-header>
                <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#main-nav-collapse>
                    <span class=sr-only>Toggle navigation</span>
                    <span class=ion-drag></span>
                </button>
                <div class=navbar-brand itemscope itemtype=https://schema.org/Organization>
                    <span itemprop=name class=sr-only>YECE</span>
                    <a itemprop=url href="index.html">YECE</a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id=main-nav-collapse>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about-us" itemprop=url>
                            <span itemprop=name>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" itemprop=url>
                            <span itemprop=name>Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio" itemprop=url>
                            <span itemprop=name>Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#team" itemprop=url>
                            <span itemprop=name>Team</span>
                        </a>
                    </li>
                    <li>
                        <a href="#pricing" itemprop=url>
                            <span itemprop=name>Pricing</span>
                        </a>
                    </li>
                    <li>
                        <a href="#blog" itemprop=url>
                            <span itemprop=name>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" itemprop=url>
                            <span itemprop=name>Contact</span>
                        </a>
                    </li>
                    <li>
                        <a href="apply" itemprop=url>
                            <span itemprop=name>Apply</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <header id=header class="header-wrapper home-parallax home-fade dark-bg slider-classic">
        <div class="header-wrapper-inner flexslider">
            <ul class=slides>
                <li style="background-image: url(assets/images/intro/01.jpg)">
                    <div class=color-overlay></div>
                    <div class=intro-wrapper>
                        <div class=intro>
                            <h1>To Begin, Begin</h1>
                            <p>Thats How My Life Rolls</p>
                            <a href="#services" class="btn btn-default-o onPageNav">Our Services</a>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/intro/08.jpg)">
                    <div class=intro-wrapper>
                        <div class=color-overlay></div>
                        <div class=intro>
                            <h1>We are awsome</h1>
                            <p>Thats How My Life Rolls</p>
                            <a href="#services" class="btn btn-default-o onPageNav">Our Services</a>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/intro/05.jpg)">
                    <div class=intro-wrapper>
                        <div class=color-overlay></div>
                        <div class=intro>
                            <h1>To Begin, Begin</h1>
                            <p>Thats How My Life Rolls</p>
                            <a href="#services" class="btn btn-default-o onPageNav">Our Services</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <section id=about-us class="section about-us">
        <div class=container>
            <header class=section-heading>
                <h2>About Us</h2>
                <span>Everything you need to know about our Company</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class=col-sm-4>
                        <div class="about-content left">
                            <h4>We're Creative</h4>
                            <p>Lorem adipipsum idolor sit iamet, iconsectetur aisicing elit. Necessitatibus illo vel dolorum
                                soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipitaut
                                voluptas quaerat consectetur.</p>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <figure class="about-content center">
                            <img class="img-responsive center-block" src="assets/images/about-us/center_image.jpg">
                        </figure>
                    </div>
                    <div class=col-sm-4>
                        <div class="about-content right">
                            <h4>We're Friendly</h4>
                            <p>Lorem adipipsum dolor sit amet, consecteturno aisicing elit. Necessitatibus illo vel dolorumsa
                                soluta consectetur doloribus sit. Delectus tenetur odit dicta vitae debitis susc ipitaut
                                voluptas quaerat dolorum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=why-choose-us class="section why-choose-us">
        <div class=container>
            <header class=section-heading>
                <h2>Why Choose Us</h2>
                <span>Choosing an agency tough. Let us convince you</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-sm-4 why-explain-wrap">
                        <h4>Creative</h4>
                        <div class="why-explain top top-1">
                            <p>Sollicitudin velit malesuada Aliqua andit diam feugiat ex.For those who</p>
                        </div>
                    </div>
                    <div class="col-sm-4 why-explain-wrap">
                        <h4>Professional</h4>
                        <div class="why-explain top top-2">
                            <p>Velit sollicitudin malesuada Aliqua andit diam feugiat ex.For those who</p>
                        </div>
                    </div>
                    <div class="col-sm-4 why-explain-wrap">
                        <h4>Experienced</h4>
                        <div class="why-explain top top-3">
                            <p>Sollicitudin velit malesuada Aliqua andit diam feugiat ex.For those who</p>
                        </div>
                    </div>
                </div>
                <figure class=why-us-image>
                    <img class="img-responsive center-block hidden-xs" src="assets/images/why-choose-us/1.png">
                </figure>
                <div class=row>
                    <div class="col-sm-4 why-explain-wrap">
                        <div class="why-explain bottom bottom-1">
                            <h4>Dedicated</h4>
                        </div>
                        <p>Sollicitudin velit malesuada Aliqua andit diam feugiat ex.For those who</p>
                    </div>
                    <div class="col-sm-4 why-explain-wrap">
                        <div class="why-explain bottom bottom-2">
                            <h4>24/7 Support</h4>
                        </div>
                        <p>Sollicitudin velit malesuada Aliqua andit diam feugiat ex.For those who</p>
                    </div>
                    <div class="col-sm-4 why-explain-wrap last">
                        <div class="why-explain bottom bottom-3">
                            <h4>Enthusiastic</h4>
                        </div>
                        <p class=last>Sollicitudin velit malesuada Aliqua andit diam feugiat ex.For those who</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=funfacts class="section dark-bg funfacts">
        <div class=color-overlay></div>
        <div class=container>
            <header class=section-heading>
                <h2>Do You Know</h2>
                <span>Some cool facts about our company</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class=col-sm-4>
                        <div class=counter-box>
                            <div class=counter-icon>
                                <span class=ion-ios-partlysunny-outline></span>
                            </div>
                            <div class="count number">7781914</div>
                            <div class=count-description>Total Downloads</div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class=counter-box>
                            <div class=counter-icon>
                                <span class=ion-ios-clock-outline></span>
                            </div>
                            <div class="count number">370704</div>
                            <div class=count-description>Minutes Well Spent</div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class="counter-box last">
                            <div class=counter-icon>
                                <span class=ion-ios-infinite-outline></span>
                            </div>
                            <div class=count>Infinite</div>
                            <div class=count-description>Coffees Were Consumed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=services class="section services">
        <div class=container>
            <header class=section-heading>
                <h2>Our Services</h2>
                <span>We plan, design, build and market high quality websites</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class=col-sm-4>
                        <div class=service>
                            <div class="service-icon text-center">
                                <span class=ion-ios-albums-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Responsive Design</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class=service>
                            <div class="service-icon text-center">
                                <span class=ion-ios-americanfootball-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Brand Identity</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class=service>
                            <div class="service-icon text-center">
                                <span class=ion-ios-game-controller-b-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Game Development</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row secondrow">
                    <div class=col-sm-4>
                        <div class=service>
                            <div class="service-icon text-center">
                                <span class=ion-ios-lightbulb-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Creative Theme</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class=service>
                            <div class="service-icon text-center">
                                <span class=ion-ios-pie-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Making Stretagy</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class="service last">
                            <div class="service-icon text-center">
                                <span class=ion-ios-cart-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Business Solution</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=expertise class="section dark-bg expertise progressbars">
        <div class=color-overlay></div>
        <div class=container>
            <header class=section-heading>
                <h2>Our Expertise</h2>
                <span>A bit of background on our skills and expertise</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class=col-sm-6>
                        <div id=expertise-tab role=tabpanel class=expertise-description>
                            <ul class="nav nav-tabs" role=tablist>
                                <li role=presentation class=active>
                                    <a href="index__op__slider_classic.html#html" aria-controls=html role=tab data-toggle=tab>HTML5</a>
                                </li>
                                <li role=presentation>
                                    <a href="index__op__slider_classic.html#android" aria-controls=android role=tab data-toggle=tab>Android</a>
                                </li>
                                <li role=presentation>
                                    <a href="index__op__slider_classic.html#ios" aria-controls=ios role=tab data-toggle=tab>iOS</a>
                                </li>
                            </ul>
                            <div class=tab-content>
                                <div role=tabpanel class="tab-pane active" id=html>
                                    <div class=tab-left>
                                        <i class="fa fa-html5 fa-5x"></i>
                                    </div>
                                    <div class=tab-right>
                                        <p>Donec ac consectetur neque, vel eleifend nisi. In et nibh at neque convallis tincidunt
                                            modales odio vel malesuada interdum donec ac consectetur neque.</p>
                                    </div>
                                </div>
                                <div role=tabpanel class=tab-pane id=android>
                                    <div class=tab-left>
                                        <i class="fa fa-android fa-5x"></i>
                                    </div>
                                    <div class=tab-right>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tincidunt
                                            modales odio vel malesuada interdum donec ac consectetur neque.</p>
                                    </div>
                                </div>
                                <div role=tabpanel class=tab-pane id=ios>
                                    <div class=tab-left>
                                        <i class="fa fa-apple fa-5x"></i>
                                    </div>
                                    <div class=tab-right>
                                        <p>neque convallis tincidunt modales odio vel malesuada interdum donec ac consectetur
                                            neque, vel eleifend nisi. In et nibh at donec ac consectetur neque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-6>
                        <div class=progress-box>
                            <header class=progress-heading>
                                <div class=row>
                                    <div class=col-xs-6>HTML5</div>
                                    <div class="col-xs-6 text-right">90%</div>
                                </div>
                            </header>
                            <div class=progress>
                                <div class=progress-bar role=progressbar aria-valuenow=90 aria-valuemin=0 aria-valuemax=100>
                                    <span class=sr-only>60% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class=progress-box>
                            <header class=progress-heading>
                                <div class=row>
                                    <div class=col-xs-6>Android</div>
                                    <div class="col-xs-6 text-right">70%</div>
                                </div>
                            </header>
                            <div class=progress>
                                <div class=progress-bar role=progressbar aria-valuenow=70 aria-valuemin=0 aria-valuemax=100>
                                    <span class=sr-only>60% Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class=progress-box>
                            <header class=progress-heading>
                                <div class=row>
                                    <div class=col-xs-6>iOS</div>
                                    <div class="col-xs-6 text-right">50%</div>
                                </div>
                            </header>
                            <div class=progress>
                                <div class=progress-bar role=progressbar aria-valuenow=50 aria-valuemin=0 aria-valuemax=100>
                                    <span class=sr-only>60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=our-process class="section our-process">
        <div class=container>
            <header class=section-heading>
                <h2>How We Did It</h2>
                <span>Working together to achieve great results</span>
            </header>
            <div class=section-content>
                <div class=process>
                    <div class=our-process-image>
                        <span class=ion-ios-flask-outline></span>
                    </div>
                    <div class=our-process-text>
                        <h4>Analysis &amp; Planing</h4>
                        <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who
                            will, the experience most certainly changes your perspective. The things that we share in our
                            world are far more valuable than those which divide us.</p>
                    </div>
                </div>
                <div class="divider divider-right hidden-xs"></div>
                <div class=process>
                    <div class="our-process-image left">
                        <span class=ion-ios-lightbulb-outline></span>
                    </div>
                    <div class="our-process-text right">
                        <h4>Design &amp; Development</h4>
                        <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who
                            will, the experience most certainly changes your perspective. The things that we share in our
                            world are far more valuable than those which divide us.</p>
                    </div>
                </div>
                <div class="divider divider-left hidden-xs"></div>
                <div class=process>
                    <div class=our-process-image>
                        <span class=ion-ios-speedometer-outline></span>
                    </div>
                    <div class=our-process-text>
                        <h4>Launch &amp; Grow</h4>
                        <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who
                            will, the experience most certainly changes your perspective. The things that we share in our
                            world are far more valuable than those which divide us.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id=cta-1 class=cta-1>
        <div class=container>
            <div class=call-to-action>
                <div class=cta-text>Are you excited to start your project?</div>
                <a class="btn btn-default-o" href="index__op__slider_classic.html#">Get Started</a>
            </div>
        </div>
    </div>
    <section id=portfolio class="section portfolio">
        <div class=container>
            <header class=section-heading>
                <h2>Recent Projects</h2>
                <span>Successful projects,happy clients and great results</span>
            </header>
            <div class=section-content>
                <div class=main_content>
                    <div class=isotop-filter id=filters>
                        <button type=button class="btn btn-isotop is-checked" data-filter=*>All</button>
                        <button type=button class="btn btn-isotop" data-filter=.design>Web</button>
                        <button type=button class="btn btn-isotop" data-filter=.wordpress>WordPress</button>
                        <button type=button class="btn btn-isotop" data-filter=.marketing>Marketing</button>
                        <button type=button class="btn btn-isotop" data-filter=.brandidentity>Brand Identity</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=portfolio-grid>
            <ul id=da-thumbs class="da-thumbs isotope">
                <li data-category=design class=design>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/01.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=marketing class=marketing>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/02.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=wordpress class=wordpress>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/03.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=design class=design>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/04.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=marketing class=marketing>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/05.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=wordpress class=wordpress>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/06.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=design class=design>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/07.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=marketing class=marketing>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/08.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=brandidentity class=brandidentity>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/09.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=marketing class=marketing>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/10.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=brandidentity class=brandidentity>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/11.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <li data-category=brandidentity class=brandidentity>
                    <a href="portfolio__single.html">
                        <img src="assets/images/work/12.jpg">
                        <div class=portfolio-detail-overlay>
                            <div class=middle-align-wrap>
                                <div class=middle-align-cell>
                                    <h4>Corporate Website</h4>
                                    <span>Webdesign</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <div id=cta-2 class="cta-2 text-center">
        <div class=container>
            <span class=cta-text>Want to see more from our works lorem ipsum dolor sit amet?</span>
            <a class="btn btn-default-o" href="portfolio__boxed__3_columns.html">View all</a>
        </div>
    </div>
    <section id=team class="section team">
        <div class=container>
            <header class=section-heading>
                <h2>Meet the Team</h2>
                <span>Meet the Reign team</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-sm-4 lborder">
                        <div class=team-bio>
                            <figure>
                                <img src="assets/images/team/team-1.jpg" class="img-responsive center-block">
                            </figure>
                            <div class=team-description>
                                <div class=member-name>Jewel Johan</div>
                                <div class=designation>CEO &amp; Founder</div>
                            </div>
                            <div class=team-social>
                                <ul class=social-block>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 lborder rborder">
                        <div class=team-bio>
                            <figure>
                                <img src="assets/images/team/team-2.jpg" class="img-responsive center-block">
                            </figure>
                            <div class=team-description>
                                <div class=member-name>Rub Elvy Khanam</div>
                                <div class=designation>Front End Developer</div>
                            </div>
                            <div class=team-social>
                                <ul class=social-block>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 rborder">
                        <div class=team-bio>
                            <figure>
                                <img src="assets/images/team/team-3.jpg" class="img-responsive center-block">
                            </figure>
                            <div class=team-description>
                                <div class=member-name>K. Survy</div>
                                <div class=designation>Graphics Designer</div>
                            </div>
                            <div class=team-social>
                                <ul class=social-block>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index__op__slider_classic.html#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=testimonial class="section overlay-1 testimonial bg-image dark-bg">
        <div class=color-overlay></div>
        <div class=container>
            <header class=section-heading>
                <h2>Client Testimonials</h2>
                <span>See what our customers have to say about us</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-md-8 col-md-offset-2">
                        <div class=carosel-wrapper>
                            <div class=client-face-holder>
                                <div id=clientFace></div>
                            </div>
                            <div class="quote left">&ldquo;</div>
                            <div class="quote right">&rdquo;</div>
                            <div id=testimonials-carousel class=owl-carousel>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/team-1.jpg>
                                        <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s</blockquote>
                                        <h4
                                                class=reviewer>Bhond James</h4>
                                        <p class=designation>Founder</p>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/team-2.jpg>
                                        <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s</blockquote>
                                        <h4
                                                class=reviewer>Bhond James</h4>
                                        <p class=designation>Founder</p>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/team-3.jpg>
                                        <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s</blockquote>
                                        <h4
                                                class=reviewer>Bhond James</h4>
                                        <p class=designation>Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class=owl-controls>
                                <a class=prev role=button>
                                    <i class=ion-ios-arrow-left></i>
                                    <span class=sr-only>Previous</span>
                                </a>
                                <a class=next role=button data-slide=next>
                                    <i class=ion-ios-arrow-right></i>
                                    <span class=sr-only>Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=pricing class="section pricing">
        <div class=container>
            <header class=section-heading>
                <h2>Our Pricing</h2>
                <span>Amazing services at affordable price</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-md-3 col-sm-6">
                        <div class=price-box>
                            <h3>Basic</h3>
                            <div class=price-info>
                                <div class=price>
                                    <sup>$</sup>199</div>
                                <ul>
                                    <li>Up to 5 pages</li>
                                    <li>1 year hosting</li>
                                    <li>3 months support</li>
                                    <li class=disabled>SEO</li>
                                    <li class=disabled>Secrity &amp; Backup</li>
                                    <li class=disabled>24/7 Support</li>
                                </ul>
                            </div>
                            <a href="index__op__slider_classic.html#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class=price-box>
                            <h3>Standard</h3>
                            <div class=price-info>
                                <div class=price>
                                    <sup>$</sup>499</div>
                                <ul>
                                    <li>Up to 5 pages</li>
                                    <li>1 year hosting</li>
                                    <li>3 months support</li>
                                    <li>SEO</li>
                                    <li class=disabled>Secrity &amp; Backup</li>
                                    <li class=disabled>24/7 Support</li>
                                </ul>
                            </div>
                            <a href="index__op__slider_classic.html#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="price-box featured">
                            <h3>Premium</h3>
                            <div class=price-info>
                                <div class=price>
                                    <sup>$</sup>799</div>
                                <ul>
                                    <li>Up to 5 pages</li>
                                    <li>1 year hosting</li>
                                    <li>3 months support</li>
                                    <li>SEO</li>
                                    <li>Secrity &amp; Backup</li>
                                    <li class=disabled>24/7 Support</li>
                                </ul>
                            </div>
                            <a href="index__op__slider_classic.html#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="price-box last">
                            <h3>Ultimate</h3>
                            <div class=price-info>
                                <div class=price>
                                    <sup>$</sup>999</div>
                                <ul>
                                    <li>Up to 5 pages</li>
                                    <li>1 year hosting</li>
                                    <li>3 months support</li>
                                    <li>SEO</li>
                                    <li>Secrity &amp; Backup</li>
                                    <li>24/7 Support</li>
                                </ul>
                            </div>
                            <a href="index__op__slider_classic.html#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id=clients class="section clients overlay-1">
        <div class=container>
            <div class=section-content>
                <div id=client-carousel class=owl-carousel>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo01.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo02.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo03.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo04.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo05.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo06.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo02.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo03.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/c_logo04.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id=blog class="section blog">
        <div class=container>
            <header class=section-heading>
                <h2>From The Blog</h2>
                <span>Awesome articles from the blog</span>
            </header>
            <div id=blogContent class=section-content>
                <div class=row>
                    <div class="col-sm-6 col-md-4">
                        <div class=blog-post>
                            <header>
                                <h4 class=date>29
                                    <br>Aug</h4>
                                <div class=blog-element>
                                    <img class=img-responsive src="assets/images/blog/1.jpg">
                                </div>
                            </header>
                            <div class=blog-content>
                                <h4>
                                    <a href="blog__single__right_sidebar.html">Why Billionaires join Gates Giving Pledge</a>
                                </h4>
                                <div class=post-meta>
                                    <span>By
                                        <a href="index__op__slider_classic.html#">Prium</a>
                                    </span>
                                    <span>
                                        <a href="index__op__slider_classic.html#">30 Comments</a>
                                    </span>
                                </div>
                                <p>They signed the Giving Pledge -- an effort started in 2010 by ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class=blog-post>
                            <header>
                                <h4 class=date>29
                                    <br>Aug</h4>
                                <div class=blog-element>
                                    <img class=img-responsive src="assets/images/blog/2.jpg">
                                </div>
                            </header>
                            <div class=blog-content>
                                <h4>
                                    <a href="blog__single__right_sidebar.html">Web agency template released</a>
                                </h4>
                                <div class=post-meta>
                                    <span>By
                                        <a href="index__op__slider_classic.html#">John Snow</a>
                                    </span>
                                    <span>
                                        <a href="index__op__slider_classic.html#">30 Comments</a>
                                    </span>
                                </div>
                                <p>Data from the Centers for Medicare Medicaid Services include payments and ..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class=blog-post>
                            <header>
                                <h4 class=date>29
                                    <br>Aug</h4>
                                <div class=blog-element>
                                    <img class=img-responsive src="assets/images/blog/3.jpg">
                                </div>
                            </header>
                            <div class=blog-content>
                                <h4>
                                    <a href="blog__single__right_sidebar.html">A companytour to lake powel, arizona</a>
                                </h4>
                                <div class=post-meta>
                                    <span>By
                                        <a href="index__op__slider_classic.html#">Tailor</a>
                                    </span>
                                    <span>
                                        <a href="index__op__slider_classic.html#">30 Comments</a>
                                    </span>
                                </div>
                                <p>Lake Powell is a reservoir on the Colorado River, straddling the border between ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 visible-sm">
                        <div class=blog-post>
                            <header>
                                <h4 class=date>29
                                    <br>Aug</h4>
                                <div class=blog-element>
                                    <img class=img-responsive src="assets/images/blog/1.jpg">
                                </div>
                            </header>
                            <div class=blog-content>
                                <h4>
                                    <a href="blog__single__right_sidebar.html">Why Billionaires join Gates Giving Pledge</a>
                                </h4>
                                <div class=post-meta>
                                    <span>By
                                        <a href="index__op__slider_classic.html#">Prium</a>
                                    </span>
                                    <span>
                                        <a href="index__op__slider_classic.html#">30 Comments</a>
                                    </span>
                                </div>
                                <p>They signed the Giving Pledge -- an effort started in 2010 by ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=text-center>
                <a id=loadBlogPosts href="blog__standard__right_sidebar.html" class="btn btn-dark">View All
                    <span class="fa fa-angle-double-right"></span>
                </a>
            </div>
        </div>
    </section>
    <section id=subscribe class="section subscribe">
        <div class=container>
            <div class=row>
                <div class="col-md-4 col-sm-6">
                    <div class=subscribe-text>
                        <h2>Subscribe</h2>
                        <span>to our weekly newsletter</span>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <form class=subscribe-form id=subscription-form>
                        <div class=input-group>
                            <label class=sr-only for=subscriber-email>Email address</label>
                            <input name=email type=email id=subscriber-email class=form-control placeholder="Enter your email address"
                                   required>
                            <span class=input-group-addon>
                                <input id=subscribe-button type=submit class="btn btn-default" value=Join>
                            </span>
                        </div>
                    </form>
                    <div id=subscription-response></div>
                    <p class=spam-text>* We will never spam you</p>
                </div>
            </div>
        </div>
    </section>
    <section id=contact class="section contact">
        <div class=container>
            <header class=section-heading>
                <h2>Feel free to drop us a line</h2>
                <span>We are happy to listen</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-md-6 col-sm-5">
                        <h5>Feel free to drop us a line!</h5>
                        <form action="http://markup.themewagon.com/reign/preview/php/contact-form.php"
                              class=contact-form id=contactForm method=post name=contactform role=form>
                            <div class=form-group>
                                <input class=form-control id=name name=name placeholder="Your Name" type=text required>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=email name=email placeholder="Email Address" type=email required>
                            </div>
                            <div class=form-group>
                                <textarea class=form-control id=message name=massage placeholder="Type your message here" rows=5
                                          required></textarea>
                            </div>
                            <div id=contactFormResponse></div>
                            <button id=cfsubmit type=submit class="btn btn-dark btn-block contact-submit">Give us a shout</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-7">
                        <h5>Find us on Google map</h5>
                        <div class=google-map>
                            <div id=map></div>
                        </div>
                        <div class="row contact-info-wrap">
                            <div class=col-sm-6>
                                <div>
                                    <h5>Office Address</h5>
                                    <address class=contact-info>
                                        <span>590 Castro St</span>
                                        <br>
                                        <span>Mountain View</span>,
                                        <span>CA</span> -
                                        <span>94041</span>
                                        <br>
                                        <span>United States</span>
                                    </address>
                                </div>
                            </div>
                            <div class=col-sm-6>
                                <div>
                                    <h5>Contact Information</h5>
                                    <div class=contact-info>Local: ( 33 1) 42 68 53 00
                                        <br>Mobile: ( 33 1) 42 68 53 01
                                        <br>info@themewagon.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="links">
                    <a href="locale/en">English</a>
                    <a href="locale/fr">French</a>
                    <a href="locale">@lang('home.check')</a>
                </div>
            </div>
        </div>
    </section>
    <section id=footer-widgets class="section footer-widgets dark-bg">
        <div class=container>
            <div class=row>
                <div class="col-md-3 col-sm-6">
                    <div class="content-wrap widget-text">
                        <h4>About the reign</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores dolorum eius libero nihil. Fugiat
                            ipsum officia reprehenderit rerum saepe. Assumenda distinctio, voluptatibus. At consectetur cumque
                            enim error laudantium mollitia obcaecati!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="content-wrap widget-contact">
                        <h4>Contact info</h4>
                        <ul>
                            <li>
                                <i class=ion-home></i> 13005 Greenville California.</li>
                            <li>
                                <i class=ion-android-call></i> (303) 674-7750</li>
                            <li>
                                <i class=ion-email></i> info@yoursite.com</li>
                            <li>
                                <i class=ion-ios-location></i> Map and Direction</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="content-wrap widget-recent-posts">
                        <h4>Recent Posts</h4>
                        <ul>
                            <li>
                                <a href="index__op__slider_classic.html#" class=post-title>Lorem ipsum dolor sit amet</a> by
                                <a href="index__op__slider_classic.html#" class=author>Jhon Smith</a>
                            </li>
                            <li>
                                <a href="index__op__slider_classic.html#" class=post-title>Lorem ipsum dolor sit amet</a> by
                                <a href="index__op__slider_classic.html#" class=author>Jhon Smith</a>
                            </li>
                            <li>
                                <a href="index__op__slider_classic.html#" class=post-title>Lorem ipsum dolor sit amet</a> by
                                <a href="index__op__slider_classic.html#" class=author>Jhon Smith</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="content-wrap widget-gallery">
                        <h4>Photo Gallery</h4>
                        <div class=lightbox-gallery>
                            <a href="assets/images/work/01.jpg">
                                <img src="assets/images/work/01.jpg">
                            </a>
                            <a href="assets/images/work/02.jpg">
                                <img src="assets/images/work/02.jpg">
                            </a>
                            <a href="assets/images/work/03.jpg">
                                <img src="assets/images/work/03.jpg">
                            </a>
                            <a href="assets/images/work/04.jpg">
                                <img src="assets/images/work/04.jpg">
                            </a>
                            <a href="assets/images/work/05.jpg">
                                <img src="assets/images/work/05.jpg">
                            </a>
                            <a href="assets/images/work/06.jpg">
                                <img src="assets/images/work/06.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection