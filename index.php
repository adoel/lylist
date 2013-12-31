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
			         <h6 class="label title">Lie list</h6>
			         <p>Example Application</p>
			      </div>
			      <div class="span-2">
			         <a href="#" class="fa fa-align-justify fa-2x"></a>
			      </div>
			   </div>
			</nav>
		</header>
		<div class="overlay"></div>
		<div class="container-fluid">
			<div class="wrapper">
				<form style="margin-top: 50px">
					<div class="input-button">
						<div class="row add">
						   <div class="span-11">
						      <input type="text">
						   </div>
						   <div class="span-1">
						      <a href="add.php" class="add-taks"><i class="fa fa-plus"></i></a>
						   </div>
						</div>
					</div>
				</form>
				<div class="task">
				</div>
				<ul class="accordion">
 				    <li id="one" class="files"><a href="#one"><input type="checkbox" name="one" id="one" />
								<label for="one" class="cek">subtask 1</label><span>8</span></a>
 				    	<ul class="sub-menu">
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Skydrive</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>FTP Server</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Skydrive</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>FTP Server</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					    </ul>
 				    </li>
				    <li id="two" class="mail"><a href="#two"><em class="fa fa-square-o fa-2x"></em>Mail<span>4</span></a>
 				    	<ul class="sub-menu">
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Skydrive</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>FTP Server</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					    </ul>
 					</li>
				    <li id="three" class="cloud"><a href="#three"><em class="fa fa-square-o fa-2x"></em>Cloud</a>
 					</li>
				    <li id="four" class="sign"><a href="#four"><em class="fa fa-square-o fa-2x urgent"></em>Sign Out<span>8</span></a>
 				    	<ul class="sub-menu">
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Skydrive</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>FTP Server</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Skydrive</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>FTP Server</a></li>
 					        <li><a href="#"><em class="fa fa-square-o fa-2x"></em>Dropbox</a></li>
 					    </ul>
 					</li>
				</ul>
			</div>
		</div>


		
		<?php include ('part-footer.php') ?>

		<?php include ('part-script.php') ?>

	</body>
</html>