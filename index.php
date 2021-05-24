<?php require_once "Controller/action.php";?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="vue/css/app.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="vue/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container" id="vue">
        <div class="row">
            <div class="col">
                <button @click="add = !add" type="button" class="btn btn-primary add"><i class="fas fa-plus"></i>
                    &nbsp;&nbsp; add
                    new</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">

                <table class="table table-striped">
                    <thead>
                        <tr class="thead">
                            <th scope="col">Machine#</th>
                            <th scope="col">Names</th>
                            <th scope="col">Plantes</th>
                            <th scope="col">status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($machines as $machine):?>
                        <tr>
                            <td><?php echo $machine['machineId']?></td>
                            <td><?php echo $machine['name']?></td>
                            <td><?php echo $machine['plants']?></td>
                            <td><?php echo $machine['status']?></td>
                            <td>
                                <button type="button" class="btn"><i class="fas fa-trash-alt"></i></button>
                                </th>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
        <div v-if="add">
            <div id="overlay"></div>
            <div class="addNew">
                <?php include_once("vue/create.php")?>

            </div>
        </div>
    </div>
    <script>
    new Vue({
        el: '#vue',
        data: {
            message: "test",
            add: false
        }
    })
    </script>

</body>

</html>