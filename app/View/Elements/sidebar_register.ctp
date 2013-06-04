<div class="leftpanel">
    	
        <div class="logopanel">
        	
        	        	 
        <h1><span class="brand"><?php echo $this->Html->image('inner/logo.png', array('alt' => 'IK Trust Cabinet', 'url' => array('controller' => 'cabinets', 'action' => 'login')));?></span></h1>
	
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
					var montharray=new Array("Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec")
					document.write("<small><font color='CCCCCC' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"</b></font></small>")
				</script>

		</div>							    
    	<!--div class="searchwidget">
        	<form action="results.html" method="post">
            	<div class="input-append">
                    <input type="text" class="span2 search-query" placeholder="Search here...">
                    <button type="submit" class="btn"><span class="icon-search"></span></button>
                </div>
            </form>
        </div--> <!--searchwidget tak guna-->
        
        <!--div class="plainwidget">
        	        <ul class="nav nav-tabs nav-stacked samplenavs">
	        	        <li class="active">
	        	        <a href="#"><i class="icon-home"></i>Home</a>
	        	        </li>
	        	        <li>
	        	        <a href="#"><i class="icon-user"></i>Profile</a>
	        	        </li>
	        	    </ul>        
	   </div-->
	   <!--plainwidget-->
        
     
    
        
     <div class="leftmenu"> 
	 <li class="nav-header">Main Navigation</li>
	 <?php
		 
				$menu = array(
								'options'=>array('class'=>'nav nav-tabs nav-stacked'),
								'items'=>	array(
											array('title'=>'Go to home',  'url'=> 'http://www.iktrust.com'),
											array('title'=>'Log In Cabinet',  'url'=> array('controller'=>'cabinets', 'action'=>'login')),
											array('title'=>'Register Now',  'url'=> array('controller'=>'cabinets', 'action'=>'register')),
											array('title'=>'Support Centre',  'url'=> 'http://support.iktrust.com'),
										
										),
									);
								 
		
		//debug($menu);die();
		echo $this->Menu->render($menu);
		?>

		<li class="nav-header">Public Services</li>
		<?php
			 
			$menu = array(
				'options'=>array('class'=>'nav nav-tabs nav-stacked'),
				'items'=>	array(
							array('title'=>'Check Balance',  'url'=> array('controller'=>'cabinets', 'action'=>'check_balance')),
							array('title'=>'Live Quotes',  'url'=> array('controller'=>'mt4_prices', 'action'=>'quotes')),		
							array('title'=>'Top Traders',  'url'=> array('controller'=>'mt4_users', 'action'=>'top_traders')),	
						),
					);
			//debug($menu);die();
			echo $this->Menu->render($menu);
			?>
           <!-- <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
                <li class="active"><a href="#"><span class="icon-user"></span> My Accounts</a></li>
                <li><a href="#"><span class="icon-briefcase"></span> My Profile</a></li>
                <li><a href="#"><span class="icon-arrow-up"></span> Deposit Funds</a></li>
                <li><a href="#"><span class="icon-arrow-down"></span> Withdraw Funds</a></li>
                <li><a href="#"><span class="iconsweets-download2"></span> Platform Downloads</a></li>
                
            </ul>-->
			
			<li class="nav-header">Partnership</li>
			 <?php
				 
						$menu = array(
										'options'=>array('class'=>'nav nav-tabs nav-stacked'),
										'items'=>	array(
													array('title'=>'Register Affilliate',  'url'=> array('controller'=>'cabinets', 'action'=>'affilliate')),
												),
											);
										 
				
				//debug($menu);die();
				echo $this->Menu->render($menu);
				?>
        </div><!--leftmenu-->
    </div><!--mainleft-->
