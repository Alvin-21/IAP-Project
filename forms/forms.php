<?php

class forms
{
    public function user_details()
    {
?>
        <div class="row align-items-md-stretch justify-content-center">
            <div class="col-md-6">
                <div class="h-100 p-4 bg-body-tertiary border rounded-3">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="f_name" class="form-control" placeholder="Joe">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" name="l_name" class="form-control" placeholder="Doe">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" name="city" class="form-control" placeholder="Enter city">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" name="country" class="form-control" placeholder="Enter country">
                        </div>
                        <button type="submit" name="userDetails" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


    <?php
    }
}
