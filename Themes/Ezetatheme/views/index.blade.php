@extends('layouts.master')

@section('highlighted')
    @include('partials.highlighted')
@stop

@section('content')

<!-- Services -->
<div class="block features">
    <h2 class="title-divider">
        <span>Core <span class="de-em">Features</span></span>
        <small>Core features included in all plans.</small>
    </h2>
    <div class="row">
        <div class="feature col-sm-6 col-md-3">
            <a href="features.htm">
                <img src="{{ Theme::url('img/features/feature-1.png') }}" alt="Feature 1" class="img-responsive" />
            </a>
            <h3 class="title">
                <a href="features.htm">Mobile <span class="de-em">Friendly</span></a>
            </h3>
            <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
        <div class="feature col-sm-6 col-md-3">
            <a href="features.htm">
                <img src="{{ Theme::url('img/features/feature-2.png') }}" alt="Feature 2" class="img-responsive" />
            </a>
            <h3 class="title">
                <a href="features.htm">24/7 <span class="de-em">Support</span></a>
            </h3>
            <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
        <div class="feature col-sm-6 col-md-3">
            <a href="features.htm">
                <img src="{{ Theme::url('img/features/feature-3.png') }}" alt="Feature 3" class="img-responsive" />
            </a>
            <h3 class="title">
                <a href="features.htm">Free Upgrade <span class="de-em">Assistance</span></a>
            </h3>
            <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
        <div class="feature col-sm-6 col-md-3">
            <a href="features.htm">
                <img src="{{ Theme::url('img/features/feature-4.png') }}" alt="Feature 4" class="img-responsive" />
            </a>
            <h3 class="title">
                <a href="features.htm">99.9% <span class="de-em">Uptime</span></a>
            </h3>
            <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
        </div>
    </div>
</div>
<!--Pricing Table-->
<div class="block">
    <h2 class="title-divider">
        <span>Pricing <span class="de-em">Plans</span></span>
        <small>Competitive pricing plans to suit your needs</small>
    </h2>
    <div class="row pricing-stack">
        <div class="col-md-3">
            <div class="well">
                <h3 class="title">
                    Starter
                </h3>
                <p class="price"><span class="fancy">Free!</span></p>
                <ul class="unstyled points">
                    <li>3 User Accounts</li>
                    <li>3 Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>5GB of space</li>
                </ul>
                <a class="btn btn-primary">Sign Up</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well active">
                <h3 class="title">
                    <span class="em">Pro</span> <span class="fancy">Plus</span>
                </h3>
                <p class="price">
                    <span class="currency">$</span>
                    <span class="digits">49<span>.95</span></span>
                    <span class="term">/MO</span>
                </p>
                <ul class="unstyled points">
                    <li>50 User Accounts</li>
                    <li>50 Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>Unlimited space</li>
                </ul>
                <a class="btn btn-primary">Sign Up</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well active">
                <h3 class="title">
                    <span class="em">Biz</span> <span class="fancy">Plus</span>
                </h3>
                <p class="price">
                    <span class="currency">$</span>
                    <span class="digits">199<span>.95</span></span>
                    <span class="term">/MO</span>
                </p>
                <ul class="unstyled points">
                    <li>Umlimited User Accounts</li>
                    <li>Umlimited Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>Unlimited space</li>
                </ul>
                <a class="btn btn-primary">Sign Up</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="well">
                <h3 class="title">
                    Starter <span class="fancy">Plus</span>
                </h3>
                <p class="price">
                    <span class="currency">$</span>
                    <span class="digits">19<span>.95</span></span>
                    <span class="term">/MO</span>
                </p>
                <ul class="unstyled points">
                    <li>10 User Accounts</li>
                    <li>10 Private Projects</li>
                    <li>Umlimited Public Projects</li>
                    <li>15GB of space</li>
                </ul>
                <a class="btn btn-primary">Sign Up</a>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Plan features -->
        <div class="well well-sm text-center">
            <h4 class="inline-el pad-right">
                <span>All Plans <span class="de-em">Include</span>:</span>
            </h4>
            <p class="inline-el pad-left muted">90 day money back guarantee <span class="spacer">//</span> 24/7 telephone support <span class="spacer">//</span> FREE Setup <span class="spacer">//</span> Migration Help <span class="spacer">//</span> Developer API</p>
        </div>
    </div>
</div>
<!--Customer testimonial-->
<div class="block testimonials margin-top-large">
    <h2 class="title-divider">
        <span>Highly <span class="de-em">Recommended</span></span>
        <small>99% of our customers recommend us!</small>
    </h2>
    <div class="row">
        <div class="col-md-4">
            <blockquote>
                <p>"It's totally awesome, we're could imagine life without it!"</p>
                <small>
                    <img src="{{ Theme::url('img/team/jimi.jpg') }}" alt="Jimi Bloggs" class="img-circle" />
                    Jimi Bloggs <span class="spacer">/</span> <a href="#">@mrjimi</a>
                </small>
            </blockquote>
        </div>
        <div class="col-md-4">
            <blockquote>
                <p>"10 out of 10, highly recommended!"</p>
                <small>
                    <img src="{{ Theme::url('img/team/steve.jpg') }}" alt="Jimi Bloggs" class="img-circle" />
                    Steve Bloggs <span class="spacer">/</span> <a href="#">Founder of Apple</a>
                </small>
            </blockquote>
        </div>
        <div class="col-md-4">
            <blockquote>
                <p>"Our productivity & sales are up! Couldn't be happier with this product!"</p>
                <small>
                    <img src="{{ Theme::url('img/team/adele.jpg') }}" alt="Adele Bloggs" class="img-circle" />
                    Adele Bloggs <span class="spacer">/</span> <a href="#">@iamadele</a>
                </small>
            </blockquote>
        </div>
    </div>
</div>
@stop


