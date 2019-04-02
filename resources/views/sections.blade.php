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
                <h5 class="breadcrumbs-title">Forms</h5>
                <ol class="breadcrumb">
                  <li><a href="index.">Dashboard</a>
                  </li>
                  <li><a href="#">Forms</a>
                  </li>
                  <li class="active">Forms Layouts</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          

         
          

          <!--Form Advance-->          
          

          <form id="regForm">
            <h1>د کورس جوړول</h1>
            <!-- One "tab" for each step in the form: -->
            <div class="tab"><h3>اوله برخه: د کورس پیژندنه</h3>
              <div id="field">
              <div id="field0">
                <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="first_name" type="text">
                          <label for="first_name">نوم</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="first_name" type="text">
                            <label for="first_name">نوم</label>
                          </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                               <input id="last_name" type="text">
                              <label for="last_name">لیول</label>
                         </div>
                        <div class="input-field col s6">
                          <input id="email5" type="text">
                          <label for="email">ژبه</label>
                        </div>                    
                      </div>
                      <div class="row">
                              <div class="input-field col s6">
                                <input id="start" type="date">
                                <label for="start">دشروع وخت</label>
                              </div>
                            
                              <div class="input-field col s6">
                                <input id="date" type="date">
                                <label for="date">دختم وخت</label>
                              </div>
                            </div>
                      <div class="row">
                            <div class="input-field col s6">
                                <input id="time" type="text">
                                <label for="time">ټول وخت</label>
                           </div>
                              <div class="input-field col s6">
                                      <input id="date" type="date">
                                      <label for="date">د اپډیټ وخت</label>
                              </div>                    
                      </div>
                      <div class="row">
                            <div class="file-field input-field col s12">
                                    <input class="file-path validate" type="text"/>
                                    <div class="btn">
                                      <span>عکس</span>
                                      <input type="file" />
                                    </div>
                            </div>  
                      </div>
                      
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="message5" class="materialize-textarea" length="300"></textarea>
                          <label for="message">د کورس پیژندنه</label>
                        </div>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
                  <!-- Button -->
              <div class="form-group">
                <div class="col-md-4">
                <button id="add-more" name="add-more" class="btn btn-primary">برخه زیاتول</button>
                </div>
                </div>
            </div>
            <div class="tab"><h3>دوهمه برخه:دکورس موخی</h3>
              <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="first_name" type="text">
                          <label for="first_name">نوم</label>
                        </div>  
                      </div>                      
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea id="message5" class="materialize-textarea" length="300"></textarea>
                          <label for="message">معلومات</label>
                        </div>                        
                      </div>
                    </form>
                  </div>
            </div>
            <div class="tab"><h3>دریمه برخه:دکورس مخکنی اړین مواد</h3>
                <div class="row">
                 <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="namef" type="text">
                            <label for="namef">نوم</label>
                        </div>
                          <div class="input-field col s6">
                                  <input id="typef" type="text">
                                  <label for="typef">ډول</label>
                          </div>                    
                  </div>
                  <div class="row">
                      <div class="iput-field col s12">
                          <input id="datef" type="date">
                          <label for="datef">تاریخ</label>
                      </div>
                  </div>
                  </form>
                 </div>
            </div>
            <div class="tab"><h3>څلورمه برخه:دکورس کټګوری</h3>
                <div class="row">
                        <form class="col s12">
                           <div class="row">
                                <div class="input-field col s6">
                                        <select>
                                          <option value="" disabled selected>کټګوری انتخابه کړه</option>
                                          <option value="1">ریاضی</option>
                                          <option value="2">فزیک</option>
                                          <option value="3">کیمیا</option>
                                        </select>
                                        <label>دکټګوری انتخاب</label>
                                      </div>                         
                         </div>                         
                         </form>
                        </div>
                        
            </div>
            <div class="tab"><h3></h3>
                <div class="row">
                    <form class="col s12">
                       <div class="row">
                          <div class="input-field col s6">
                                <input id="title" type="text">
                                <label for="title">نوم</label>
                           </div>
                           <div>
                               <input id="es_time" type="time" >
                               <label for="es_time">es_time</label>
                           </div>
                          </div>                      
                                    <div class="row">
                                      <div class="input-field col s12">
                                        <textarea id="messagem" class="materialize-textarea" length="300"></textarea>
                                        <label for="messagem">معلومات</label>
                                      </div>                        
                                    </div>                                                                           
                         </form>
                        </div>
            </div>
            <div style="overflow:auto;">
              <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
              </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
          </form>

      </div>
      
  </section>
  <!-- END CONTENT -->



  </div>
  <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->
 
 @endsection()
 
 @section('js')
  var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><div class="row"><form class="col s12"><div class="row"> <div class="input-field col s6"><input id="first_name" type="text"><label for="first_name">نوم</label></div><div class="input-field col s6"><input id="first_name" type="text"><label for="first_name">نوم</label></div></div><div class="row"><div class="input-field col s6"><input id="last_name" type="text"><label for="last_name">لیول</label></div><div class="input-field col s6"><input id="email5" type="text"><label for="email">ژبه</label></div> </div><div class="row"><div class="input-field col s6"><input id="start" type="date"><label for="start">دشروع وخت</label> </div><div class="input-field col s6"><input id="date" type="date"><label for="date">دختم وخت</label></div></div><div class="row"><div class="input-field col s6"><input id="time" type="text"><label for="time">ټول وخت</label> </div><div class="input-field col s6"><input id="date" type="date"><label for="date">د اپډیټ وخت</label></div></div><div class="row"> <div class="file-field input-field col s12"><input class="file-path validate" type="text"/><div class="btn"><span>عکس</span><input type="file" /></div></div></div><div class="row"><div class="input-field col s12"><textarea id="message5" class="materialize-textarea" length="300"></textarea><label for="message">د کورس پیژندنه</label></div></div></form></div>';
  @endsection()
  
      
