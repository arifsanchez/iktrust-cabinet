<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo Configure::read('Application.name') ?>IK Trust | <?php echo !empty($title_for_layout) ? $title_for_layout : ''; ?></title>


 <?php 
 		echo $this->Html->meta('icon');

		

	  echo $this->fetch('meta');
	  echo $this->fetch('css');
	  echo $this->fetch('script');
 		
      echo $this->Html->css('prettify.css');
      echo $this->Html->css('style.default.css');
      echo $this->Html->script('prettify.js');
      echo $this->Html->script('jquery-1.8.3.min.js');
      echo $this->Html->script('jquery-ui-1.9.2.min.js');
      echo $this->Html->script('jquery.flot.min.js');
      echo $this->Html->script('jquery.flot.resize.min.js');
      echo $this->Html->script('bootstrap.min.js');
      echo $this->Html->script('jquery.cookie.js');
     echo $this->Html->script('custom.js');
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


.message {
    background: linear-gradient(to bottom, #F6EDBA 0%, #F5E0A8 100%) repeat scroll 0 0 transparent;
    border-color: #E4BF7F;
    color: #9C6C38;
    margin-bottom: 15px;
	text-align:center;
	box-shadow: 0 1px 0 rgba(255, 255, 255, 0.75), 0 1px 0 rgba(255, 255, 255, 0.2) inset;
	font-size:15px;
	padding:6px;

}
</style> 

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->


</head>

<body>

<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <?php echo $this->element('sidebar_register'); ?>
    <!-- END OF LEFT PANEL -->
    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
            <div class="headerright">
            	<!--dropdown-->
                                  
                
                
    			<!--div class="dropdown userinfo">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/page.html">
                    	
				<?php echo __('Hi,').' '.h($var['User']['first_name']).' '.h($var['User']['last_name']); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="editprofile.html"><span class="icon-edit"></span> Edit Profile</a></li>
                        <li><a href=""><span class="icon-wrench"></span> Account Settings</a></li>
                        <li><a href=""><span class="icon-eye-open"></span> Privacy Settings</a></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link('<span class="icon-off"></span> Sign Out',array('controller' => '', 'action' => 'logout'),array('escape' => false)); ?></li>         
                    </ul>
                </div--><!--dropdown-->
    		
            </div><!--headerright-->
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<!--ul class="skins">
                <li><a href="default" class="skin-color default"></a></li>
                <li><a href="orange" class="skin-color orange"></a></li>
                <li><a href="dark" class="skin-color dark"></a></li>
                <li>&nbsp;</li>
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul--><!--skins-->
        	<!--ul class="breadcrumb">
                <li><a href="dashboard.html">Home</a> <span class="divider">/</span></li>
                <li class="active">Dashboard</li>
            </ul-->
        </div><!--breadcrumbwidget-->

        <!--Kandungan dalam-->
		<div class="center">
			<?php echo $this->Session->flash();?>
		</div>
        <?php echo $this->fetch('content'); ?>
        <!--Tamat kandungan dalam-->

    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>
    
   
   <!--footer-->
   <?php echo $this->element('footer'); ?>
   <!-- end footer-->
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
