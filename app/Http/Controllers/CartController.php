<?php

namespace App\Http\Controllers;
use App\Models\bakeryitems;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    public function index(Request $request){
        
        if ($request->session()->exists('session.items')) {
            $storeditems= $request->session()->pull('session.items');
            $cart= $request->session()->pull('session.qty');
            return view('pages.cart')->with('storeditems', $storeditems)->with('cart',$cart);
            
        }
        else{
            return view('pages.emptycart');
        }
    }

    public function additem($itemid,Request $request){
        $cart = array();
        
        $item =  bakeryitems::find($itemid);

        if ($request->session()->exists('session.items')){
            $storeditems= $request->session()->get('session.items');
            foreach ( $storeditems as $it){
                if($it->id==$item->id){
                     $alreadyexists=1;
                     break;
                }
                else{
                    $alreadyexists=0;
                }   
            }
            if( $alreadyexists==0){
                $request->session()->push('session.items', $item);
                $oldcart= $request->session()->get('session.qty');
                $oldcart= Arr::add($oldcart,$item->id ,  1);
                $oldtotalprice=  Arr::pull($oldcart, 'totalprice');
                $newtotalprice=  $oldtotalprice + $item->price;
                $oldcart= Arr::add($oldcart,'totalprice', $newtotalprice);
                $request->session()->put('session.qty', $oldcart);
            }
         elseif($alreadyexists==1){
                $oldcart= $request->session()->get('session.qty');
                $x = Arr::pull($oldcart, $item->id);
                $x= $x+1;
                $oldcart= Arr::add($oldcart,$item->id ,  $x);
                $oldtotalprice=  Arr::pull($oldcart, 'totalprice');
                $newtotalprice=  $oldtotalprice + $item->price;
                $oldcart= Arr::add($oldcart,'totalprice', $newtotalprice);
                $request->session()->put('session.qty', $oldcart);
            }

        }
        else{
                $request->session()->push('session.items', $item);
                $cart = array($item->id => 1,'totalprice' =>$item->price );
                $request->session()->put('session.qty', $cart);
            }

        }
}

