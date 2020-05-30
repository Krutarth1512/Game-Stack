<?php $this->load->view('inc/header.php');?>

        <div class="feature"></div>

        <div class="row">

            <div class="column-contact">

                <form method="post" action="#">

                    <div class="box">
					
						<h1> Create Your Account </h1>

						<input type="text" name="firstname" required placeholder="First name" />

                        <input type="text" name="lastname" required placeholder="Last name" />

                        <input type="email" name="email" required placeholder="Email" />

                        <input type="password" name="password" required placeholder="Password" />

                        <div>
                            <input type="submit" class="submit-button" value="Register">
                        </div>

						<h3><a href="login.html">Already have account</a></h3>

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