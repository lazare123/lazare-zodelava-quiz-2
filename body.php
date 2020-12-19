<?php

?>


<div class="body">
   <nav>
      <ul>
         <?php
            $query = "SELECT * FROM airports";
            $result = mysqli_query($connection, $query);
            if(!$result){
               die ("Error!!"); 
            }  
            while($row = mysqli_fetch_assoc($result)){
               echo "<li><a href='?cat=".$row["name"]."'>".$row["name"]."</a></li>";
            }
         ?>
      <form action="php_insert_update_delete.php" method="post">
            <input type="text" name="name" placeholder="Name" value="<?php echo $name?>"><br><br>
            <input type="number" name="idnumber" placeholder="IDNumber" value="<?php echo $idcode?>"><br><br>
            <input type="text" name="country" placeholder="Country" value="<?php echo $country?>"><br><br>
            <input type="text" name="city" placeholder="City" value="<?php echo $city?>"><br><br>
            <input type="date" name="timezone" placeholder="Timezone" value="<?php echo $timezone?>"><br><br>
            <div>
               <input type="submit" name="insert" value="Add">
               <input type="submit" name="update" value="Edit">
               <input type="submit" name="delete" value="Delete">
            </div>
      </form>
      <article>
      <?php
         if(isset($_GET["cat"]))
         {
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM airports WHERE Name='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <h4>Name</h4>
            <div>
               <?=$row['name']?>
            </div>
            <h4>ID Number</h4>
            <div>
               <?=$row['idcode']?>
            </div>
            <h4>Country</h4>
            <div>
               <?=$row['country']?>
            </div>
            <h4>City</h4>
            <div>
               <?=$row['city']?>
            </div>
            <h4>Time Zone</h4>
            <div>
               <?=$row['timezone']?>
            </div>
            <?php

         }
      ?>
</article>
</div>