<?php $this->load->view('inc/header.php'); ?>

        <div class="feature"></div>
        <?php if($this->session->flashdata('add')){ ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('add'); ?>
        </div>
        <?php }?>

        <div class="container">
            <img src="<?php echo base_url();?>assets/images/faccryCover.jpg" alt="Far Cry 5" style="width:100%;">
        </div>

        <?php if(!empty($products)){?>
        <?php foreach($products as $p ){?>
        <div class="row">
            <div class="columnProduct">

                <img src="<?php echo base_url(); ?>uploads/<?php echo $p->pro_pic; ?>" width="70%" class="center">
                <h1 class="center"><?php echo $p->pro_name; ?></h1>
                <h3 class="center">Release Date : <font style="color: teal;"><?php echo $p->rrelease; ?></font></h3>
                <h3 class="center">Type : <font style="color: teal;"><?php echo $p->type; ?></font></h3>
                <h2 class="center" style="color: orange; font-size: 3vw;">C$ <?php echo $p->pro_price; ?></h2>

                <div class="center">
                    <button class="edition-button" style="font-size: 15px;">ADD TO CART</button>
                </div>

            </div>

            <div class="columnProduct">

                <h2>Description</h2>
                <p style="color: black; font-size: 1vw;">
                <?php echo $p->pro_details; ?>
                </p>

                <h2 style="padding-top: 20px;">Edition</h2>
                <button class="edition-button" style="font-size: 15px;">Standard Edition</button>
                <button class="edition-button-simple" style="font-size: 15px;">Digital Deluxe Edition</button>
                <button class="edition-button-simple" style="font-size: 15px;">Gold Edition</button>

                <h2 style="padding-top: 30px;">Platform</h2>
                <button class="edition-button" style="font-size: 15px;">PC (Download)</button>
                <button class="edition-button-simple" style="font-size: 15px;">PS4</button>
                <button class="edition-button-simple" style="font-size: 15px;">Xbox One</button>
            </div>

            <div class="columnProduct">
                <h2>System Requirements : </h2>

                <div class="boxed">

                    <h2>MINIMUM:</h2>

                    <ul>
                        <li>OS: <font style="color: black;"> <?php echo $p->mos; ?> </font></li>
                        <li>Processor: <font style="color: black;"> <?php echo $p->mprocessor; ?> </font></li>
                        <li>Graphics: <font style="color: black;"> <?php echo $p->mgraphics; ?> </font></li>
                        <li>System RAM: <font style="color: black;"> <?php echo $p->mram; ?> </font></li>
                        <li>Resoltuion: <font style="color: black;"> <?php echo $p->mresoltuion; ?> </font></li>
                        <li>Video Preset: <font style="color: black;"> <?php echo $p->mvideo; ?> </font></li>
                    </ul>

                    <h2>RECOMMENDED:</h2>

                    <ul>
                        <li>OS: <font style="color: black;"> <?php echo $p->ros; ?> </font></li>
                        <li>Processor: <font style="color: black;"> <?php echo $p->rprocessor; ?> </font></li>
                        <li>Graphics: <font style="color: black;"> <?php echo $p->rgraphics; ?> </font></li>
                        <li>System RAM: <font style="color: black;"> <?php echo $p->rram; ?> </font></li>
                        <li>Resoltuion: <font style="color: black;"> <?php echo $p->rresoltuion; ?> </font></li>
                        <li>Video Preset: <font style="color: black;"> <?php echo $p->rvideo; ?> </font></li>
                    </ul>

                </div>
            </div>

        </div>
        <?php } ?>
        <?php } ?>

        <div class="footerblurb">

            <div class="footerblurb-inner">
                <div class="clr"></div>
            </div>

        </div>

<?php $this->load->view('inc/footer.php'); ?>