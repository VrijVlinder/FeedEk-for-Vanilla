<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2014 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

// Define the plugin:


$PluginInfo['FeedEk'] = array(
   'Name'=>'FeedEk',
   'Description' => "This plugin adds an RSS FeedEk on the panel. ",
   'Version' => '1.1',
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class FeedEk_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	
   public function Setup() {
		
   }

 public function Base_Render_Before($Sender) {
  $Sender->AddJsFile('http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js');
  //if you want to use with localization then use this instead of moment.min.js
 // $Sender->AddJsFile('plugins/FeedEk/moment-with-langs.min.js');
  $Sender->AddJsFile('plugins/FeedEk/moment.min.js');
  $Sender->AddJsFile('plugins/FeedEk/feed.js');
  $Sender->AddJsFile('plugins/FeedEk/FeedEk.js');
  $Sender->AddCssFile('plugins/FeedEk/design/FeedEk.css');


}

















     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
