<?php 
class manage { 
   private $entryId; 

   function __construct($entryId) {
        $this->entryId = $entryId;
        echo "This entry: " . $this->entryId ."<br/>";
    }    

    function doSomething($withThis) {
        //delete $this->entryId from database
        echo "manage - doSomething function: ".$withThis. "<br/>";
    }
}

?>