<?php 
    $walker_page = new Walker_Page_Kd();
?>
<div class="head-navs fixed-top bg-inverse">
    <header class="navbar navbar-toggleable-md navbar-inverse ">
    	<!--<ul class="nav navbar-nav">
                <li class="nav-item"></li>
            </ul>-->        
    		<a class="navbar-brand" id="cric-logo" href="/"><?php echo get_bloginfo('name');?></a>
    	
          <button class="navbar-toggler navbar-toggleable-sm navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
          
          <div class="navbar-collapse collapse" id="navbarsExampleDefault" aria-expanded="false" style="">
          	<?php echo '<ul class="navbar-nav">'.$walker_page->walk(get_pages(), 0).'</ul>';?>
          </div>
    </header>
  </div>
