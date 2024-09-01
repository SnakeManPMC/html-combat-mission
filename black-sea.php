<!DOCTYPE html>
<html>
<head>
<title>Combat Mission: Black Sea - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Combat Mission: Black Sea - PMC Tactical">
<META name="keywords" content="Combat, Mission, Black, Sea, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Combat Mission: Black Sea</b></h1>
</header>

<section>
<h2>Black Sea</h2>
<p>Battlefront in their wisdom (sigh) decided to put user made campaign, scenario, terrain and save game files into windows "My Documents" directory :(
<br><br>
This came in effect one game release before Black Sea (one of those useless ww2 crap ones, fortress italy I believe).
</p>

<p>So now you must put your file into this stupid directory. On windows 7 64bit its:
<pre>C:\Users\YOURNAME\Documents\Battlefront\Combat Mission\Black Sea\Game Files\
</pre>
even though the explorer link says "My Documents". This is the game files root directory under which all the other directories are placed like play by email, save games etc.
</p>

<p>Place <b>Scenarios</b> into "C:\Users\YOURNAME\Documents\Battlefront\Combat Mission\Black Sea\Game Files\Scenarios\" directory.
</p>

<p>Place <b>Campaigns</b> into "C:\Users\YOURNAME\Documents\Battlefront\Combat Mission\Black Sea\Game Files\Campaigns\" directory.
</p>

<p>Place <b>Terrains</b> and/or <b>Quick Battle Maps</b> into "C:\Users\YOURNAME\Documents\Battlefront\Combat Mission\Black Sea\Game Files\Quick Battle Maps\" directory.
</p>

<p>If you are using dos batch files to handle file copying, backupping, archive unpacking or anything like that into the above directories, you must use quotes around the directory path because the directory has spaces in it (double sigh). For example:
<pre>7z a MyBackups.7z "C:\Users\YOURNAME\Documents\Battlefront\Combat Mission\Black Sea\Game Files\Saved Games\"
</pre>
</p>

</section>

<footer>
<p>Back to <a href="index.php">Combat Mission root page</a></p>
<br><br>
<p><i>PMC Combat Mission 2016 - <?print(date("Y"));?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
