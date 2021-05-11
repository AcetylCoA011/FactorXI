
				
				<script language="JavaScript" type="text/javascript">
				<!--
					var state = 'none';	
					function showhide(layer_ref){
						if (state == 'block'){
							state = 'none';
											 }
						else {
						state = 'block';
							}
						if (document.all){ //IS IE 4 or 5 (or 6 beta)
							eval( "document.all." + layer_ref + ".style.display = state");
										}
						if (document.layers){ //IS NETSCAPE 4 or below
							document.layers[layer_ref].display = state;
											}
						if (document.getElementById &&!document.all){
							hza = document.getElementById(layer_ref);
							hza.style.display = state;
																	}
												}
				//-->
				</script>

<?
$commands = "select ligand;wireframe 0.16;spacefill 0.5; color cpk ; select all; model 0;set antialiasDisplay true; ;save STATE state_1; select all;  spacefill off; wireframe off; backbone off; cartoon on; color cartoon structure; ";
$extraCommands = "select cys and ( *.ca or sidechain); wireframe 0.3; colour yellow;";
$aa_numb=$line['aa_numb'];
$missense="select $aa_numb AND *.ca; color green; cpk 3.0;";
//echo $missense;
?>
<body>
	<table width="1000px" height="50" class="tabular" border="1px"> 
		<tr> 
			<td width="500px">
				<script type="text/javascript" src="Jmol/Jmol.js"></script>
				<script type="text/javascript">
					if(!navigator.javaEnabled()){
						alert('You must have Java installed and enabled in order to view Jmols.Go to www.java.com to install the latest version of Java.If you are not connected to the internet right now, the Amino Acid Starter Kit contains a file, "Java Version 5.exe" which will install Java on your computer if needed.  If you are on a school network computer, you will need to contact the network administrator for assistance.');
												}
					jmolInitialize("../Jmol");
					jmolCheckBrowser("alert", "Java not present or compatible.", "onClick");
					jmolApplet(500,"load ../Jmol/f9_human.pdb; set defaultStructureDSSP true; set measurementUnits ANGSTROMS;<? echo $commands; ?>;<? echo $missense ?>");
					


				</script>
			</td>

			<td width="500px"> 
				<h3 id='h3heading'> <center> Controls </center> </h3> 
				<p id="index">
					The molecule can be rotated with the mouse holding the left button and the image can be magnified using the middle mouse button.
                   <? 
				   echo " bye" ;
				   echo $line['aa_numb']; 
				   echo "hi";?> 
				</p>
	<br/><br/>
	<h3 id='h3heading'> <center> Options </center> </h3> <br />

			<table width="100% "id="table_dis">
				<tr "id="table_dis">
					<td>	Spacefill	</td>
					<td>
						<script type="text/javascript">
							// a radio group:
								jmolRadioGroup([
									["select all; spacefill off; <?php echo $missense; ?>", "OFF","checked"],
									["select all;spacefill 20%;<?php echo $missense; ?>", "20%"],
									["select all;spacefill 50%", "50%"],
									["select all;spacefill 100%", "100%"]
								]);
								jmolBr();
						</script>
					</td>
				</tr>
		
				<tr "id="table_dis">
					<td>	Cartoon	</td>
					<td>
						<script type="text/javascript">
							//a radio group:
								jmolRadioGroup([
									["select all;Cartoon off","OFF","CHECKED"],  
									["select all;Cartoon on","ON"],  
								]);
								jmolBr();
						</script>
					</td>
				</tr>
		
				<tr "id="table_dis">
					<td>	Wireframe	</td>
					<td> 
						<script type="text/javascript">
							//a radio group:
								jmolRadioGroup([
									["select all;Wireframe off","OFF", "CHECKED"],
									["select all;Wireframe on", "ON"]							
								]);
								jmolBr();
						</script>
					</td> 
				</tr>
				<tr "id="table_dis">
					<td>	Trace	</td>
					<td> 
						<script type="text/javascript">
							//a radio group:
								jmolRadioGroup([
									["select all;trace off;cartoon on","OFF","CHECKED"],
									["select all;trace on; cartoon off;","ON"]  
								]);
								jmolBr();
						</script>
					</td> 
				</tr>
		
				<tr "id="table_dis">
					<td>	Backbone	</td>
					<td> 
						<script type="text/javascript">
							//a radio group:
								jmolRadioGroup([
									["select all;backbone off;cartoon on;","OFF","CHECKED"],
									["select all;backbone on; cartoon off;","ON"]  
								]);
								jmolBr();
						</script>
					</td> 
				</tr>
		
				<tr "id="table_dis">
					<td>	Spin	</td>
					<td> 
						<script type="text/javascript">
							//a radio group:
								jmolRadioGroup([
									["spin off", "OFF","CHECKED"],
									["spin on", "ON"],
								]);
								jmolBr();
						</script>
					</td> 
				</tr>
				<tr "id="table_dis">
					<td "id="table_dis">	Background	</td>
					<td "id="table_dis"> 
						<script type="text/javascript">
							//a radio group:
								jmolRadioGroup([
									["background black", "Black","CHECKED"],
									["background white", "White"],
									["background cyan", "Cyan"],
									["background Green", "Green"],
								]);
								jmolBr();
						</script>
					</td> 
				</tr>
				<tr>
					<td "id="table_dis">	CatTriad</td>
					<td>
						<script type="text/javascript">
							jmolRadioGroup([
									["select all;  spacefill off; wireframe off; backbone off; cartoon on; color cartoon structure;<? echo $missense; ?>", "OFF","CHECKED"],
									["select (267,315,411) AND *.ca;color red;cpk 3.0;", "ON"],
								]);
								jmolBr();
						</script>
					</td>
				</tr>
		</table>
		</td>
	</tr>
	</table>	

