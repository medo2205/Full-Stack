<?php

include './inc/DB.php';
include './inc/form.php';
include './inc/select.php';
include './inc/DB_close.php';


?>


<?php include './parts/include.php';  ?>



    <div id="b-c" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Win The Giveaway</h1>
            <p class="lead fw-normal">Time Left</p>
            <p id="countdown" class="fs-3"></p>
            <p class="lead fw-normal">For Giving Away A Free Copy Of The Softwere</p>
        </div>
        <div class="container">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">To Participate You Must Register</li>
                <li class="list-group-item">The Winner Will Be Chosen Randomly From The Database</li>
                <li class="list-group-item">Winner Will Get A Free Copy Of The Database</li>
            </ul>
        </div>
    </div>
 

    <div class="position-relative text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <h3>Please Enter Your Information</h3>
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $firstName ?>" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameErrors'] ?></div>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $lastName ?>" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameErrors'] ?></div>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?>" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['emailErrors'] ?></div>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>

    <div class="loader-container">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button id="winner" type="button" class="btn btn-primary">
    Choose Winner
    </button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="modalLabel">The Winner Is</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

            <?php   foreach($users as $user): ?>
            <h5 class="display-3 text-center modal-title" id="modalLabel"><?php echo  htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h5>
            <?php   endforeach; ?>

            </div>
            
        </div>
  </div>
</div>



<?php include './parts/footer.php';  ?>

