<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    	<title>Zenlabs</title>
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
        
        <script>
			$(document).ready(function(){
				$(".menuheader").hover(					
					function(){
						var objas=$(this).attr("obj");
						$("#"+objas).css("opacity",1);			
					},
					function(){
						var objas=$(this).attr("obj");
						$("#"+objas).css("opacity",0);					
					}
				);
			});			
		</script>                        
    </head>
	<body>   
    	<div id="mainwrapper">
        	<div id="headerwrapper">  
            	<div id="headertopcontainer">
                	<a class="logocontainer" href="index.php"><img src="img/zenlabslogo2.png" width="169" height="61" /></a>                	
                    <div id="sociallinks"><img src="img/logofbtw.png" width="78" height="37" /></div>
                </div> 
                <div id="shadowlayerscontainer">
                	<div id="shadowwe">&nbsp;</div>
                    <div id="shadowworks">&nbsp;</div>
                    <div id="shadowblog">&nbsp;</div>
                    <div id="shadowcontact">&nbsp;</div>
                </div>
                <div id="headerbottomcontainer"> 
                    <div class="pagecomment" id="pagecomment">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Somos una empresa de desarrollo de software, que<br /> 
                        &nbsp;&nbsp;&nbsp;&nbsp;cree que mas importante que los procesos y las<br /> 
                        herramientas son el talento y la motivacion de<br /> 
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; su gente
                    </div>
                    <a obj="shadowcontact" href="contact.php" class="menutextblue menuheader" id="menucontacts">Contact</a>
                    <a obj="shadowblog" href="blog.php" class="menutextblue menuheader" id="menublogs">Blogs</a>
                    <a obj="shadowworks" href="works.php" class="menutextblue menuheader" id="menuworks">Trabajos</a>
                    <a obj="shadowwe" href="team.php" class="menutextblue menuheader" id="menuwe">Nosotros</a>  
                    <a obj="" href="index.php" class="zenlabsicon menuheader"><img src="img/zenlabsicon.png" width="20" height="22" /></a>                                
                </div>   
                 <!--<div id="blueshadowcontainer"> 
                    <div class="menutextblue" id="blueshadowcontacts"></div>   
                    <div class="menutextblue" id="blueshadowblogs"></div> 
                    <div class="menutextblue" id="blueshadowworks"></div>  
                    <div class="menutextblue" id="blueshadowwe"></div>                                      
                </div>  -->                        
            </div>
            <div id="bodywrapper">
       	
       