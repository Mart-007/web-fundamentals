<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Sports</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='card mt-3'>
                    <div class='card-header'>
                        <h4>Sports Players</h4>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <form action='' method='GET'>

                <div class='card shadow mt-3'>
                    <div class='card-header'>
                        <h5>Filter
                            <button type='submit' class='btn btn-primary btn-sm float-end'>Search</button>
                        </h5>
                    </div>
                    <div class='card-body'>
                        <h6>Player List</h6>
                        <hr>
                        <?php
                            $con = mysqli_connect('localhost', 'root', 'root', 'sports');
                            $query = 'SELECT * FROM a_sport';
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $list){
                                    //echo $list['name'];
                                    $checked = [];

                                    if(isset($_GET['sports'])){
                                        $checked = $_GET['sports'];
                                    }
                                    ?>
                                        <div>
                                            <input type='checkbox' name='sports[]' value="<?= $list['id']; ?>" 
                                                <?php if(in_array($list['id'], $checked)){ 
                                                    echo "checked";
                                                } ?>
                                            />
                                            <?= $list['sports'];?>
                                        </div>
                                    
                                    <?php
                                }
                            }else{
                                echo 'No Brands Found';
                            }
                        ?>
                        
                    </div>
                </div>
                </form>
            </div>

            <div class='col-md-9 mt-3'>
                <div class='card'>
                    <div class='card-body row'>
                        <?php
                            if(isset($_GET['sports'])){
                                $branchecked = [];
                                $branchecked = $_GET['sports'];
                                foreach($branchecked as $row){
                                    $products = "SELECT * FROM sport WHERE sport_id IN ($row)";
                                    $products_run = mysqli_query($con, $products);

                                    if(mysqli_num_rows($products_run) > 0){
                                        foreach($products_run as $items) :
                                            ?>
                                                <div class='col-md-4 mt-3'>
                                                    <div class='border p-2'>
                                                        <h6><?= $items['name']; ?></h6>
                                                    </div>
                                                </div>
                                            <?php 
                                        endforeach;
                                    }else{
                                        echo "No brands found!";
                                    }
                                }
                                }else{
                        $products = "SELECT * FROM sport";
                        $products_run = mysqli_query($con, $products);

                        if(mysqli_num_rows($products_run) > 0){
                            foreach($products_run as $items) :
                                ?>
                                    <div class='col-md-4 mt-3'>
                                        <div class='border p-2'>
                                            <h6><?= $items['name']; ?></h6>
                                        </div>
                                    </div>
                                <?php 
                            endforeach;
                        }else{
                            echo "No brands found!";
                        }
                    }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>
</html>