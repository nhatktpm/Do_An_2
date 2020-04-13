
    <?php
        function layao(){
            $qr="SELECT * FROM tuvung WHERE idchude = 1";
            return mysql_query($qr);
        }
    ?>

    <?php
        $aomoilay = layao();
         while($row_aomoilay = mysql_fetch_array($aomoilay)){
    ?>
            <div>
                <?php echo $row_aomoilay['id'];?>            
             </div> 
              
          <?php } ?>           
                 



