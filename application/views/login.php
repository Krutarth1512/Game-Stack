<?php $this->load->view('inc/header.php');?>

        <div class="feature"></div>

        <div class="row">

            <div class="column-contact">

                <form method="post" action="#">

                    <div class="box">
					
						<h1> Sign in </h1>

                        <input type="email" name="email" required placeholder="Email" />

                        <input type="password" name="password" required placeholder="Password" />

                        <div>
                            <input type="submit" class="submit-button" value="Login">
                        </div>

						<h3><a href="register.html">Create Account</a></h3>

                    </div>

                </form>

            </div>
        </div>

        <div class="footerblurb">

            <div class="footerblurb-inner">
                <div class="clr"></div>
            </div>

        </div>

<?php $this->load->view('inc/footer.php'); ?>