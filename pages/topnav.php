<header class="main-header">

  <a href="index.php" class="logo">
   <!--  <img src="image/cantoline.png" style="width: 50px; margin-left: -15px;"> -->
    <span class="logo-lg"><b>CANTO</b>LINE <span style="font-size: 12px;">canteen online</span></span>

    <span class="logo-mini"><b>C</b>L</span>
  </a>

  <nav class="navbar navbar-static-top">

    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- konten pada topnav -->

        <?php if (isset($_SESSION['status'])):        // login check?>

        <?php if ($_SESSION['status']=="admin"):      // admin side?> 
        <?php //echo "admin side"; ?>
        <?php endif; ?>

        <?php if ($_SESSION['status']=="user"):       // user side?> 
        
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa  fa-shopping-cart"></i><span> Order</span>
            <span class="label label-danger">9</span>
          </a>
        </li>

        <?php endif; ?>

        <?php                                         // after login?>

        <li class="dropdown user user-menu">
          <a href="#">
            <i class="fa fa-user"></i> <span class="hidden-xs"><?php echo $_SESSION['userdata']['nama']; ?></span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-money"></i><span> Saldo : <b>Rp. <?php echo $_SESSION['userdata']['saldo']; ?></b></span>
          </a>
        </li>

        <li>
          <a href="pages/user/user_controller.php?logout=true">
            <i class="fa fa-sign-out"></i><span> Logout</span>
          </a>
        </li>   

        <?php else: ?>

        <?php                                         // before login ?>

        <li class="">
          <a href="login.php" class="dropdown-toggle">
            <i class="fa fa-sign-in"></i><span> Login</span>
          </a>
        </li>      

        <?php endif; ?>

      </ul>
    </div>
  </nav>

</header>