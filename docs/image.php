<div class="container row">
            <div class="col">
            <?php 
                $sql = "SELECT ImageURL from image where DisplayDate = CAST(now() AS Date )";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo 
                    '
                    <img src="'.$row["ImageURL"].'" alt="TODO" class="rounded border w-100 h-100">
                    ';
                    }
                } else {
                    echo "A készítők mára még nem töltöttek fel képet (de még így is hozzá tudsz szólni";
                }
                    
            ?>
                
            </div>
            
        