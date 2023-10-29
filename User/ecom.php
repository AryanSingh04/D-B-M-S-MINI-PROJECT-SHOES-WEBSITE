<?php
session_start();
include "../db_conn.php";
$sql="SELECT * FROM product";
$result= mysqli_query($conn,$sql);
if(isset($_SESSION["c.name"])){

}
else{
  header("Location:../Login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="cartbar" id="cartbar">
        <section class="h-100 h-custom">
          <div class="container py-4 h-100 overflow-hidden">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                  <div class="card-body p-0">
                    <div class="row g-0">
                      <div class="col-lg-8" >
                        <div class="p-3">
                          <div class="d-flex justify-content-between align-items-center mb-1">
                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                            <h6 class="mb-0 text-muted" id="cartLength">
                         
                           </h6>
                          </div>
                         <div class="cart-det" id="itemBox">
                         
                          </div>
                        
                         
        
                          <div class="d-flex justify-content-between align-content-between">
                        
                        <button id="carthide">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20ZM12 11H16V13H12V16L8 12L12 8V11Z"></path></svg>
                          <span>Back to Shopping</span>
                        </button>
                        <button id="confirm">
                        <span><span id="totalpricediv"></span> <br>Continue</span>
                          <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                              <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
                          </svg>
                      </button>
                </div>
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
        <div class="page">
            <div class="nav-bar">
              <div class="logo">
                <img src="https://s3.amazonaws.com/cdn.designcrowd.com/blog/40-Famous-Shoe-Logos/Nike.png" alt="">
                <h1>NIKE <?php
              //   if(  $cname = $_SESSION["c.name"] ){
              //     echo $cname ;
              //   }
              // else{
              //   echo "Store";
              // }
                ?>
                </h1>
              </div>
              <div class="sbox">
              <label for="srch">
                <i class="ri-search-line"></i>
               <input type="text" id="srch" placeholder="search">
              </label>
              <div class="scart" ><i class="ri-shopping-cart-2-fill "id="cartIcon" ></i></div>
             </div>
            
            <div class="ref"><ul>
              <li>Women</li>
              <li>Mens</li>
              <li>KIds</li>
            </ul></div>
            </div>
            <div id="hero"> 
            <div class="left">
                        <h1 class="herot"> DISCOVER LIMITED SNEAKER</h1>
                    </div>
                    <div class="mid">
                     <div class="circle"></div>
                    </div>
                    <div class="right">
                        <h1 class="herot">WITHOUT LIMITATION</h1>
                    </div>
                
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="https://i.pinimg.com/originals/3d/40/21/3d4021b13b2868b0a99f116495e8d0ac.png" alt="" class="magnet-target">
                      </div>
                      <div class="swiper-slide">
                        <img src="https://i.pinimg.com/originals/b2/c3/fd/b2c3fd0c7d31e6c274ddd3d1f69f78c2.png" alt="" class="magnet-target">
                      </div>
                      <div class="swiper-slide">
                        <img src="https://sneakerbardetroit.com/wp-content/uploads/2019/08/Travis-Scott-Air-Jordan-6-CN1084-200.png" alt="" class="magnet-target">
                      </div>
                  </div>
            </div>
        </div>
        </div>
        <div class="page2" id="page2">
        <div class="pwrap">
          <?php
          while($row= mysqli_fetch_assoc($result)){

          
          ?>
          <div class="product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
              <img src="<?php echo $row["pimage"]; ?>" alt="">
            </div>
            <div class="product-details">
              <span class="product-catagory">Sneaker</span>
              <h4><a href=""><?php echo $row["pname"]; ?></a></h4>
              <p class="desc"><?php echo $row["pdesc"] ?>
              <div class="product-bottom-details">
                <div class="product-price"><small><?php echo $row["poprice"]; ?></small><span id="finalPrice"><?php echo $row["pnprice"]; ?></span> </div>
                <button class="CartBtn">
                    <span class="IconContainer"> 
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                    </span>
                    <p class="text">Add to Cart</p>
                  </button>
              </div>
            </div>
          </div>
          
          <?php
          }
          ?>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script  type="text/javascript"  src="https://unpkg.com/sheryjs/dist/Shery.js"></script>
    <script src="./script.js"></script>
</body>
</html>
<?php
session_unset()
?>