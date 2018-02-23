<?php
/**
 * Created by PhpStorm.
 * User: Victor Souto
 * Date: 21/02/2018
 * Time: 13:53
 */

function getContainerClasses() {

    // Pages with ASIDE
    switch (Route::currentRouteName()) {

        case 'posts.show':
            return 'effect aside-in aside-left aside-bright mainnav-lg';

        default:
            return 'effect mainnav-lg';
    }

}

function getCurrentRoute() {

    $path = false;
    if (\Illuminate\Support\Facades\Route::getCurrentRoute() !== null )
        $path = \Illuminate\Support\Facades\Route::getCurrentRoute()->getPath();

    if ($path == '/')
        $path = 'planner';

    return $path;
}


function getUserAvatar($post) {

    if (!$post->author) {
        $user = \App\User::where('name','CriptoNinjas')->first();

        return asset($user->avatar);
    }

    return asset($post->author->avatar);
}

function getUserPlanButton($user, $plan_id) {

    if ($user->plans->count() > 0) {

        if ($user->last_activated_plan->id == $plan_id)
            return '<button class="btn btn-sm btn-primary">Seu plano atual</button>';
    }

    return '<button class="btn btn-sm btn-mint btn-icon select-plan" data-plan="'.$plan_id.'">Ativar</button>';
}
