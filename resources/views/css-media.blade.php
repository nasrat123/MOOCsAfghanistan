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
        
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Media</h5>
                <ol class="breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="#">CSS</a></li>
                    <li class="active">Media</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <p class="caption">Media can be styled in different ways using Materialize.</p>
                <!--Responsive Images-->
                <div class="divider"></div>
                <div id="responsive-images" class="section">
                  <h4 class="header">Responsive Images</h4>
                  <div class="row">
                    <div class="col s12 m4 l9">
                      <p>To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.To make images resize responsively to page width, you can add the class <code class=" language-markup">responsive-img</code> to your image tag. It will now have a <code class=" language-markup">max-width: 100%</code> and <code class=" language-markup">height:auto</code>.</p>
                    </div>
                    <div class="col s12 m8 l3">
                      <div class="card-panel">
                        <img class="responsive-img" src="{!! asset('links/images/style_typography_roboto.png') !!}" alt="style typography">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12 m4 l3">
                      <h4 class="header">Circular images</h4>
                      <p>To make images appear circular, simply add <code class=" language-markup">class="circle"</code> to them</p>
                    </div>
                    <div class="col s12 m8 l9">
                      <div class="card-panel grey lighten-5 z-depth-1">
                        <div class="row valign-wrapper">
                          <div class="col s4 m2">
                            <img src="{!! asset('links/images/avatar.jpg') !!}" alt="" class="circle responsive-img valign">
                          </div>
                          <div class="col s8 m10">
                            <span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="divider"></div>
                <!--Responsive Videos-->
                <div id="responsive-videos" class="section">
                  <h4 class="header">Videos</h4>
                  <p class="caption">We provide a container for Embedded Videos that resizes them responsively.</p>
                  <div class="row">
                    <div class="col s12 m4 l7">
                      <h4 class="header">Responsive Embeds</h4>
                      <p>To make your embeds responsive, merely wrap them with a containing div which has the class <code class=" language-markup">video-container</code>
                      </p>
                    </div>
                    <div class="col s12 m8 l5">
                      <div class="card-panel">
                        <div class="video-container">
                          <iframe width="640" height="360" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col s12 m4 l7">
                      <h4 class="header">Responsive Videos</h4>
                      <p>To make your HTML5 Videos responsive just add the class <code class=" language-markup">responsive-video</code> to the video tag.</p>
                    </div>
                    <div class="col s12 m8 l5">
                      <div class="card-panel">
                        <video width="100%" controls="">
                          <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="using-color">
                        <h4 class="header">Using Color</h4>
                        <p class="caption">This theme has various <a href="colors.html" target="_blank">color palette</a> based on the material design base colors, you can use any of theme just need to add color class.</p>
                        <div class="row"></div>
                          <div class="col s12 m8 l9">
            
                            <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                              <li>
                                <div class="collapsible-header light-blue light-blue-text text-lighten-5"><i class="mdi-communication-business"></i> First Header</div>
                                <div class="collapsible-body light-blue lighten-5">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                              </li>
                              <li>
                                <div class="collapsible-header light-blue light-blue-text text-lighten-5"><i class="mdi-communication-dialpad"></i> Second Header</div>
                                <div class="collapsible-body light-blue lighten-5">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                  </p>
                                </div>
                              </li>
                              <li>
                                <div class="collapsible-header light-blue light-blue-text text-lighten-5"><i class="mdi-communication-invert-colors-on"></i> Third Header</div>
                                <div class="collapsible-body light-blue lighten-5">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                  </p>
                                </div>
                              </li>
                            </ul>
            
                          </div>
                        </div>
                    </div>
                <div class="col s12 m8 l9">
                    <div class="row">
                      <div class="col s12 m3 l3 center">
                        <p><a class="btn waves-effect waves-light blue">next</a></p>
                      </div>
                      <div class="col s12 m3 l3 center">
                        <p><a class="btn waves-effect waves-light blue">Edit</a></p>
                      </div>
                      <div class="col s12 m3 l3 center">
                        <p><a class="btn-floating waves-effect waves-light blue"><i class="mdi-content-clear"></i></a></p>
                      </div>
                      <div class="col s12 m3 l3 center">
                        <p><a class="btn-floating  waves-effect waves-light blue"><i class="mdi-content-add"></i></a></p>
                      </div>
                    </div>
                  </div>
                <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 45px; left:24px;">
                <a class="btn-floating btn-large red">
                  <i class="large mdi-editor-mode-edit"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
  

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



 @endsection()