<aside class="main-sidebar">
  <section class="sidebar">

    <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">Main Navigation</li>

      <li class=<?php if (!isset($_GET['page'])) { echo "active"; }?>>
        <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>

      <li class=<?php if (isset($_GET['page']) && $_GET['page']=="makanminum") { echo "active"; }?>>
        <a href="?page=makanminum"><i class="fa fa-coffee"></i> <span>Makan dan Minum</span></a> 
      </li>

      <li class=<?php if (isset($_GET['page']) && $_GET['page']=="pesan") { echo "active"; }?>>
        <a href="?page=pesan"><i class="fa fa-list-ul"></i> <span>Pesanan</span></a> 
      </li>

      <?php if (isset($_SESSION['status'])): ?>
      <?php if ($_SESSION['status']=="admin"): ?>
          <li class=<?php if(isset($_GET['page'])){ if ($_GET['page']=="settinguser"||$_GET['page']=="settingmenu"||$_GET['page']=="settingorder") { echo "\"treeview active\""; } else { echo "treeview"; } } else {echo "treeview";}?>>
            <a href="#">
              <i class="fa fa-gear"></i> <span>Setting</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style=<?php if(isset($_GET['page'])){ if ($_GET['page']=="settinguser"||$_GET['page']=="settingmenu"||$_GET['page']=="settingorder") { echo "\"\""; } else { echo "display: none;"; } } else {echo "display: none;";}?>>

              <li class=<?php if(isset($_GET['page'])){ if ($_GET['page']=="settinguser") { echo "active"; }} ?>><a href="?page=settinguser"><i class="fa fa-circle-o"></i> User</a></li>
              <li class=<?php if(isset($_GET['page'])){ if ($_GET['page']=="settingmenu") { echo "active"; }} ?>><a href="?page=settingmenu"><i class="fa fa-circle-o"></i> Menu</a></li>
              <li class=<?php if(isset($_GET['page'])){ if ($_GET['page']=="settingorder") { echo "active"; }} ?>><a href="?page=settingorder"><i class="fa fa-circle-o"></i> Order</a></li>

            </ul>
          </li>
      <?php endif ?>
      <?php endif ?>

      

    </ul>
    
  </section>
</aside>