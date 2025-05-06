<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="../admin/dashboard.php" class="logo">Moderator<span>Panel</span></a>

      <nav class="navbar">
         <a href="../moderator/products.php">products</a>
         <a href="../moderator/placed_orders.php">orders</a>
         <a href="../moderator/users_accounts.php">users</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `moderators` WHERE id = ?");
            $select_profile->execute([$moder_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../moderator/update_profile.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="../moderator/register_moder.php" class="option-btn">register</a>
            <a href="../moderator/moder_login.php" class="option-btn">login</a>
         </div>
         <a href="../components/moder_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
      </div>

   </section>

</header>