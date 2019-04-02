@extends('part.master')


@section('title','Home')

@section('content')

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">



      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--start container-->
        <div class="container">

          <div id="mail-app" class="section">
            <div class="row">
              <div class="col s12">
                <nav class="red">
                  <div class="nav-wrapper">
                    <div class="left col s12 m5 l5">
                      <ul>
                        <li><a href="#!" class="email-menu"><i class="mdi-navigation-menu"></i></a>
                        </li>
                        <li><a href="#!" class="email-type">Primary</a>
                        </li>
                        <li class="right"><a href="#!"><i class="mdi-action-search"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="col s12 m7 l7 hide-on-med-and-down">
                      <ul class="right">
                        <li><a href="#!"><i class="mdi-content-archive"></i></a>
                        </li>
                        <li><a href="#!"><i class="mdi-action-delete"></i></a>
                        </li>
                        <li><a href="#!"><i class="mdi-content-mail"></i></a>
                        </li>
                        <li><a href="#!"><i class="mdi-navigation-more-vert"></i></a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </nav>
              </div>
              <div class="col s12">
                <div id="email-sidebar" class="col s2 m1 s1 card-panel">
                  <ul>
                    <li>
                      <img src="{!! asset('links/images/avatar.jpg') !!}" alt="" class="circle responsive-img valign profile-image">
                    </li>
                    <li>
                      <a href="#!"><i class="mdi-content-archive active"></i></a>
                    </li>
                    <li>
                      <a href="#!"><i class="mdi-social-group"></i></a>
                    </li>
                    <li>
                      <a href="#!"><i class="mdi-maps-local-offer"></i></a>
                    </li>
                    <li>
                      <a href="#!"><i class="mdi-alert-error"></i></a>
                    </li>
                  </ul>
                </div>
                <div id="email-list" class="col s10 m4 l4 card-panel z-depth-1">
                  <ul class="collection">
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-social-group icon blue-text"></i>
                      <span class="email-title">Social</span>
                      <p class="truncate grey-text ultra-small">You have Google+ request from john doe.</p>
                      <a href="#!" class="secondary-content"><span class="new badge blue">4</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-maps-local-offer icon green-text"></i>
                      <span class="email-title">Promotions</span>
                      <p class="truncate grey-text ultra-small">Amazone, Flipkart 50% off on summer sale.</p>
                      <a href="#!" class="secondary-content"><span class="new badge green">6</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="mdi-alert-error icon yellow-text text-darken-3"></i>
                      <span class="email-title">Updates</span>
                      <p class="truncate grey-text ultra-small">Google play application updates for your mobile.</p>
                      <a href="#!" class="secondary-content"><span class="new badge yellow darken-3">2</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <span class="circle red lighten-1">A</span>
                      <span class="email-title">Amazone.com</span>
                      <p class="truncate grey-text ultra-small">Summer sale is now going on.</p>
                      <a href="#!" class="secondary-content email-time"><span class="blue-text ultra-small">12:10 am</span></a>
                    </li>
                    <li class="collection-item avatar selected">
                      <img src="{!! asset('links/images/avatar.jpg') !!}" alt="" class="circle">
                      <span class="email-title">Andy Brown</span>
                      <p class="truncate grey-text ultra-small">Hay Joe, we have next project for this summer.</p>
                      <a href="#!" class="secondary-content email-time"><i class="mdi-editor-attach-file attach-file"></i> <span class="grey-text ultra-small">12:10 am</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <span class="circle grey darken-1">T</span>
                      <span class="email-title">Tuts+</span>
                      <p class="truncate grey-text ultra-small">Update your code skill, free tutorial for web development.</p>
                      <a href="#!" class="secondary-content email-time"><span class="blue-text ultra-small">2:05 am</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <span class="circle indigo darken-1">F</span>
                      <span class="email-title">Facebook.com</span>
                      <p class="truncate grey-text ultra-small">You have new friend request from emy nelson.</p>
                      <a href="#!" class="secondary-content email-time"><span class="blue-text ultra-small">1:15 pm</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <span class="circle light-blue">T</span>
                      <span class="email-title">Twitter</span>
                      <p class="truncate grey-text ultra-small">You have 5 new followers today, let's check it out.</p>
                      <a href="#!" class="secondary-content email-time"><span class="blue-text ultra-small">8:30 pm</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <span class="circle green accent-4">E</span>
                      <span class="email-title">Envato Studio</span>
                      <p class="truncate grey-text ultra-small">Envato Studio Provider News : Score the new stuff.</p>
                      <a href="#!" class="secondary-content email-time"><span class="blue-text ultra-small">5:18 am</span></a>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <span class="circle red">G</span>
                      <span class="email-title">Gmail</span>
                      <p class="truncate grey-text ultra-small">You have 5 new mail today.</p>
                      <a href="#!" class="secondary-content email-time"><span class="blue-text ultra-small">6:38 am</span></a>
                    </li>
                  </ul>
                </div>
                <div id="email-details" class="col s12 m7 l7 card-panel">
                  <p class="email-subject truncate">New app design for iPhone <span class="email-tag grey lighten-3">inbox</span> <span class="email-tag  light-blue lighten-4">projects</span> <i class="mdi-action-star-rate yellow-text text-darken-3 right"></i>
                  </p>
                  <hr class="grey-text text-lighten-2">
                  <div class="email-content-wrap">
                    <div class="row">
                      <div class="col s10 m10 l10">
                        <ul class="collection">
                          <li class="collection-item avatar">
                            <img src="{!! asset('links/images/avatar.jpg') !!}" alt="" class="circle">
                            <span class="email-title">Andy Brown</span>
                            <p class="truncate grey-text ultra-small">To me, John Doe</p>
                            <p class="grey-text ultra-small">Yesterday</p>
                          </li>
                        </ul>
                      </div>
                      <div class="col s2 m2 l2 email-actions">
                        <a href="#!"><span><i class="mdi-content-reply"></i></span></a>
                        <a href="#!"><span><i class="mdi-navigation-more-vert"></i></span></a>
                      </div>
                    </div>
                    <div class="email-content">
                      <p>Hi Mike,</p>
                      <p>We have new project requirements last night.</p>
                      <p>The standard font Material Design uses is Roboto. We have included the font files with our framework.</p>
                      <p>Cheers!
                        <br>Andy Brown</p>
                    </div>
                  </div>
                  <hr>
                  <div class="email-content-wrap">
                    <div class="row">
                      <div class="col s10 m10 l10">
                        <ul class="collection">
                          <li class="collection-item avatar">
                            <span class="circle light-blue">M</span>
                            <span class="email-title">Mike Parker</span>
                            <p class="truncate grey-text ultra-small">To Andy Brown</p>
                            <p class="grey-text ultra-small">6:10 pm</p>
                          </li>
                        </ul>
                      </div>
                      <div class="col s2 m2 l2 email-actions">
                        <a href="#!"><span><i class="mdi-content-reply"></i></span></a>
                        <a href="#!"><span><i class="mdi-navigation-more-vert"></i></span></a>
                      </div>
                    </div>
                    <div class="email-content">
                      <p>Hi Andy,</p>
                      <p>We bundle our framework with the latest iteration of Roboto Google has released. It comes with 5 different font weights you can use: 200, 300, 400, 500, 600.</p>
                      <p>Regards,
                        <br>Mike Parker</p>
                    </div>
                  </div>
                  <div class="email-reply">
                    <div class="row">
                      <div class="col s4 m4 l4 center-align">
                        <a href="%21.html#"><i class="mdi-content-reply"></i></a>
                        <p class="ultra-small">Reply</p>
                      </div>
                      <div class="col s4 m4 l4 center-align">
                        <a href="%21.html#"><i class="mdi-content-reply-all"></i></a>
                        <p class="ultra-small">Reply all</p>
                      </div>
                      <div class="col s4 m4 l4 center-align">
                        <a href="%21.html#"><i class="mdi-content-forward"></i></a>
                        <p class="ultra-small">Forward</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- Compose Email Trigger -->
            <div class="fixed-action-btn" style="bottom: 45px; left:24px;">
              <a class="btn-floating btn-large red modal-trigger" href="#modal1">
                <i class="large mdi-editor-mode-edit"></i>
              </a>
            </div>



            <!-- Compose Email Structure -->
            <div id="modal1" class="modal">
              <div class="modal-content">
                <nav class="red">
                  <div class="nav-wrapper">
                    <div class="left col s12 m5 l5">
                      <ul>
                        <li><a href="#!" class="email-menu"><i class="modal-action modal-close  mdi-hardware-keyboard-backspace"></i></a>
                        </li>
                        <li><a href="#!" class="email-type">Compose</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col s12 m7 l7 hide-on-med-and-down">
                      <ul class="right">
                        <li><a href="#!"><i class="mdi-editor-attach-file"></i></a>
                        </li>
                        <li><a href="#!"><i class="modal-action modal-close  mdi-content-send"></i></a>
                        </li>
                        <li><a href="#!"><i class="mdi-navigation-more-vert"></i></a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </nav>
              </div>
              <div class="model-email-content">
                <div class="row">
                  <form class="col s12">
                    <!--<div class="row">
                      <div class="input-field col s12">
                        <input id="from_email" type="email" class="validate">
                        <label for="from_email">From</label>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="to_email" type="email" class="validate">
                        <label for="to_email">To</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="subject" type="text" class="validate">
                        <label for="subject">Subject</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="compose" class="materialize-textarea" length="500"></textarea>
                        <label for="compose">Compose email</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        
    </div>
    <!--end container-->

    </section>
    <!-- END CONTENT -->



  </div>
  <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



@endsection()