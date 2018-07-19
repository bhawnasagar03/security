<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    public $guards=null;
    public $totalQty;

    public function __construct($oldWishlist)
    {
    	if($oldWishlist)
    	{
    		$this->guards 	=$oldWishlist->guards;
    		$this->totalQty =$oldWishlist->totalQty;
    	}
    }

    public function add($guard, $id)
    {
    	$storedGuard=['qty'=>0, 'guard'=>$guard];
    	if($this->guards)
    	{
    		if(array_key_exists($id, $this->guards))
    		{
    			$storedGuard=$this->guards[$id];
    		}
    	}
    	$storedGuard['qty']++;
    	$this->guards[$id]=$storedGuard;
    	$this->totalQty++;
    	
    }
}
