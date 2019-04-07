<html dir="ltr" lang="en" xml:lang="en" class="yui3-js-enabled">
<link rel="icon" type="image/png" href="https://www.itera.ac.id/wp-content/uploads/2019/01/logo-itera-oke-846x1024.png">
<title>Login</title>
<head>
    <link rel="stylesheet" type="text/css" href="http://kuliah.itera.ac.id/theme/styles.php/boost/1539680338_1/all">


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
                    <div role="main"><span id="maincontent"></span>
                        <div class="my-10 my-sm-10"></div>
<div class="row justify-content-center">
<div class="col-xl-4 col-sm-8 ">
<div class="card">
    <div class="card-block">
             <h2><p align="center"><font face="Times New Roman"><strong><br>Silahkan Masuk<br></strong></font></p></h2>


            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <form class="mt-10" action="<?php echo site_url('Login/proses_login')?>" method="post">
                                                
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" value="" placeholder="Username / email" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" required>
                        </div>
                            <div class="rememberpass mt-3">
                                <input type="checkbox" name="rememberusername" id="rememberusername" value="1">
                                <label for="rememberusername">Remember username</label>
                            </div>

                        <button type="submit" name="login" class="btn btn-primary btn-block mt-7" id="loginbtn">Login</button>
                        <br>
                        <?php if(isset($pesan)){
                            echo $pesan;
                        }
                        ?>
                        <h4 style="text-align: center;"><font face="Times New Roman"><br>Manajemen KP<br>Geofisika</h4>
                    </form>
                </div>
            

</a>
                    </div>

                </div>
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


        <div class="logininfo">You are not logged in.</div>


    </div>
</footer>


</body></html>


