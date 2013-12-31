<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<?php include ('part-header.php') ?>
		
		<div class="container-fluid">
			<div class="wrapper">
				<form style="margin-top: 50px">
				    <div class="row title">
				      <div class="span-10">
				          <input class="label" type="text" placeholder="Input" value="adoel">
				      </div>
				      <div class="span-2">
				      	<ul>
				      		<li>
					          <i class="fa fa-star"></i>
					          <ul>
					          	<li><i class="fa low fa-star"></i></li>
					          	<li><i class="fa urgent fa-star"></i></li>
					          </ul>
				      		</li>
				      	</ul>
				      </div>
				    </div>
				    <div class="row">
				    	<div class="span-1">
				    		<i class="fa fa-calendar"></i>
				    	</div>
						<div class="span-5">
							<input type="date" placeholder="Input">
						</div>
				    	<div class="span-1">
				    		<i class="fa fa-bell-o"></i>
				    	</div>
						<div class="span-5">
							<input type="time" placeholder="Input">
						</div>
				    </div>				    
				    <div class="row subtask">
						<div class="span-1">
							<a href="add2.php"><i class="fa fa-plus"></i></a>
						</div>
						<div class="span-11">
							<input type="text" placeholder="Add a subtask">
						</div>
						<div class="row">
							<div class="span-1">
								<a href="add2.php"><i class="fa fa-square-o"></i></a>
							</div>
							<div class="span-11">
								<input type="text" value="adoel">
							</div>
						</div>
				    </div>
				    <div class="row">
			          <div class="span-2">
			             <label><i class="fa fa-edit">&nbsp; Note</i></label>
			          </div>
			          <div class="span-10">
			             <textarea placeholder="textarea"></textarea>
			          </div>
				    </div>
			      <input type="submit" value="Submit">
			      <input type="reset" value="Reset">
			      <a href="#" class="button">Back</a>
				</form>
			</div>
		</div>
		
		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>