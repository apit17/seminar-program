<?php

    require 'koneksi/database.php';
    
   
        
   
        $table = $_POST['table'];
        $tanggal = $_POST['tgl'];
        $menu_id = $_POST['menu_id'];
        $menu_harga = $_POST['menu_harga'];
        $menu_qty = $_POST['menu_qty'];
        
        
        //validate input
        $valid = true;
       

        
        
        //$message = "Success";
        //echo "<script type='text/javascript'>alert('$message');</script>";
        //insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql2 = "SELECT menu_harga from menu where menu_id = ?";
            $q = $pdo->prepare($sql2);
            $q->execute(array($table));
            $data = $q->fetch();

            $sql = "INSERT INTO transaksi (meja, tanggal, menu_id, qty, total) values(?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($table,$tanggal,$menu_id,$menu_qty,$data['menu_harga']*$menu_qty));
            //return $message();
            Database::disconnect();
            
            header("Location: order.php");
        }
        
    


?>