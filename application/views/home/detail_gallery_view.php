<?php $this->load->view('templates/header_view'); ?>
<div class="container">
    <div class="row content-head">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="content-title">
                <?php echo $gallery['title']; ?>
            </h1>
            <div class="mt40">
                <?php if($gallery['source'] == 'image') {?>
                <img src="<?php echo $gallery['source']?>" alt="" class="img-responsive">
                <?php }else{ ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GtLuEu4gaHw" frameborder="0" allowfullscreen></iframe>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer_view'); ?>