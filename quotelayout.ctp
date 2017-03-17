<!doctype html>

<html>

<head>

<title><?php echo $title_for_layout;?></title>

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1">

<!--fav icon-->



<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="/img/favicon.ico" type="image/x-icon">

<!--eo fav icon -->


 
 <link rel="stylesheet" type="text/css" href="/fonts/531538/E9EF8CF9D9077D7F9.css" />
 
 

 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
			

		<?php 
           
			

			$this->Combinator->add_libs('css', array('bootstrap.min.css','master.css','my_style.css','responsive.css','jslider.css','Enquiry_style.css'));



  				//echo $this->Combinator->scripts('css');
	
	      $this->Combinator->add_libs('js',array('jquery-1.9.js','bootstrap','login_validate.js','bootstrap-select.min.js','custom_new.js','custom.js')); 

		
			echo $this->Combinator->scripts('css'); // Output CSS files

			echo $this->Combinator->scripts('js'); // Output Js files



		?>



		
		</head>

		<body>

		<input id="ActionName" type="hidden" value="<?=$this->params['action']?>">

		<input type="hidden" id="search_done_home" value="0">	

		<input type="hidden" name="search_done_enter" id="search_done_enter" value="0">


		

	

            <?php //echo $this->element('quoteheader', array('from'=>'')); ?>
            <?php echo $this->element('Header_Brand', array('from'=>'')); ?>

			<?php echo $this->element('company_page', array('from'=>'')); ?>



			<div id="MainAjaxContainer">	

				

				<section class="marg-tp-leads" >

					
				<div class="container padding-0">
					
                    
						<div class="row">

							<div id="Sidebar" class="leftsidebar"></div>
							
							<?php echo $content_for_layout; ?>


						</div>



					</div>

				</section>

			</div>

		

	        <?php echo $this->element('footer', array('from'=>'')); ?>

			

		  


		<script type="text/javascript">
		

			 new gnMenu(document.getElementById('gn-menu'));

		</script>

		 <?if(!empty($User_Id)){?>

			 <script type="text/javascript">

			 show_info_myaccount(<?=$User_Id?>);

			 </script>

			 <?}?>
	

	  

	

</body>

</html>



