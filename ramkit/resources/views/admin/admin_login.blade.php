
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Ramfit</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="admin/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="admin/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="admin/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="admin/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="admin/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="admin/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="admin/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="admin/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="admin/js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login" style="background: url('images/pattern_h.png');">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="340" src="{{ asset('images/loginlogo.png') }}" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                    <p class="text-center text-danger"> @php
                        $message = Session()->get('message');
                        if ($message) {
                            echo "$message";
                            Session()->put('message', null);
                        }
                    @endphp</p>
                     <form id="login-form" class="form" action="{{ url('/admin.dashboard') }}" method="post">
                        @csrf
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" name="email" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field">
                              <label class="label_field hidden">hidden label</label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              <a class="forgot" href="">Forgotten Password?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button type="submit" class="main_bt">Sing In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="admin/js/jquery.min.js"></script>
      <script src="admin/js/popper.min.js"></script>
      <script src="admin/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="admin/js/animate.js"></script>
      <!-- select country -->
      <script src="admin/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="admin/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="admin/js/custom.js"></script>
   </body>
</html>


