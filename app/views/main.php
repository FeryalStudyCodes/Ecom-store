<?PHP
 session_start();
include "app/views/header.php"; 
?>

 <!-- start of hero -->
  <section class="hero-slider hero-style" id="hero">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://i.pinimg.com/originals/ed/c9/5a/edc95a3a7b8c8918448d0b832067f027.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <h1>New Collection</h1>
            </div>
          </div>
          <!-- end slide-inner -->
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://www.lg.com/global/images/Banner/lg-signature-hero-banner-oled-8k-tv-refrigerator-washing-machine-air-purifier-desktop.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- end slide-inner -->
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://www.apple.com/v/macbook-pro-13/f/images/overview/hero_endframe__bsza6x4fldiq_large.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://www.apple.com/v/macbook-air/i/images/overview/hero_endframe__ea0qze85eyi6_large.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- swipper controls -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev" id="prev"></div>
      <div class="swiper-button-next" id="next"></div>
    </div>
  </section>
<!-- end of hero slider  -->


<section style="margin: 10rem 0 0 0;">
  <div class="text-center" id="section-title"><h1 style="margin: 2rem 4rem 0 6rem;">الحواسيب المحمولة</h1></div>  
  <!-- The slideshow -->
  <div class="container" style="padding: 0rem;">
    <div class="active row orginize card-slider">
    <main class="row main bg-grid product-store">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6 col-lg-3">
          <div class="card">
              <div class="card-img product-img">
                  <a href="#">
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View" style=" background: #F27523;"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist" style=" background: #F27523;"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id=<?=$id ;?>" data-tip="Add to Cart" class="cart"  data-id='=<?= $id; ?>' style=" background: #F27523;"><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
              </div>
              <div class="card-price product-content">
               <div class="card-name">
                  <h5 class="product-name"><a href="#"><p><?php  echo $row->product_name ?></p></a></h5>
                  <h3 class="title"><p><?php  echo $row->product_short_desc ?></p></h3>
                  <div class="price">
                  <p>$<?= $row->product_price ?></p>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      </div>
      <?php $i++; } }?> 
   </div>
    </main>
    </div>
    </section>
    <div class="carousel-item">
    <div class="row">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id=<?=$id ;?>" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  
                    <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
 
 
     </div>
     </div>
    <div class="carousel-item">
    <div class="row">
    <?php 
            $i=0;
            $rows=$data['products'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id='<?=$id ;?>'" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                   $ <?php  echo $row->product_price ?>
                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
            // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
            //     echo "Update Cart";
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php $i++; } }?> 
  
 
 
     </div>
     </div>
    </div>

<!--Satrt Featured Product-->
<div class="container">
  <!-- <h3 class="h4 text-sm-right mb-5 text-secondary ">إلكترونيات  </h3>     -->
  <div class="row">
  <?php 
            $i=0;
            $rows=$data['order_product'];
            // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              // if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
         
      <div class="col-md-3 col-sm-6">
          <div class="product-store">
              <div class="product-img">
                  <a href="#">
                      
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social">
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="main/wishlist?id=<?=$id?>" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="main/shopingCart?id=<?=$id ;?>" data-tip="Add to Cart" class="cart"  data-id='<?= $id; ?>' ><i class="fa fa-shopping-cart "></i></a></li>
                  </ul>
                 
              </div>
              <div class="product-content">
                  <h3 class="title"><a href="#"> <?php  echo $row->product_short_desc ?></a></h3>
                  <div class="price">
                  $ <?php  echo $row->product_price ?>

                  </div>
                  <?PHP
                    // add to cart button
         // product id for javascript access
         echo "<div class='product-id display-none'></div>";
        if(array_key_exists($id, $_SESSION['cart'])){
           // echo "<a href='main/displayShopingCartItems' class='btn btn-success w-100-pct'>";
           echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";

               // echo "Update Cart";
            echo "</a>";
        }else{
            echo "<a  class='add-to-cart' href='main/shopingCart?id={$id}' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
        }
    ?>
                </div>
          </div>
      </div>
      <?php //$i++;
      //  } 
    }
    ?> 

  </div>
</div>
<!--End Featured Product-->



<!--Start View Moer-->
<div class="overview text-center mt-5">
         <div class="container">
          
           <button><a href="main/getcat">View Moer</a></button>
          </div>
       </div>

<!--End View Moer-->


<!--Start add-->
<div class="container mt-5">
    <div class="row">
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add.jpg">
      </div>
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg">
      </div>
      <div class="offer-card">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg">
      </div>
    </div>
  </div>
<!--End add-->






 
  

<?PHP
include "app/views/footer.php"; 
?>
    
 


</body>
</html>
