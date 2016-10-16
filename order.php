

<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Order</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>
<?php include "header.php";?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
                
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Menu
                        </div>
                                    <div class="panel-heading">
                                        <div class="span12" align="right">
                                                                                     
                                        </div>
                                   
                                    
                               
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li><a href="#home" data-toggle="tab">Main Course</a>
                                </li>
                                <li><a href="#side" data-toggle="tab">Side Dishes</a>
                                </li>
                                <li><a href="#dessert" data-toggle="tab">Dessert</a>
                                </li>
                                <li><a href="#coffee" data-toggle="tab">Coffee & Tea</a>
                                </li>
                                <li><a href="#other" data-toggle="tab">Other Drink</a>
                                </li>
                                <li><a href="#beer" data-toggle="tab">Beer</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade" id="home">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Table</th>
                                                <th>Date</th>
                                                <th>Menu Id</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="create_order.php" method="post">
                                            <?php
                                                include 'koneksi/database.php';
                                                $pdo = Database::connect();
                                                $sql = 'SELECT * FROM `pos`.`menu` WHERE kategori_id IN (1)order by menu_id desc';
                                                $total_harga = 0;
                                                foreach ($pdo->query($sql)as $row){
                                                    echo '<tr>';
                                                    echo '<td width = 55>';
                                                    echo '<select name="table" id="table_'.$row['menu_id'].'">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                           
                                                            </select>';
                                                    echo '</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input type = "date" name="tgl"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<td>'.$row['menu_id'].'</td>';
                                                    echo '<td>'.$row['menu_name'].'</td>';
                                                    echo '<td>'.$row['menu_harga'].'</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input name="menu_qty" type = "text"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<input type="hidden" name="menu_id" value="'.$row['menu_id'].'">';
                                                    echo '<input type="hidden" name="menu_nama" value="'.$row['menu_name'].'">';
                                                    echo '<input type="hidden" name="menu_harga" value="'.$row['menu_harga'].'">';
                                                    
                                                    
                                                    echo '<td width=30>';
                                                    echo '&nbsp';
                                                    echo '<button class="btn btn-success" "'.$row['menu_id'].'">+</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                Database::disconnect();
                                            ?>
                                      </form>
                                            </tbody>
                                    </table>

                                </div>
                                
                                <div class="tab-pane fade" id="side">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Table</th>
                                                <th>Date</th>
                                                <th>Menu Id</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="create_order.php" method="post">
                                            <?php
                                                $pdo = Database::connect();
                                                $sql = 'SELECT * FROM `pos`.`menu` WHERE kategori_id IN (5)order by menu_id desc';
                                                $total_harga = 0;
                                                foreach ($pdo->query($sql)as $row){
                                                    echo '<tr>';
                                                    echo '<td width = 55>';
                                                    echo '<select name="table" id="table_'.$row['menu_id'].'">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            
                                                            </select>';
                                                    echo '</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input type = "date" name="tgl"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<td>'.$row['menu_id'].'</td>';
                                                    echo '<td>'.$row['menu_name'].'</td>';
                                                    echo '<td>'.$row['menu_harga'].'</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input name="menu_qty" type = "text"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<input type="hidden" name="menu_id" value="'.$row['menu_id'].'">';
                                                    echo '<input type="hidden" name="menu_nama" value="'.$row['menu_name'].'">';
                                                    echo '<input type="hidden" name="menu_harga" value="'.$row['menu_harga'].'">';
                                                    
                                                    
                                                    echo '<td width=30>';
                                                    echo '&nbsp';
                                                    echo '<button class="btn btn-success" "'.$row['menu_id'].'">+</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                Database::disconnect();
                                            ?>
                                            </form>
                                            </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="dessert">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Table</th>
                                                <th>Date</th>
                                                <th>Menu Id</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="create_order.php" method="post">
                                            <?php
                                                $pdo = Database::connect();
                                                $sql = 'SELECT * FROM `pos`.`menu` WHERE kategori_id IN (2)order by menu_id desc';
                                                $total_harga = 0;
                                                foreach ($pdo->query($sql)as $row){
                                                    echo '<tr>';
                                                    echo '<td width = 55>';
                                                    echo '<select name="table" id="table_'.$row['menu_id'].'">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            
                                                            </select>';
                                                    echo '</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input type = "date" name="tgl"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<td>'.$row['menu_id'].'</td>';
                                                    echo '<td>'.$row['menu_name'].'</td>';
                                                    echo '<td>'.$row['menu_harga'].'</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input name="menu_qty" type = "text" '.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<input type="hidden" name="menu_id" value="'.$row['menu_id'].'">';
                                                    echo '<input type="hidden" name="menu_nama" value="'.$row['menu_name'].'">';
                                                    echo '<input type="hidden" name="menu_harga" value="'.$row['menu_harga'].'">';
                                                    
                                                    
                                                    echo '<td width=30>';
                                                    echo '&nbsp';
                                                    echo '<button class="btn btn-success" "'.$row['menu_id'].'">+</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                Database::disconnect();
                                            ?>
                                            </form>
                                            </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="coffee">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Table</th>
                                                <th>Date</th>
                                                <th>Menu Id</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="create_order.php" method="post">
                                            <?php
                                                $pdo = Database::connect();
                                                $sql = 'SELECT * FROM `pos`.`menu` WHERE kategori_id IN (3)order by menu_id desc';
                                                $total_harga = 0;
                                                foreach ($pdo->query($sql)as $row){
                                                    echo '<tr>';
                                                    echo '<td width = 55>';
                                                    echo '<select name="table" id="table_'.$row['menu_id'].'">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            
                                                            </select>';
                                                    echo '</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input type = "date" name="tgl"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<td>'.$row['menu_id'].'</td>';
                                                    echo '<td>'.$row['menu_name'].'</td>';
                                                    echo '<td>'.$row['menu_harga'].'</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input name="menu_qty" type = "text"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<input type="hidden" name="menu_id" value="'.$row['menu_id'].'">';
                                                    echo '<input type="hidden" name="menu_nama" value="'.$row['menu_name'].'">';
                                                    echo '<input type="hidden" name="menu_harga" value="'.$row['menu_harga'].'">';
                                                    
                                                    
                                                    echo '<td width=30>';
                                                    echo '&nbsp';
                                                    echo '<button class="btn btn-success" "'.$row['menu_id'].'">+</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                Database::disconnect();
                                            ?>
                                            </form>
                                            </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="other">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Table</th>
                                                <th>Date</th>
                                                <th>Menu Id</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="create_order.php" method="post">
                                            <?php
                                                $pdo = Database::connect();
                                                $sql = 'SELECT * FROM `pos`.`menu` WHERE kategori_id IN (4)order by menu_id desc';
                                                $total_harga = 0;
                                                foreach ($pdo->query($sql)as $row){
                                                    echo '<tr>';
                                                    echo '<td width = 55>';
                                                    echo '<select name="table" id="table_'.$row['menu_id'].'">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            
                                                            </select>';
                                                    echo '</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input type = "date" name="tgl"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<td>'.$row['menu_id'].'</td>';
                                                    echo '<td>'.$row['menu_name'].'</td>';
                                                    echo '<td>'.$row['menu_harga'].'</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input name="menu_qty" type = "text" '.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<input type="hidden" name="menu_id" value="'.$row['menu_id'].'">';
                                                    echo '<input type="hidden" name="menu_nama" value="'.$row['menu_name'].'">';
                                                    echo '<input type="hidden" name="menu_harga" value="'.$row['menu_harga'].'">';
                                                    
                                                    
                                                    echo '<td width=30>';
                                                    echo '&nbsp';
                                                    echo '<button class="btn btn-success" "'.$row['menu_id'].'">+</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                Database::disconnect();
                                            ?>
                                            </form>
                                            </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="beer">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Table</th>
                                                <th>Date</th>
                                                <th>Menu Id</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form action="create_order.php" method="post">
                                            <?php
                                                $pdo = Database::connect();
                                                $sql = 'SELECT * FROM `pos`.`menu` WHERE kategori_id IN (6)order by menu_id desc';
                                                $total_harga = 0;
                                                foreach ($pdo->query($sql)as $row){
                                                    echo '<tr>';
                                                    echo '<td width = 55>';
                                                    echo '<select name="table" id="table_'.$row['menu_id'].'">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            
                                                            </select>';
                                                    echo '</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input type = "date" name="tgl"'.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<td>'.$row['menu_id'].'</td>';
                                                    echo '<td>'.$row['menu_name'].'</td>';
                                                    echo '<td>'.$row['menu_harga'].'</td>';
                                                    echo '<td width = "55">';
                                                    echo '<input name="menu_qty" type = "text" '.$row['menu_id'].'"></input>';
                                                    echo '</td>';
                                                    echo '<input type="hidden" name="menu_id" value="'.$row['menu_id'].'">';
                                                    echo '<input type="hidden" name="menu_nama" value="'.$row['menu_name'].'">';
                                                    echo '<input type="hidden" name="menu_harga" value="'.$row['menu_harga'].'">';
                                                    
                                                    
                                                    echo '<td width=30>';
                                                    echo '&nbsp';
                                                    echo '<button class="btn btn-success" "'.$row['menu_id'].'">+</a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                Database::disconnect();
                                            ?>
                                            </form>
                                            </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                
                
            </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

<!-- 
<script type="text/javascript">
    $(document).on('click','.btn-success',function(e) {
        e.preventDefault();
        var id = $(e.target).attr('id');
        
        $.ajax({
             data: { id : id, table : $('#table_'+id).val() , qty : $('#qty_'+id).val()},
             type: "post",
             url: "create_order.php",
             success: function(data){
                $('#qty_'+id).val('');
                alert("Order berhasil dimasukan.");
             }
        });
    });

</script> -->

