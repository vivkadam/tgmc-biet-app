<?php
include 'condb.php';
		   $sql = "select * from revaluation";
	if ($result = $con->query($sql)) 
	{
		printf("<br>Select returned %d rows.\n", $result->num_rows);
		echo "<br>";
	} else {
			//Could be many reasons, but most likely the table isn't created yet. init.php will create the table.
			echo "<b>Can't query the database, did you <a href = init.php>Create the table</a> yet?</b>";
		}
		
	echo "<tr>\n";
            while ($property = mysqli_fetch_field($result)) {
                    echo '<th>' .  $property->name . "</th>\n"; //the headings

            }
            echo "<br>\n";

            mysqli_data_seek ( $result, 0 );
            if($result->num_rows == 0){ //nothing in the table
                        echo '<td>Empty!</td>';
            }
                
            while ( $row = mysqli_fetch_row ( $result ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $result ); $i ++) {
                    echo '<td>' . "$row[$i]" . '</td>';
					echo "\n";
                }
                echo "<br>\n";
            }

           $result->close();
            mysqli_close($con);
	
	


?>