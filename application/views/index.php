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
		<div class="row">
	       	<form class='col-md-4 col-md-offset-4 form-group' action="/results/surveys" method="post">
	        	<table class='table_inp'> 
	        		<tr>
	        			<td>Your Name:</td>
	        			<td><input type="text" name='name'></td>
	        		</tr>
	        		<tr>
	        			<td>Dojo Location:</td>
	        			<td>
	        				<select name='location' class='input-group'>
	        					<option>Silicon Valley</option>
	        					<option>Mountain View</option>
	        					<option>Seattle</option>
	        				</select>
	        			</td>
	        		</tr>
	        		<tr>
	        			<td>Favorite Language:</td>
	        			<td>
	        				<select name='language'>
	        					<option>Javascript</option>
	        					<option>PHP</option>
	        					<option>Ruby</option>
	        				</select>
	        			</td>
	        		</tr>
	        		<tr>
	        			<td>Comment(optional):</td>
	        		</tr>
	        		<tr>
	        			<td colspan='2'><textarea name='comment' class="form-control" rows="3"></textarea></td>
	        		</tr>
	        		<tr>
	        			<td colspan='2' style="text-align: right"><input type="submit" class='btn btn-success' value="Submit"></td>
	        		</tr>
	        	</table>
			</form>
		</div>
    </body>
</html>