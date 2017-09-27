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
        <h2>News_events List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id</th>
		<th>Title</th>
		<th>Content</th>
		<th>Type</th>
		
            </tr><?php
            foreach ($news_events_data as $news_events)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $news_events->id ?></td>
		      <td><?php echo $news_events->title ?></td>
		      <td><?php echo $news_events->content ?></td>
		      <td><?php echo $news_events->type ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>