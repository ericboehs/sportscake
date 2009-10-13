<?php
class UpdateTeamsController extends AppController {

	var $name = 'UpdateTeams';
	var $uses = null;

	function document($file='/Users/ericboehs/Dropbox/OPUBCO-Dev/htdocs/welikesportz/sportscake/app/webroot/feeds/xml/football/NCAAF/teams/2009-2010/teams_NCAAF.xml'){
		$this->Document = Classregistry::init('Document');
		
		//Check to see if the publisher is in the publishers table
		if($this->Document->Publisher->find('count', array('conditions' => array('Publisher.publisher_key' => 'sportsdirectinc.com'))) == 0){
			$publisher['publisher_key'] = 'sportsdirectinc.com';
			$publisher['publisher_name'] = 'Sports Direct Inc';
			$this->Document->Publisher->save($publisher);
		}
		
		//Check to see if this fixture is in the document_fixtures table
		if($this->Document->DocumentFixture->find('count', array('conditions' => array('DocumentFixture.fixture_key' => 'teams'))) == 0){
			$documentFixture['fixture_key'] = 'teams';
			$documentFixture['publisher_id'] = 1;
			$documentFixture['name'] = 'Teams';
			$documentFixture['document_class_id'] = 1;
			$this->Document->DocumentFixture->save($documentFixture);
		}
		
		list(,$document['doc_id']) = explode('xml/',$file);
		list($document['doc_id']) = explode('.',$document['doc_id']);
		
		$document['publisher_id'] = $this->Document->Publisher->field('id', array('Publisher.publisher_key' => 'sportsdirectinc.com'));
		$document['date_time'] = strftime("%Y-%m-%d %H:%M:%S");
		$document['title'] = ucwords(str_replace('_NCAAF','',str_replace('/',' ',$document['doc_id'])));
		$document['language'] = 'en-US';
		$document['priority'] = 'normal';
		$document['revision_id'] = md5_file($file);
		$document['stats_coverage'] = NULL;
		$document['document_fixture_id'] = 'teams'; 
		
		$document['document_fixture_id'] = $this->Document->DocumentFixture->field('id', array('DocumentFixture.fixture_key' => 'teams'));
		$document['source_id'] = NULL;
		$document['db_loading_date_time'] = strftime("%Y-%m-%d %H:%M:%S");
		
		$this->Document->save($document);
	}

	function index($file='/Users/ericboehs/Dropbox/OPUBCO-Dev/htdocs/welikesportz/sportscake/app/webroot/feeds/xml/football/NCAAF/teams/2009-2010/teams_NCAAF.xml'){
		//Init models we need to access
		$this->Publisher 	= Classregistry::init('Publisher');
		$this->Sport 			= Classregistry::init('Sport');
		$this->League 		= Classregistry::init('League');
		$this->Season 		= Classregistry::init('Season');
		$this->Conference = Classregistry::init('Conference');
		//$this->Division 	= Classregistry::init('Division');
		
		//Get the fecthed file's content and make sure it isn't empty
		if(!$file_content = @file_get_contents($file))
			return false;
		
		//Create a SimpleXMLElement out of the file we just got
		$xmlobj = new SimpleXMLElement($file_content);
		
		//sport
		$sport_xmlobj = $this->do_xpath_query($xmlobj,"//sport");
		$sport['sport_key'] = (string)$sport_xmlobj->id;
		$sport['name'] = (string)$sport_xmlobj->name;
		if($this->Sport->find('count', array('conditions' => array('Sport.sport_key' => $sport['sport_key']))) == 0)
			$this->Sport->save($sport);
		
		//league
		$league_xmlobj = $this->do_xpath_query($xmlobj,"//league");
		$league['league_key'] = (string)$league_xmlobj->id;
		$league['sport_id'] = $this->Sport->field('id', array('Sport.sport_key' => $sport['sport_key']));
		$league['name'] = (string)$league_xmlobj->name[0];
		if(isset($league_xmlobj->name[1]->attributes()->type) && $league_xmlobj->name[1]->attributes()->type == "nick")
			$league['nickname'] = (string)$league_xmlobj->name[1];
		if($this->League->find('count', array('conditions' => array('League.league_key' => $league['league_key']))) == 0)
			$this->League->save($league);
		
		//season
		$season_xmlobj = $this->do_xpath_query($xmlobj,"//season");
		$season['season_key'] = (string)$season_xmlobj->id;
		$season['name'] = (string)$season_xmlobj->name;
		$season['publisher_id'] = $this->Publisher->field('id', array('Publisher.publisher_key' => 'sportsdirectinc.com')); //TODO: remove publisher from database
		$season['league_id'] = $this->League->field('id', array('League.league_key' => $league['league_key']));
		$season['start_date_time'] = strftime("%Y-%m-%d %H:%M:%S",strtotime((string)$season_xmlobj->details->{"start-date"}));
		$season['end_date_time'] = strftime("%Y-%m-%d %H:%M:%S",strtotime((string)$season_xmlobj->details->{"end-date"}));
		if($this->Season->find('count', array('conditions' => array('Season.season_key' => $season['season_key']))) == 0)
			$this->Season->save($season);
		
		//conference
		$conferences_xmlobj = $this->do_xpath_query($xmlobj,"//conference");

		foreach($conferences_xmlobj as $conference_xmlobj){
			debug($conference_xmlobj);
			$conference['conference_key'] = (string)$conference_xmlobj->id;
			$conference['name'] = (string)$conference_xmlobj->name;
			if(isset($league_xmlobj->name[1]->attributes()->type) && $league_xmlobj->name[1]->attributes()->type == "nick")
				$league['nickname'] = (string)$league_xmlobj->name[1];
			$conference['league_id'] = $this->League->field('id', array('League.league_key' => $league['league_key']));
			$conference['start_date_time'] = strftime("%Y-%m-%d %H:%M:%S",strtotime((string)$conference_xmlobj->details->{"start-date"}));
			$conference['end_date_time'] = strftime("%Y-%m-%d %H:%M:%S",strtotime((string)$conference_xmlobj->details->{"end-date"}));
			if($this->Conference->find('count', array('conditions' => array('Conference.conference_key' => $conference['conference_key']))) == 0)
				//$this->Conference->save($conference);
			$blah = 1;
			
			debug($conference);
			unset($conference);
			die();
		}


		//division
		
		//team
		
	}

}