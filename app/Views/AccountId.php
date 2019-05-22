<table>
    <thead>
        <tr>
            <th>Account ID</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <?php

        /**
         * 
         * @var $value from $id informations
         * if id not found on the database result will be No Result
         * 
         */

        if (!empty(Account::getId())) {

            foreach (Account::getId() as  $value) {
                # code...
                ?>
                <tr>
                    <td>
                        <?php echo $value['username']; ?>
                    </td>
                    <td>
                        <?php echo $value['location']; ?>
                    </td>
                </tr>
            <?php
            }
        }else{
            ?>
            <tr>
                <td colspan="2">
                    No Result!
                </td>
            </tr>
            <?php
        }

    ?>
    </tbody>
</table>