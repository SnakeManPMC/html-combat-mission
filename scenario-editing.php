<!DOCTYPE html>
<html>
<head>
<title>Combat Mission Scenario Editing - PMC Tactical</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="Combat Mission Scenario Editing - PMC Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
	<h1>PMC Tactical Combat Mission Scenario Editing</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Scenario Editing</h2>

<p>Afghanistan .btt files are not compatible with Black Sea, when you try to load them... nothing happens.
</p>

<p>Comment from somewhere: <i>Put the [scenario] file in the Campaign folder: this is not a real campaign, but only a scenario that uses the capabilities of the campaign to permit the presence of two different options.</i> Hmm what does that mean? :)
</p>

<h2>Terrain Elevations</h2>
<p>Direct button is kind of like painting a terrain elevation contour lines. Difficult to explain but its as close to automatic terrain smoothing editing as can be in that shitty editor.
</p>

<p>With direct its actually somewhat OK to create nice looking terrain without spending too much time on it.
</p>


<h2>Map Overlay Image</h2>
<p>Map overlay image feature came in on some WWII crap title (don't know which one), so basically for me this is only available on Black Sea (and Battle for Normandy v3.0 upgrade if you choose to buy that).
</p>
<ol>
<li>Decide how big your terrain is going to be</li>
<li>Crop an image (from Google Maps, Google Earth, some map you found somewhere, aome aerial photo, whatever) to those dimensions</li>
<li>Name your image from Step 2 correctly: "special editor overlay.bmp", and place it in your Z dir</li>
<li>Open up scenario editor, load your terrain</li>
<li>You will see your overlay, but it'll be compressed. Use the + buttons to stretch your terrain to the desired dimensions, and the overlay image will stretch right along with it. Once you get to the right size, there should be no distortion in the overlay image.</li>
</ol>

<p>Hint: use the O key to alter the transparency of the overlay when you're adding map elements.
</p>

<p>Another one:
<br><br>
For elevations, I used the polygon tool in google earth and raised it so it was barely showing. Then I used the line/path tool and traced the contour. Then I would bump up the elevation of the polygon 10m and trace another contour. I labeled each contour with a pin and the elevation. Once in the editor and properly sized, the elevations are really easy to trace using the direct elevation option. I was able to get map contours looking very realistic using this method.
</p>


<h2>Scenario Briefing</h2>
<p>Mission Text (briefing?) template, do not remove ^ characters:
<pre>
<code>
Situation

^

Mission

^

Friendly Forces

^

Enemy Forces

^

Plan

^

Notes
</code>
</pre>
<p>The template texts above are headers in briefing, meaning you should replace them with the actual text like "Situation" should be just the situation text which is placed under the situation header in-game. Hope that makes some sense :)
</p>

<p>Designers notes do not have any kind of formatting, no ^ characters there.
</p>


<h2>AI Plans</h2>
<p>Scenario editor "A.I." dropdown menu.
</p>

<p><b>Initial Unit Placement</b>
<br><br>
Select Plan 1 (Blue) for BLUFOR side. Select used frequently, group 1. Now paint into the map on setup zones where the units should be in start of the scenario. You cannot place units outside the setup zone.
</p>

<p><b>Unit Movement</b>
<br><br>
Select Plan 1 (Blue) for BLUFOR side. Select used frequently, group 1. Next to Setup dropdown, click Add button. Now Order 2 is selected in the dropdown. Now just paint into the map the location where you want the units to move.
</p>


<h2>Campaign</h2>
<p><b>Core Units File</b>
</p>

<p>Not a playable mission, its just the starting core units. These units are then tracked from scenario to scenario so any losses are removed from future scenarios.
</p>

<p>Purchase some units, create title and briefing, nothing more as everything else is ignored.
</p>

<p>Core units should be special which are central to the campaign storyline. You should or need to populate campaign scenarios with basic cannon fodder units using Unit Editor.
</p>

<p>Core units really is storyline only stuff, I mean think about it... if you have only the core units in a campaign, once they are destroyed the campaign is over. What's the point of 10+ missions if the campaign is over after first mission :)
</p>

<p><b>Primary and Branches</b>
</p>

<p>Campaign has two sort of scenarios; primary and branches. Primary are those where player wins perfectly, branches are used if player fails a scenario.
</p>

<p>If campaign designer wishes to do so, theres no need to be any branches at all.
</p>

<p>You can do scenario loops where player is sent to a scenario he player earlier. However any terrain damages, destroyed vehicles etc are NOT saved so the scenario is fresh. It might be a good idea to avoid such loops so campaign wont feel lame.
</p>

<p><b>Scenarios</b>
</p>

<p>There is nothing special in camapign scenarios, they are just the same as normal scenarios.
</p>

<p>Battle selection image is ignored, no need to create that.
</p>

<p>To import core units into your scenario, use "Import Campaign Units" option. Then you can turn off units which you don't need and add any units you wish.
</p>

<p>Note: in Combat Mission Afghanistan scenario title name and file name had to be the same, but in CM Black Sea you can use different title and file names. In campaign script file you just point to the file name, which is how it should have been in the first place.
</p>

<p><b>Campaign Script File</b>
</p>

<p>From Combat Mission Black Sea CM Engine Manual v3.01 PDF file:
</p>
<pre>
<code>
/*
Note the characters before and after this text. They allow designers to put in comments, or notes,
such as why something was done a certain way. Anything between these characters is ignored by Combat Mission.
Otherwise an error will occur when the Campaign is compiled.
*/
// Alternatively two back slashes can be entered to create a comment. There's no functional difference
between this method and the previous mentioned method.

/* Campaign Header*/
[PLAYER FORCE] blue // options are: blue/red
[HUMAN OPPONENT ALLOWED] no // no/yes
[BLUE VICTORY TEXT] You won!
[BLUE DEFEAT TEXT] You lost!
[RED VICTORY TEXT] You won!
[RED DEFEAT TEXT] You lost!

/*Battle #1*/
[BATTLE NAME] My First Little Battle // note, do not include ".btt", just the file name
[WIN THRESHOLD] tactical victory // total defeat, major defeat, tactical defeat, minor defeat,
//draw, minor victory, tactical victory, major victory, total victory
[NEXT BATTLE IF WIN] My Second Little Battle
[NEXT BATTLE IF LOSE] // a blank signals an end of the campaign
[BLUE REFIT %] 20 //always express this a number between 0 and 100
[BLUE REPAIR VEHICLE %] 40
[BLUE RESUPPLY %] 70
[BLUE REST %] 80
[RED REFIT %] 10
[RED REPAIR VEHICLE %] 10
[RED RESUPPLY %] 50
[RED REST %] 60

/*Battle #2*/
[BATTLE NAME] My Second Little Battle
[WIN THRESHOLD] minor defeat
[NEXT BATTLE IF WIN] // end campaign
[NEXT BATTLE IF LOSE] // end campaign
[BLUE REFIT %] 20
[BLUE REPAIR VEHICLE %] 40
[BLUE RESUPPLY %] 70
[BLUE REST %] 80
[RED REFIT %] 10
[RED REPAIR VEHICLE %] 10
[RED RESUPPLY %] 50
[RED REST %] 60
</code>
</pre>

<p><b>Compiling a Campaign</b>
</p>

<p>Put all scenario files of the camapign into single directory (the core units file doesn't have to be in the same dir).
</p>
<ol>
<li>Enter the Editor</li>
<li>Load the Core Units File</li>
<li>Click on the Editor selection popup menu and choose "Make Campaign"</li>
<li>A dialog comes up that gives some reminders of what is about to happen.</li>
<li>When you click on Make Campaign, an Open Dialog comes up and asks for the Campaign Script File</li>
<li>Select the Campaign Script File and click "Open".</li>
<li>If the Script File contains no errors, a new file, with the .CAM, extension appears in the Campaigns directory. The file name is taken from the currently open scenario, which should be the Core Units File.</li>
</ol>

<h2>Creating Quick Battles</h2>
<p>Any regular scenario can be turned into Quick Battle Map (QBM), you could simply copy existing scenario into QBM dir.
</p>

<p>QBM's must have:
</p>
<ul>
<li>Valid setup zones for both sides or the units might start on top of each other</li>
<li>AI plans for both sides</li>
<li>Occupy terrain objectives and unit casualties are used for victory conditions (all other objective types are ignored)</li>
</ul>

<p>Any units placed in QBM's are simply ignored and deleted.
</p>

<p>The type of terrain you set for a map determines when it will be available for quick battle.
</p>

<p>Probe, attack and assault maps are selected when either of these options is selected for a quick battle. Meeting engagement maps are only selected when the player chooses to play a meeting engagement scenario.
</p>


<h2>Creating Campaigns</h2>
<p>Create campaign name, it all begins with a name. In example purposes we use "PMC_My_Campaign" here. Use PMC Mission Name Generator and then create the directory into PMC_Files\ dir.
</p>

<p>Create core units scenario, put in title/description, purchase units if you want, then save it to campaign dir using its name with underscores. For example "PMC_My_Campaign.btt" file name. Write nice designers notes text which explains something about the campaign.
</p>

<p>For individual scenarios, take terrain files or perhaps existing scenarios and copy them into the campaign dir. For being lazy I only used "m001.btt" etc which is simple file name to handle.
</p>

<p>Open terrains/scenarios in scenario editor, place units (at minimum) and perhaps setup zones and AI plans. Terrains I'm not so sure but at least scenarios should have everything ready for campaign scenario use. Basically you should refer to scenario design here ;)
</p>

<p>Create campaign script file named "PMC_My_Campaign.txt" into the campaign directory.
</p>

<p>Compile campaign :)
</p>


<h2>Afghanistan Scenario Editor</h2>
<p>If you only purchase/select units but not deploy them, then they all start from same corner of the regardless of the starting zones. You must place units in the starting zones or locations of your choosing for scenario to work.
</p>

<p>If you not set any "plans" for AI, they are not doing anything, they just sit there. You must add plans for them to move into objectives. First setup units in activated troops window to groups using F1 through F8 function keys. Second setup A.I. -> Plans (red/blue), choose Plan -> Group, then choose Order 2 through 16 and paint location to occupy. Now this group will travel and occupy that area.
</p>

<p>Briefing text is done from Mission -> Mission (red/blue) sections. When creating new mission you get text template, you can export this to text file, edit that (do not remove the ^ characters, those are separators, just edit the text) and then import back in.
</p>

<p>Creating campaign: put all scenarions in a single directory. In editor load core units file. Choose make campaign and select campaign script file. New .CAM file is created to campaigns directory using core units file name (core units file should be open?).
</p>
<pre>
<code>
/*
Note the characters before and after this text. They allow designer to put in comments,
or notes, such as why something was done a certain way. Anything between these
characters is ignored by Combat Mission. Otherwise an error will occur when the
Campaign is compiled.
*/

// Alternatively two back slashes can be entered to create a comment. There's no functional
difference between this method and the previous mentioned method.

/*
Campaign Header
*/
[PLAYER FORCE] red // options are: blue/red
[HUMAN OPPONENT ALLOWED] no // no/yes

// this will be displayed at the end of the campaign. Write something really cool congratulations stuff.
[BLUE VICTORY TEXT] You won!
[BLUE DEFEAT TEXT] You lost!

[RED VICTORY TEXT] You won!
[RED DEFEAT TEXT] You lost!

/*
Battle #1

And this one has to be the same as the mission name
AND mission file name must be the same as mission name. AAARGH! :(
*/
[BATTLE NAME] Snake_Scenario_Test-001 // note, do not include ".btt", just the file name

[WIN THRESHOLD] tactical victory // total defeat, major defeat, tactical defeat, minor defeat,
//draw, minor victory, tactical victory, major victory, total victory
[NEXT BATTLE IF WIN] Snake_Scenario_Test-002
[NEXT BATTLE IF LOSE] // a blank signals an end of the campaign
[BLUE REFIT %] 20 //always express this a number between 0 and 100
[BLUE REPAIR VEHICLE %] 40
[BLUE RESUPPLY %] 70
[BLUE REST %] 80
[RED REFIT %] 10
[RED REPAIR VEHICLE %] 10
[RED RESUPPLY %] 50
[RED REST %] 60

/*
Battle #2
*/
[BATTLE NAME] Snake_Scenario_Test-002
[WIN THRESHOLD] minor defeat
[NEXT BATTLE IF WIN] // end campaign
[NEXT BATTLE IF LOSE] // end campaign
[BLUE REFIT %] 20
[BLUE REPAIR VEHICLE %] 40
[BLUE RESUPPLY %] 70
[BLUE REST %] 80
[RED REFIT %] 10
[RED REPAIR VEHICLE %] 10
[RED RESUPPLY %] 50
[RED REST %] 60
</code>
</pre>


<h2>Black Sea Scenario Editor</h2>
<p>In v1.01 elevations editing in 4km x 4km terrain probably doesn't work? (also in small map, had no effect when changing elevations) :) (this might have been fixed in v1.03 upgrade, but I'm not sure).
</p>

<p>If you make A.I. Plans for "Setup" and paint a zone for them to be located at mission start, this zone must overlap the setup zones. If you want your AI to start from setup zone and then move/advance into the ai-plans-zone, then use Add Order #1 thingy and paint the zone where you want them to move.
</p>

<p>Black Sea v1.01 Elevation editing doesn't work, unless you edit one or more elevations in the extreme left edge of the terrain.
</p>

<p>If you try to make 4km x 4km terrain, its laggy as shit and seems like the enemy AI will not move properly, they wait for long time before starting to move and they they stop to think again, its odd to say the least.
</p>



<h2>Shock Force Scenario Editor</h2>
<p>Its pure horror to edit it as the scenario editor is laggy as shit, its basically unusable with larger terrains than 1km :(
</p>

<p><b>Campaign</b>
</p>

<p>Core Units file, campaign script txt etc pretty much the same as in Black Sea. No designer notes.
</p>

<p>Manual about campaign creation is pretty much the same in Black Sea, so not much has changed since Shock Force release.
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
