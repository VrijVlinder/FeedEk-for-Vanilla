<?php if (!defined('APPLICATION')) exit();

class FeedEkModule extends Gdn_Module {
   
 


   public function AssetTarget() {
      return 'Panel';
   }

   public function ToString() {  
     
      echo '<div id="divRss" class="Box"></div>';  
      
     
 
   
 
     
   }
}
