<?php $this->load->view('templates/header_view'); ?>
<div id="hero" class="container">
	<div class="row">
		<div class="col-lg-6 tac mb40">
			<div class="fz44 fwb ttu">Peduli badak</div>
			<div class="fz20 fwb ttu c-primary">peduli populasi</div>
			<br>
			<p class="ff-times tti lpn fsi fz18">
			Menyelamatkan visi Rhino International adalah agar kelima spesies badak berkembang dengan pesat di masa depan untuk generasi mendatang.
			</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="clearfix hidden-md hidden-lg mb20">
		<div class="form-select">
			<select name="" id="" class="form-control fwb">
				<option value="">Cake</option>
				<option value="">Burger</option>
				<option value="">Seafood</option>
				<option value="">Hot drink</option>
				<option value="">Ice</option>
				<option value="">Meat</option>
				<option value="">Cofee</option>
			</select>
			<i class="fa fa-caret-down"></i>
		</div>
	</div>
</div>
<div class="grey-section">
	<div class="container container-p40">
		<div class="row card-container">
			<?php foreach($gallery as $g){ ?>
			<div class="col-sm-6 col-md-4 card-item-col">
				<div class="card-item">
					<div class="card-item-img" style="background:url('<?php echo $g['source']; ?>'); background-position:center; background-size:100%;">
						
					</div>
					<a href="#" class="card-item-title p20">
						<div class="fwb ttu fz18">
							<?php echo $g['title']; ?>
						</div>
					</a>
					<div class="card-item-author fsi ff-times p20 fz16">
						<?php echo $g['description']; ?>
					</div>
				</div>
			</div>
			<?php } ?>
	</div>
</div>
<div class="blog-section" style="background-image: url('<?php echo base_url(); ?>assets/images/img-tips.png')">
	<div class="container">
		<div class="row tac">
			<div class="blog-title fwb">
				BADAK
			</div>
			<div class="fwb fz20 txt-red">
				Selamatkan Badak
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('templates/footer_view'); ?>