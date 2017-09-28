<?php $this->load->view('templates/header_view'); ?>


<div class="container">
    <div class="row content-head">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="content-title">
                <?php echo $about['title'];?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="article mb40">
                <?php echo $about['content'];?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('templates/footer_view'); ?>