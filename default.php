<?php if (!defined('APPLICATION')) exit();


// Define the plugin:
$PluginInfo['FeedEk'] = array(
   'Name'=>'FeedEk',
   'Description' => "This plugin adds an RSS FeedEk on the panel. ",
   'Version' => '1.4',
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class FeedEk_Plugin extends Gdn_Plugin {
  
   public function Base_Render_Before($Sender) {
    $Controller = $Sender->ControllerName;
	$ShowOnController = array(
					'discussioncontroller',
					'categoriescontroller',
					'discussionscontroller',
					'profilecontroller',
					'activitycontroller'
				);
   if (!InArrayI($Controller, $ShowOnController)) return; 

     $Sender->AddJsFile('http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js');
  //if you want to use with localization then use this instead of moment.min.js
 // $Sender->AddJsFile('plugins/FeedEk/moment-with-langs.min.js');
  $Sender->AddJsFile('plugins/FeedEk/moment.min.js');
  $Sender->AddJsFile('plugins/FeedEk/feed.js');
  $Sender->AddJsFile('plugins/FeedEk/FeedEk.js');
  $Sender->AddCssFile('plugins/FeedEk/design/FeedEk.css');

    
      $FeedEkModule = new FeedEkModule($Sender);
      $Sender->AddModule($FeedEkModule);
   }
 
  
 
   
   public function Setup() {
   
   }
public function OnDisable() {
      return TRUE;
   }

}
