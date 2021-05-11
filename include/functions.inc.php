<?php
function displayGraph ($result, $mutations){

while ($row= mysql_fetch_array($result))
		{
			$percent1=round((($row["COUNT(*)"]/$mutations)*100),2);
			$percent2=(string)$percent1;
			if ($percent2<10){
			$percentage=substr($percent2, 0, 3); 
			}
			else{
			$percentage=substr($percent2, 0, 4); 
			}
			
			$width = $percentage /100 * 300;
			$width = (int)$width;
			
			if (( $row["object"] =="") || ($row["object"] == "-")|| ($row["object"] == "NA")){
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">Undefined</td>";
				}
			else {
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">" . $row["object"] . "</td>";
			}
			
			echo "<td id=\"table_dis\" width = \"300\"><img src=\"images/bar.jpg\" width =\"" . $width . "\" height = \"15\"></td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $row["COUNT(*)"]  . "</td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $percentage . "%</td></tr>";
		}
			echo "</table></div>";
}

function displayGrapht ($result, $patients){
		
while ($row= mysql_fetch_array($result))
		{
			$percentage1 = round(($row["COUNT(*)"] / $patients *100),2);
			$percentage2=(string)$percentage1;
			if ($percentage2<10){
			$percentage=substr($percentage2,0,3);
			}
			else{
			$percentage=substr($percentage2,0,4);
			}
			
			$width = $percentage /100 * 300;
			$width = (int)$width;
			
			if (( $row["object"] =="") || ($row["object"] == "-")|| ($row["object"] == "NA")){
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">Undefined</td>";
				}
			else {
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">" . $row["object"] . "</td>";
			}
			
			echo "<td id=\"table_dis\" width = \"300\"><img src=\"images/bar.jpg\" width =\"" . $width . "\" height = \"15\"></td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $row["COUNT(*)"]  . "</td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $percentage . "%</td></tr>";
		}
			echo "</table></div>";
}

function displayGraphLong ($result, $mutations){

while ($row= mysql_fetch_array($result))
		{
			$percent1=((($row["COUNT(*)"]/$mutations)*100));
			$percent2=(string)$percent1;
			if ($percent2<10){
			$percentage=substr($percent2, 0, 3); 
			}
			else{
			$percentage=substr($percent2, 0, 4); 
			}
			
			$width = $percentage /100 * 300;
			$width = (int)$width;
			
			if (( $row["object"] =="") || ($row["object"] == "-")|| ($row["object"] == "NA")){
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">Undefined</td>";
				}
			else {
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">" . $row["object"] . "</td>";
			}
			
			echo "<td id=\"table_dis\" width = \"300\"><img src=\"images/bar.jpg\" width =\"" . $width . "\" height = \"15\"></td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $row["COUNT(*)"]  . "</td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $percentage . "%</td></tr>";
		}
			echo "</table></div>";
}

function displayGraphDomain ($result, $patients){
		
while ($row= mysql_fetch_array($result))
		{
			$percentage1 = round(($row["COUNT(*)"] / $patients *100),2);
			$percentage2=(string)$percentage1;
			if ($percentage2<10){
			$percentage=substr($percentage2,0,3);
			}
			else{
			$percentage=substr($percentage2,0,4);
			}
			
			$width = $percentage /100 * 300;
			$width = (int)$width;
			
			if (( $row["object"] ==" ") || ($row["object"] == "")){
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">Splices, Large Deletions etc.</td>";
				}
			elseif( $row["object"] =="a 1"){
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\"><i>a1</i></td>";
				}
			elseif( $row["object"] =="a 2"){
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\"><i>a2</i></td>";
				}
			elseif( $row["object"] =="a 3"){
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\"><i>a3</i></td>";
				}	
			else {
				echo "<tr align=\"left\" id=\"table_dis\"> <td id=\"table_dis\" width = \"300\">" . $row["object"] . "</td>";
			}
			
			echo "<td id=\"table_dis\" width = \"300\"><img src=\"images/bar.jpg\" width =\"" . $width . "\" height = \"15\"></td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $row["COUNT(*)"]  . "</td>";
			echo "<td id=\"table_dis\" align = \"center\">" . $percentage . "%</td></tr>";
		}
			echo "</table></div>";
}

function bgcolor($aa){
	$color="";
	if($aa<=20){
		$color="#FFFFFF";
	}
	elseif($aa<=60){
		$color="lightpink";
	}
	elseif($aa<=105){
		$color="#FFCCFF";
	}
	elseif($aa >= 106 && $aa<=142){
		$color="wheat";
	}
	elseif($aa >= 143 && $aa<=146){
		$color="";
	}
	elseif($aa >= 147 && $aa<=188){
		$color="#CCFFFF";
	}
	elseif($aa >= 188 && $aa<=212){
		$color="#FFFFFF";
	}
	elseif($aa >= 213 && $aa<=466){
		$color="lightgreen";
	}
	else{
		$color="#FFFFFF";
	}
	return $color;
}

?>
