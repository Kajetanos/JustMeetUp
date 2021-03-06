<?php

//namespace AppBundle\User;
//
//use FOS\UserBundle\Model\User as BaseUser;
//use Doctrine\ORM\Mapping as ORM;
//
//
///**
// * @ORM\Entity
// * @ORM\Table(name="fos_user")
// */
//class User extends BaseUser{
//    
//    /**
//     * @ORM\Id
//     * @ORM\Column(type="integer")
//     * @ORM\GeneratedValue(strategy="AUTO")
//     */
//    protected $id;
//
//    public function __construct($login , $email)
//    {
//        parent::__construct();
//        $this->email = $email; 
//        $this->login = $login; 
//    }
//    /**
//     *
//     * @ORM\Column(type="string" length=100)
//     */
//    protected $login;
//    function getLogin() {
//        return $this->login;
//    }
//
//    function getEmail() {
//        return $this->email;
//    }
//
//    function setLogin($login) {
//        $this->login = $login;
//    }
//
//    function setEmail($email) {
//        $this->email = $email;
//    }
//
//        /**
//     * @ORM\Columns(type="string" length=100)
//     */
//    protected $email; 
//    
//}
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="googleplus_id", type="string", length=255, nullable=true) */
    protected $googleplus_id;

    /** @ORM\Column(name="googleplus_access_token", type="string", length=255, nullable=true) */
    protected $googleplus_access_token;

    /** @ORM\Column(name="github_id", type="string", length=255, nullable=true) */
    protected $github_id;

    /** @ORM\Column(name="github_access_token", type="string", length=255, nullable=true) */
    protected $github_access_token;
    
    /**
     *  @ORM\Column (name="activity" , type="string", length=100, nullable=true)
     */
    protected $activity;
    public function __construct() {
        parent::__construct();
    }
    public function setActivity($activity){
        $this->activity = $activity;
        return $this;
    }
    public function getActivity(){
        return $this->activity;
    }

    public function setGoogleplusId($googlePlusId) {
        $this->googleplus_id = $googlePlusId;

        return $this;
    }

    public function getGoogleplusId() {
        return $this->googleplus_id;
    }

    public function setGoogleplusAccessToken($googleplusAccessToken) {
        $this->googleplus_access_token = $googleplusAccessToken;

        return $this;
    }

    public function getGoogleplusAccessToken() {
        return $this->googleplus_access_token;
    }

    public function setGithubId($githubId) {
        $this->github_id = $githubId;

        return $this;
    }

    public function getGithubId() {
        return $this->github_id;
    }

    public function setGithubAccessToken($githubAccessToken) {
        $this->github_access_token = $githubAccessToken;

        return $this;
    }

    public function getGithubAccessToken() {
        return $this->github_access_token;
    }

}
