<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo BASE_URL("assets/dist/img/user2-160x160.jpg"); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- <li>
          <a href="<?php echo BASE_URL(""); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li> -->
        <li>
           <a href="<?php echo BASE_URL("sentiment"); ?>">
            <i class="fa fa-th"></i> <span>Lakukan Analisis Sentimen</span>
          </a> 
        </li>
        <li>
           <a href="<?php echo BASE_URL("Komparasi"); ?>">
            <i class="fa fa-th"></i> <span>Lihat Komparasi Hasil Analisis</span>
          </a> 
        </li>
        <li>
           <a href="<?php echo BASE_URL("sentiment/kelola_topic/"); ?>">
            <i class="fa fa-th"></i> <span>Hapus Sentimen</span>
          </a> 
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Bank Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php
                $sql ="SELECT DISTINCT topic FROM analysis";
                $query = $this->db->query($sql);
                foreach ($query->result() as $row) { 
                ?>
                    <li><a href="<?php echo BASE_URL("sentiment/topic/$row->topic"); ?>"><i class="fa fa-circle-o"></i> <?= $row->topic; ?></a></li>
                <?php
                }
            ?>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
