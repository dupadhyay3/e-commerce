<ul class="main-menu">
    <?php
        $sql="SELECT * FROM pCategoryMain";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                echo '<li class="dropdown">';
                
                    $sql1="SELECT s.pcsId, s.pcsName FROM pCategorySub s JOIN pCategoryMain m ON m.pcmId = s.pcmId WHERE s.pcmId = ".$row[0];
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0){
                        echo '<a class="dropbtn" href="#"> '.$row[1].'</a>
                            <div class="clear"></div>';
                        echo'<div class="dropdown-content">';
                        while($row1 = $result1->fetch_array()){
                            echo " <a href='#' onclick='jumpUrl(\"$row1[1]\",\"productDetails.php\")'>".$row1[1]."</a>";
                        }
                        echo '</div>';
                    }else{
                        echo "<a class='dropbtn' href='#' onclick='jumpUrl(\"$row[1]\",\"productDetails.php\")'> ".$row[1]."</a>
                            <div class='clear'></div>";
                    }
                echo '</li>';
            }
        }
    ?>
</ul>