<?php

class Dotfile extends Eloquent
{
    protected $fillable = [];

    public static $rules = [

    ];

    public function snippets()
    {
        return $this->hasMany('Snippet');
    }
}
