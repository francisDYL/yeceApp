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
                    <a itemprop=url href=".">
                    <img class="img-responsive center-block" src="assets/images/Logo-YECE.png">
                    </a>
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
                        <a href=".#team" itemprop=url>
                            <span itemprop=name>@lang('nav.team')</span>
                        </a>
                    </li>
                    <li>
                        <a href=".#contact" itemprop=url>
                            <span itemprop=name>@lang('nav.contact')</span>
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
                            <a href="apply" class="btn btn-default-o btn-lg onPageNav">@lang('nav.apply')</a>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/intro/intro2.jpg)">
                    <div class=intro-wrapper>
                        <div class=color-overlay></div>
                        <div class=intro>
                            <h1>@lang('intro.intro2Title')</h1>
                            <p>@lang('intro.intro2SubTitle')</p>
                            <a href="apply" class="btn btn-default-o btn-lg onPageNav">@lang('nav.apply')</a>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(assets/images/intro/intro3.jpg)">
                    <div class=intro-wrapper>
                        <div class=color-overlay></div>
                        <div class=intro>
                            <h1>@lang('intro.intro3Title')</h1>
                            <p>@lang('intro.intro3SubTitle')</p>
                            <a href="apply" class="btn btn-default-o btn-lg onPageNav">@lang('nav.apply')</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <script src="assets/js/hideandshow.js"></script>
    <section id=apply class="section ">
        <div class=container>
            <header class=section-heading>
                <h2>@lang('apply.pleasefill')</h2>
                <span>@lang('apply.wewill')</span>
            </header>
            <div class=section-content>
                @include('components.errors')
                @include('components.success1')
                <div class=row>
                    <form action="apply"
                          class=contact-form id=applyForm method=post name=applyform role=form>
                        @csrf
                        <div class="col-md-6 col-sm-5">

                            <div class=form-group>
                                <input class=form-control id=first_name name=first_name
                                       placeholder="@lang('apply.firstname')" type=text required>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=last_name
                                       name=last_name placeholder="@lang('apply.lastname')"
                                       type=text required>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=email name=email placeholder="@lang('apply.email')"
                                       type=email
                                       required>
                            </div>

                            <div class="form-group">
                                @lang('apply.youare')
                                <label class="radio-inline"><input id="type1" type="radio" name="type" value="student"
                                                                   checked REQUIRED> @lang('apply.student')</label>
                                <label class="radio-inline"><input id="type2" type="radio" name="type" value="professional">@lang('apply.professional')
                                </label>
                            </div>
                            <div class=form-group>
                                <input class=form-control id=phone name=phone placeholder="@lang('apply.phone')"
                                       type=tel required>
                            </div>
                            <div class=form-group>
                                <label for="nationality"> @lang('apply.nationality') </label>
                                <select id=nationality name="nationality" class="form-control" REQUIRED>
                                    @foreach($Countries as $key=>$value)
                                        @if($key=='MA')
                                            <option value="{{$key}}" selected> {{$value}}</option>
                                        @else
                                            <option value="{{$key}}"> {{$value}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>


                        </div>
                        <div class="col-md-6 col-sm-7">
                            <div id="ifstudent" name="ifstudent">
                                <div class=form-group>
                                    <input class=form-control id=university name=university
                                           placeholder="@lang('apply.university')" type=text required>
                                </div>
                                <div class=form-group>
                                    <input class=form-control id=school_level_and_last_diploma
                                           name=school_level_and_last_diploma
                                           placeholder="@lang('apply.school_level_and_last_diploma')" type=text
                                           required>
                                </div>
                                <div class=form-group>
                                    <label for="reasonforjoin1"> @lang('apply.reasonforjoin') </label>
                                    <select id=reasonforjoin1 name="reasonforjoin1" class="form-control" REQUIRED>
                                        <option value="I have a project">@lang('apply.ihaveaproject')</option>
                                    </select>
                                </div>
                            </div>
                            <div id="ifprofessional" name="ifprofessional">
                                <div class=form-group>
                                    <input class=form-control id=company name=company
                                           placeholder="@lang('apply.company')" type=text required>
                                </div>
                                <div class=form-group>
                                    <input class=form-control id=function name=function
                                           placeholder="@lang('apply.function')" type=text required>
                                </div>
                                <div class=form-group>
                                    <label for="reasonforjoin2"> @lang('apply.reasonforjoin') </label>
                                    <select id=reasonforjoin2 name="reasonforjoin2" class="form-control" required>
                                        <option value="I propose a partnership" selected>@lang('apply.iproposepartnership')</option>
                                        <option value="I want to be member">@lang('apply.iwantobeamember')</option>
                                        <option value="other">@lang('apply.other')</option>
                                    </select>
                                </div>
                                <div class=form-group id="ifother" name="ifother">
                                    <label for="otherreason"> @lang('apply.otherreason') </label>
                                    <input class=form-control id=otherreason name=otherreason
                                           placeholder="@lang('apply.other')" type=text >
                                </div>
                            </div>
                        </div>

                        <button id=cfsubmit type=submit
                                class="btn btn-dark btn-block btn-lg contact-submit">@lang('nav.apply')
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection