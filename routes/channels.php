<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', fn($user, $id): bool => (int) $user->id === (int) $id);
