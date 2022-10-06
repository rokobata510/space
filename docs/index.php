<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Hello, world!</title>
        <link rel="stylesheet" href="custom.css">
        
    </head>
    <body>
        <?php include "connect.php" ?>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <div class="container row">
            <div class="col">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHMAAAB6CAMAAAC7kpwcAAAAS1BMVEUAAAB3d3dqampwcHA7Ozs3NzciIiJmZmZjY2NtbW1XV1cEBAQMDAwwMDBdXV0qKipLS0sSEhKAgIBFRUUYGBiMjIyTk5MdHR1QUFATjOkaAAAAwElEQVRoge3PQU7EMAxAUTtxnKRt0jQd6Nz/pLBiwQKBVCSQ/lvalr4sAgAAAAAAAAAAAAAAAAAAAAAAAODPWL+5/fruRxaNW5JHa5u3VbYsSbzvbey+mewuko5rX5vv9yVFZXuGrBqqZj3KS9agOcZSVWvRebXYY8x16nFj8zhDinlpWuy11TBDXvoYOqrae9bHGLlX6+G6r5liueJ5mi+zpzq6BTNzt/yc0XtpHsdSrNm48c8PD/s0OH8h8j+8Ac1IBgNV5IfPAAAAAElFTkSuQmCC" alt="TODO" class="rounded border w-100 h-100">
            </div>
            <div class="col">
            <div class="detailBox">
    <div class="titleBox">
        <label>Commentek</label>
        <button type="button" class="close" aria-hidden="true">&times;</button>
    </div>
    <div class="actionBox">
        <ul class="commentList">
            <li>
                <div class="commenterImage">
                    <img src="http://placekitten.com/50/50"/>
                </div>
                <div class="commentText align-text-bottom">
                    <b>Username</b>
                    <p class="">Hello this is a test comment.</p> 
                </div>
            </li>
            
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Your comments" />
            </div>
            <div class="form-group">
                <button class="btn btn-default">Add</button>
            </div>
        </form>
    </div>
</div>
            </div>
        </div>
        </body>
</html>