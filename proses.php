<?php
    if(isset($_POST["aksi"])) {
        if ($_POST["aksi"]=="add") {
            echo "Edit data <a href ='index.php'>[Home]</a>" ;
        }elseif ($_POST["aksi"]=="edit") {
             echo "Edit data <a href ='index.php'>[Home]</a>" ;
    }
}

if (isset($_GET['hapus'])) {
    echo "Hapus data <a href ='index.php'>[Home]</a>" ;
}