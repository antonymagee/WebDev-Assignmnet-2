<!DOCTYPE html> 
<html> 
  <head>		
	<link rel="stylesheet" type="text/css" href="style.css" /><link type="text/css" href="css/antony/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function()
      $("#accordion").accordion();
      );
	  
 </script>
  
  </head>
  
  <body>
  
  				<p>
				<span class="sideBarText">Select a Play..</span> 				
				<select id="select_play">		    

				<!---- Group of Tragedies ----->
				
				<option selected="yes">...</option> 
				<option value="heading" class="select_heading">Tragedies</option> 
				<option value="a_and_c.xml">Antony and Cleopatra</option> 
				<option value="coriolan.xml">Coriolanus</option> 
				<option value="hamlet.xml">Hamlet</option> 
				<option value="j_caesar.xml">Julius Caesar</option> 
				<option value="lear.xml">King Lear</option> 
				<option value="macbeth.xml">Macbeth</option> 
				<option value="othello.xml">Othello</option> 
				<option value="r_and_j.xml">Romeo and Juliet</option> 
				<option value="timon.xml">Timon of Athens</option> 
				<option value="titus.xml">Titus Andronicus</option> 

				<!---- Group of History plays ----->

				<option value="heading" class="select_heading"></option> 
				<option value="heading" class="select_heading">Histories</option> 
				<option value="hen_iv_1.xml">Henry IV, Part I</option> 
				<option value="hen_iv_2.xml">Henry IV, Part II</option> 
				<option value="hen_v.xml">Henry V</option> 
				<option value="hen_vi_1.xml">Henry VI, Part I</option> 
				<option value="hen_vi_2.xml">Henry IV, Part II</option> 
				<option value="hen_vi_3.xml">Henry IV, Part III</option> 
				<option value="hen_viii.xml">Henry VIII</option> 
				<option value="john.xml">King John</option> 
				<option value="rich_ii.xml">Richard II</option> 
				<option value="rich_iii.xml">Richard II</option> 

				<!---- Group of Comedy plays -----> 

				<option value="heading" class="select_heading"></option> 
				<option value="heading" class="select_heading">Comedies</option> 
				<option value="all_well.xml">All's Well That Ends Well</option> 
				<option value="as_you.xml">As You Like It</option> 
				<option value="com_err.xml">The Comedy of Errors</option> 
				<option value="cymbelin.xml">Cymbeline</option> 
				<option value="lll.xml">Love's Labours Lost</option> 
				<option value="m_for_m.xml">Measure for Measure</option> 
				<option value="m_wives.xml">The Mercy Wives of Windsor</option> 
				<option value="merchant.xml">The Merchant of Venice</option> 
				<option value="dream.xml">A Midsummer Night's Dream</option> 
				<option value="much_ado.xml">Much Ado About Nothing</option> 
				<option value="pericles.xml">Pericles, Prince of Tyre</option> 
				<option value="taming.xml">The Taming of the Shrew</option> 
				<option value="tempest.xml">The Tempest</option> 
				<option value="troilus.xml">Troilus and Cressida</option> 
				<option value="t_night.xml">Twelfth Night</option> 
				<option value="two_gent.xml">Two Gentlemen of Verona</option> 
				<option value="win_tale.xml">The Winter's Tale</option> 
				
				</select> 
				</p>
    <div id="output"></div>
	
	<div id="header">
	</div>
	
	<div id="content">
	
	<div id="accordion">
		<h3><a href="#">Tragedies</a></h3>
		<div>tragedies_content</div>
		<h3><a href="#">Histories</a></h3>
		<div>histories content</div>
		<h3><a href="#">Comedies</a></h3>
		<div>comedies content</div>
	</div>	
	
	
  </body>
</html>
