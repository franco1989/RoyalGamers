<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>RoyalGaming Network</title>
	<link rel="stylesheet" href="css/style.css">
	<script language="JavaScript" type="text/JavaScript" src="script/copiare.js"></script>
</head>
<header>
	<h1 style="float: right; padding-right: 20px;">RoyalGamers Network<div id="copyDiv"><p style="background-color: transparent; opacity:.0; ">mc.royalgamers.it</p></div></h1>
	<div class="logo" style="background-image: url('img/Logo.jpg');">
		<div id='classlogo'>
			<h2>Per partecipare al server</h2>
			<input type="submit" class="random" value="Clicca qui Per Copiare L' Indirizzo del server :)" onclick="CopyToClipboard('copyDiv')">
		</div>
	</div>
</header>
	<nav class="Menu">
		<a href="index.php" target="_self">Home</a>
		<a href="bans.php" target="_self">Bans</a>
		<a href="Staff.php" target="_self">Staff</a>
		<a href="Regolamento.php" target="_self">Regolamento</a>
		<a href="Canditatura.php" target="_self">Canditatura</a>
		<a href="Store.php" target="_self">Store</a>
	</nav>
<body style="background-color: #6565c7;">
	<div class="contenitore">
		<div style="float: right; height: 100%; width: 350px; background:rgba(0, 0, 0, 0.53); border-left-style:solid;  border-color: coral; border-width: 5px;">
			<h1 style="color: white; text-shadow: 2px 2px red; text-align: center;padding: 10px;">RoyalGamers Modalita</h1>
				<div class="menuserver">
   					<?php include_once('server-selector/server.php');?>
        </div>
		</div>
	</div>
</body>
<footer>
	<div class="test">
       <a href="https://discord.gg/esjVJM9" target="_black"><i id="icone" class="fab fa-discord" aria-hidden="true"></i></a>
	</div>
	<div class="test">
       <a href="https://discord.gg/esjVJM9" target="_black"><i id="icone" class="fab fa-telegram-plane" aria-hidden="true"></i></a>
	</div>
	<div class="test">
       <a href="https://discord.gg/esjVJM9" target="_black"><i id="icone" class="fab fa-teamspeak" aria-hidden="true"></i></a>
	</div>
</footer>
</html>
