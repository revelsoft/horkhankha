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

?>
<div class="header-menu " id="mainNav" >
    <nav class="navbar navbar-expand-lg navbar-dark " id="mainNav">

        <a href="index.php" class=""><img src="img_upload/home/logo.png" width="130px" class="logo"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="menu-phone  collapse navbar-collapse" id="navbarResponsive">
            <ul class=" navbar-nav text-center  ">
                
                <li class="nav-item"  style="font-family: 'Kanit-Medium';">
                    <a class="nav-link <?php if ($menu == 'index') {
                                            echo 'active';
                                        } ?>" href="index.php" style="#000; font-size: 14px; " >

                        เกี่ยวกับเรา
                    </a>
                </li>
                <li class="nav-item " style="font-family: 'Kanit-Medium';">

                    <a class="nav-color nav-link <?php if ($menu == 'about') {
                                                        echo 'active';
                                                    } ?>" href="about.php#about" style="#000; font-size: 14px; ">

                        แอพของเรา
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Custom scripts for this template --> 