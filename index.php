<?php require_once "Controller/action.php";
include_once("vue/layouts/head.php");
?>

<h4 id="h4">Machine capacity settings: </h4>
<div class="row">
    <div class="col-md-9  mt-4">
        <button @click="add = !add" type="button" class="btn btn-primary add"><i class="fas fa-plus"></i>
            &nbsp;&nbsp; add
            new</button>
    </div>
    <div class="col-md-3">
        <div class="input-group mb-3">
            <?php include("vue/layouts/search.php");?>
        </div>
    </div>
</div>
<?php
            if(!empty($errors) || !empty($_GET['errors']))
            {
                echo "<div class='alert alert-danger'>";
                if(!empty($errors)){
            foreach ($errors as $error)
                    echo $error;
            } 
            echo"</div>";
        }
        ?>
<div class="row mt-4">
    <div class="col">

        <table class="table table-striped">
            <thead>
                <tr class="thead">
                    <th scope="col">Machine#</th>
                    <th scope="col">
                        <?php include("vue/layouts/searchMachine.php");?>
                    </th>
                    <th scope="col">
                        <?php include("vue/layouts/searchPlant.php");?>
                    </th>
                    <th scope="col">status</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($machines as $machine):?>

                <tr onclick="window.location='vue/update.php?id=<?php echo $machine['id']?>'">
                    <td><?php echo $machine['machineId']?></td>
                    <td><?php echo $machine['name']?></td>
                    <td><?php echo $machine['plants']?></td>
                    <td><?php echo $machine['status']?></td>
                    <td>
                        <a href="controller/delete.php?id=<?php echo $machine['id']?>"> <i class="fas fa-trash-alt"></i>
                        </a>
                        <button type="button" class="btn"></button>
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
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-1 close" @click="add = !add">
                <center><i class="fas fa-times"></i></center>
            </div>
        </div>
        <h4 id="h4">Add new Machine: </h4>
        <?php include_once("vue/layouts/create.php")?>
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