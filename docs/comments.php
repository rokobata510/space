<div class="titleBox">
        <label>Commentek</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>
    <?php 
        $sql = "SELECT Username, Comment from comments where Date = CAST(now() AS Date )";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            echo '
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
        $conn->close();    
    ?>
    <div class="actionBox">
        <ul class="commentList">
            
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Username" />
                <input class="form-control" type="text" placeholder="Comment" />
                
                <button class="btn btn-default">Comment</button>
            
            </div>
            
        </form>
    </div>
</div>
            </div>
        </div>