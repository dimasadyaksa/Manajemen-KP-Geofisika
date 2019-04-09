<?php
    require 'function.php';
    if( isset($_POST["register"]) ){
        //var_dump($_POST);
        
        if ( registrasi($_POST) > 0 ){
            echo "<script>
             alert('Registrasi Berhasil');
             document.location.href = 'form_register.php';
             </script>";
            
        } else {
            echo "<script>
             alert('Registrasi Gagal'); 
             document.location.href = 'form_register.php';
             </script>";
            
        }
    }


?>
<html dir="ltr" lang="en" xml:lang="en" class="yui3-js-enabled"><head>
    <link rel="shortcut icon" href="http://kuliah.iter    <title>Login . Manajemen KP Geofisika</title>
a.ac.id/theme/image.php/boost/theme/1539680338/faviconl; charset=utf-8">
<meta name="keywords" content="moodle, Manajemen KP Geofisika: Log in to the site">
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script charset="utf-8" id="yui_3_17_2_1_1552487088998_8" src="http://kuliah.itera.ac.id/theme/yui_combo.php?m/1539680338/core/event/event-min.js&amp;m/1539680338/filter_mathjaxloader/loader/loader-min.js" async=""></script><script cha">
    <meta http-equiv="Content-Type" content="text/htmrset="utf-8" id="yui_3_17_2_1_1552487088998_18" src="http://kuliah.itera.ac.id/theme/yui_combo.php?3.17.2/event-mousewheel/event-mousewheel-min.js&amp;3.17.2/event-resize/event-resize-min.js&amp;3.17.2/event-hover/event-hover-min.js&amp;3.17.2/event-touch/event-touch-min.js&amp;3.17.2/event-move/event-move-min.js&amp;3.17.2/event-flick/event-flick-min.js&amp;3.17.2/event-valuechange/event-valuechange-min.js&amp;3.17.2/event-tap/event-tap-min.js" async=""></script><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="http://kuliah.itera.ac.id/theme/styles.php/boost/1539680338_1/all">
<script type="text/javascript">


//]]>
</script>

</script>

<div id="page-wrapper">



    <div id="page" class="container-fluid mt--">
        <div id="page-content" class="row">
            <div id="region-main-box" class="col-12">
                <section id="region-main" class="col-12">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span><div class="my-10 my-sm-10"></div>
<div class="row justify-content-center">
<div class="col-xl-6 col-sm-8 ">
<div class="card">
    <div class="card-block">
            <h2 class="card-header text-center"><img src="https://www.itera.ac.id/wp-content/uploads/2019/01/logo-itera-oke-846x1024.png" align="center" title="logo itera" alt="logo" height="100" width="100"><p align="center"><font face="Times New Roman"><strong>Manajemen KP<br> Geofisika</strong></font></p></h2>


            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <form class="mt-3" method="post" id="register">
                        <input id="anchor" type="hidden" name="anchor" value="">
                        <script>document.getElementById('anchor').value = location.hash;</script>
                        <div class="form-group">
                            <label for="email" class="sr-only">
                                    Email
                            </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email"
                            required>
                        </div>
                         <div class="form-group">
                            <label for="status" class="sr-only">
                                     Status
                            </label>
                            <input type="text" name="status" id="status" value="" class="form-control" placeholder="Status"
                            required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">
                                     Password
                            </label>
                            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password"
                            required>

                        <button type="submit" name="register" class="btn btn-primary btn-block mt-3" id="loginbtn">Registrasi</button>
                        <button type="reset" name="reset" class="btn btn-primary btn-block mt-3" value='Reset'>Reset</button>
                    </form>
                </div>
</div>
</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>



                    
                </section>
            </div>
        </div>
    </div>
</div><div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div>
<footer id="page-footer" class="py-3 bg-dark text-light">
    <div class="container">
        <div id="course-footer"></div>
    </div>
</footer>


</body></html>