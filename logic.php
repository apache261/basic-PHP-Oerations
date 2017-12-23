<?php
	if ($opt == 'add') {
				echo $strt. ' + ' .$end;
					echo '<p> = '.sumNumber($strt,$end).'</p>';
				}
				elseif ($opt == 'sub') {
					echo $strt. ' - ' .$end;
					echo '<p> = '.($strt - $end). '</p>';
					}
				elseif ($opt == 'mult') {
					echo $strt. ' x '. $end;
					echo '<p> = ' .($strt * $end). '</p>';
					}
				elseif ($opt == 'div') {
					echo $strt. ' / '. $end;
					echo '<p> = ' .($strt / $end). '</p>';
					}
				elseif ($opt == 'multable' ) {
					for ($x = 0; $x <= $end ; $x++) {
					echo $strt. ' x ' .$x. ' = ' .($strt * $x);
					echo '<br/>';
							}
					}
					
				elseif ($opt == 'divnum' && $strt <= $end && $fctr > 0 && is_numeric($fctr) ) {
					echo '<p> Numbers divisible by '. $fctr. ' between ' .$strt.  ' to ' .$end. '<br/>';
						
					for ($strt ; $strt <= $end; $strt++ ) {
						
						if ($strt % $fctr == 0) {
							echo '<p>';
							echo $strt;
							echo  '</p>';
							}	
					}
				}
				else {
					echo 'Operation Not match';
					}		
?>