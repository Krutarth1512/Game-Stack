<?php $this->load->view('inc/header.php'); ?>
<style>
    table.container {
    width: 70%;
    padding: 50px;
    margin: 70px auto;
    border: 3px solid #38b174;
}
tr.border {
    font-size: 20px;
}
.edit{
    font-size: 20px;
    color: darkgreen;
}
</style>

        <div class="feature"></div>

        <div>
            <h1 style="text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; padding-top: 20px;">Cart List</h1>
        </div>

        <table class="container">
            <tr class="border">
                <th></th>
                <th>P ID</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            <tr class="edit">
                <td><img src="<?php echo base_url();?>assets/images/odysseyHome.jpg" width="40px" alt=""></td>
                <td>1</td>
                <td>GTA 5</td>
                <td>C$. 29.00</td>
            </tr>
            <tr class="edit">
                <td><img src="<?php echo base_url();?>assets/images/odysseyHome.jpg" width="40px" alt=""></td>
                <td>1</td>
                <td>GTA 5</td>
                <td>C$. 29.00</td>
            </tr>
            <tr class="edit">
                <td><img src="<?php echo base_url();?>assets/images/odysseyHome.jpg" width="40px" alt=""></td>
                <td>1</td>
                <td>GTA 5</td>
                <td>C$. 29.00</td>
            </tr>
        </table>

        <div class="footerblurb">

<div class="footerblurb-inner">
    <div class="clr"></div>
</div>

</div>

<?php $this->load->view('inc/footer.php'); ?>