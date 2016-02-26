</head>
	
<body>

	<header>
			<img src="logo1.png" alt="Logo" id="logo">
         
         <nav id="n1">
         	
         	<a id="home" href="index.php" <?php if($pid==1) echo 'class="current"'?> >HOME</a>
         	<a id="abo" href="about.php" <?php if($pid=2) echo 'class="current"'?>>ABOUT US</a>
				<a id="ma" href="maps.php" <?php if($pid==3) echo 'class="current"'?>>MAP</a>
				<a id="hot" href="hotel.php" <?php if($pid==4) echo 'class="current"'?>>HOTEL</a>
         	<a id="tour" href="tours.php" <?php if($pid==5) echo 'class="current"'?>>TOURS</a>
         	<a id="tem" href="terms.php" <?php if($pid==6) echo 'class="current"'?>>TERMS</a>
         	<a id="con" href="contact.php" <?php if($pid==7) echo 'class="current"'?>>CONTACT US</a>
         	<br>
       
      
         </nav>
	</header>
	<main>