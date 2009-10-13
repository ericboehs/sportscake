<?php
class FeedDeliveryShell extends Shell {

	var $name = 'FeedDelivery';

	var $uses = null;
	var $tasks = array();
	
	var $debug = 0;
	
	var $base_url = 'http://xml.sportsdirectinc.com/sport/v2/';
	var $base_url_atom = 'http://xml.sportsdirectinc.com/Atom';
	
	function determineBaseFilePath(){
		$hostname_long = shell_exec('hostname');
		$hostname = $hostname_long;
		if(strpos($hostname_long,'.')){
			$hostname_exploded = explode('.',$hostname_long);
			$hostname = $hostname_exploded[0];
		}
		switch($hostname){
			case "eboehsmb":
				//$base_file_path = '/Users/ericboehs/Dropbox/OPUBCO-Dev/htdocs/welikesportz/api/app/webroot/feeds/xml/';
				$base_file_path = '/Users/ericboehs/Dropbox/OPUBCO-Dev/htdocs/welikesportz/sportscake/app/webroot/feeds/xml/';
				break;
			case "webex1":
				$base_file_path = '/www/sportsstats/app/webroot/feeds/xml/';
				break;
			default:
				$base_file_path = './feeds/xml/';
		}
		
		if($this->debug) echo "hostname: $hostname\n";
		if($this->debug) echo "base_file_path: $base_file_path\n";
		
		return $base_file_path;
	}

	function mkdir_recursive($pathname){
		if($this->debug) echo "Making directory: $pathname\n";
		is_dir(dirname($pathname)) || $this->mkdir_recursive(dirname($pathname));
		return is_dir($pathname) || @mkdir($pathname);
	}

	function file_get_contents_to_disk($url, $file){
		if($this->debug) echo "Fetching $url\n";
		if(file_exists($file))
			rename($file, $file.'.tmp');

		$file_info = pathinfo($file);
		if(!is_dir($file_info['dirname']))
			$this->mkdir_recursive($file_info['dirname']);

		$ch = curl_init($url);
		$fp = fopen($file, "w");
		curl_setopt($ch, CURLOPT_FILE, $fp);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,10);
		curl_setopt($ch, CURLOPT_TIMEOUT,10);
		curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);

		if($info['http_code'] == 401)
			die("This IP address is not authenticated with the host.  Error 401\n");
		if($info['http_code'] != 200)
			die("Server's not giving a 200 :(\n");
		fclose($fp);

		if(file_exists($file.'.tmp') && @simplexml_load_file($file) === FALSE){
			rename ($file.'.tmp', $file);
			echo "Failed to fetch $url to $file\n";
			return false;
		}else{
			if(file_exists($file.'.tmp'))
				unlink($file.'.tmp');
			$this->setLastTimeUpdated($file);
		}
		return true;
	}

	function setLastTimeUpdated($feed){
		if(!is_dir($this->base_file_path))
			$this->mkdir_recursive($this->base_file_path);
		$feed_update_time_file = $this->base_file_path.'last_update.json';
		if(file_exists($feed_update_time_file))
			$update_times = json_decode(file_get_contents($feed_update_time_file),1);
		$feed_stub = str_replace($this->base_file_path,'',$feed);
		if(substr($feed_stub,0,1) != '/')
			$feed_stub = '/'.$feed_stub;
		if($this->debug) echo "Setting last time updated for $feed_stub\n";
		$update_times[$feed_stub] = time();
		file_put_contents($feed_update_time_file,json_encode($update_times));
		return true;
	}

	function getLastTimeUpdated($feed){
		$feed_update_time_file = $this->base_file_path.'last_update.json';
		if(file_exists($feed_update_time_file))
			$update_times = json_decode(file_get_contents($feed_update_time_file),1);
		if(isset($update_times[$feed]))
			return $update_times[$feed];
		else
			return 0;
	}

	function updateFeed($sport=NULL,$league=NULL,$feed_type=NULL,$season=NULL){
		$feeds_fetched_count = 0;
		$feed_path = $this->getRemoteFeedStub($sport, $league, $feed_type, $season);
		$feed_path_update = $this->getLastTimeUpdated($feed_path);
		$feeds_to_update = $this->feedsToUpdate($feed_path,$feed_path_update);
		$feeds_fetched_count = $this->fetchFeeds($feeds_to_update);
		$feeds_time_updated_happened = $this->setLastTimeUpdated($feed_path);
		return $feeds_fetched_count;
	}

	function fetchAtomFeed($feed,$newerThan=NULL){

		$url = $this->base_url_atom.'?feed='.$feed;
		if(!empty($newerThan)){
			date_default_timezone_set('America/Chicago');
			$newerThan = strftime("%Y-%m-%dT%H:%M:%S%z",$newerThan);
			$url .= '&newerThan='.$newerThan;
		}
		return file_get_contents($url);	
	}

	function getRemoteFeedStub($sport=NULL,$league=NULL,$feed_type=NULL,$season=NULL){
		$feedKeywords = array(
			'sports' => array(
				'baseball',
				'basketball',
				'football',
				'hockey',
				'soccer',
				'golf',
				'nascar',
			),
			'leagues' => array(
				'mlb' => 'Major League Baseball',
				'nba' => 'National Basketball Association',
				'ncaab' => 'College Basketball',
				'wnba' => 'Women\'s National Basketball Association',
				'wncaab' => 'Women\'s College Basketball',
				'afl' => 'Arena Football League',
				'cfl' => 'Canadian Football League',
				'ncaaf' => 'College Football',
				'nfl' => 'National Football League',
				'ahl' => 'American Hockey League',
				'nhl' => 'National Hockey League',
				'bund' => 'German Bundesliga Soccer',
				'ccc' => 'English 1st. Division Soccer (Coca Cola Championship)',
				'cl' => 'European Champion\'s League Soccer',
				'ita' => 'Italian Serie A Soccer',
				'lig1' => 'French Le Championnat Soccer',
				'liga' => 'Spanish La Liga Soccer',
				'mls' => 'Major League Soccer (USA)',
				'prem' => 'English Premier League Soccer',
				'spl' => 'Scottish Premier League Soccer',
				'wc' => 'World Cup Soccer',
				'pga' => 'PGA Tour',
				'lpga' => 'LPGA Tour',
				'epga' => 'European Tour',
				'champ' => 'Champions Tour',
				'cup' => 'NASCAR Cup Series'
			),
			'feed_types' => array(
				'boxscores',
				'in-progress-boxscores',
				'tournaments',
				'recaps',
				'schedules',
				'results',
				'teams',
				'team-stats',
				'players',
				'player-stats',
				'drivers',
				'driver-stats',
				'injuries',
				'livescores',
				'odds',
				'news',
				'consensus'
			),
			'seasons' => array(
				'2006',
				'2006-2007',
				'2007',
				'2007-2008',
				'2008',
				'2008-2009',
				'2009',
				'2009-2010'
			),
			'odds_feed_types' => array(
				'standard',
				'premium'
			)
		);

		$sport = strtolower($sport);
		$league = strtolower($league);
		$feed_type = strtolower($feed_type);

		$feed_path = '/';

		if(!empty($sport)){
			$feed_path .= "$sport/";
			if(!in_array($sport, $feedKeywords['sports'])){
				if($this->debug) die("Invalid sport: $sport");
				return false;
			}
		}

		if(!empty($league)){
			$feed_path .= "$league/";
			if(!array_key_exists($league, $feedKeywords['leagues'])){
				if($this->debug) die("Invalid league: $league");
				return false;
			}
		}

		if(!empty($feed_type)){
			$feed_path .= "$feed_type/";
			if(!in_array($feed_type, $feedKeywords['feed_types'])){
				if($this->debug) die("Invalid feed type: $feed_type");
				return false;
			}
		}

		if(!empty($season)){
			$feed_path .= "$season/";
			if(!in_array($season, $feedKeywords['seasons'])){
				if($this->debug) die("Invalid season: $season");
				return false;
			}
		}
		return $feed_path;
	}

	function getLocalFeedStub($sport=NULL,$league=NULL,$feed_type=NULL,$season=NULL){
		$feedKeywords = array(
			'sports' => array(
				'baseball',
				'basketball',
				'football',
				'hockey',
				'soccer',
				'golf',
				'nascar',
			),
			'leagues' => array(
				'mlb' => 'Major League Baseball',
				'nba' => 'National Basketball Association',
				'ncaab' => 'College Basketball',
				'wnba' => 'Women\'s National Basketball Association',
				'wncaab' => 'Women\'s College Basketball',
				'afl' => 'Arena Football League',
				'cfl' => 'Canadian Football League',
				'ncaaf' => 'College Football',
				'nfl' => 'National Football League',
				'ahl' => 'American Hockey League',
				'nhl' => 'National Hockey League',
				'bund' => 'German Bundesliga Soccer',
				'ccc' => 'English 1st. Division Soccer (Coca Cola Championship)',
				'cl' => 'European Champion\'s League Soccer',
				'ita' => 'Italian Serie A Soccer',
				'lig1' => 'French Le Championnat Soccer',
				'liga' => 'Spanish La Liga Soccer',
				'mls' => 'Major League Soccer (USA)',
				'prem' => 'English Premier League Soccer',
				'spl' => 'Scottish Premier League Soccer',
				'wc' => 'World Cup Soccer',
				'pga' => 'PGA Tour',
				'lpga' => 'LPGA Tour',
				'epga' => 'European Tour',
				'champ' => 'Champions Tour',
				'cup' => 'NASCAR Cup Series'
			),
			'feed_types' => array(
				'boxscores',
				'in-progress-boxscores',
				'tournaments',
				'recaps',
				'schedules',
				'results',
				'teams',
				'team-stats',
				'players',
				'player-stats',
				'drivers',
				'driver-stats',
				'injuries',
				'livescores',
				'odds',
				'news',
				'consensus'
			),
			'seasons' => array(
				'2006',
				'2006-2007',
				'2007',
				'2007-2008',
				'2008',
				'2008-2009',
				'2009',
				'2009-2010'
			),
			'odds_feed_types' => array(
				'standard',
				'premium'
			)
		);

		$sport = strtolower($sport);
		$league = strtolower($league);
		$feed_type = strtolower($feed_type);

		$feed_path = '/';

		if(!empty($sport)){
			$feed_path .= "$sport/";
			if(!in_array($sport, $feedKeywords['sports'])){
				if($this->debug) die("Invalid sport: $sport");
				return false;
			}
		}

		if(!empty($league)){
			$feed_path .= strtoupper("$league/");
			if(!array_key_exists($league, $feedKeywords['leagues'])){
				if($this->debug) die("Invalid league: $league");
				return false;
			}
		}

		if(!empty($feed_type)){
			$feed_path .= "$feed_type/";
			if(!in_array($feed_type, $feedKeywords['feed_types'])){
				if($this->debug) die("Invalid feed type: $feed_type");
				return false;
			}
		}

		if(!empty($season)){
			$feed_path .= "$season/";
			if(!in_array($season, $feedKeywords['seasons'])){
				if($this->debug) die("Invalid season: $season");
				return false;
			}
		}
		return $feed_path;
	}

	function feedsToUpdate($feed,$newerThan=NULL){
		if(empty($feed))
			return false;
		$feedsToUpdateXML = simplexml_load_string($this->fetchAtomFeed($feed,$newerThan));
		$i=0;
		foreach($feedsToUpdateXML->entry as $feed){
			$url = (string)$feed->link->attributes()->href;
			$save_path = str_replace($this->base_url,'',$url);
			$feedsToUpdate[$i]['url'] = $url;
			$feedsToUpdate[$i]['save_path'] = $save_path;
			$i++;
		}
		if(empty($feedsToUpdate))
			return false;
		else
			return $feedsToUpdate;
	}

	function fetchFeeds($feedsToUpdate=NULL){
		if(empty($feedsToUpdate))
			return false;

		$i=0;
		foreach($feedsToUpdate as $feed){
			if($this->file_get_contents_to_disk($feed['url'],$this->base_file_path.$feed['save_path']) !== FALSE)
				$i++;
		}
		return $i;
	}

	function cleanOldFeeds($feed,$olderThan=604800){
		//Get the directory listing
		if ($handle = opendir($this->base_file_path.substr($feed,1))) {
			//Loop over the results
			while (false !== ($file = readdir($handle))) {
				//Skip . and ..
				if($file == '.' || $file == '..')
					continue;
				if($olderThan < (time()-filemtime($this->base_file_path.substr($feed,1).$file))){
					unlink($this->base_file_path.substr($feed,1).$file);
				}
			}
			//Do directory handle clean up
			closedir($handle);
		}
	}

	function startLiveFeedsProcess(){
		$pid_file = $this->base_file_path.'../../cron/pid.json';
		
		$loc['cakeshell'] = $this->base_file_path.'../../../../vendors/cakeshell';
		$loc['phpbin'] = '/usr/bin';
		$loc['cakeconsole'] = $this->base_file_path.'../../../../cake/console';
		
		print_r("nohup '".$loc['cakeshell']."' live_feed_delivery -cli '".$loc['phpbin']."' -console '".$loc['cakeconsole']."' > /dev/null 2>&1 & echo $!",$op);
		die();
		$pid = (int)$op[0];

		if(!empty($pid)){
			$pid_data['pid'] = $pid;
			file_put_contents($pid_file,json_encode($pid_data));
			return true;
		}else
			if($this->debug)
				die("PID could not be retrieved.  Something went wrong.");
		return false;
	}

	function pidRunning($checkPid=0){
		if(!is_numeric($checkPid) || $checkPid > 99999 || $checkPid == 0)
			return false;
		$ps_result = exec('ps '.$checkPid.' | grep live_feed_checker | grep -v grep | wc | awk \'{print $1}\'');
		if($ps_result >= 1)
			return true;
		return false;
	}

	function main(){
		$this->base_file_path = $this->determineBaseFilePath();
		
		//Injury
		$this->updateFeed('football','ncaaf','injuries');

		//Player
		$this->updateFeed('football','ncaaf','players','2009-2010');

		//Player Stats
		$this->updateFeed('football','ncaaf','player-stats','2009-2010');

		//Results
		$this->updateFeed('football','ncaaf','results','2009-2010');

		//Schedule
		$this->updateFeed('football','ncaaf','schedules');

		//Team
		$this->updateFeed('football','ncaaf','teams','2009-2010');

		//Team Stats
		$this->updateFeed('football','ncaaf','team-stats','2009-2010');

		//News
		$this->updateFeed('football','ncaaf','news'); //This has been empty for a while 09-22-09 :(

		//Odds
		$this->updateFeed('football','ncaaf','odds');

		//Consensus
		$this->updateFeed('football','ncaaf','consensus');

		//Boxscores
		$this->updateFeed('football','ncaaf','boxscores','2009-2010');

		//In-progress boxscores
		$this->updateFeed('football','ncaaf','in-progress-boxscores');

		//Live Scores
		$this->updateFeed('football','ncaaf','livescores');

		//Start the PID
		$pid_file = $this->base_file_path . '../../cron/pid.json';
		$pid = 0;
		if(file_exists($pid_file)){
			$pid = json_decode(file_get_contents($pid_file),1);
			$pid = $pid['pid'];
		}

		if(!$this->pidRunning($pid))
			$this->startLiveFeedsProcess();

		// // Clean up live scores older than 5 days
		// cleanOldFeeds(getLocalFeedStub('football','ncaaf','livescores'),432000);
		// 
		// //Clean up in-progress boxscores older than 5 days
		// cleanOldFeeds(getLocalFeedStub('football','ncaaf','in-progress-boxscores'),432000);
	}
}