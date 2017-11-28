    <h1>Profile</h1>

    <?php
        if(empty($data['message'])) {
            ?>

                    <p> username: <?= $data['value']['username'] ?> </p>
                    <p> firstname: <?= $data['value']['firstname'] ?> </p>
                    <p> lastname: <?= $data['value']['lastname'] ?> </p>
                    <p> birthdate: <?= $data['value']['birthdate'] ?> </p>
                    <p> phonenumber: <?= $data['value']['phonenum'] ?> </p>
                    <p> email: <?= $data['value']['email'] ?> </p>

                </div>
            </div>

            <?php
        }
    ?>
