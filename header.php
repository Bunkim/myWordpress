<!DOCTYPE html>
<html lang="">
<?php wp_head(); ?>
<head>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <meta charset="UTF-8">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>My Portfolio</title>


        <!-- They are script -->
        <!-- jQuery -->

        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/my_script.js"></script>
    </head>
    <body>  
            <div class="menu_main-container">
              <div class="bk_header-logo">
                <div class="bk_header-logo-col">
                  <h1>K8 Design</h1>
                </div>
                <div class="bk_header-logo-col1 ">
                  <h6>
                    <i class="material-icons">phone:</i>
                    069272262
                  </h6>
                </div>
              </div>
              <hr>
              <div class="header_menu-container ">
                <?php
                  wp_nav_menu( array(
                  'theme-location' => 'primary',
                  'menu' => 'Menu',
                  'menu_id'        => '',
                  'menu_class'     => ''
                ) );
                ?> 
              </div>

            </div>
               <script>
              function goBack() {
                  window.history.back();
              }
              </script>
<!--       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>

    </div>
    <script>

      function myFunction() {
          $( ".menu-item" ).click(function() {
           var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
              x.className += " responsive";
          } else {
              x.className = "topnav";
          }
      })

      }
    </script>  -->