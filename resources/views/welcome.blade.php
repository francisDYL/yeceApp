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
                    <a itemprop=url href="index.html">
                    <img class="img-responsive center-block" src="assets/images/Logo-YECE.png">
                    </a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id=main-nav-collapse>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about-us" itemprop=url>
                            <span itemprop=name>@lang('nav.about')</span>
                        </a>
                    </li>
                    <li>
                        <a href="#services" itemprop=url>
                            <span itemprop=name>@lang('nav.service')</span>
                        </a>
                    </li>
                    <li>
                        <a href="#team" itemprop=url>
                            <span itemprop=name>@lang('nav.team')</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" itemprop=url>
                            <span itemprop=name>@lang('nav.contact')</span>
                        </a>
                    </li>
                    <li>
                        <a href="apply" itemprop=url>
                            <span itemprop=name>@lang('nav.apply')</span>
                        </a>
                    </li>
                    <li class=dropdown><a href="" class=dropdown-toggle data-toggle=dropdown>@lang('nav.lang')</a>
                            <ul class=dropdown-menu>
                                <li><a href="locale/fr">@lang('nav.french')</a></li>
                                <li><a href="locale/en">@lang('nav.english')</a></li>
                            </ul>
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
                <li style="background-image: url(assets/images/intro/intro1.jpg)">
                    <div class=color-overlay></div>
                    <div class=intro-wrapper>
                        <div class=intro>
                            <h1>@lang('intro.intro1Title')</h1>
                            <p>@lang('intro.intro1SubTitle')</p>
                            <a href="apply" class="btn btn-default-o onPageNav">@lang('nav.apply')</a>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/intro/intro2.jpg)">
                    <div class=intro-wrapper>
                        <div class=color-overlay></div>
                        <div class=intro>
                            <h1>@lang('intro.intro2Title')</h1>
                            <p>@lang('intro.intro2SubTitle')</p>
                            <a href="apply" class="btn btn-default-o onPageNav">@lang('nav.apply')</a>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/intro/intro3.jpg)">
                    <div class=intro-wrapper>
                        <div class=color-overlay></div>
                        <div class=intro>
                            <h1>@lang('intro.intro3Title')</h1>
                            <p>@lang('intro.intro3SubTitle')</p>
                            <a href="apply" class="btn btn-default-o onPageNav">@lang('nav.apply')</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <section id=about-us class="section about-us">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('aboutus.Title')</h2>
                <span>@lang('aboutus.SubTitle')</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class=col-sm-4>
                        <div class="about-content left">
                            <p>@lang('aboutus.firstThing')</p>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <figure class="about-content center">
                            <img class="img-responsive center-block" src="assets/images/about-us/aboutus.png">
                        </figure>
                    </div>
                    <div class=col-sm-4>
                        <div class="about-content right">
                            <p>@lang('aboutus.secondThing')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=why-choose-us class="section why-choose-us">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('aboutus.goalTitle')</h2>
                <span>@lang('aboutus.goalSubTitle')</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-sm-3 why-explain-wrap">
                        <h4>@lang('aboutus.dream1Title')</h4>
                        <div class="why-explain top top-1">
                            <p>@lang('aboutus.dream1')</p>
                        </div>
                    </div>
                    <div class="col-sm-3 why-explain-wrap">
                        <h4>@lang('aboutus.dream2Title')</h4>
                        <div class="why-explain top top-2">
                            <p>@lang('aboutus.dream2')</p>
                        </div>
                    </div>
                    <div class="col-sm-3 why-explain-wrap">
                        <h4>@lang('aboutus.dream3Title')</h4>
                        <div class="why-explain top top-3">
                            <p>@lang('aboutus.dream3')</p>
                        </div>
                    </div>
                    <div class="col-sm-3 why-explain-wrap">
                        <h4>@lang('aboutus.dream4Title')</h4>
                        <div class="why-explain top top-4">
                            <p>@lang('aboutus.dream4')</p>
                        </div>
                    </div>
                </div>
                <figure class=why-us-image>
                    <img class="img-responsive center-block hidden-xs" src="assets/images/about-us/association.jpeg">
                </figure>
                
        </div>
    </section>
    <section id=services class="section services">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('services.title')</h2>
                <span>@lang('services.subTitle')</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class=col-sm-4>
                        <div class=service>
                           <!-- <div class="service-icon text-center">
                                <span class=ion-ios-albums-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Responsive Design</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div> -->
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class=service>
                            <div class="service-icon text-center">
                            <img src="assets/images/why-choose-us/service.jpg">
                            </div>
                            <div class=about-service>
                                <p class=text-center>@lang('services.content')</p>
                            </div>
                        </div>
                    </div>
                    <div class=col-sm-4>
                        <div class=service>
                           <!-- <div class="service-icon text-center">
                                <span class=ion-ios-game-controller-b-outline></span>
                            </div>
                            <div class=about-service>
                                <h4 class=text-center>Game Development</h4>
                                <p class=text-center>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                                    ex eget sollicitudin eget.</p>
                            </div> -->
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <div id=cta-1 class=cta-1>
        <div class=container>
            <div class=call-to-action>
                <div class=cta-text>@lang('services.brandTitle')</div>
                <a class="btn btn-default-o" href="apply">@lang('nav.apply')</a>
            </div>
        </div>
    </div>
    <section id=portfolio class="section portfolio">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('services.projectTitle')</h2>
                <span>@lang('services.projectSubTitle')</span>
            </header>
        </div>
        <div class=service>
                            <div class="service-icon text-center">
                            <img src="assets/images/why-choose-us/casaminnov.jpg">
                            </div>
                            <div class=about-service>
                                <p class=text-center>@lang('services.projectContent')</p>
                            </div>
                        </div>
    </section>
    <section id=team class="section team">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('aboutus.teamTitle')</h2>
                <span>@lang('aboutus.teamSubTitle')</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-sm-6 lborder">
                        <div class=team-bio>
                            <figure>
                                <img src="assets/images/team/president.jpg" class="img-responsive center-block">
                            </figure>
                            <div class=team-description>
                                <div class=member-name>SOUGLA ROMARIC</div>
                                <div class=designation>@lang('aboutus.president')</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 rborder">
                        <div class=team-bio>
                            <figure>
                                <img src="assets/images/team/treasurer.jpg" class="img-responsive center-block">
                            </figure>
                            <div class=team-description>
                                <div class=member-name>Djiomou Carelle</div>
                                <div class=designation>@lang('aboutus.treasurer')</div>
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
                <h2>@lang('testify.title')</h2>
                <span>@lang('testify.subTitle')</span>
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
                                    <div class=review data-client-image=assets/images/team/testify.jpeg>
                                        <blockquote>@lang('testify.testify1')</blockquote>
                                        <h4
                                                class=reviewer>Adjibi Foe Adrien D’aquin,</h4>
                                        <p class=designation>Transity, 2018</p>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/testify.jpeg>
                                        <blockquote>@lang('testify.testify2') </blockquote>
                                        <h4
                                                class=reviewer>Tchanjou Njomou Aquilas</h4>
                                        <p class=designation> Darmotics, 2015</p>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/testify.jpeg>
                                        <blockquote>@lang('testify.testify3')</blockquote>
                                        <h4
                                                class=reviewer>Tinchi Etienne juste</h4>
                                        <p class=designation>Champi-BIO, 2018</p>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/testify.jpeg>
                                        <blockquote>@lang('testify.testify4')</blockquote>
                                        <h4
                                                class=reviewer>Abdoulrahman Ibrahim Ali</h4>
                                        <p class=designation>AB-STUDY, 2018</p>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/testify.jpeg>
                                        <blockquote>@lang('testify.testify5')</blockquote>
                                        <h4
                                                class=reviewer>DANDJOUMA AYOUBA</h4>
                                        <p class=designation>MyBosa, 2018</p>
                                    </div>
                                </div>
                                <div class=item>
                                    <div class=review data-client-image=assets/images/team/testify.jpeg>
                                        <blockquote>@lang('testify.testify6')</blockquote>
                                        <h4
                                                class=reviewer>Mbarga jean-xavier</h4>
                                        <p class=designation>PEDA-DIDAC, 2018</p>
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
    
    <div id=clients class="section clients overlay-1">
        <div class=container>
            <div class=section-content>
                <div id=client-carousel class=owl-carousel>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/compagny.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/ong.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/Logo-YECE.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/phd.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/school.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/ong.png">
                    </div>
                    <div class="client-image item">
                        <img class="img-responsive center-block" src="assets/images/clients/compagny.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id=contact class="section contact">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('contact.title')</h2>
                <span>@lang('contact.subTitle')</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <div class="col-md-6 col-sm-5">
                        <form action=""
                              class=contact-form id=contactForm method=post name=contactform role=form>
                            <div class=form-group>
                                <input class=form-control id=name name=name placeholder="@lang('contact.name')" type=text required>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=email name=email placeholder="@lang('contact.email')" type=email required>
                            </div>
                            <div class=form-group>
                                <textarea class=form-control id=message name=massage placeholder="@lang('contact.message')" rows=5
                                          required></textarea>
                            </div>
                            <div id=contactFormResponse></div>
                            <button id=cfsubmit type=submit class="btn btn-dark btn-block contact-submit">@lang('contact.submit')</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-7">
                        <h5>@lang('contact.google')</h5>
                        <div class=google-map>
                            <div id=map></div>
                        </div>
                        <div class="row contact-info-wrap">
                            <div class=col-sm-6>
                                <div>
                                    <h5>@lang('contact.office')</h5>
                                    <address class=contact-info>
                                        <span>@lang('contact.street')</span>
                                        <br>
                                        <span>@lang('contact.city')</span>,
                                        <br>
                                        <span>@lang('contact.country')</span>
                                    </address>
                                </div>
                            </div>
                            <div class=col-sm-6>
                                <div>
                                    <h5>@lang('contact.info')</h5>
                                    <div class=contact-info>@lang('contact.local'): ( +2112) x xx xx xx xx
                                        <br>@lang('contact.mobile'): (+212) x xx xx xx xx
                                        <br>yeceafrica@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection