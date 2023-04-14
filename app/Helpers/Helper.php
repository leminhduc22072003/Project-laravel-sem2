<?php
// khai bao cac ham helper
use Pusher\Pusher;

function role(){
    if(!\Illuminate\Support\Facades\Auth::check())
        return false;
    if(\Illuminate\Support\Facades\Auth::user()->role)
        return true;
    return false;
}

function url_after_login(){
    if(role()){
        return "/admin/chuyenbay/list";
    }
    return "/usersPage/index";
}

function notify_user($channel,$event,$data){
    $options = array(
        'cluster' => env("PUSHER_APP_CLUSTER"),
        'useTLS' => true
    );
    $pusher = new Pusher(
        env("PUSHER_APP_KEY"),
        env("PUSHER_APP_SECRET"),
        env("PUSHER_APP_ID"),
        $options
    );
    $pusher->trigger($channel, $event, $data);
}
