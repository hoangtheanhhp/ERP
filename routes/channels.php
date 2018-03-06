<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

<<<<<<< HEAD
Broadcast::channel('App.User.{id}', function ($user, $id) {
=======
Broadcast::channel('App.UserController.{id}', function ($user, $id) {
>>>>>>> master
    return (int) $user->id === (int) $id;
});
