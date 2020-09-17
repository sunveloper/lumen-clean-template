<?php
namespace App\Http\Controllers;

use Carbon\Carbon;

class RootController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        $result = array();
        try {
            $result['data'] = array(
                'app_version' => app()->version(),
                'now' => Carbon::now()->format('Y-m-d H:i:s'),
            );
            if (app()->environment('local', 'staging')) {
                $result['data']['environment'] = app()->environment();
            }
        } catch (\Exception $e) {
            $result['error'] = array(
                'message' => $e->getMessage(),
            );
            /* abort(400, $e->getMessage()); */
        }
        return response()->json($result);
    }
}
