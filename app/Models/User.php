<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name_and_family',
        'email',
        'password',
        "university" ,
        "college" ,
        "field" ,
        "mobile" ,
        "permit" ,
        "role" ,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class , "user_id" , 'id') ;
    }

    public function userArticleApprovalsChiefEditor()
    {
        return $this->hasMany(ArticleApprovalsChiefEditor::class , "user_id" , "id"); 
    }

    public function userArticleApprovalsReferee()
    {
        return $this->hasMany(ArticleApprovalsReferee::class , "user_id" , "id") ;
    }

    public function visitor()
    {
        return $this->hasMany(Visitor::class , "visitor_id" , "id") ;
    }
}
