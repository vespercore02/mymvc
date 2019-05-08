<div class="row">

    <div class="col-sm"></div>
    <div class="col-sm-8">
        <?php

            if (isset($result)) {
                # code...
                echo $result;
            }

        ?>
        <form action="../index.php" method="post">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="location">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <button type="submit" name="register" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-4">
                </div>
                
            </div>
        </form>
    </div>
    <div class="col-sm"></div>

</div>