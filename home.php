<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bar Imperio</title>

   <link rel="icon" type="image/x-icon" href="assets/img/about/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>Cervezas Artesanales</span>
               <h3>La Cuchucerve</h3>
               <!-- <a href="menu.html" class="btn">Ver</a> -->
            </div>
            <div class="image">
               <img src="images/artesanal.jpg" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>La mejor hamburguesa del interior</span>
               <h3>La Vegana</h3>
               <!-- <a href="menu.html" class="btn">Ver</a> -->
            </div>
            <div class="image">
               <img src="images/home-img-2.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Mejor sanguche de mila</span>
               <h3>La Campeona</h3>
               <!-- <a href="menu.html" class="btn">Ver</a> -->
            </div>
            <div class="image">
               <img src="images/campeona.jpeg" alt="">
            </div>
         </div>
          <!-- <div class="swiper-slide slide">
            <div class="content">
               <span>Cervezas Artesanales</span>
               <h3>La Cuchucerve</h3>
               <a href="menu.html" class="btn">Ver</a> 
            </div>
            <div class="image">
               <img src="images/artesanal.jpg" alt="">
            </div>
         </div>

      </div> -->

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category">

   <h1 class="title">Categorias</h1>

   <div class="box-container">

      <a href="category.php?category=Comidas Rapidas" class="box">
         <img src="images/cat-1.png" alt="">
         <h3>Comidas Rapidas</h3>
      </a>

      <a href="category.php?category=Platos Principales" class="box">
         <img src="images/cat-2.png" alt="">
         <h3>Platos Principales</h3>
      </a>

      <a href="category.php?category=Escabio" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>Escabio</h3>
      </a>

      <a href="category.php?category=Postres" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>Postres</h3>
      </a>

   </div>

</section>



<!-- 
<section class="products">

   <h1 class="title">Los mas Pedidos</h1>

   <div class="box-container">

      <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
         <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
         <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
         <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
         <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
         <div class="name"><?= $fetch_products['name']; ?></div>
         <div class="flex">
            <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
         </div>
      </form>
      <?php
            }
         }else{
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>

   </div>

   <div class="more-btn">
      <a href="menu.html" class="btn">veiw all</a>
   </div>

</section> -->


















<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>