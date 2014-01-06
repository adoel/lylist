<!doctype html>
<html lang="en">

	<?php include ('part-head.php') ?>

	<body>

		<header class="header">
			<nav class="navbar">
			   <div class="row">
			      <div class="span-2">
			         <a class="fa fa-arrow-left fa-2x" href="#"></a>
			      </div>
			      <div class="span-8">
			         <h6 class="label title">Ly list</h6>
			         <p>Example Application</p>
			      </div>
			      <div class="span-2">
			         <a href="#" class="fa fa-check fa-2x"></a>
			      </div>
			   </div>
			</nav>
		</header>
		<div class="overlay"></div>
		<div class="container-fluid">
			<div class="wrapper">
				<form style="margin-top: 50px" id="add">
					<div class="row title">
					  <div class="span-11">
					      <input class="label" type="text" placeholder="Input" value="adoel">
					  </div>
					  <div class="span-1">
					      <input class="swipe" type="checkbox" checked />
					  </div>
					</div>
					<div class="row time">
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
					<div class="subtask">
						<div class="row">
							<div class="span-1">
								<a href="add2.php"><i class="fa fa-plus"></i></a>
							</div>
							<div class="span-11">
							  <input type="text" placeholder="Add a subtask">
							</div>
						</div>
						<div class="row">
							<div class="span-12">
								<input type="checkbox" name="one" id="one" />
								<label for="one" class="cek">subtask 1</label>
							</div>
						</div>
						<div class="row">
							<div class="span-12">
								<input type="checkbox" name="two" id="two" />
								<label for="two" class="cek">subtask 2</label>
							</div>
						</div>
					</div>
					<div class="row">
					  <div class="span-1">
					     <label><i class="fa fa-edit fa-2x"></i></label>
					  </div>
					  <div class="span-11">
					     <textarea placeholder="note"></textarea>
					  </div>
					</div>
					<input type="reset" value="Reset">
				</form>
			</div>
		</div>
		
		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>

			