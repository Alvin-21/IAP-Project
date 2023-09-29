<?php

class contents
{
    public function user_table($result, $count)
    {
?>
        <div class="table-responsive px-4">
            <table id="current-users" class="table">
                <thead>
                    <tr>
                        <th scope="col" colspan="9" class="text-center">Current Users</th>
                    </tr>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Country</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $i = 0;

                    while ($i < $count) {
                        $f_name = $result[$i]['first_name'];
                        $l_name = $result[$i]['last_name'];
                        $email = $result[$i]['email_address'];
                        $city = $result[$i]['city'];
                        $country = $result[$i]['country'];
                    ?>

                        <tr>
                            <td><?php echo $f_name ?></td>
                            <td><?php echo $l_name ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $city ?></td>
                            <td><?php echo $country ?></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

<?php
    }
}
