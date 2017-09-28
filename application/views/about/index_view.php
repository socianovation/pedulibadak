<?php $this->load->view('templates/header_view'); ?>


<div class="container">
    <div class="row content-head">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="content-title">
                Tentang Kami
            </h1>
        </div>
    </div>
    <div class="row">
		<?php foreach($about as $a) {?>
        <div class="col-md-12">
			<h2><?php echo $a['title']; ?></h2>
            <div class="article mb40">
                <?php echo $a['content'];?>
            </div>
        </div>
		<?php } ?>
    </div>
</div>

<?php $this->load->view('templates/footer_view'); ?>