<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Survey Form</title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>	
        <div class='row'>
        	<div class='col-md-4 col-md-offset-4 success'>
        		<p>Thanks for submitting this form! You have submitted this form <?= $count ?> times now.</p>
        	</div>
        	<div class='col-md-4 col-md-offset-4 info'>
        		<table class="table_info">
        			<tr>
        				<th colspan='2'>Submtted Information</th>
        			</tr>
        			<tr>
        				<td>Name:</td>
        				<td><?= $name ?></td>
        			</tr>
        			<tr>
        				<td>Dojo Location</td>
        				<td><?= $location?></td>
        			</tr>
        			<tr>
        				<td>Favorite Language:</td>
        				<td><?= $language ?></td>
        			</tr>
        			<tr>
        				<td>Comment:</td>
        				<td><?= $comment?></td>
        			</tr>
        			<tr>
        			</tr>
        			<tr>
        				<td colspan='2' style='text-align: right'><a href="main/go_back">Go Back</a></td>
        			</tr>
        		</table>
        	</div>
        </div>
    </body>
</html>