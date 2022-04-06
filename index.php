<?php
        include "logic.php"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6b25446bc1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Corona Tracker</title>
</head>
<body>
    <div class="container-fluid bg-dark text-center p-5 my-3">
        <h1>Corona Tracker</h1>
        <h5 class="text-muted">An opensource project to keep track of all the cases of covid 19 around the world.</h5>
    </div>
<div class="container my-5">
    <div class="row text-center">
        <div class="col-4 text-warning">
            <h5>Confirmed</h5>
            <?php echo $total_confirmed;?>
        </div>
        <div class="col-4 text-success">
            <h5>Recovered</h5>
            <?php echo $total_recovered;?>
        </div>
        <div class="col-4 text-danger">
            <h5>Deaths</h5>
            <?php echo $total_deaths;?>
    </div>
    </div>
</div>
    <div class="container bg-light p-3 my-3 text-center">
        <h5 class="text-info">Prevention is the Cure.</h5>
        <p class="text-muted">Stay Home Stay Safe.</p>
    </div>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deaths</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data as $key => $value) {
                            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                    ?>
                        <tr>
                            <th><?php echo $key;?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase != 0){?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
                                <?php }?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['recovered'];?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['deaths'];?>
                            </td>
                        </tr>


                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy;2022, Lofijay06</span>
        </div>
    </footer>
</body>
</html>