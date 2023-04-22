<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Exhbition Network</title>
</head>
    <body>
        {{$event->email}}

        

        @component('mail::message')
            # Introduction

            As you requested us to promote your event. We are suggesting simple 7 question  segment to review your event with your prospective
            You can choose any five question to answer.

            @component('mail::button', ['url' => ''])
                Click
            @endcomponent

            Thanks,<br>
            {{ config('app.name') }}
        @endcomponent

        <div class="overflow-x">
        <div class="top">
            <div class="pdt">
                <div class="flex">
                    <div class="logo-t1">
                        <a href="/" title="Home">
                            <picture>
                                <img src="https://cdn.addevent.com/web/images/logo-t1.svg" alt="AddEvent">
                            </picture>
                        </a>
                    </div>
                    <div class="menu-t1">
                        <div class="list">
                            <ul>
                                <li class="exp">
                                    <a href="#" title="" class="solexp">Solutions <i class="icon-Chevron_Right"></i></a>
                                    <div class="drop" data-open="false">
                                        <div class="drop-ctn">
                                            <div class="rl">
                                                <div class="pad">
                                                    <div class="arr"></div>
                                                    <div class="hdr">
                                                        Discover our solutions
                                                    </div>
                                                    <div class="color-grid">
                                                        <a href="/solutions/share-events" title="Share events" class="link">
                                                            <div class="item item-blue">
                                                                <div class="crc crc-48">
                                                                    <i class="icon-share-event"></i>
                                                                </div>
                                                                <div class="title">
                                                                    Share <br>
                                                                    events
                                                                </div>
                                                                <p>
                                                                    Get your events onto your users' calendars.
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="/solutions/collect-rsvp-events" title="Collect RSVPs" class="link">
                                                            <div class="item item-red">
                                                                <div class="crc crc-48">
                                                                    <i class="icon-RSVP"></i>
                                                                </div>
                                                                <div class="title">
                                                                    Collect <br>
                                                                    RSVPs
                                                                </div>
                                                                <p>
                                                                    Collect information from your attendees when they register for your events.
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="/solutions/subscription-calendars" title="Subscription calendars" class="link">
                                                            <div class="item item-yellow">
                                                                <div class="crc crc-48">
                                                                    <i class="icon-subscription"></i>
                                                                </div>
                                                                <div class="title">
                                                                    Subscription <br>
                                                                    calendar
                                                                </div>
                                                                <p>
                                                                    Share multiple events at once with a calendar your users can subscribe to.
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="/solutions/embeddable-calendar" title="Embeddable calendar" class="link">
                                                            <div class="item item-green">
                                                                <div class="crc crc-48">
                                                                    <i class="icon-embedable_new"></i>
                                                                </div>
                                                                <div class="title">
                                                                    Embeddable <br>
                                                                    calendar
                                                                </div>
                                                                <p>
                                                                    Embed a calendar on your website to display and share your events.
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <a href="/solutions/automated-events" title="Automated events" class="link">
                                                            <div class="item item-purple">
                                                                <div class="crc crc-48">
                                                                    <i class="icon-automation_new"></i>
                                                                </div>
                                                                <div class="title">
                                                                    Automated <br>
                                                                    events
                                                                </div>
                                                                <p>
                                                                    Share high volumes of events that can be dynamically updated.
                                                                </p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ft">
                                                    <div class="pf">
                                                        <div class="pfi">
                                                            <div class="flex">
                                                                <ul>
                                                                    <li><a href="/c/documentation" title="Documentation"><i class="icon-document-2-2"></i>Documentation</a></li>
                                                                    <li><a href="/integrations" title="Integrations"><i class="icon-infinite-1"></i>Integrations</a></li>
                                                                    <li><a href="/c/about/updates" title="Updates"><i class="icon-Updates"></i>Updates</a></li>
                                                                </ul>
                                                                <div class="right">
                                                                    <a href="/solutions/analytics" title="Analytics" class="btn btn-6-8"><i class="icon-analytics"></i>Analytics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/c/plans-and-pricing" title="Plans and pricing">Pricing</a></li>
                                <li><a href="/c/help" title="Help center">Help Center</a></li>
                                <li class="blk"><a href="/c/documentation" title="Documentation for developers">FOR DEVS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">

                                                    <div class="signinup">
                                <a href="https://app.addevent.com" title="Sign In" class="signin">Sign In</a>
                                <span class="or">or</span>
                                <a href="https://app.addevent.com/signup" title="Sign Up" class="signup">Sign Up</a>
                            </div>
                        
                        <div class="menu-m">
                            <div class="menu-m-btn">
                                <i class="icon-menu"></i>
                            </div>
                            <div class="drop">
                                <div class="close">
                                    <i class="icon-close"></i>
                                </div>
                                <div class="main">
                                    <div class="title solexp">Solutions</div>
                                    <ul class="lst">
                                        <li><a href="/solutions/share-events" title="Share events"><i class="icon-share-event"></i>Share events</a></li>
                                        <li><a href="/solutions/collect-rsvp-events" title="Collect RSVPs"><i class="icon-RSVP"></i>Collect RSVPs</a></li>
                                        <li><a href="/solutions/subscription-calendars" title="Subscription calendars"><i class="icon-subscription"></i>Subscription calendar</a></li>
                                        <li><a href="/solutions/embeddable-calendar" title="Embeddable calendar"><i class="icon-embedable_new"></i>Embeddable calendar</a></li>
                                        <li><a href="/solutions/automated-events" title="Automated events"><i class="icon-automation_new"></i>Automated events</a></li>
                                    </ul>
                                    <ul class="lst">
                                        <li><a href="/solutions/analytics" title="Analytics"><i class="icon-analytics"></i>Analytics</a></li>
                                        <li><a href="/integrations" title="Integrations"><i class="icon-Updates"></i>Integrations</a></li>
                                        <li><a href="/c/about/updates" title="Updates"><i class="icon-infinite-1"></i>Updates</a></li>
                                        <li><a href="/c/documentation" title="Documentation"><i class="icon-document-2-2"></i>Documentation</a></li>
                                    </ul>
                                    <ul class="lst lst-rest">
                                        <li><a href="/c/plans-and-pricing" title="Pricing">Pricing</a></li>
                                        <li><a href="/c/help" title="Help Center">Help Center</a></li>
                                        <li class="blk"><a href="/c/documentation" title="Documentation for developers">FOR DEVS</a></li>
                                    </ul>
                                </div>

                                                                    <div class="ft">
                                        <a href="/signin" title="Go to app" class="btn btn-br">Go to app</a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="bnr -homepage">
    <img id="homepage-shape-grey-mobile" src="https://cdn.addevent.com/web/images/decorators/homepage/shape-grey-mobile.svg" alt="">
    <div class="bnr-cnt">
        <div class="s1 hp">
            <p class="title -big">
                Calendar and <br>
                event tools.
            </p>
            <div class="subtitle">
                <p>
                    We make it easy to share your events
                    and calendars using our amazing
                </p>
                <h1>add to calendar</h1>
                <p>
                    buttons, beautiful embeddable widgets,
                    RSVP, and subscriber tools.
                </p>
            </div>
            <div class="btn-plc -desktop">
                <a class="btn btn-blue btn-20-40 btn-arr-right btn-fs-bg" href="/signup">Create your event</a>
                <a href="https://www.youtube.com/embed/8McmZdkr_SI" title="See how it works" class="btn btn-br btn-20-40 btn-arr-play btn-fs-bg -openModal" rel="nofollow">See how it works</a>
            </div>
            <div class="btn-plc -mobile">
                <a class="btn btn-blue btn-20-40 mobile-12-33 btn-fs-bg" href="/signup">Create event</a>
                <a href="https://www.youtube.com/embed/8McmZdkr_SI" title="Learn how" class="btn btn-br btn-20-40 mobile-12-26 btn-arr-play btn-fs-bg -openModal" rel="nofollow">Learn how</a>
            </div>
            <div class="coco">
                <p>
                    AddEvent is the number one <strong class="miu">"add to calendar"</strong> service on the internet,
                    trusted by over <span class="sp1"><span id="coco-count" data-start="213616" data-end="214117" data-current="213658">213,658</span> companies</span>
                    of all sizes and industries.
                </p>
            </div>
        </div>

        <div class="s2 hidden-on-mobile s2-564" id="slidesetma">

            <div id="slideset">
                <div class="i1 isl" title="Embeddable Calendar"></div>
                <div class="i2 isl" title="Event landing page and Add to Calendar button"></div>
                <div class="i3 isl" title="Add to calendar links in emails"></div>
                <div class="i4 isl" title="Embeddable events list"></div>
                <div class="i5 isl" title="Event with RSVP functionality"></div>
            </div>

            <!-- Tooltip -->
            <div id="ttipctn"><span class="txi"><i class="material-icons"></i></span><span class="txil">Event landing page and Add to Calendar button</span></div>

            <!-- References -->
            <div class="lgscnt">
                <img src="https://cdn.addevent.com/web/images/deco-frt-t3.webp" alt="References">
            </div>

        </div>

    </div>
</div>

<div class="trs">
    <div class="trs-cnt smallx xp">
        <img id="homepage-half-circle-green" src="https://cdn.addevent.com/web/images/decorators/homepage/half-circle-green.svg" alt="">
        <img id="homepage-shape-grey-desktop" src="https://cdn.addevent.com/web/images/decorators/homepage/shape-grey-desktop.svg" alt="">

        <div class="list">
            <p class="list-item">Increase attendance rates</p>
            <p class="list-item -last-on-mobile">Drive customer engagement</p>
            <p class="list-item">Build brand awareness</p>
        </div>
    </div>
</div>

<div class="engage">
    <div class="engage-cnt">
        <div class="hdr">How would you like to engage with your customers?</div>
        <div class="color-grid">
            <div class="item item-bdr item-blue active">
                <div class="item-cover">
                    <img src="https://cdn.addevent.com/web/images/item-arrow/item-blue-arrow.svg" class="arrow" alt="">
                </div>
                <div class="item-ol"></div>
                <div class="crc crc-48">
                    <i class="icon-share-event"></i>
                </div>
                <div class="title">
                    Share <br>
                    events
                </div>
                <p>
                    Get your events onto your users' calendars.
                </p>
                <button class="lrn lrn-na lrn-nh lrn-fs-13">
                    Sharing options
                </button>
            </div>
            <div class="item item-bdr item-red">
                <div class="item-cover">
                    <img src="https://cdn.addevent.com/web/images/item-arrow/item-red-arrow.svg" class="arrow" alt="">
                </div>
                <div class="item-ol"></div>
                <div class="crc crc-48">
                    <i class="icon-RSVP"></i>
                </div>
                <div class="title">
                    Collect <br>
                    RSVPs
                </div>
                <p>
                    Collect information from your attendees when they register for your events.
                </p>
                <button class="lrn lrn-na lrn-nh lrn-fs-13">
                    Sharing options
                </button>
            </div>
            <div class="item item-bdr item-yellow">
                <div class="item-cover">
                    <img src="https://cdn.addevent.com/web/images/item-arrow/item-yellow-arrow.svg" class="arrow" alt="">
                </div>
                <div class="item-ol"></div>
                <div class="crc crc-48">
                    <i class="icon-subscription"></i>
                </div>
                <div class="title">
                    Subscription <br>
                    calendar
                </div>
                <p>
                    Share multiple events at once with a calendar your users can subscribe to.
                </p>
                <button class="lrn lrn-na lrn-nh lrn-fs-13">
                    Sharing options
                </button>
            </div>
            <div class="item item-bdr item-green">
                <div class="item-cover">
                    <img src="https://cdn.addevent.com/web/images/item-arrow/item-green-arrow.svg" class="arrow" alt="">
                </div>
                <div class="item-ol"></div>
                <div class="crc crc-48">
                    <i class="icon-embedable_new"></i>
                </div>
                <div class="title">
                    Embeddable <br>
                    calendar
                </div>
                <p>
                    Embed a calendar on your website to display and share your events.
                </p>
                <button class="lrn lrn-na lrn-nh lrn-fs-13">
                    Sharing options
                </button>
            </div>
            <div class="item item-bdr item-purple">
                <div class="item-cover">
                    <img src="https://cdn.addevent.com/web/images/item-arrow/item-purple-arrow.svg" class="arrow" alt="">
                </div>
                <div class="item-ol"></div>
                <div class="crc crc-48">
                    <i class="icon-automation_new"></i>
                </div>
                <div class="title">
                    Automated <br>
                    events
                </div>
                <p>
                    Share high volumes of events that can be dynamically updated.
                </p>
                <button class="lrn lrn-na lrn-nh lrn-fs-13">
                    Sharing options
                </button>
            </div>
        </div>
    </div>
    <div class="ftrs" style="height: 324px;">
        <div class="ftrs-cnt">
            <div class="cards">
                <ol class="lst lst-blue active">
                    <li class="active">
                        <div class="text">
                            Add to calendar buttons
                            <span>FOR WEBSITES</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Add to calendar links
                            <span>FOR EMAILS</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Event landing pages
                            <span>FOR EVERYWHERE</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Embeddable events
                            <span>FOR WEBSITES</span>
                        </div>
                    </li>
                </ol>
                <ol class="lst lst-red">
                    <li class="active">
                        <div class="text">
                            RSVP buttons
                            <span>FOR WEBSITES</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            RSVP links
                            <span>FOR EMAILS</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            RSVP landing pages
                            <span>FOR EVERYWHERE</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Embeddable RSVP forms
                            <span>FOR WEBSITES</span>
                        </div>
                    </li>
                </ol>
                <ol class="lst lst-yellow">
                    <li class="active">
                        <div class="text">
                            Add to calendar buttons
                            <span>FOR WEBSITES</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Add to calendar links
                            <span>FOR EMAILS</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Calendar landing pages
                            <span>FOR EVERYWHERE</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Embeddable events list
                            <span>FOR WEBSITES</span>
                        </div>
                    </li>
                </ol>
                <ol class="lst lst-green"></ol>
                <ol class="lst lst-purple">
                    <li class="active">
                        <div class="text">
                            Add to Calendar buttons
                            <span>FOR WEBSITES</span>
                        </div>
                    </li>
                    <li>
                        <div class="text">
                            Add to Calendar links
                            <span>FOR EMAILS</span>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="content">
                <ul class="lst lst-blue active" style="height: 0px;">
                    <li class="slide active">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    The most used and trusted "add to calendar" button on the internet since 2012.
                                </div>
                                <ul>
                                    <li>Add a beautiful <strong class="miut">add to calendar</strong> button to your website</li>
                                    <li>Give your users a simple way to save your event to their calendars</li>
                                    <li>Increase attendance and make your event a success.</li>
                                </ul>
                                <a href="/solutions/share-events" title="Share events" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">

                                <div class="dem-fra-t2">
                                    <div class="topi"></div>
                                    <div class="midi">
                                        <p>Your website</p>
                                        <div class="fx">
                                            <a title="" class="addeventatc" data-id="vA8984410" href="https://www.addevent.com/event/vA8984410" target="_blank" rel="nofollow" data-intel="false" id="addeventatc1" aria-haspopup="true" aria-expanded="false" tabindex="0" translate="no" data-loaded="true" style="visibility: visible;">Add to Calendar<span class="addeventatc_icon atc_node notranslate"></span><span class="addeventatc_icon atc_node notranslate"></span></a>
                                        </div>
                                        <div class="tryit"></div>
                                    </div>
                                    <div class="boti"></div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Use <strong class="miut">add to calendar links</strong> in your email campaigns to increase conversions.
                                </div>
                                <ul>
                                    <li>
                                        Easily copy and paste beautiful <strong class="miut">add to calendar links</strong> into your emails.
                                    </li>
                                    <li>
                                        Make it effortless for your recipients to save the event to their calendars
                                    </li>
                                    <li>
                                        Boost conversions and make sure everyone shows up.
                                    </li>
                                </ul>
                                <a href="/solutions/share-events" title="Share events" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/share-events-2.svg" alt="">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Send your users to a brilliant landing page to view and engage with your event.
                                </div>
                                <ul>
                                    <li>
                                        AddEvent automatically creates and hosts a customizable landing page for each of your events.
                                    </li>
                                    <li>
                                        Easily share your landing page link on social media to send your followers
                                        to a beautiful page where they can view
                                        your event details and save your event to their calendars.
                                    </li>
                                </ul>
                                <a href="/solutions/share-events" title="Share events" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/share-events-3.svg" alt="">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Promote your event right on your website.
                                </div>
                                <ul>
                                    <li>
                                        Add your event to your website in seconds. No coding experience required.
                                    </li>
                                    <li>
                                        Increase attendance by making it effortless for your customers to save your event to their calendars.
                                    </li>
                                </ul>
                                <a href="/solutions/share-events" title="Share events" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/share-events-4.svg" alt="">
                                </picture>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="lst lst-red" style="height: 0px;">
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Collect RSVPs for your event so you know who is going to attend.
                                </div>
                                <ul>
                                    <li>
                                        Add an RSVP button to your website to send your users to a unique registration page for your event.
                                    </li>
                                    <li>
                                        You can choose what information you want to collect, and send reminder and follow up emails automatically to your attendees.
                                    </li>
                                </ul>
                                <a href="/solutions/collect-rsvp-events" title="Collect RSVPs for your event" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">

                                <div class="dem-fra-t2">
                                    <div class="topi"></div>
                                    <div class="midi">
                                        <p>Your website</p>
                                        <div class="fx">
                                            <a href="https://www.addevent.com/event/ty8688477" title="Demo: Event page" target="_blank"><img src="https://cdn.addevent.com/web/images/icon-emd-rsvp-t2.png" alt="" width="118" border="0" style="width:118px!important;"></a>
                                        </div>
                                    </div>
                                    <div class="boti"></div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Collect event registrations from your email newsletters and campaigns.
                                </div>
                                <ul>
                                    <li>
                                        Add an RSVP link to your emails to make it simple for your recipients to register for your event.
                                    </li>
                                    <li>
                                        Direct users to a unique event registration page where you can collect the information you need.
                                    </li>
                                    <li>
                                        Automatically send reminder and follow-up emails to your attendees that are fully customizable.
                                    </li>
                                </ul>
                                <a href="/solutions/collect-rsvp-events" title="Collect RSVPs for your event" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/collect-rsvps-2.svg" alt="Collect RSVPs">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Run your event registration through a customizable RSVP landing page.
                                </div>
                                <ul>
                                    <li>
                                        Share a unique link with your users to send them directly to your event registration page.
                                    </li>
                                    <li>
                                        Customize your RSVP form and send reminder and follow up emails for a flawless event experience.
                                    </li>
                                </ul>
                                <a href="/solutions/collect-rsvp-events" title="Collect RSVPs for your event" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/collect-rsvps-3.svg" alt="Collect RSVPs">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Now your users can register for your event without ever leaving your website!
                                </div>
                                <ul>
                                    <li>
                                        Our beautiful RSVP form is easy for your attendees to use and can be added to your website in seconds.
                                    </li>
                                    <li>
                                        Add additional questions to your RSVP form to collect the information you need, and send reminder and follow-up emails automatically.
                                    </li>
                                </ul>
                                <a href="/solutions/collect-rsvp-events" title="Collect RSVPs for your event" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/collect-rsvps-4.svg" alt="Collect RSVPs">
                                </picture>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="lst lst-yellow" style="height: 0px;">
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Get all of your events onto your users' calendars.
                                </div>
                                <ul>
                                    <li>Create a calendar in AddEvent and add all your events.</li>
                                    <li>Add an "add to calendar" button to your website that your users can click to subscribe to your AddEvent calendar.</li>
                                    <li>When a user subscribes, all of the events on your subscription calendar will be added and synced to their own calendar.</li>
                                </ul>
                                <a href="/solutions/subscription-calendars" title="Subscription calendars" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">

                                <div class="dem-fra-t2">
                                    <div class="topi"></div>
                                    <div class="midi">
                                        <p>Your website</p>
                                        <div class="fx">
                                            <a title="" class="addeventstc" data-id="ih348885" href="https://www.addevent.com/calendar/ih348885" target="_blank" rel="nofollow" data-intel="false" id="addeventstc1" aria-haspopup="true" aria-expanded="false" tabindex="0" translate="no" data-loaded="true" style="visibility: visible;">Add to Calendar<span class="addeventstc_icon stc_node"></span></a>
                                        </div>
                                    </div>
                                    <div class="boti"></div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Share your subscription calendar in an email.
                                </div>
                                <ul>
                                    <li>
                                        Simply copy and paste <strong class="miut">add to calendar links</strong> for your subscription calendar into your email.
                                    </li>
                                    <li>
                                        Users can click the links to subscribe to your calendar, which saves all of your events to their own calendar.
                                    </li>
                                </ul>
                                <a href="/solutions/subscription-calendars" title="Subscription calendars" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/subscription-calendars-2.svg" alt="Subscription calendars">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Send your users to a beautiful landing page to view and engage with your calendar.
                                </div>
                                <ul>
                                    <li>
                                        AddEvent automatically creates and hosts a customizable landing page for each of your subscription calendars.
                                    </li>
                                    <li>
                                        Share your landing page link with your users to send them to a beautiful page where they can view your upcoming events and subscribe to your calendar.
                                    </li>
                                    <li>
                                        Add a form to your landing page to collect information from your subscribers.
                                    </li>
                                </ul>
                                <a href="/solutions/subscription-calendars" title="Subscription calendars" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/subscription-calendars-3.png" alt="Subscription calendars">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Showcase your upcoming events on your website.
                                </div>
                                <ul>
                                    <li>
                                        Add a list of upcoming events to your website in seconds. No coding experience required.
                                    </li>
                                    <li>
                                        Give your users a way to explore your events and save them to their calendars.
                                    </li>
                                    <li>
                                        You can even add a countdown timer to build excitement and ensure no one misses out!
                                    </li>
                                </ul>
                                <a href="/solutions/subscription-calendars" title="Subscription calendars" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/subscription-calendars-4.svg" alt="Subscription calendars">
                                </picture>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="lst lst-green" style="height: 0px;">
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Embed a beautiful, fully customizable calendar on your website so your users can view and engage with all your events.
                                </div>
                                <ul>
                                    <li>
                                        Add a web and mobile-optimized calendar to your website in seconds. No coding experience required.
                                    </li>
                                    <li>
                                        Give your users an easy way to subscribe to your calendar so they can stay up to date with all your events.
                                    </li>
                                </ul>
                                <a href="/solutions/embeddable-calendar" title="Embeddable calendar" class="btn btn-blue btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/embeddable-calendar-1.svg" alt="Embeddable calendar">
                                </picture>
                                <div class="imglbl">
                                    <p>"Hands down the best calendar available for websites."</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="lst lst-purple" style="height: 0px;">
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    The same "add to calendar" button you know and love, now automated.
                                </div>
                                <ul>
                                    <li>Add an "add to calendar" button to your website to give your users a simple way to save events to their calendars</li>
                                    <li>Dynamically update button parameters to change the event that is added to a user's calendar.</li>
                                    <li>Perfect for booking confirmation pages or wherever you have many unique events that you need to update for individual users.</li>
                                </ul>
                                <a href="/solutions/automated-events" title="Automated 'Add to Calendar' functionality" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/automated-events-1.svg" alt="Automated events">
                                </picture>
                            </div>
                        </div>
                    </li>
                    <li class="slide">
                        <div class="box">
                            <div class="left">
                                <div class="title">
                                    Take your email campaigns to the next level with automated events that update for each user.
                                </div>
                                <ul>
                                    <li>
                                        Embed automated "add to calendar" links into your email campaigns to give recipients an easy way to save events to their calendars.
                                    </li>
                                    <li>
                                        Dynamically update link parameters to customize the event for each unique recipient.
                                    </li>
                                </ul>
                                <p class="text">
                                    Works great with all email campaign tools like
                                    <strong>Mailchimp</strong>, <strong>Marketo</strong>, <strong>Salesforce</strong>, <strong>Constant Contact</strong>, <strong>Hubspot</strong>, and more! 🥳
                                </p>
                                <a href="/solutions/automated-events" title="Automated 'Add to Calendar' functionality" class="btn btn-blue btn-arr-right btn-12-24">Learn More</a>
                            </div>
                            <div class="right">
                                <picture>
                                    <img src="https://cdn.addevent.com/web/images/engage/automated-events-2.svg" alt="Automated events">
                                </picture>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="engage-m">
    <div class="engage-m-cnt">
        <div class="hdr">How would you like to engage with your customers?</div>
        <div class="color-grid color-grid-vert">
            <div class="box">
                <div class="item item-blue">
                    <div class="crc crc-32">
                        <i class="icon-share-event"></i>
                    </div>
                    <div class="main">
                        <div class="main-top">
                            <div class="title">Share events</div>
                            <div class="arr">
                                <i class="icon-Chevron_Right"></i>
                            </div>
                        </div>
                        <p>
                            Get your events onto your users' calendars.
                        </p>
                    </div>
                </div>
                <div class="cards">
                    <ul class="lst lst-blue">
                        <li>
                            <div class="text">
                                Add to calendar buttons
                                <span>FOR WEBSITES</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Add to calendar links
                                <span>FOR EMAILS</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Event landing pages
                                <span>FOR EVERYWHERE</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Embeddable events
                                <span>FOR WEBSITES</span>
                            </div>
                        </li>
                    </ul>
                    <a href="/solutions/share-events" title="Share events" class="btn btn-blue btn-arr-right">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="item item-red">
                    <div class="crc crc-32">
                        <i class="icon-RSVP"></i>
                    </div>
                    <div class="main">
                        <div class="main-top">
                            <div class="title">Collect RSVPs</div>
                            <div class="arr">
                                <i class="icon-Chevron_Right"></i>
                            </div>
                        </div>
                        <p>
                            Collect information from your attendees when they register for your events.
                        </p>
                    </div>
                </div>
                <div class="cards">
                    <ul class="lst lst-red">
                        <li>
                            <div class="text">
                                RSVP buttons
                                <span>FOR WEBSITES</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                RSVP links
                                <span>FOR EMAILS</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                RSVP landing pages
                                <span>FOR EVERYWHERE</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Embeddable RSVP forms
                                <span>FOR WEBSITES</span>
                            </div>
                        </li>
                    </ul>
                    <a href="/solutions/collect-rsvp-events" title="Collect RSVPs for your event" class="btn btn-blue btn-arr-right">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="item item-yellow">
                    <div class="crc crc-32">
                        <i class="icon-subscription"></i>
                    </div>
                    <div class="main">
                        <div class="main-top">
                            <div class="title">Subscription calendar</div>
                            <div class="arr">
                                <i class="icon-Chevron_Right"></i>
                            </div>
                        </div>
                        <p>
                            Share multiple events at once with a calendar your users can subscribe to.
                        </p>
                    </div>
                </div>
                <div class="cards">
                    <ul class="lst lst-yellow">
                        <li>
                            <div class="text">
                                Add to calendar buttons
                                <span>FOR WEBSITES</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Add to calendar links
                                <span>FOR EMAILS</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Calendar landing pages
                                <span>FOR EVERYWHERE</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Embeddable events list
                                <span>FOR WEBSITES</span>
                            </div>
                        </li>
                    </ul>
                    <a href="/solutions/subscription-calendars" title="Subscription calendars" class="btn btn-blue btn-arr-right">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="item item-green">
                    <div class="crc crc-32">
                        <i class="icon-embedable_new"></i>
                    </div>
                    <div class="main">
                        <div class="main-top">
                            <div class="title">Embeddable calendar</div>
                            <div class="arr">
                                <i class="icon-Chevron_Right"></i>
                            </div>
                        </div>
                        <p>
                            Embed a calendar on your website to display and share your events.
                        </p>
                    </div>
                </div>
                <div class="cards">
                    <img src="https://cdn.addevent.com/web/images/embeddableCalendar.svg" alt="Embeddable calendar">
                    <a href="/solutions/embeddable-calendar" title="Embeddable calendar" class="btn btn-blue btn-arr-right">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="box">
                <div class="item item-purple">
                    <div class="crc crc-32">
                        <i class="icon-automation_new"></i>
                    </div>
                    <div class="main">
                        <div class="main-top">
                            <div class="title">Automated events</div>
                            <div class="arr">
                                <i class="icon-Chevron_Right"></i>
                            </div>
                        </div>
                        <p>
                            Share high volumes of events that can be dynamically updated.
                        </p>
                    </div>
                </div>
                <div class="cards">
                    <ul class="lst lst-purple">
                        <li class="active">
                            <div class="text">
                                Add to calendar buttons
                                <span>FOR WEBSITES</span>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                Add to calendar links
                                <span>FOR EMAILS</span>
                            </div>
                        </li>
                    </ul>
                    <a href="/solutions/automated-events" title="Automated 'Add to Calendar' functionality" class="btn btn-blue btn-arr-right">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="use-case">
    <div class="use-case-cnt">
        <img id="homepage-half-circle-purple" src="https://cdn.addevent.com/web/images/decorators/homepage/half-circle-purple.svg" alt="">
        <h2 class="title">Use cases</h2>
        <div class="nav -desktop">
            <div class="item selected" data-rel="marketing">Marketing</div>
            <div class="item" data-rel="small-business">Small business</div>
            <div class="item" data-rel="project-managers">Project managers</div>
            <div class="item" data-rel="communication">PR / Communication</div>
            <div class="item" data-rel="developers">Developers</div>
        </div>
        <div class="nav -mobile">
            <div class="item selected" data-rel="marketing">Marketing</div>
            <div class="item" data-rel="small-business">Small business</div>
            <div class="item" data-rel="developers">Developers</div>
            <div class="item" data-rel="project-managers">Project managers</div>
            <div class="item" data-rel="communication">PR / Communication</div>
        </div>
        <div class="box">
            <div class="inn" data-rel="marketing" style="height: 869.469px;">
                <div class="s1">
                    <picture>
                        <img src="https://cdn.addevent.com/web/images/use-case-1.webp" alt="Use case image">
                    </picture>
                </div>
                <div class="s2">
                    <h4 class="inn-title">
                        Urban Marketing uses AddEvent as a platform for all their customer events - their analytics show that getting events onto customers’ calendars is a simple and effective way of boosting attendance rates
                        and increasing conversions.
                    </h4>
                    <ul>
                        <li>They use <a href="/solutions/subscription-calendars" title="Subscription calendars">subscription calendars</a> to drive engagement with their customers by adding upcoming events automatically to their calendars.</li>
                        <li><a href="/solutions/collect-rsvp-events" title="Collect RSVPs for your event">Collecting RSVPs</a> for their webinars and other online events provides leads for future marketing campaigns.</li>
                        <li>AddEvent's <a href="/integrations" title="Integrations">Zapier integration</a> allows them to sync their event and customer data between AddEvent and Salesforce.</li>
                    </ul>
                </div>
            </div>
            <div class="inn hidden" data-rel="small-business" style="height: 869.469px;">
                <div class="s1">
                    <picture>
                        <img src="https://cdn.addevent.com/web/images/use-case-2.webp" alt="Use case image">
                    </picture>
                </div>
                <div class="s2">
                    <h4 class="inn-title">Bella boutique depends on AddEvent to build a loyal customer base by using different tools to help build relationships with their customers.</h4>
                    <ul>
                        <li>They use AddEvent’s <a href="/solutions/embeddable-calendar" title="Embeddable calendar">embeddable calendar</a> on their website to provide an overview of their upcoming events.</li>
                        <li><a href="/solutions/subscription-calendars" title="Subscription calendars">Subscription calendars</a> allow them to send special offers and sales events directly to their customers’ calendars.</li>
                        <li>AddEvent’s tools allow them to provide an excellent and easy-to-use event experience for their customers.</li>
                    </ul>
                </div>
            </div>
            <div class="inn hidden" data-rel="project-managers" style="height: 869.469px;">
                <div class="s1">
                    <picture>
                        <img src="https://cdn.addevent.com/web/images/use-case-3.webp" alt="Use case image">
                    </picture>
                </div>
                <div class="s2">
                    <h4 class="inn-title">
                        Michelle uses AddEvent in lots of different projects - she loves how easy the tools are to integrate, which saves her team time when implementing calendar and events functionality.
                    </h4>
                    <ul>
                        <li>Her team uses <a href="/solutions/automated-events" title="Automated 'Add to Calendar' functionality">automated events</a> on confirmation pages and in confirmation emails to get unique events onto users' calendars.</li>
                        <li><a href="/solutions/subscription-calendars" title="Subscription calendars">Subscription calendars</a> are perfect for when she needs to get multiple events added to and synced with stakeholders' calendars.</li>
                        <li>Anytime she needs to display events on a website or landing page she uses an <a href="/solutions/embeddable-calendar" title="Embeddable calendar">embeddable calendar</a> - it's endlessly customizable and so easy to integrate.</li>
                    </ul>
                </div>
            </div>
            <div class="inn hidden" data-rel="communication" style="height: 869.469px;">
                <div class="s1">
                    <picture>
                        <img src="https://cdn.addevent.com/web/images/use-case-4.webp" alt="Use case image">
                    </picture>
                </div>
                <div class="s2">
                    <h4 class="inn-title">NYC Media Group uses AddEvent to help spread the word about their upcoming events and raise awareness about their activities and goals.</h4>
                    <ul>
                        <li>They <a href="/solutions/share-events" title="Share events">share events</a> on their website, in their monthly newsletter, and on social media - AddEvent helps improve attendance by getting the event onto their followers calendars.</li>
                        <li><a href="/solutions/collect-rsvp-events" title="Collect RSVPs for your event">Collecting RSVPs</a> for their in-person events lets them find out who is coming and plan for how many attendees to expect.</li>
                        <li>They love that they can customize the event landing pages to match their branding and include more information about their organization.</li>
                    </ul>
                </div>
            </div>
            <div class="inn hidden" data-rel="developers" style="height: 869.469px;">
                <div class="s1">
                    <picture>
                        <img src="https://cdn.addevent.com/web/images/use-case-5.webp" alt="Use case image">
                    </picture>
                </div>
                <div class="s2">
                    <h4 class="inn-title">
                        AddEvent is a tool built by developers, for developers.
                        Danny loves that he doesn't have to worry about updating his website's calendar
                        functionality every time a calendar platform pushes an update - he knows
                        AddEvent has it covered and the tools will just work.
                    </h4>
                    <ul>
                        <li>His team used an <a href="/c/documentation/add-to-calendar-button" title="Add to calendar button">automated "add to calendar" button</a> when building their appointment confirmation page and uses <a href="/documentation/automated-add-to-calendar-links" title="Automated 'Add to Calendar' functionality">automated "add to calendar" links</a> in their email newsletters.</li>
                        <li>They’ve built multiple integrations using the <a href="/c/documentation/events-api" title="Events API">API</a> to create and update events and calendars, as well as manage event attendee and calendar subscriber information.</li>
                        <li>They also appreciate the great <a href="/c/documentation" title="Documentation">documentation</a> and super responsive support team.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="connect">
    <div class="connect-cnt">
        <div class="left">
            <h2 class="title">Use in your existing workflow</h2>
            <p class="subtitle">
                Connect AddEvent to other services so all your event, calendar,
                and user data gets where it needs to be.
            </p>
            <div class="item">
                <img src="https://cdn.addevent.com/web/images/red-icon.svg" alt="Integration">
                <p class="text">The AddEvent + Zapier integration allows you to connect with 2,000+ other apps and services</p>
            </div>
            <div class="item">
                <img src="https://cdn.addevent.com/web/images/code-icon.svg" alt="">
                <p class="text">
                    Need a custom integration? Use our <a href="/c/documentation" title="Documentation">powerful API</a> to connect to whichever service you need.
                </p>
            </div>
            <a href="/integrations" title="See all integrations" class="btn btn-blue btn-arr-right btn-fs-bg btn-17-30">See all integrations</a>
            <a href="/integrations" title="See all integrations" class="btn btn-blue btn-arr-right btn-fs-bg -mobile">All integrations</a>
        </div>
        <div class="right">
            <div class="item">
                <div class="item-top">
                    <img src="https://cdn.addevent.com/web/images/code-icon-2.svg" alt="Integration">
                    <h4 class="title">Website builders</h4>
                </div>
                <p class="text">
                    Integrate our tools into your website, whether you use a website builder or it's custom built.
                    Works perfectly with <strong>Wix</strong>, <strong>Weebly</strong>, <strong>Squarespace</strong>, <strong>Wordpress</strong>, and more.
                </p>
                <a href="/articles/embeddable-calendar" title="Find out more" class="btn btn-arr-right btn-ls-bg">Find out more</a>
                <div class="logos-place">
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-wordpress.svg" alt="WordPress">
                    </div>
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-squarespace.svg" alt="Squarespace">
                    </div>
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-wix.svg" alt="Wix">
                    </div>
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-weebly.svg" alt="Weebly">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-top">
                    <img src="https://cdn.addevent.com/web/images/mail-icon.svg" alt="Integration">
                    <h4 class="title">Email services</h4>
                </div>
                <p class="text">
                    Integrate our tools into your email campaign and CRM platforms like
                    <strong>Mailchimp</strong>, <strong>Marketo</strong>, <strong>Salesforce</strong>, <strong>Hubspot</strong>, and more
                </p>
                <a href="/articles/add-to-calendar-links" title="Find out more" class="btn btn-arr-right btn-ls-bg">Find out more</a>
                <div class="logos-place">
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-mailchimp.svg" alt="MailChimp">
                    </div>
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-salesforce.svg" alt="Salesforce">
                    </div>
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-marketo.svg" alt="Marketo">
                    </div>
                    <div class="logo">
                        <img src="https://cdn.addevent.com/web/images/logo-hubspot.svg" alt="Hubspot">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="trs bg-t1 pd-bg">
    <div class="trs-cnt">
        <img id="homepage-half-circle-grey-with-ring" src="https://cdn.addevent.com/web/images/decorators/homepage/half-circle-grey-with-ring.svg" alt="">
        <img id="homepage-half-circle-grey" src="https://cdn.addevent.com/web/images/decorators/homepage/half-circle-grey.svg" alt="">
        <h2 class="title">You’re in good company.</h2>
        <p class="text fs-bg pd">
            Companies around the world trust AddEvent <br>
            with their events and calendars every day.
        </p>

        <div class="frtrefslist">
            <div class="slrow">
                <div class="conts slick">
                    <section class="logo-carousel slider slick-initialized slick-slider" data-arrows="false"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 18815px; transform: translate3d(-8215px, 0px, 0px); transition: transform 500ms ease 0s;"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 ex4 rf32" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 ex2 rf18" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 rf25" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 rf33" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 rf5" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 ex3 rf1" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf30" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf29" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf27" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf28" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf8" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf38" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf37" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="12" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf22" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="13" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf13" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="14" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf34" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="15" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf19" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="16" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf20" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="17" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf6" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="18" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf17" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="19" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf10" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="20" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf3" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="21" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf21" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="22" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf26" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="23" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf16" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="24" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf24" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="25" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf11" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="26" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf9" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="27" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf35" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="28" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf14" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="29" aria-hidden="true" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf15" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="30" aria-hidden="false" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 ex4 rf12" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="31" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex4 rf23" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="32" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex4 rf2" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="33" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex4 rf31" style="visibility: visible;"></div></div></div></div><div class="slick-slide" data-slick-index="34" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 ex4 rf32" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="35" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 ex2 rf18" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="36" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 rf25" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="37" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 rf33" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="38" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 rf5" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="39" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex1 ex3 rf1" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="40" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf30" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="41" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf29" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="42" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf27" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="43" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf28" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="44" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf8" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="45" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf38" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="46" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf37" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="47" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf22" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="48" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf13" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="49" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf34" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="50" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf19" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="51" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf20" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="52" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf6" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="53" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf17" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="54" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf10" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="55" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf3" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="56" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf21" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="57" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf26" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="58" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf16" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="59" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf24" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="60" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 rf11" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="61" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf9" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="62" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf35" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="63" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl rf14" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="64" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 rf15" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="65" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex2 ex4 rf12" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="66" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex4 rf23" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="67" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex4 rf2" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="68" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex4 rf31" style="visibility: visible;"></div></div></div></div><div class="slick-slide slick-cloned" data-slick-index="69" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="slide" style="width: 100%; display: inline-block;"><div class="cl ex3 ex4 rf32" style="visibility: visible;"></div></div></div></div></div></div></section>
                </div>
            </div>
        </div>

        <div class="opinion slick slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2915px; transform: translate3d(-265px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0850236.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Ulan <span class="loc">Philippines</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/60adf268f9f4870a94ad3d12" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            Great platform. Tech support team is also amazing. 10/10. Got back to me very promptly with a comprehensive solution and video tutorial.
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0362837.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Brian Swichkow <span class="loc">United States</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/60bebe07f9f4870b701a2a98" title="" target="_blank" rel="nofollow" tabindex="0"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            The product is fantastically built, reliable, and robust with the support team always being an email away. They’re constantly adding new features as a result of feedback…
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0362938.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>JJ Hepburn <span class="loc">Australia</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/615545ab215cfcced273f948" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            AddEvent perfectly solves our problem...more people have our events on their calendars, more people turn up and less people comment on having missed events.
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0781194.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Sarah Aubrey <span class="loc">United States</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/609a8a5ff9f4870a949ee6f2" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            Very helpful team focused on the customer and creating a valuable technical solution. They care about their work and making it function best for their clients. This is rare!
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0362939.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Pia Silva <span class="loc">United States</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/61a50e53bd63dda48268f7f9" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            Every time I need help with something the AddEvent team is quick and thorough about shooting me a video and walking me through to get what I need. Thanks guys!
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0850236.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Ulan <span class="loc">Philippines</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/60adf268f9f4870a94ad3d12" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            Great platform. Tech support team is also amazing. 10/10. Got back to me very promptly with a comprehensive solution and video tutorial.
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0362837.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Brian Swichkow <span class="loc">United States</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/60bebe07f9f4870b701a2a98" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            The product is fantastically built, reliable, and robust with the support team always being an email away. They’re constantly adding new features as a result of feedback…
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0362938.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>JJ Hepburn <span class="loc">Australia</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/615545ab215cfcced273f948" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            AddEvent perfectly solves our problem...more people have our events on their calendars, more people turn up and less people comment on having missed events.
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0781194.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Sarah Aubrey <span class="loc">United States</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/609a8a5ff9f4870a949ee6f2" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            Very helpful team focused on the customer and creating a valuable technical solution. They care about their work and making it function best for their clients. This is rare!
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0362939.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Pia Silva <span class="loc">United States</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/61a50e53bd63dda48268f7f9" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            Every time I need help with something the AddEvent team is quick and thorough about shooting me a video and walking me through to get what I need. Thanks guys!
                        </p>
                    </div>
                </div>
            </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 265px;"><div><div class="box" style="width: 100%; display: inline-block;">
                <div class="pox">
                    <div class="hg">
                        <div class="img">
                            <img src="https://cdn.addevent.com/web/images/rev_0850236.webp" width="50" height="50" alt="Review author">
                        </div>
                        <div class="tx">
                            <div class="nam">
                                <p>Ulan <span class="loc">Philippines</span></p>
                            </div>
                            <div class="strs">
                                <a href="https://www.trustpilot.com/reviews/60adf268f9f4870a94ad3d12" title="" target="_blank" rel="nofollow" tabindex="-1"><img src="https://cdn.addevent.com/web/images/tp-stars-t1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="tix">
                        <p class="ds">
                            Great platform. Tech support team is also amazing. 10/10. Got back to me very promptly with a comprehensive solution and video tutorial.
                        </p>
                    </div>
                </div>
            </div></div></div></div></div><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 5" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 5" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 5" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 5" tabindex="-1">4</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 5" tabindex="-1">5</button></li></ul></div>
    </div>
</div>


<div class="nws">
    <div class="nws-cnt">

        <h4 class="nws-t">Let's create events together <span class="emoji">😍</span></h4>
        <form class="nws-fr" action="https://app.addevent.com/signup" method="get">
            <input type="email" name="email" class="nws-inp" placeholder="Email address">
            <div class="validate-info">
                <img src="https://cdn.addevent.com/web/images/warning.svg">
                Please fill out this field
            </div>
            <button type="submit" class="btn btn-blue btn-20-40 btn-fs-bg">Sign up</button>
        </form>

    </div>
</div>

    <footer class="footer">
        <div class="ft-cnt">
            <div class="s1">
                <div class="k-main">
                    <a href="/" title="Home">
                        <img src="https://cdn.addevent.com/web/images/logo2.svg" alt="Home">
                    </a>
                    <h5>
                        Carefully crafted by your friends at
                        <br>
                        © 2023 AddEvent Inc
                    </h5>
                    <!--
                    <Header Country: >
<Server Country: >
                    -->
                    <div class="social">
                        <ul>
                            <li><a href="https://www.facebook.com/addeventinc/" title="Facebook" class="facebook" target="_blank"><span>Facebook</span></a></li>
                            <li><a href="https://twitter.com/AddEvent_Inc" title="Twitter" class="twitter" target="_blank"><span>Twitter</span></a></li>
                            <li><a href="https://www.linkedin.com/company/25076591" title="LinkedIn" class="linkedin" target="_blank"><span>LinkedIn</span></a></li>
                            <li><a href="https://www.instagram.com/addevent_inc" title="Instagram" class="instagram" target="_blank"><span>Instagram</span></a></li>
                            <li><a href="https://www.youtube.com/channel/UC0qbG6tqVzcOBIxPYl8fo4g" title="YouTube" class="youtube" target="_blank"><span>YouTube</span></a></li>
                            <li><a href="https://github.com/AddEventinc" title="Github" class="github" target="_blank"><span>Github</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="menu">
                    <div class="k1 k1-m3">
                        <p>Solutions</p>
                        <ul class="mnu-ft">
                            <li><a href="/solutions/share-events" title="Share events">Share events</a></li>
                            <li><a href="/solutions/collect-rsvp-events" title="Collect RSVPs">Collect RSVPs</a></li>
                            <li><a href="/solutions/subscription-calendars" title="Subscription calendars">Subscription calendars</a></li>
                            <li><a href="/solutions/embeddable-calendar" title="Embeddable calendars">Embeddable calendar</a></li>
                            <li><a href="/solutions/automated-events" title="Automated events">Automated events</a></li>
                            <li><a href="/solutions/analytics" title="Analytics">Analytics</a></li>
                        </ul>
                    </div>
                    <div class="k1 k1-m2">
                        <p>Resources</p>
                        <ul class="mnu-ft">
                            <li><a href="/c/help" title="Help Center">Help Center</a></li>
                            <li><a href="/c/documentation" title="Documentation">Documentation</a></li>
                            <li><a href="/articles" title="Articles">Articles</a></li>
                            <li><a href="/integrations" title="Integrations">Integrations</a></li>
                            <li><a href="/c/about/updates" title="Updates">Updates</a></li>
                            <li><a href="/c/contact" title="Contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="k1 k1-m1">
                        <p>Company</p>
                        <ul class="mnu-ft">
                            <li><a href="/c/about" title="About Us">About Us</a></li>
                            <li><a href="/c/about/jobs" title="Jobs">Jobs</a></li>
                            <li><a href="/c/plans-and-pricing" title="Plans and pricing">Pricing</a></li>
                            <li><a href="/c/legal/terms" title="Terms of Service">Terms of Service</a></li>
                            <li><a href="/c/legal/privacy" title="Privacy">Privacy</a></li>
                            <li><a href="/c/legal/security" title="Security">Security</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- User information for internal tracking -->
    <div id="account-guid" data-uid=""></div>

</div>
    </body>
</html>