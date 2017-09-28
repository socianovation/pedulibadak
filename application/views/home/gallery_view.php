<?php $this->load->view('templates/header_view'); ?>
<<div class="grey-section pt20 list-page-container">
<div class="container container-p20 list-page-title tac">
    <div class="blog-title fwb">
        GALLERY
    </div>
</div>
<div class="grey-section">
<div class="container container-p40">
    <div class="row card-container">
        <?php foreach($gallery as $g){ ?>
        <div class="col-sm-6 col-md-4 card-item-col">
            <div class="card-item">
                <div class="card-item-img" style="background:url('<?php echo $g['source']; ?>'); background-position:center; background-size:100%;">
                    <i class="fa fa-image img-empty"></i>
                </div>
                <a href="page.html" class="card-item-title p20">
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
</div>
<div class="blog-section" style="background-image: url('images/img-tips.png')">
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
    <iframe width="560" height="315" src="https://www.youtube.com/embed/GtLuEu4gaHw" frameborder="0" allowfullscreen></iframe>
    <br>
    </div>
</div>
</div>