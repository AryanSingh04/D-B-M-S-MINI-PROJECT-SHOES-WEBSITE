<?php
include "../db_conn.php";
$sql = "SELECT * FROM product";
$list = mysqli_query($conn,$sql) ;

?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tables - Admin One Tailwind CSS Admin Dashboard</title>

  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css?v=1628755089081">

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#00b4b6"/>

  <meta name="description" content="Admin One - free Tailwind dashboard">

  <meta property="og:url" content="https://justboil.github.io/admin-one-tailwind/">
  <meta property="og:site_name" content="JustBoil.me">
  <meta property="og:title" content="Admin One HTML">
  <meta property="og:description" content="Admin One - free Tailwind dashboard">
  <meta property="og:image" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1920">
  <meta property="og:image:height" content="960">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="Admin One HTML">
  <meta property="twitter:description" content="Admin One - free Tailwind dashboard">
  <meta property="twitter:image:src" content="https://justboil.me/images/one-tailwind/repository-preview-hi-res.png">
  <meta property="twitter:image:width" content="1920">
  <meta property="twitter:image:height" content="960">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script>

</head>
<body>

<div id="app">
  <nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a> 
  </nav>


<aside class="aside is-placed-left is-expanded">
  <div class="aside-tools">
    <div>
      Admin <b class="font-black">Nike</b>
    </div>
  </div>
  <div class="menu is-menu-main">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li class="active">
        <a href="index.php">
          <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
          <span class="menu-item-label">Dashboard</span>
        </a>
      </li>
    </ul>
    <p class="menu-label">Operations</p>
    <ul class="menu-list">
      <li class="--set-active-tables-html">
        <a href="tables.php">
          <span class="icon"><i class="mdi mdi-table"></i></span>
          <span class="menu-item-label">Inventory</span>
        </a>
      </li>
      <li class="--set-active-forms-html">
        <a href="forms.php">
          <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
          <span class="menu-item-label">Add Product</span>
        </a>
      </li>
      
     
    </ul>
    
  </div>
</aside>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Admin</li>
      <li>Available Products</li>
    </ul>
   
  </div>
</section>

<section class="is-hero-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <h1 class="title">
      Available Products
    </h1>
  </div>
</section>

  <section class="section main-section">
    <div class="card has-table">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
          Clients
        </p>
        <a href="#" class="card-header-icon">
          <span class="icon"><i class="mdi mdi-reload"></i></span>
        </a>
      </header>
      <div class="card-content">
        <table>
          <thead>
          <tr>
          
            <th class="image-cell">pid</th>
            <th>Image</th>
            <th>Name</th>
            <th>Desc</th>
            <th>Old Price</th>
            <th>New Price</th>
          
            <th></th>
          </tr>
          </thead>
          <tbody>
            <?php
         while($row = mysqli_fetch_assoc($list)){

            ?>
          <tr>
            <td class="pid">
            <?php echo $row["pid"]; ?>
            </td>
            <td class="image-cell">
              <div class="image w-1">
                <img src="<?php echo $row["pimage"]; ?>" class="w-1">
              </div>
            </td>
            <td data-label="Name"><?php
            echo $row["pname"];  ?></td>
            <td data-label="desc"><?php
            echo $row["pdesc"];  ?></td>
            <td data-label="oprice"><?php
            echo $row["poprice"];  ?></td>
            <td data-label="nprice"><?php
            echo $row["pnprice"];  ?></td>
            
          </tr>
          <?php
          
        }
          ?>
          </tbody>
        </table>
      </div>
    </div>




    <div class="card empty">
      <div class="card-content">
        <div>
          <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
        </div>
        <p>Nothing's here…</p>
      </div>
    </div>
  </section>



<div id="sample-modal" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button red --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

<div id="sample-modal-2" class="modal">
  <div class="modal-background --jb-modal-close"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Sample modal</p>
    </header>
    <section class="modal-card-body">
      <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
      <p>This is sample modal</p>
    </section>
    <footer class="modal-card-foot">
      <button class="button --jb-modal-close">Cancel</button>
      <button class="button blue --jb-modal-close">Confirm</button>
    </footer>
  </div>
</div>

</div>

<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>


<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '658339141622648');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=658339141622648&ev=PageView&noscript=1"/></noscript>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
<?php
?>