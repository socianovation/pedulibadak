<?php $this->load->view('templates/header_view'); ?>
<div class="grey-section pt20 list-page-container">
<div class="grey-section pt20 list-page-container">
	<div class="container container-p20 list-page-title tac">
        <div class="blog-title fwb">
            GALLERY
        </div>
    </div>
	<div class="container container-p40">
		<div class="row card-container">
            <?php foreach($gallery as $g) { ?>
                <div class="col-sm-6 col-md-4 card-item-col">
                    <div class="card-item">
                        <?php if($g['type'] == "image") { ?>
                        <div class="card-item-img" style="background-image: url('<?php echo $g['source']?>')"></div>
                        <div class="clearfix card-border">
                            <a href="detail.html" class="card-item-link fwb ttu p20 dib">
                                Lihat gambar
                                <i class="fa fa-long-arrow-right ml5"></i>
                            </a>
                        </div>
                        <?php } ?>

                        <?php if($g['type'] == "video") { ?>
                        <div class="card-item-img" style="background-image: url('<?php echo $g['source']?>')"></div>
                        <div class="clearfix card-border">
                            <a href="detail.html" class="card-item-link fwb ttu p20 dib">
                                Lihat video
                                <i class="fa fa-long-arrow-right ml5"></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
		</div>
	</div>
</div>
<div class="blog-section" style="background-image: url('<?php echo base_url(); ?>assets/images/img-tips.png')">
	<div class="container">
		<div class="row tac">
			<div class="blog-title fwb">
				BADAK
			</div>
			<div class="fwb fz20">
					Save the Rhino International’s vision is for all five rhino species to thrive in the wild for future generations.
			</div>
		</div>
		<div class="row tac mt40">
			<a href="page.html" class="btn btn-arrow-white fwb ttu">
				Read tips
				<i class="fa fa-long-arrow-right"></i>
			</a>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer_view'); ?>