<!DOCTYPE html>
<html>
<head>
<title>Combat Mission Scenario Design - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Combat Mission Scenario Design - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Tactical Combat Mission Scenario Design</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Scenario Design</h2>

<p><i>These are random personal design notes, just to make clear as some are bit random indeed.</i>
</p>

<p>Avoid defense missions, its very tricky to create proper AI plans and also in the start of the mission it might be very long time before any combat happens while you just wait and wait...
</p>

<p>Nothing against defense missions, if you could make proper AI plans so the attacks would be awesome.
</p>

<p>You can edit PMC campaign missions from &lt;root&gt;\PMC_files\&lt;campaign-name&gt;\ dir at anytime, however when you want to test them you have to copy them to scenarios dir.
</p>

<p>Remember that bigger isn't always better, sometimes those small scale scenarios with few(er) troops give you more personal and emotional connection to them, instead of just slugging away huge troop formations by dragging a box around all units and ASSAULT! hehe.
</p>

<p>Naturally as CM game engines suck, any large terrain causes additional laggyness to the scenario.
</p>


<h2>Units Initial Setup</h2>
<p>Units Initial Setup and setup zone placement should not be ignored.
</p>

<p>Make proper initial locations and placement of squads/platoons/hq's etc next to each other. It is very painful and lame to have player organize the troops at scenario start. Player can easily spend half an hour to place squads into vehicles before he even really starts the scenario :(
</p>

<p>This doesn't mean you need to decide for player how he should use his initial unit placement, no but if you just have gazillion units on top of each other in one corner then you can be sure every player wants to position them decently.
</p>

<p>Very frustrating so please setup units initial stuff in scenario file already! Just don't spam units in purchase... place them properly, please.
</p>


<h2>Objectives / Victory Conditions</h2>
<p>Add "touch" objectives like reach line in advance etc. Those are easy to do and add nice gameplay objectives for players. Occupy requires effort, touch/reach is very easy to accomplish.
</p>


<h2>Terrain Sizes</h2>
<p>No terrains under 1km x 1km dimensions, anything below is piece of shit Call of Duty crap. You need freedom of movement. <i>Lieutenant! Bomb that tree line back about a hundred yards - give me some room to breathe!</i>
</p>

<p>Enough vehicles for all squads, large terrains needs transport capability. Nothing worse than have your heavy machine gun teams drag the guns into battle only to reach there completely exhausted. No, just add transport vehicles for them or just generic ones for everyone's use.
</p>

<p>When you have large enough terrain and use vehicles to transpor your infantry around, its very satisfying to then disembark and engage in combat.
</p>


<h2>Campaign Testing</h2>
<p>If you compile a campaign then you have to play it from the start to get to test scenarios at the end of the campaign. Otherwise just take your single scenario, put it on scenarios dir and test it from battle menu.
</p>

<p>When you are purely testing, choose single scenario method by battle menu, then use skill "Scenario Author Test" and you can see all enemy units. You can easily see if AI plans are not working or something else is wrong.
</p>

<p>Naturally you cannot test campaign core units functionality with battle menu method.
</p>

<p>Add campaign name to each mission briefing situation part (first part), its so much easier to see in-game which campaign this is.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p>Back to <a href="index.php">Combat Mission root page</a></p>
<br><br>
<p><i>PMC Combat Mission 2016 - <?print(date("Y"));?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
