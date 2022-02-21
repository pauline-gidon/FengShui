<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user ->setEmail('true@test.com')
        ->setPrenom('prenom')
        ->setNom('nom')
        ->setPassword('password')
        ->setFacebook('facebook')
        ->setInstagram('instagram')
        ->setTwitter('twitter');

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'prenom');
        $this->assertTrue($user->getNom() === 'nom');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getFacebook() === 'facebook');
        $this->assertTrue($user->getInstagram() === 'instagram');
        $this->assertTrue($user->getTwitter() === 'twitter');
    }



    public function testIsFalse()
    {
        $user = new User();

        $user ->setEmail('true@test.com')
        ->setPrenom('prenom')
        ->setNom('nom')
        ->setPassword('password')
        ->setFacebook('facebook')
        ->setInstagram('instagram')
        ->setTwitter('twitter');

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getFacebook() === 'false');
        $this->assertFalse($user->getInstagram() === 'false');
        $this->assertFalse($user->getTwitter() === 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getFacebook());
        $this->assertEmpty($user->getInstagram());
        $this->assertEmpty($user->getTwitter());

    }

}
