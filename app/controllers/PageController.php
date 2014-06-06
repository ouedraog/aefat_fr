<?php

class PageController extends BaseController {
    
        public function getIndex()
    {
        return View::make('pages/acceuil/acceuil');
    }
        public function aefat()
    {
        return View::make('pages/aefat/about');
    }
        
}
