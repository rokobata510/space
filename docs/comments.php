<div class="col detailBox rounded">
        <div class="titleBox rounded">
            <label> Hozzászólások a mai képhez</label>
        </div>
            <div class="actionBox">
                <ul class="commentList rounded">
                <?php 
                $sql = "SELECT Username, Comment from comments where Date = CAST(now() AS Date )";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo 
                    '
                    <li>
                        <div class="commentText align-text-bottom">
                            <b>'.$row["Username"].'</b>
                            <p class="commentText">'.$row["Comment"].'</p> 
                        </div>
                    </li>
                    ';
                    }
                } else {
                    echo "Ma még nem szólt a képhez senki";
                }  
                
            ?>
            
                </ul>
                <form class="form-inline w-100" role="form" method="POST" onsubmit="setTimeout(function(){window.location.reload();},10);">
                    <div class="form-group w-100 ">
                        <input class="form-control w-100" type="text" placeholder="Username" name="username" >
                        <input class="form-control w-100" type="text" placeholder="Comment" name="comment" >
                        <?php
                        if(isset($_POST["elkuld"]))
                        {
                            $sql = 'INSERT INTO Comments (username, comment, date) VALUES ("'.
                            $_POST["username"]
                            .'", "'.
                            $_POST["comment"]
                            .'",CAST(now() AS Date ))';
                            if ($conn->query($sql) === TRUE)
                            {
                                echo "Comment sikeresen hozzáadva";
                            }
                            else 
                            {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } 
                            $conn->close();                            
                        ?>
                        <div class="pt-2">
                        <input type="submit" name="elkuld" class="form-control w-100 ">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>