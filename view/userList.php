<div>
    <h2 class="center">List of users</h2>
            <table class="">
            <tr>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Password</th>
                <th>Admin</th>
            </tr>
            <?php
             foreach ($users_tab as $user) {
                
                $email = $user['email'];
                $firstName = $user['firstName'];
                $lastName = $user['lastName'];
                $password = $user['password'];
                $role = $user['role'];

            ?>
            
                            <tr>
                    <td><?= $email ?></td>
                    <td><?= $firstName ?></td>
                    <td><?= $lastName ?></td>
                    <td><?= $password ?></td>
                    <td><?= $role ?></td>
                </tr>
            <?php } ?>
            </table>
</div>
