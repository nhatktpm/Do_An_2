<?php
class aa extends Controller {
    
    function nhat(){
        //Call Model
        

        // Call Views
        $this->view("master1", [            
            "Page"=>"content",                       
        ]);              
    }  
}
?>     