@extends('layouts.base')

@section('title', 'YECE-Home Page | Youth Entrepreneurship Center for Empowerment')

@section('navbar')
    @parent

    <nav id=fixedTopNav class="navbar navbar-fixed-top main-navigation" itemscope
         itemtype=https://schema.org/SiteNavigationElement
         role=navigation>
        <div class=container>
            <div class=navbar-header>
                <button type=button class="navbar-toggle collapsed" data-toggle=collapse
                        data-target=.#main-nav-collapse>
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
                        <a href=".#about-us" itemprop=url>
                            <span itemprop=name>@lang('nav.about')</span>
                        </a>
                    </li>
                    <li>
                        <a href=".#services" itemprop=url>
                            <span itemprop=name>@lang('nav.service')</span>
                        </a>
                    </li>
                    <li>
                        <a href=".#portfolio" itemprop=url>
                            <span itemprop=name>@lang('nav.portfolio')</span>
                        </a>
                    </li>
                    <li>
                        <a href=".#team" itemprop=url>
                            <span itemprop=name>@lang('nav.team')</span>
                        </a>
                    </li>
                    <li>
                        <a href=".#pricing" itemprop=url>
                            <span itemprop=name>@lang('nav.pricing')</span>
                        </a>
                    </li>
                    <li>
                        <a href=".#blog" itemprop=url>
                            <span itemprop=name>@lang('nav.blog')</span>
                        </a>
                    </li>
                    <li>
                        <a href=".#contact" itemprop=url>
                            <span itemprop=name>@lang('nav.contact')</span>
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
    <section id=apply class="section ">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('apply.pleasefill')</h2>
                <span>@lang('apply.wewill')</span>
            </header>
            <div class=section-content>
                <div class=row>
                    <form action=".apply/create"
                          class=contact-form id=applyForm method=post name=applyform role=form>
                        <div class="col-md-6 col-sm-5">

                            <div class=form-group>
                                <input class=form-control id=first_name name=first_name placeholder="@lang('apply.firstname')" type=text required>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=last_name name=last_name placeholder="@lang('apply.lastname')" type=text required>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=email name=email placeholder="@lang('apply.email')" type=email
                                       required>
                            </div>

                            <div class="form-group">
                                @lang('apply.youare')
                                <label class="radio-inline"><input type="radio" name="type"  checked> @lang('apply.student')</label>
                                <label class="radio-inline"><input type="radio" name="type" >@lang('apply.professional')</label>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=phone name=phone placeholder="@lang('apply.phone')" type=tel required>
                            </div>
                            <div class=form-group>
                                <label for="nationality"> @lang('apply.nationality') </label>
                                <select id=nationality name="nationality" class="form-control">
                                    <option selected>Select Menu</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div id=contactFormResponse></div>
                            <button id=cfsubmit type=submit class="btn btn-dark btn-block contact-submit">Give us a
                                shout
                            </button>

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
                                            <br>info@themewagon.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="links">
                    <a href="locale/en">English</a>
                    <a href="locale/fr">French</a>
                    <a href="locale">@lang('home.check')</a>
                </div>
            </div>

        </div>
    </section>
@endsection