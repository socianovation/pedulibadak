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
        <h2>Contact List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Email</th>
		<th>Message</th>
		<th>Created At</th>
		
            </tr><?php
            foreach ($contact_data as $contact)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $contact->email ?></td>
		      <td><?php echo $contact->message ?></td>
		      <td><?php echo $contact->created_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>