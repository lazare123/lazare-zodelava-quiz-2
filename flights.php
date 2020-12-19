<?php

?>


<div class="body">
   <nav>
      <ul>
         <?php
            $query = "SELECT * FROM flights";
            $result = mysqli_query($connection, $query);
            if(!$result){
               die ("Error!!"); 
            }  
            while($row = mysqli_fetch_assoc($result)){
               echo "<li><a href='?cat=".$row["name"]."'>".$row["name"]."</a></li>";
            }
         ?>
      <form action="php_insert_update_delete.php" method="post">
            <input type="number" name="idnumber" placeholder="IDNumber" value="<?php echo $idcode?>"><br><br>
            <input type="text" name="offairname" placeholder="OffAirName" value="<?php echo $offairname?>"><br><br>
            <input type="text" name="landairname" placeholder="LandAirName" value="<?php echo $landairname?>"><br><br>
            <input type="time" name="offtime" placeholder="OFFTime" value="<?php echo $offtime?>"><br><br>
            <input type="time" name="arrival" placeholder="Arrival" value="<?php echo $arrival?>"><br><br>
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
            <h4>ID Number</h4>
            <div>
               <?=$row['idcode']?>
            </div>
            <h4>Name</h4>
            <div>
               <?=$row['offairname']?>
            </div>
            
            <h4>Country</h4>
            <div>
               <?=$row['landairname']?>
            </div>
            <h4>City</h4>
            <div>
               <?=$row['offtime']?>
            </div>
            <h4>Time Zone</h4>
            <div>
               <?=$row['arrival']?>
            </div>
            <?php

         }
      ?>
</article>
</div>