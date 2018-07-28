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
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
             
    public function __construct()
    {
        parent::__construct();
    }

}