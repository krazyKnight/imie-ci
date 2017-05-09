<?php namespace SimilarText\Test;

use \SimilarText\Finder;

/**
 * Class FinderTest
 * @package SimilarText\Test
 */
class FinderTest extends \PHPUnit_Framework_TestCase
{
    public function testOk() {
    	// si le user ne rentre pas correctement son champ, le but est de prendre tout de meme en comptre l'entree
		$a = new Finder('bannane', ['KIWI', "banane"]);

        // on verifie que le test entree est égale à la variable
        $this->assertEquals('banane', $a->First());
    }
}
