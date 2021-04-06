<?php

namespace App\Http\Traits;
use App\Models\User;
use App\Models\Like;

trait Likeable
{

    //dynamically build queries - ie. Tweet::withLikes()->first();
    public function scopeWithLikes($query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    /**
     * option to pass in a $user, if passed in, use that ID
     * else use the id of the authed user
     */
    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->id()
        ], [
            'liked' => $liked]);
    }

    //call above function
    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function isLikedBy(User $user)
    {
        //$this->likes()->where('user_id', $user->id)->exists(); //comes into a loop n+1 problem
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', true)->count();  //must switch to redis for high volume
    }

    public function isDislikedBy(User $user)
    {
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }
}