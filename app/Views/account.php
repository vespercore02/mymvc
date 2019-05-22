<table>
    <thead>
        <tr>
            <th>Account ID</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach (Account::viewAccounts() as  $value) {
            # code...
            ?>
            <tr>
                <td>
                    <a href="Account/<?php echo $value['account_id']; ?>"><?php echo $value['account_id']; ?></a>
                </td>
                <td>
                    <?php echo $value['username']; ?>
                </td>
            </tr>
        <?php
    }

    ?>
    </tbody>
</table>