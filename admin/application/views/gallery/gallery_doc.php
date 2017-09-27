<!doctype html>
<html>
    <head>
        <title>SOCIANOVATION - Web Administration</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Gallery List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Title</th>
		<th>Description</th>
		<th>Source</th>
		<th>Type</th>
		
            </tr><?php
            foreach ($gallery_data as $gallery)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $gallery->title ?></td>
		      <td><?php echo $gallery->description ?></td>
		      <td><?php echo $gallery->source ?></td>
		      <td><?php echo $gallery->type ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>