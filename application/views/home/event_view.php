<?php $this->load->view('templates/header_view'); ?>
<div class="container">
    <div class="row content-head">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="content-title">
                Events
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="article mb40">
                <h2><b><?php echo $event[0]['title']; ?></b></h2><br/>
                <?php echo $event[0]['content']; ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="sidebar">
                <?php for($a = 1; $a < count($event); $a++) {?>
                <h3 class="fwb txt-red ttu mb40 mt0">
                    <?php echo $event[$a]['title']; ?>
                </h3>
                <div class="sidebar-item mb40">
                    <h3 class="fwb ttu mb20">Cras ultricies ligula sed magna</h3>
                    <?php echo substr($event[$a]['content'], 300); ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer_view'); ?>