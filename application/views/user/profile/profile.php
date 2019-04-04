<?php include("headerProfile.php") ?>
<!-- Your profile is here
Hello  -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="<?php if(isset($_SESSION['image'])&&($_SESSION['image']!='')){ echo base_url("./images/".$_SESSION['image']) ;} else{echo base_url("./images/empty-avatar.jpg");} ?>" alt="avatar">
        </div>
        <div class="col-md-6 text-left">
            <h2>
                Username:
                <?php echo $_SESSION["username"] ?> <br>
                Date of registration:
                <?php echo $_SESSION['time'] ?>

            </h2>
        </div>
    </div>
</div>
<hr>
<div class="container ">
    <div class="card-group ">
        <div class="col-md-4">
            <div class="card ">
                <!--Размер картинок 748x563-->
                <i class="fas fa-user-friends fa-5x text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Friend</h5>
                    Find friends here
                    <br> <br><a href="<?php echo site_url('user/search'); ?>" class="btn btn-primary text-center">Interesting!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <i class="fas fas fa-trophy fa-5x text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Achievements</h5>
                    All achievments you have
                    <br> <br><a href="#" class="btn btn-primary text-center">Let's go!</a>

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <i class="fas fa-cog fa-5x text-center"></i>
                <div class="card-body text-center">
                    <h5 class="card-title">Settings</h5>
                    Change your life here!
                    <br> <br> <a href="<?php echo site_url("user/settings") ?>" class="btn btn-primary text-center">Inexpressible!</a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include("footerProfile.php") ?>