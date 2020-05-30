<?php $this->load->view('inc/header.php'); ?>

        <div class="feature"></div>

        <div>
            <h1 style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; padding-top: 20px;">Most Popular Games</h1>
        </div>

        <div class="row">
            
            <div class="column">
                
                <a href="product1.html" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/farcryHome.jpg" width="75%" title="Far Cry 5" class="center">
                    <h2 class="center">Far Cry 5</h2>
                    <p class="center" style="color: #929db6;">Standard Edition</p>
                    <h2 class="center" style="color: orange;">C$ 20.00</h2>
                    
                </a>

            </div>
            
            <div class="column">

                <a href="product2.html" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/rainbowHome.jpg" width="75%" title="Rainbow Six Siege" class="center">
                    <h2 class="center">Tom Clancy's Rainbow Six Siege</h2>
                    <p class="center" style="color: #929db6;">Standard Edition</p>
                    <h2 class="center" style="color: orange;">C$ 12.00</h2>

                </a>

            </div>

            <div class="column">

                <a href="product3.html" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/odysseyHome.jpg" width="75%" title="Assassin's Creed Odyssey" class="center">
                    <h2 class="center">Assassin's Creed Odyssey</h2>
                    <p class="center" style="color: #929db6;">Standard Edition</p>
                    <h2 class="center" style="color: orange;">C$ 26.40</h2>

                </a>
            </div>

        </div>

        <div class="footerblurb">

            <div class="footerblurb-inner">
                <div class="clr"></div>
            </div>

        </div>

<?php $this->load->view('inc/footer.php'); ?>