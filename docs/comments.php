<div class="col">
    <div class="detailBox">
        <div class="titleBox">
            <label>Commentek</label>
        </div>
            <div class="actionBox">
                <ul class="commentList">
                <?php 
                $sql = "SELECT Username, Comment from comments where Date = CAST(now() AS Date )";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo 
                    '
                    <li>
                        <div class="commenterImage">
                            <img src="http://placekitten.com/50/50"/>
                            </div>
                        <div class="commentText align-text-bottom">
                            <b>'.$row["Username"].'</b>
                            <p class="">'.$row["Comment"].'</p> 
                        </div>
                    </li>
                    ';
                    }
                } else {
                    echo "0 results";
                }  
                
            ?>
            
                </ul>
                <form class="form-inline" role="form" method="POST" onsubmit="setTimeout(function(){window.location.reload();},10);">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Username" name="username"/>
                        <input class="form-control" type="text" placeholder="Comment" name="comment"/>
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
                        <input type="submit" name="elkuld">
                    
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>