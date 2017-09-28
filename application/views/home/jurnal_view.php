<?php $this->load->view('templates/header_view'); ?>
<div class="container">
    <div class="row content-head">
        <div class="col-md-10 col-md-offset-1">
            <h1 class="content-title">
                JURNAL BADAK
            </h1>
            <div class="content-sub-title">
                Temukan yang anda cari disini
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        
        <?php for ($i=0; $i < count($journal); $i++) :?>
        
            <div class="article mb40">                

                <h3 style="border-bottom:1px solid #cccccc"><?php echo $journal[$i]['title'];?></h3><br>                
                <p>
                    <?php echo $journal[$i]['content'];?>
                </p>                
            </div>        
        <?php endfor;?>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer_view'); ?>