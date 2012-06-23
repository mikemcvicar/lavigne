<a class="runload" href="http://chadlavigne.com"><h1 id="logo">Chad Lavigne</h1></a>

<div id="sidebar">
	<ul id="menu">
		<li class="clare"><a id="prosc" class="runload" href="<?php bloginfo(url);?>" ><span>OUR</span> WORK</a></li>
		<li class="clare"><a id="clisc" href="#">CLIENTS</a>
			<ul>
				<?php $args = array( 'cat' => '12', 'posts_per_page' => 50 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					echo '<li>';
					echo '<a href="';
					the_permalink();
					echo '" class="runload">';
					the_title();
					echo '</a>';
					echo '</li>';
				endwhile;
				wp_reset_query();
				?>
			</ul>
		</li>
		<li class="trade"><a id="prosc" class="runload" href="<?php bloginfo(url);?>/case-studies" >CASE STUDIES</a></li>
		<li class="clare"><a id="consc" class="runload" href="<?php bloginfo(url);?>/contact">CONTACT</a></li>
		<li class="trade"><a id="plasc" class="runload" href="<?php bloginfo(url);?>/press/press">PRESS</a></li>
		<li class="clare"><a id="plasc" class="runload" href="<?php bloginfo(url);?>/bios">BIOS</a></li>
		<li class="trade"><a id="plasc" class="runload" href="<?php bloginfo(url);?>/play">PLAY</a></li>
	</ul>
		
	<p><span class="clare">401 BROADWAY</span><br>
	<span class="trade">SUITE 1800</span><br>
	<span class="clare">NEW YORK, NY 10013</span></p>
	
	<p><span class="trade">(P) 212.625.2300</span><br>
	<span class="clare">(F) 212.625.2324</span></p>
	
	<p><span class="trade">GENERAL INQUIRIES</span><br>
	<span class="trade" id="noborder">E-MAIL:</span><br>
	<span class="clare">
	<a href="mailto:info@chadlavigne.com">info@chadlavigne.com</a></span></p>
	<div></div>

	</div>
