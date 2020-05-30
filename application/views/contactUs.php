<?php $this->load->view('inc/header.php'); ?>

        <div class="feature"></div>

        <div class="row">

            <div class="column-contact">

                <h1>Let's get in touch</h1>
                <h2>Leave us a kind word (it's always a pleasure) or ask us questions.</h2>

                <form method="post" action="#">

                    <div class="box">

                        <input type="text" name="firstname" required placeholder="First name" />

                        <input type="text" name="lastname" required placeholder="Last name" />

                        <input type="email" name="email" required placeholder="Email" />

                        <input type="password" name="password" required placeholder="Password" />

                        <select id="country" name="country">

                            <option selected>--Select Country--</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                            <option value="india">India</option>

                        </select>

                        <textarea rows="10" maxlength="1000" required placeholder="Message"></textarea>

                        <div class="div-updates">
                            <input type="checkbox" id="updates" name="updates">
                            <label for="updates"> Join our Newsletter  </label>
                        </div>

                        <div>
                            <input type="submit" class="submit-button" value="Send">
                        </div>

                    </div>

                </form>

            </div>

            <div class="column-contact">

                <h1>Store Location</h1>

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22375.02794640811!2d-73.57510918918162!3d45.492391520667546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a4435da3acd%3A0x939728f7cce618c9!2sEB%20Games!5e0!3m2!1sen!2sca!4v1586803285471!5m2!1sen!2sca"
                    width="600px" height="450px" frameborder="0" style="border:0; margin-top: 50px;" allowfullscreen="" aria-hidden="false"
                    tabindex="0">
                </iframe>

            </div>

        </div>

        <div class="footerblurb">

            <div class="footerblurb-inner">
                <div class="clr"></div>
            </div>

        </div>

<?php $this->load->view('inc/footer.php'); ?>