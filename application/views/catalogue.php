<?php $this->load->view('inc/header.php'); ?>

        <div class="feature"></div>

        <div class="row" style="padding-top: 20px;">
            <?php if(!empty($products)){?>
            <?php foreach($products as $p ){?>
            <div class="columnCatalogue">
                
                <a href="product3.html" style="text-decoration: none;">

                    <img src="<?php echo base_url(); ?>uploads/<?php echo $p->pro_pic; ?>" width="60%" title="Assassin's Creed Odyssey" class="center">
                    <h2 class="center"><?php echo $p->pro_name; ?>y</h2>

                </a>

            </div>
            <?php } ?>
            <?php } ?>

            <!-- <div class="columnCatalogue">
                
                <a href="product3.html" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/odysseyHome.jpg" width="60%" title="Assassin's Creed Odyssey" class="center">
                    <h2 class="center">Assassin's Creed Odyssey</h2>

                </a>

            </div> -->
            
            <div class="columnCatalogue">

                <a href="#" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/legionHome.jpg" width="60%" title="Watch Dogs : Legion" class="center">
                    <h2 class="center">Watch Dogs : Legion</h2>

                </a>

            </div>

            <div class="columnCatalogue">

                <a href="#" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/annoHome.jpg" width="60%" title="Anno 1880" class="center">
                    <h2 class="center">Anno 1880</h2>

                </a>
            </div>

            <div class="columnCatalogue">
                
                <a href="#" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/starlinkHome.jpg" width="60%" title="Starlink : Battle For Atlas" class="center">
                    <h2 class="center">Starlink : Battle For Atlas</h2>
                    
                </a>

            </div>

        </div>

        <div class="row">
            
            <div class="columnCatalogue">

                <a href="#" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/steepHome.jpg" width="60%" title="Steep" class="center">
                    <h2 class="center">Steep</h2>

                </a>

            </div>

            <div class="columnCatalogue">

                <a href="#" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/justdanceHome.jpg" width="60%" title="Just Dance" class="center">
                    <h2 class="center">Just Dance</h2>

                </a>
            </div>

            <div class="columnCatalogue">

                <a href="#" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/trialsHome.jpg" width="60%" title="Trials Rising" class="center">
                    <h2 class="center">Trials Rising</h2>

                </a>
            </div>

            <div class="columnCatalogue">

                <a href="#" style="text-decoration: none;">

                    <img src="<?php echo base_url();?>assets/images/unoHome.jpg" width="60%" title="Uno" class="center">
                    <h2 class="center">Uno</h2>

                </a>
            </div>

        </div>

        <div class="footerblurb">

            <div class="footerblurb-inner">
                <div class="clr"></div>
            </div>

        </div>

<?php $this->load->view('inc/footer.php'); ?>