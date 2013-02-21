<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>IKtrust Cabinet</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />

 <?php 
 		echo $this->Html->meta('icon');

		

	  echo $this->fetch('meta');
	  echo $this->fetch('css');
	  echo $this->fetch('script');
 		
      echo $this->Html->css('bootstrap.css');
      echo $this->Html->css('prettify.css');
      echo $this->Html->js('prettify.js');
      echo $this->Html->js('jquery-1.8.3.min.js');
      echo $this->Html->js('jquery-ui-1.9.2.min.js');
      echo $this->Html->js('jquery.flot.min.js');
      echo $this->Html->js('jquery.flot.resize.min.js');
      echo $this->Html->js('bootstrap.min.js');
      echo $this->Html->js('jquery.cookie.js');
      echo $this->Html->js('custom.js');
?>
<style type="text/css" media="all">
.frm {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11px;
    font-weight: bold;
    color: #164BA0;
    background-color: #D1D1D1;
    border: 1px solid #83AAD3;
}
</style> 

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->


</head>

<body>

<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
    	
        <div class="logopanel">
        	
        	        	 
        	<h1><a class="brand" href="#"><?php echo $this->Html->image('inner/logo.png', array('alt' => 'Trust XE Logo'));?></a></h1>
        </div><!--logopanel-->
        
        <div class="datewidget">Now
        		<script type="text/javascript">
	        		
					var currentTime = new Date()
					var hours = currentTime.getHours()
					var minutes = currentTime.getMinutes()
				
					if (minutes < 10)
					minutes = "0" + minutes
				
					var suffix = "AM";
					if (hours >= 12) {
					suffix = "PM";
					hours = hours - 12;
					}
					if (hours == 0) {
					hours = 12;
					}
				
					document.write("<small><font color='CCCCCC' face='Arial'><b>" + hours + ":" + minutes + " " + suffix + "</b></font></small>")
				//-->
				</script>
	        	<script>
					/*Current date script credit: 
					JavaScript Kit (www.javascriptkit.com)
					Over 200+ free scripts here!
					*/
					
					var mydate=new Date()
					var year=mydate.getYear()
					if (year < 1000)
					year+=1900
					var day=mydate.getDay()
					var month=mydate.getMonth()
					var daym=mydate.getDate()
					if (daym<10)
					daym="0"+daym
					var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
					var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
					document.write("<small><font color='CCCCCC' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"</b></font></small>")
				</script>

		</div>							    
    	<div class="searchwidget">
        	<form action="results.html" method="post">
            	<div class="input-append">
                    <input type="text" class="span2 search-query" placeholder="Search here...">
                    <button type="submit" class="btn"><span class="icon-search"></span></button>
                </div>
            </form>
        </div><!--searchwidget-->
        
        <!--div class="plainwidget">
        	<small>Using 16.8 GB of your 51.7 GB </small>
        	<div class="progress progress-info">
                <div class="bar" style="width: 20%"></div>
            </div>
            <small><strong>38% full</strong></small>
        </div--><!--plainwidget-->
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
                <li class="active"><a href="#"><span class="icon-user"></span> My Accounts</a></li>
                <li><a href="#"><span class="icon-briefcase"></span> My Profile</a></li>
                <li><a href="#"><span class="icon-arrow-up"></span> Deposit Funds</a></li>
                <li><a href="#"><span class="icon-arrow-down"></span> Withdraw Funds</a></li>
                <li><a href="#"><span class="iconsweets-download2"></span> Platform Downloads</a></li>
                
            </ul>
        </div><!--leftmenu-->
        
    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->
    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
            <div class="headerright">
            	<!--dropdown-->
                   
                
                
                
    			<div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">Hi, User! <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href=""><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href=""><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="index.html"><span class="icon-off"></span> Sign Out</a></li>
                    </ul>
                </div><!--dropdown-->
    		
            </div><!--headerright-->
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<ul class="breadcrumb">
                <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Dashboard</li>
            </ul>
        </div><!--breadcrumbwidget-->

        <!--Kandungan dalam-->
        <?php echo $this->fetch('content'); ?>
        <!--Tamat kandungan dalam-->

    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>
    
    <div class="footer">
    	<div class="footerleft">&copy; 2012 iktrust.com</div>
    	<div class="footerright"><a href="#">Legal information</a> | <a href="#">Privacy Policy</a> | <a href="#">Risk Disclosure</a></div>
    </div><!--footer-->

    
</div><!--mainwrapper-->
<script type="text/javascript">
jQuery(document).ready(function(){
								
		// basic chart
		var flash = [[0, 2], [1, 6], [2,3], [3, 8], [4, 5], [5, 13], [6, 8]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];
			
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
	
			
		var plot = jQuery.plot(jQuery("#chartplace2"),
			   [ { data: flash, label: "Flash(x)", color: "#fb6409"}, { data: html5, label: "HTML5(x)", color: "#096afb"} ], {
				   series: {
					   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
					   points: { show: true }
				   },
				   legend: { position: 'nw'},
				   grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
				   yaxis: { min: 0, max: 15 }
				 });
		
		var previousPoint = null;
		jQuery("#chartplace2").bind("plothover", function (event, pos, item) {
			jQuery("#x").text(pos.x.toFixed(2));
			jQuery("#y").text(pos.y.toFixed(2));
			
			if(item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
						
					jQuery("#tooltip").remove();
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
						
					showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
				}
			
			} else {
			   jQuery("#tooltip").remove();
			   previousPoint = null;            
			}
		
		});
		
		jQuery("#chartplace2").bind("plotclick", function (event, pos, item) {
			if (item) {
				jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});


		// bar graph
		var d2 = [];
		for (var i = 0; i <= 10; i += 1)
			d2.push([i, parseInt(Math.random() * 30)]);
			
		var stack = 0, bars = true, lines = false, steps = false;
		jQuery.plot(jQuery("#bargraph2"), [ d2 ], {
			series: {
				stack: stack,
				lines: { show: lines, fill: true, steps: steps },
				bars: { show: bars, barWidth: 0.6 }
			},
			grid: { hoverable: true, clickable: true, borderColor: '#bbb', borderWidth: 1, labelMargin: 10 },
			colors: ["#06c"]
		});
		
		// calendar
		jQuery('#calendar').datepicker();


});
</script>
</body>
</html>
