
<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Current Order</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/buttons.dataTables.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="bootstrap/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bootstrap/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    <link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

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
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Menu
                        </div>
                                    <div class="panel-heading">
                                        <div class="span12" align="center">
                                            
                                                <div>
                                                    
                                                    <label>Current Order</label>
                                                </div>
                                                
                                        </div>
                                   
                                    
                               
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Choose Table
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table1.php">Table 1</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table2.php">Table 2</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table3.php">Table 3</a></li>
                              <!-- <li role="presentation" class="divider"></li> -->
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table4.php">Table 4</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table5.php">Table 5</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table6.php">Table 6</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table7.php">Table 7</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table8.php">Table 8</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table9.php">Table 9</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table10.php">Table 10</a></li>
                              <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="table11.php">Table 11</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="table12.php">Table 12</a></li> -->

                            </ul>
                        </div>
                            <!-- Nav tabs -->
                        
                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div class="tab-pane fade">
                                     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" >
                                        <thead>
                                            <tr>
                                                <th>Table</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                                include 'koneksi/database.php';
                                                $pdo = Database::connect();
                                                $total_harga = 0;
                                                $ppn = 0;
                                                $subtotal = 0;
                                                $sql = 'SELECT transaksi.tanggal,transaksi.meja,menu.menu_name,menu.menu_harga,transaksi.qty,transaksi.total,menu.menu_id from menu inner join transaksi on menu.menu_id = transaksi.menu_id WHERE transaksi.meja = ?';
                                                foreach ($pdo->query($sql)as $row){
                                                    echo '<tr>';
                                                    echo '<td>'.$row['tanggal'].'</td>';
                                                    echo '<td width=15 align="center">'.$row['meja'].'</td>';
                                                    echo '<td>'.$row['menu_name'].'</td>';
                                                    echo '<td>'.$row['menu_harga'].'</td>';
                                                    echo '<td>'.$row['qty'].'</td>';
                                                    echo '<td>'.$row['total'].'</td>';
                                                    echo '<input type="hidden" name="meja" value="'.$row['meja'].'">';
                                                    echo '<input type="hidden" name="menu_nama" value="'.$row['menu_name'].'">';
                                                    echo '<input type="hidden" name="menu_harga" value="'.$row['menu_harga'].'">';
                                                    echo '<input type="hidden" name="menu_qty" value="'.$row['qty'].'">';
                                                    echo '<input type="hidden" name="total" value="'.$row['total'].'">';
                                                    echo '</tr>';
                                                    $total_harga = $total_harga + $row['total'];
                                                    $ppn = 0.1 * $total_harga;
                                                    $subtotal = $total_harga + $ppn;
                                                }
                                                 
                                                    echo '<tr>';
                                                    echo'<td colspan="5" align="center"><i>Total</i></td>';
                                                    echo'<td>'.($total_harga).'</td>';
                                                    echo'</tr>';
                                                    echo '<tr>';
                                                    echo'<td colspan="5" align="center"><i>PPN 10%</i></td>';
                                                    echo'<td>'.($ppn).'</td>';
                                                    echo'</tr>';
                                                    echo'<td colspan="5" align="center"><b><i>Sub Total</i></b></td>';
                                                    echo'<td><b>'.($subtotal).'</b></td>';
                                                    echo'</tr>';
                                                    echo '<tr>';
                                                    echo '<td>';
                                                    echo '<button class="btn btn-success">Print</a>';   
                                                    echo '</td>';
                                                    echo '</tr>';
                                                Database::disconnect();
                                            ?>
                                            
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
   <script src="bootstrap/js/jquery-1.12.3.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/vendor/datatables/js/dataTables.buttons.min.js"></script>
    <script src="bootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="bootstrap/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="bootstrap/vendor/datatables/js/buttons.flash.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="bootstrap/vendor/datatables/js/jszip.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="bootstrap/vendor/datatables/js/pdfmake.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="bootstrap/vendor/datatables/js/vfs_fonts.js">
    </script>
    <script type="text/javascript" language="javascript" src="bootstrap/vendor/datatables/js/buttons.html5.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="bootstrap/vendor/datatables/js/buttons.print.min.js">
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>

</body>

</html>
