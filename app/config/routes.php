<?php
/* SVN FILE: $Id: routes.php 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	Router::mapResources('addresses');
	Router::mapResources('affiliationPhases');
	Router::mapResources('affiliations');
	Router::mapResources('affiliationsDocuments');
	Router::mapResources('affiliationsEvents');
	Router::mapResources('affiliationsMedia');
	Router::mapResources('americanFootballActionParticipants');
	Router::mapResources('americanFootballActionPlays');
	Router::mapResources('americanFootballDefensiveStats');
	Router::mapResources('americanFootballDownProgressStats');
	Router::mapResources('americanFootballEventStates');
	Router::mapResources('americanFootballFumblesStats');
	Router::mapResources('americanFootballOffensiveStats');
	Router::mapResources('americanFootballPassingStats');
	Router::mapResources('americanFootballPenaltiesStats');
	Router::mapResources('americanFootballRushingStats');
	Router::mapResources('americanFootballSacksAgainstStats');
	Router::mapResources('americanFootballScoringStats');
	Router::mapResources('americanFootballSpecialTeamsStats');
	Router::mapResources('americanFootballTeamStats');
	Router::mapResources('awards');
	Router::mapResources('baseballActionContactDetails');
	Router::mapResources('baseballActionPitches');
	Router::mapResources('baseballActionPlays');
	Router::mapResources('baseballActionSubstitutions');
	Router::mapResources('baseballDefensiveGroups');
	Router::mapResources('baseballDefensivePlayers');
	Router::mapResources('baseballDefensiveStats');
	Router::mapResources('baseballEventStates');
	Router::mapResources('baseballOffensiveStats');
	Router::mapResources('baseballPitchingStats');
	Router::mapResources('basketballDefensiveStats');
	Router::mapResources('basketballEventStates');
	Router::mapResources('basketballOffensiveStats');
	Router::mapResources('basketballReboundingStats');
	Router::mapResources('basketballTeamStats');
	Router::mapResources('bookmakers');
	Router::mapResources('coreStats');
	Router::mapResources('dbInfos');
	Router::mapResources('displayNames');
	Router::mapResources('documentClasses');
	Router::mapResources('documentContents');
	Router::mapResources('documentFixtures');
	Router::mapResources('documentFixturesEvents');
	Router::mapResources('documentPackageEntries');
	Router::mapResources('documentPackages');
	Router::mapResources('documents');
	Router::mapResources('documentsMedia');
	Router::mapResources('eventActionFouls');
	Router::mapResources('eventActionParticipants');
	Router::mapResources('eventActionPenalties');
	Router::mapResources('eventActionPlays');
	Router::mapResources('eventActionSubstitutions');
	Router::mapResources('eventStates');
	Router::mapResources('events');
	Router::mapResources('eventsDocuments');
	Router::mapResources('eventsMedia');
	Router::mapResources('eventsSubSeasons');
	Router::mapResources('iceHockeyActionParticipants');
	Router::mapResources('iceHockeyActionPlays');
	Router::mapResources('iceHockeyDefensiveStats');
	Router::mapResources('iceHockeyEventStates');
	Router::mapResources('iceHockeyOffensiveStats');
	Router::mapResources('iceHockeyPlayerStats');
	Router::mapResources('injuryPhases');
	Router::mapResources('keyAliases');
	Router::mapResources('keyRoots');
	Router::mapResources('latestRevisions');
	Router::mapResources('locations');
	Router::mapResources('mediaCaptions');
	Router::mapResources('mediaContents');
	Router::mapResources('media');
	Router::mapResources('mediaKeywords');
	Router::mapResources('motorRacingEventStates');
	Router::mapResources('motorRacingQualifyingStats');
	Router::mapResources('motorRacingRaceStats');
	Router::mapResources('outcomeTotals');
	Router::mapResources('participantsEvents');
	Router::mapResources('penaltyStats');
	Router::mapResources('people');
	Router::mapResources('periods');
	Router::mapResources('personEventMetadata');
	Router::mapResources('personPhases');
	Router::mapResources('personsDocuments');
	Router::mapResources('personsMedia');
	Router::mapResources('positions');
	Router::mapResources('publishers');
	Router::mapResources('rankings');
	Router::mapResources('records');
	Router::mapResources('roles');
	Router::mapResources('seasons');
	Router::mapResources('sites');
	Router::mapResources('soccerActionFouls');
	Router::mapResources('soccerActionParticipants');
	Router::mapResources('soccerActionPenalties');
	Router::mapResources('soccerActionPlays');
	Router::mapResources('soccerActionSubstitutions');
	Router::mapResources('soccerDefensiveStats');
	Router::mapResources('soccerEventStates');
	Router::mapResources('soccerFoulStats');
	Router::mapResources('soccerOffensiveStats');
	Router::mapResources('standingSubgroups');
	Router::mapResources('standings');
	Router::mapResources('stats');
	Router::mapResources('subPeriods');
	Router::mapResources('subSeasons');
	Router::mapResources('teamPhases');
	Router::mapResources('teams');
	Router::mapResources('teamsDocuments');
	Router::mapResources('teamsMedia');
	Router::mapResources('tennisActionPoints');
	Router::mapResources('tennisActionVolleys');
	Router::mapResources('tennisEventStates');
	Router::mapResources('tennisPlayerStats');
	Router::mapResources('tennisReturnStats');
	Router::mapResources('tennisServiceStats');
	Router::mapResources('tennisSetStats');
	Router::mapResources('tennisTeamStats');
	Router::mapResources('wageringMoneylines');
	Router::mapResources('wageringOddsLines');
	Router::mapResources('wageringRunlines');
	Router::mapResources('wageringStraightSpreadLines');
	Router::mapResources('wageringTotalScoreLines');
	Router::mapResources('weatherConditions');

	Router::parseExtensions();
?>