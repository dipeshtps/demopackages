<?php
namespace Dipesh\Crud\Controller;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Dipesh\Crud\Model\TestPackage;

class TimezonesController extends Controller
{

    public function index($timezone)
    {
    	$data = TestPackage::all();
    	// dd($data);
        return view('crud::call-view')->with(compact('timezone','data'));
    }

}
