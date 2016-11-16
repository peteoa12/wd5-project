<div class="registration__form">
    <div class="container">
        <div class="row rowWithFullWidth">
            <form method="post">

            <?php if ( $registration_errors ) { ?>
              <div class="bg-danger red">
                <?php foreach ( $registration_errors as $error ) { echo $error . '<br />';} ?>
              </div>
            <?php } ?>

                <div class="form-group <?php echo isset( $registration_errors['email'] ) ? 'has-error' : '' ?>">
                    <label for="exampleInputEmail1 form-label">Email</label>
                    <input value="<?php echo filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) ?>"
                           type="email"
                           class="form-control" id="exampleInputEmail1"
                           placeholder="Email">
                </div>
                <div class="form-group <?php echo isset( $registration_errors['username'] ) ? 'has-error' : '' ?>">
                    <label for="exampleInputPassword1 form-label">Username</label>
                    <input value="<?php echo filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) ?>"
                           name="username"
                           type="text"
                           class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Ex:kitty6969">
                </div>

                <div class="form-group <?php echo isset( $registration_errors['password'] ) ? 'has-error' : '' ?>">
                    <label for="exampleInputPassword1 form-label">Password</label>
                    <input value="<?php echo filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) ?>"
                           name="password"
                           type="password"
                           class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Password">
                </div>

                <div class="form-group <?php echo isset( $registration_errors['verify_password'] ) ? 'has-error' : '' ?>">
                    <label for="exampleInputEmail1 form-label">Re-Enter Password</label>
                    <input
                        value="<?php echo filter_input(INPUT_POST, 'password_verification', FILTER_SANITIZE_STRING) ?>"
                        name="password_verification"
                        type="password"
                        class="form-control"
                        placeholder="Password">
                </div>
                <div class="checkbox">
                    <label>
                        <input name="security"
                               type="checkbox">Not a robot
                    </label>
                </div>
                <button name="registration-form"
                        type="submit"
                        class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>