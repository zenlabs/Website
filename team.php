<?php include("header.php");?>
<style>
.texblue{
	color: #2B5182;
    font-family: arial;
    font-size: 16px;
    font-style: italic;
    font-weight: bold;
}

#developerscontainer{
	margin-top:277px;
}
	.developerimage{
		float: left;
		height: 249px;
		margin: 0 0 0 31px;
		width: 217px;
	}
	.developerinfo{
		float: left;
		height: 203px;
		margin: 43px 0 0 25px;
		width: 683px;		
	}
		.developerinfonav{
			width:490px;
			height:42px;
		}
			.infonavname{
				width:170px;
				height:42px;
				background-color:#e5e5e5;
				float:left;
				-webkit-border-top-right-radius: 5px;				
				-moz-border-radius-topright: 5px;				
				border-top-right-radius: 5px;
				text-align:center;
				font-size:18px;			
			}
				.developername{
					border-bottom:thin solid #3B82C4;
					width:150px;
					height:22px;
					margin:6px auto;
				}
				.developerposition{
					width:150px;
					height:22px;
					margin:-3px auto;
					font-style:italic;
					font-size:14px;
				}
			.infonavworks{
				width:116px;
				height:26px;
				padding-top:10px;
				background-color:#c9ced2;
				float:left;
				margin:6px 0 0;
				-webkit-border-top-right-radius: 5px;			
				-moz-border-radius-topright: 5px;				
				border-top-right-radius: 5px;
				text-align:center;				
			}
			.infonavweb{
				width:112px;
				padding-top:4px;
				height:27px;
				background-color:#b1b6bc;
				float:left;
				margin:11px 0 0 0;
				-webkit-border-top-right-radius: 5px;			
				-moz-border-radius-topright: 5px;				
				border-top-right-radius: 5px;
				text-align:center;				
			}
			.infonavmail{
				width:90px;
				height:24px;
				background-color:#999ca5;
				float:left;
				margin:18px 0 0 0;
				-webkit-border-top-right-radius: 5px;				
				-moz-border-radius-topright: 5px;				
				border-top-right-radius: 5px;	
				color:#FFF;		
				text-align:center;
			}
		.developerinfobody{
			height: 162px;
			width: 682px;
			background-color:#e5e5e5;
			-webkit-border-top-right-radius: 100px;			
			-moz-border-radius-topright: 100px;		
			border-top-right-radius: 100px;	
			-webkit-border-bottom-right-radius: 100px;			
			-moz-border-radius-bottomright: 100px;		
			border-bottom-right-radius: 100px;		
		}
			.developerinfobodytext{
				height: 120px;
				width: 635px;
				position:absolute;
				margin:18px;
			}
		.separatorprofiles{
			background-image:url(img/blogsepaatorline.png);
			background-repeat:repeat-x;
			height:2px;
			width:800px;
			margin-top:20px;
			float:left;
		}
</style>

<div id="developerscontainer">
    <div>
        <div class="developerimage"><img src="img/picturedeveloper1.png" width="217" height="249" /></div>
        <div class="developerinfo">
            <div class="developerinfonav">
            	<div class="infonavname texblue">
                	<div class="developername">Abraham Barrera</div>
                    <div class="developerposition">Desarrollador</div>
                </div>
                <div class="infonavworks texblue">Trabajos</div>
                <div class="infonavweb texblue">Web</div>
                <div class="infonavmail">@</div>
            </div>
            <div class="developerinfobody">
            	<div class="developerinfobodytext">
                	Desde pequeño le gusto crear cosas, y no descubrio sino hasta la enseñanza media que la programacion de computadores es la mejor forma de crear e innovar.
                    Apasionado por la musica y la computacion mezcla ambas artes en la creacion de melodias y canciones en su tiempo libre. Sus primeras incursiones en la computacion fueron de la mano de las tecnologias microsoft, y aunque muchos crean que es del lado oscuro se considera un Apple fanboy y vibra desarrollando para moviles, aunque tambien desarrolla en otras tecnologias como J2EE y Python, este ultimo con especial apego gracias a la rapidez del desarrollo.                    
                </div>
            </div>
        </div>
        
        <div class="separatorprofiles"></div>
    </div>
</div>

<?php include("footer.php");?>