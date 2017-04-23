<!DOCTYPE html>
<html>
<head>
  <title>Sistem Informasi Warung Makan</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="<?php echo base_url(); ?>favicon.png" type="image/png">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flat-admin.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme/yellow.css">

</head>
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand"><span class="highlight">SiWarKan v1</span></a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="dropdown <?php if($header == "Transaksi"){echo "active";} ?>">
        <a href="transaksi">
          <div class="icon">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          </div>
          <div class="title">Transaksi</div>
        </a>
      </li>
      <li class="dropdown <?php if($header == "Laporan"){echo "active";} ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
          </div>
          <div class="title">Laporan</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><a href="laporan"><i class="fa fa-bar-chart" aria-hidden="true"></i> Lihat Laporan</a></li>
            <li class="section"><a href="laporan/cetak"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Cetak Laporan</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown <?php if(($header == "Barang") || ($header == "Jenis Barang")){echo "active";} ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">Barang</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><a href="barang"><i class="fa fa-tasks" aria-hidden="true"></i> Data Barang</a></li>
            <li class="section"><a href="jenis_barang"><i class="fa fa-cube" aria-hidden="true"></i> Jenis Barang</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown <?php if($header == "Operator"){echo "active";} ?>">
        <a href="operator">
          <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
          </div>
          <div class="title">Operator</div>
        </a>
      </li>
    </ul>
  </div>
  <!-- <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div> -->
</aside>

<!-- <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script> -->
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand"><span class="highlight">SiWarKan v1</span></a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="<?php echo base_url(); ?>assets/images/profile.png">
          </button>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title"><span class="highlight"><?php echo $header ?> - Sistem Informasi Warung Makan Bu Imas</span></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="<?php echo base_url(); ?>assets/images/profile.png">
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Administrator</h4>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <?php echo $contents; ?>

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/vendor.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>


</body>
</html>
