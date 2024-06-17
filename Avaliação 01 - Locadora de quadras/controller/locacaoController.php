<?php
    if($_POST) {
        if(isset($_POST['padelHours'])) {
            header('location:/preco.php?value='.$_POST['padelHours']*150);
        }
        else if(isset($_POST['piclkeBallHours'])) {
            header('location:/preco.php?value='.$_POST['pickleBallHours']*100);
        }
        else if(isset($_POST['beachTenisHours'])) {
            header('location:/preco.php?value='.$_POST['beachTenisHours']*80);
        }
    }
?>