<?php 
class manage { 
   private $entryId; 

   function __construct($entryId) {
        $this->entryId = $entryId;
        echo "enteryId: ".$this."<br/>";
    }    

    function deleteEntry() {
        //delete $this->entryId from database
        echo "manage - deleting entry...<br/>";
    }
}

?>