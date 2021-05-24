<?php require_once "Controller/action.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/app.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div>
        
                    <h4>Add new Machine: </h4>
                    <form method="POST" >
                    <input type="hidden">
                        <div class="mb-3">
                            <label>Machine#</label>
                            <input type="text" name="machine" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Plant</label>
                            <input type="text" name="plant" class="form-control">
                        </div>
                        <div class="mb-3 ">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <button type="submit"  name="add" class="btn btn-primary">Submit</button>
                    </form>
                
        </div>
</body>

</html>