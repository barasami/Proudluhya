<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use App\Models\subtrib;
use Illuminate\Auth\Access\HandlesAuthorization;

class postPolicy
{
    use HandlesAuthorization;

   public function delete(User $user ,Post $post)
   {
       return $user->id === $post->user_id;

   }

   
}
