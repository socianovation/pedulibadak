<?php $this->load->view('templates/header_view'); ?>


<div class="container">
    <div class="row content-head">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="content-title">
                Cras ultricies ligula sed magna dictum porta.
            </h1>
            <div class="content-sub-title">
                SNOW ICHING SUGAR
            </div>
            <div class="content-author ff-times">
                Created by Sarah - 21 Aug 2016
            </div>
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