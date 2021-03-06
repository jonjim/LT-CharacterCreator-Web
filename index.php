<html lang="en">
<head>
<script type="text/javascript" src="js/cc.js"></script>
<link rel="stylesheet" href="css/style.css" />
<title>Lorien Trust Character Creator</title>
</head>
<h2>Character Creator</h2>
Within the Lorien Trust system each character has 16 points to spend when creating their character. This calculator should make it easier to allocate your point spend across the various skills.<br/><br/>For full descriptions of the skills listed here please see the Rule Book available from <a target="_blank" href="http://www.lorientrust.com/publications/">http://www.lorientrust.com/publications/</a><br/><br/>
<b>CHILDREN AND CHARACTER SKILLS</b><br/>
All weapons and shields must be easily wieldable by the child and must be no taller than them.
<ul><li>Children aged under 5 years can only buy free skills.</li>
<li>Children aged 5-9yrs may buy 10pts of skills from the following list:<br/>
Free skills, Shield Use, Light Armour Use, Body Development, Ambidexterity, Healing, Bind Wounds and
Physician.</li>
<li>Children aged 10-13yrs may buy skills as per adults, except for Ritual Magic and Projectile Weapon</li>
<li>Anyone aged 14 or above may choose skills as normal.</li></ul>
<br/><b>Remaining Points</b><br/>
<div id="sum" style="color:#cc0000;font-weight:bold;margin-left:45px;">16</div>

<div id="charactercreator"><br/>
	<div style="float:left;">
	<table>
	<tr><td><b>Weapon Skills</b></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(1)">Ambidexterity (2)</a></td><td><input id="Ambidex" type="checkbox" onchange="CalculateSkills('Ambidex',2)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(3)">Large Weapon Use (2)</a></td><td><input id="LrgWep" type="checkbox"  onchange="CalculateSkills('LrgWep',2)"/></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(2)">Projectile Weapon (4)</a></td><td><input id="ProjWep" type="checkbox" onchange="CalculateSkills('ProjWep',4)"/></td></tr>
  <tr><td ><a href="#" onclick="SkillCheck(4)">Shield Use (2)</a></td><td><input id="Shield" type="checkbox" onchange="CalculateSkills('Shield',2)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(5)">Thrown Weapon (1)</a></td><td><input id="Thrown" type="checkbox" onchange="CalculateSkills('Thrown',1)" /></td></tr>
	<tr><td><br/></td></tr>
	<tr><td><b>Magic Skills</b></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(6)">Healing 1(4)/2(8)</a></td><td><input id="Healing1" type="checkbox" onchange="CalculateSkills('Healing1',4)" />/<input id="Healing2" type="checkbox" onchange="CalculateSkills('Healing2',8)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(6)">Incantation 1(4)/2(8)</a></td><td><input id="Incant1" type="checkbox" onchange="CalculateSkills('Incant1',4)" />/<input id="Incant2" type="checkbox" onchange="CalculateSkills('Incant2',8)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(6)">Spellcasting 1(4)/2(8)</a></td><td><input id="Spell1" type="checkbox" onchange="CalculateSkills('Spell1',4)" />/<input id="Spell2" type="checkbox" onchange="CalculateSkills('Spell2',8)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(7)">Ritual 1(2)/2(4)/3(6)</a></td><td><input id="Ritual1" type="checkbox" onchange="CalculateSkills('Ritual1',2)" />/<input id="Ritual2" type="checkbox" onchange="CalculateSkills('Ritual2',4)" />/<input id="Ritual3" type="checkbox" onchange="CalculateSkills('Ritual3',6)" /><br/></td></tr>
  <tr><td ><a href="#" onclick="SkillCheck(8)">Contribute (1)</a></td><td><input id="Contribute" type="checkbox" onchange="CalculateSkills('Contribute',1)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(9)">Power 4(2)/8(4)/12(6)/16(8)</a></td><td><input type="checkbox"  id="Power4"  onchange="CalculateSkills('Power4',2)" />/<input type="checkbox" id="Power8" onchange="CalculateSkills('Power8',4)" />/<input type="checkbox" id ="Power12" onchange="CalculateSkills('Power12',6)" />/<input type="checkbox" id="Power16" onchange="CalculateSkills('Power16',8)"/></td></tr>
  <tr><td title=""><a href="#" onclick="SkillCheck(10)">Invocation (3)</a></td><td><input id="Invocation" type="checkbox"  onchange="CalculateSkills('Invocation',3)" /></td></tr>
	<tr><td><br/></td></tr>
	</table></div>
	<div style="float:left;padding-left:15px;">
	<table>
	<tr><td><b>Armour Skills</b></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(11)">Body Development 1(4)/2(8)</a></td><td><input id="BodyDev" type="checkbox" onchange="CalculateSkills('BodyDev',4)" />/<input id="BodyDev2" type="checkbox" onchange="CalculateSkills('BodyDev2',8)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(12)">Light Armour Use (2)</a></td><td><input id="LArm" type="checkbox" onchange="CalculateSkills('LArm',2)"/></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(13)">Medium Armour Use (3)</a></td><td><input id="MArm" type="checkbox" onchange="CalculateSkills('MArm',3)"/></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(14)">Heavy Armour Use (4)</a></td><td><input id="HArm" type="checkbox"  onchange="CalculateSkills('HArm',4)" /></td></tr>
	<tr><td><br/></td></tr>
	<tr><td><br/></td></tr>
	<tr><td><b>Knowledge Skills</b></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(15)">Potion Lore (3)</a></td><td><input id="Potion" type="checkbox" onchange="CalculateSkills('Potion',3)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(16)">Poison Lore (4)</a></td><td><input id="Poison" type="checkbox" onchange="CalculateSkills('Poison',4)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(17)">Cartography (1)</a></td><td><input id="Cartography" type="checkbox" onchange="CalculateSkills('Cartography',1)"/></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(18)">Sense Magic (1)</a></td><td><input id="SenseMagic" type="checkbox" onchange="CalculateSkills('SenseMagic',1)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(19)">Evaluate (1)</a></td><td><input id="Evaluate" type="checkbox" onchange="CalculateSkills('Evaluate',1)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(20)">Recognise Forgery (1)</a></td><td><input id="RecFor" type="checkbox" onchange="CalculateSkills('RecFor',1)" /></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(21)">Physician (2)</a></td><td><input id="Physician" type="checkbox" onchange="CalculateSkills('Physician',2)"/></td></tr>
  <tr><td><a href="#" onclick="SkillCheck(22)">Bind Wounds (1)</a></td><td><input id="BindWounds" type="checkbox" onchange="CalculateSkills('BindWounds',1)"/></td></tr>
	</table>
	</div>
</div><div style="clear:both;"></div><br/><button id="refresh" onclick="ResetCreator()">Refresh</button>

<h2>New Player? Bonus Occupational Skills!</h2>

<div>
The Lorien Trust has recently started offering all new players a starting package of 50 OSPs to spend on a select number of Occupational Skills. These Occupational Skills are additional to your Character Skills, though many may rely on your chosen Character Skills. The skills points available for new players are only available when pre-booking for your first event with the Lorien Trust, and can not be banked for future use. You will however receive your 10 OSPs for attending each mainline event to spend in the future on skills available in the Occupational Skills Guide.
<br/><br/><b>Remaining Points</b><br/>
<div id='osp' style="color:#cc0000;font-weight:bold;margin-left:45px;">50</div><br/>
	<div style="float:left;">
	<table>
	<tr><td><b>Occupational Skill</b><td/><td><b>Cost</b></td><td><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(140)">+4 Spell Cards</a><td/><td>10</td><td><input id="Plus4Cards" type="checkbox" value="10" onchange="OSCalculator(this,10)" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(1)">Apprentice (X)</a><td/><td>10</td><td><input id="Apprentice" type="checkbox" value="10" onchange="OSCalculator(this,10)"/><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(145)">Armour Mastery</a><td/><td>20</td><td><input id="ArmourMastery" onchange="OSCalculate(this,20)" type="checkbox" value="20" class="armouros" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(64)">Armoursmith Apprentice</a><td/><td>10</td><td><input id="ArmourApprentice" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(58)">Bowyer Apprentice</a><td/><td>20</td><td><input id="Bowyer" onchange="OSCalculator(this,20)" type="checkbox" value="20"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(116)">Cast High Counter Magic</a><td/><td>30</td><td><input id="HighCounter" onchange="OSCalculator(this,30)" type="checkbox" value="30" class="counteros" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(136)">Conceal Item</a><td/><td>20</td><td><input id="Conceal" onchange="OSCalculator(this,20)" type="checkbox" value="20"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(127)">Contribute to Second Ritual</a><td/><td>10</td><td><input id="Contribute2" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="contributeos" disabled  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(34)">Create Poison 1</a><td/><td>20</td><td><input id="CreatePoison" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="poisonos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(38)">Create Potion 1</a><td/><td>20</td><td><input id="CreatePotion" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="potionos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(42)">Create Reagent</a><td/><td>10</td><td><input id="CreateReagent" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="alchos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(113)">Dedicated Follower</a><td/><td>30</td><td><input id="DedicatedFollower" onchange="OSCalculator(this,30)" type="checkbox" value="30" class="incos" disabled  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(80)">Detect &amp; Remove Beguile</a><td/><td>20</td><td><input id="DetectBeguile" onchange="OSCalculator(this,20)" type="checkbox" value="20"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(115)">Discern Ancestral Being</a><td/><td>30</td><td><input id="DiscernAncestral" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(129)">Discern Daemonic Being</a><td/><td>30</td><td><input id="DiscernDaemonic" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(103)">Discern Elemental Being</a><td/><td>30</td><td><input id="DiscernElemental" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(97)">Discern Pattern Type</a><td/><td>10</td><td><input id="DiscernPattern" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="healingos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(118)">Discern Unliving</a><td/><td>30</td><td><input id="DiscernUnliving" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(47)">Forensic Analysis</a><td/><td>30</td><td><input id="ForensicAnalysis" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(30)">General Knowledge (X)</a><td/><td>10</td><td><input id="GeneralKnowledge" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(60)">Hand of Nature</a><td/><td>20</td><td><input id="HandOfNature" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="natureos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(99)">Heal Alien/Abberant Pattern</a><td/><td>30</td><td><input id="HealAlien" onchange="OSCalculator(this,30)" type="checkbox" value="30" class="healingos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(46)">Herb Lore</a><td/><td>10</td><td><input id="HerbLore" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(123)">Identify</a><td/><td>20</td><td><input id="Identify" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="identifyos" disabled /><td/></tr>
	</table>
	</div>

	<div style="float:left;">
	<table>
	<tr><td><b>Occupational Skill</b><td/><td><b>Cost</b></td><td><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(101)">Immune to Disease</a><td/><td>30</td><td><input id="ImmuneDisease" onchange="OSCalculator(this,30)" type="checkbox" value="30" class="healingos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(56)">Immune to Distract &amp; Confusion</a><td/><td>30</td><td><input id="ImmuneDistract" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(84)">Immune to Fear</a><td/><td>10</td><td><input id="ImmuneFear" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(49)">Immune to Fumble</a><td/><td>10</td><td><input id="ImmuneFumble" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(48)">Immune to Lethal Alchemical Poisons</a><td/><td>40</td><td><input id="ImmunePoison" onchange="OSCalculator(this,40)" type="checkbox" value="40"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(72)">Immune to Repel</a><td/><td>20</td><td><input id="ImmuneRepel" onchange="OSCalculator(this,20)" type="checkbox" value="20"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(108)">Last Rites</a><td/><td>10</td><td><input id="LastRites" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="incos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(132)">Locate</a><td/><td>20</td><td><input id="Locate" onchange="OSCalculator(this,20)" type="checkbox" value="20"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(128)">Perform Transport Rite</a><td/><td>10</td><td><input id="PerformTransport" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="magicos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(144)">Quick Armour Repair</a><td/><td>10</td><td><input id="QuickArmourRepair" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="armouros" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(91)">Revive</a><td/><td>10</td><td><input id="Revive" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="healingos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(119)">Rite Master</a><td/><td>10</td><td><input id="RiteMaster" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="ritualos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(4)">Scholar (X)</a><td/><td>20</td><td><input id="Scholar" onchange="OSCalculator(this,20)" type="checkbox" value="20"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(117)">Scribe Scroll</a><td/><td>20</td><td><input id="ScribeScroll" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="magicos" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(79)">Shield Mastery</a><td/><td>30</td><td><input id="ShieldMastery" onchange="OSCalculator(this,30)" type="checkbox" value="30" class="shieldos" disabled  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(148)">Sleepless Chanting</a><td/><td>20</td><td><input id="SleeplessChanting" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="counteros" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(95)">Surgery</a><td/><td>20</td><td><input id="Surgery" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="physos" disabled  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(53)">Tracking</a><td/><td>10</td><td><input id="Tracking" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(111)">Transcend Armour</a><td/><td>20</td><td><input id="TranscendArmour" onchange="OSCalculator(this,20)" type="checkbox" value="20" class="armouros" disabled /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(88)">Translate Named Script</a><td/><td>10</td><td><input id="TNS" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(62)">Trap Lore</a><td/><td>30</td><td><input id="TrapLore" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(137)">Traverse Faction Wards</a><td/><td>30</td><td><input id="TraverseWards" onchange="OSCalculator(this,30)" type="checkbox" value="30"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(68)">Weaponsmith Apprentice</a><td/><td>10</td><td><input id="Weaponsmith" onchange="OSCalculator(this,10)" type="checkbox" value="10"  /><td/></tr>
	<tr><td><a href="#" onclick="OSkillCheck(104)">Wedge Mastery</a><td/><td>10</td><td><input id="WedgeMastery" onchange="OSCalculator(this,10)" type="checkbox" value="10" class="incos" disabled /><td/></tr>
	</table>
	</div>
<div style="clear:both;"></div>
</div>



<div id="myModal" class="modal">
  <div class="modal-content">
    <span onclick="CloseModal()" class="close">&times;</span>
    <iframe id="ModaliFrame" width="100%" scrolling="no" frameborder=0 height="150px" src="inc/skilldesc.php?id=1"></iframe>
  </div>
</div>