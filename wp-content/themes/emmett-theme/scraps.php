        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Galleries
                    </a>
                </li>
		<?php wp_list_pages('exclude=713,114,116,118,282,284,317,320,361,472&title_li' ); ?>
		
		<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Community Arts<b class="caret"></b></a>
                  <ul class="dropdown-menu">
    		            <li class="dropdown-header">Various</li>
                      <?php wp_list_pages('include=116,317,320&title_li' ); ?>
    		            <li class="divider"></li>
                    <li class="dropdown-header">WEA Northern Ireland</li>
    		              <?php wp_list_pages('include=114,118&title_li' ); ?>          
                  </ul>
                </li>

		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Emmett<b class="caret"></b></a>
                  <ul class="dropdown-menu pull-right">
                <?php wp_list_pages('include=713,284,282,361&title_li' ); ?> 
                </ul>
              </li> 

            </ul>
        </div>