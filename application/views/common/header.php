<?php

/*
 * Depending on your configurations this header file will be auto-generated
 * Remember to include this header with all the files you create
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <!-- <meta name="viewport" content="initial-scale=1.0, user-scalable=no">!-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title><?php echo $this->config->item('App_Name');  ?></title>
  <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">
  
  <!-- Extra Codiqa features -->
  <link rel="stylesheet" href="codiqa.ext.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

  <!-- Extra Codiqa features -->
 <!-- <script src="https://d10ajoocuyu32n.cloudfront.net/codiqa.ext.js"></script>!-->
   
</head>

<body>
 
       <?php if(!$this->config->item('Nav_Bar')): ?>
        <div data-role="navbar" data-swatch="a"  >
	<ul>
            
            <?php 
            $nav_options = $this->config->item('Nav_Options');
                foreach ($nav_options as $tab_name => $tab_link) {
                    
                   echo '<li><a href=' .$tab_link. 'data-icon="custom" data-iconpos="top" >'.$tab_name. '</a></li>';
                }
            
            ?>
                
        </ul>
        </div> 
    
       <?php endif;  ?>
	     
</body>

</html>
    
    