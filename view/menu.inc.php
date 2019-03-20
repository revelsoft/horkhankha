<script>
    function setLanguage(lng) {
        $.post("controls/setLanguage.php", {
                lng: lng
            })
            .done(function(data) {
                window.location.reload();
            });
    }
</script>

<?php 
require_once('models/ContactUsModel.php');
$img_path = "../img_upload/contact_us/";
$contact_us_model = new ContactUsModel;
$contact_us = $contact_us_model->getContact_us();
?>
<div class="header-menu" id="mainNav" >
    <div class="col-12">
        <div class="row menu">
            <!--           
                
                <div class="float-right" style="color: #ffffffdb; margin-left: 15vw;">
                    <div class="contact_list pb-0">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        &nbsp;&nbsp;<i class="fab fa-twitter"></i>
                        &nbsp;&nbsp;<i class="fab fa-linkedin-in"></i>
                    </div>
                </div> -->






        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">

        <a href="index.php" class=""><img src="img_upload/home/logo.png" width="130px" class="logo"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class=" collapse navbar-collapse" id="navbarResponsive" style="margin-left: 45vw;">
            <ul class=" navbar-nav text-center ">
                
                <li class="nav-item">
                    <a class="nav-link <?php if ($menu == 'index') {
                                            echo 'active';
                                        } ?>" href="index.php" style="#000">


                        เกี่ยวกับเรา
                    </a>
                </li>
                <li class="nav-item ">

                    <a class="nav-color nav-link <?php if ($menu == 'about') {
                                                        echo 'active';
                                                    } ?>" href="about.php#about" style="#000">

                        แอพของเรา
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Custom scripts for this template --> 