<ul class="main-menu">
    <?php
        $sql="SELECT m.* FROM p_category_main m JOIN product_details p ON p.pcm_id = m.pcm_id GROUP BY (m.pcm_id) ORDER BY(m.pcm_name)";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_array()){
                echo '<li class="dropdown">';
                    $sql1="SELECT s.pcs_id, s.pcs_name FROM p_category_sub s JOIN p_category_main m ON m.pcm_id = s.pcm_id JOIN product_details p ON p.pcm_id = m.pcm_id AND p.pcs_id = s.pcs_id WHERE s.pcm_id = $row[0] GROUP BY (s.pcs_id)";
                    $result1 = $conn->query($sql1);
                    if($result1->num_rows > 0){
                        echo "<a class='dropbtn' href='#' onclick='jumpUrl(\"$row[0]\",\"main\",\"productDetails.php\")'> ".$row[1]."</a>
                            <div class='clear'></div>";
                        echo'<div class="dropdown-content">';
                        while($row1 = $result1->fetch_array()){
                            echo " <a href='#' onclick='jumpUrl(\"$row1[0]\",\"sub\",\"productDetails.php\")'>".$row1[1]."</a>";
                        }
                        echo '</div>';
                    }else{
                        echo "<a class='dropbtn' href='#' onclick='jumpUrl(\"$row[0]\",\"main\",\"productDetails.php\")'> ".$row[1]."</a>
                            <div class='clear'></div>";
                    }
                echo '</li>';
            }
        }
    ?>
</ul>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>