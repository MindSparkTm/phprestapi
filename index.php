<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>File Upload Widget Flat Resposive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="File Upload Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

</head>
<body>
<div class="uk-navbar">

															<div class="uk-visible-large">
									
<div class="logo-container">
			<a class="tm-logo" href="http://www.mobiotrics.com/website/" title="Mobiotrics" style=" height:48px;">
			<img class="auto-hw-logo" style=" height:48px;" src="http://www.mobiotrics.com/website/images/homePics/logo2.png" alt="Mobiotrics">
		</a>
	
	</div>								</div>
							

							
							
							
														<div class="tm-search uk-align-right uk-visible-large">
								<div class="uk-navbar-content">
<form id="search-122-5b1bfa5c67f1d" class="uk-search" action="/website/index.php" method="post" data-uk-search="{'source': '/website/index.php/component/search/?tmpl=raw&amp;type=json&amp;ordering=&amp;searchphrase=all', 'param': 'searchword', 'msgResultsHeader': 'Search Results', 'msgMoreResults': 'More Results', 'msgNoResults': 'No results found', flipDropdown: 1}">
	
</form>
</div>
							</div>
														
														
							
															<div class="uk-hidden-large tm-logo-small">
							

<h1>MOBIOTRICS FILE UPLOAD WIDGET</h1>

<div class="upload">
			<h3>Select File</h3>
		<div class="login-form">
			<form action="formdata.php" method = "post" enctype="multipart/form-data" >
				<div>
					<span>Id</span>
						<input type="text" name ="userid" id = "userid" class="title" value="Eg: 12345" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Eg: 12345';}" />
				</div>
				<div>
					<span>Name</span>
						<input type="text" name ="username" id="username" class="describe" value="Eg: John" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Eg: John';}" />
				</div>
<div>
<input type="submit" name="submit" value="Create User" />
</div>
			</form>

			<table width="600">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

<tr>
<td width="20%">Select file</td>
<td width="80%"><input type="file" name="file" id="file" /></td>
</tr>

<tr>

<td><input type="submit" name="submit"  /></td>
</tr>


</table>

				<ul>
				<!-- The file uploads will be shown here -->
				</ul>

			</form>
		</div>
			
	<!-- JavaScript Includes -->
		<script src="js/jquery.knob.js"></script>
	<!-- JavaScript Includes -->

	<!-- jQuery File Upload Dependencies -->
		<script src="js/jquery.ui.widget.js"></script>
		<script src="js/jquery.iframe-transport.js"></script>
		<script src="js/jquery.fileupload.js"></script>
	<!-- jQuery File Upload Dependencies -->
		
	<!-- Main JavaScript file -->
		<script src="js/script.js"></script>
	<!-- Main JavaScript file -->
	
</div>

<div class="footer">
     <p>Copyright &copy; 2018 File Upload Widget. All Rights Reserved | Design by <a href="http://www.mobiotrics.com/website/">Mobiotrics</a></p>
</div>
	
<?php


if ( isset($_POST["submit"]) ) {

   if ( isset($_FILES["file"])) {

            //if there was an error uploading the file
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

        }
        else {
                 //Print file details
             echo "Upload: " . $_FILES["file"]["name"] . "<br />";
             echo "Type: " . $_FILES["file"]["type"] . "<br />";
             echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
             echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

                 //if file already exists
             if (file_exists("/home/surajit/Desktop/uploads/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
             }
             else {
                    //Store file in directory "upload" with the name of "uploaded_file.txt"
            $storagename = "uploaded_file.csv";
            move_uploaded_file($_FILES["file"]["tmp_name"], "/home/surajit/Desktop/uploads/" . $storagename);
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";
           

            }
        }
     } else {
             echo "No file selected <br />";
     }
}

?>

</body>
</html>
