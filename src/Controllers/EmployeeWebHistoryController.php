<?php


namespace People10\Controllers;


use App\Http\Controllers\Controller;
use People10\Models\EmployeeWebHistory;

class EmployeeWebHistoryController extends Controller
{
    public function get($ip_address) {
        return EmployeeWebHistory::whereIpAddress($ip_address)->get();
    }

    public function set() {

        $empWebHistory = EmployeeWebHistory::whereIpAddress(request('ip_address'))->first();

        if (@$empWebHistory) {
            $empWebHistory = $empWebHistory->pushUrl(request('url'));
        } else {
            $empWebHistory = EmployeeWebHistory::create([
                "ip_address" => request('ip_address'),
                "url" => [request('url')],
            ]);
        }
        return $empWebHistory;
    }

    public function unset($ip_address) {
        return EmployeeWebHistory::whereIpAddress($ip_address)->delete();
    }
}
