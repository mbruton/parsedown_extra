<?php

namespace parsedown\extra{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_parsedown_extra extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('parsedown_extra', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                

                
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>