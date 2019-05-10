
<?php 

foreach ($account->view() as $value) {
    # code...
    ?>
    This is account id <?php echo $value['account_id']; ?> <br>
    This is password <?php echo $value['password']; ?> <br>
    This is location <?php echo $value['location']; ?> <br>
<?php
}

?>