<?php

namespace Hackathon\LevelK;

class Brute
{
    private $hash;
    public $origin;
    private $method; // md5 - crc32 - base64 - sha1

    public function __construct($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @TODO :
     *
     * Cette méthode essaye de trouver par la force à quel mot de 4 lettres correspond ce hash.
     * Sachant que nous ne connaissons pas le hash (enfin si... il suffit de regarder les commentaires de l'attribut privé $methode.
     */
    public function force()
    {

        // @TODO
        $result = 'aaaa';
        $expected = $this->hash;

        while ($result != 'zzzz') {
            // echo($result.'->'.md5($result).'=>'.$expected."\n");
            if (md5($result) == $expected) {
                break;
            }
            if (crc32($result) == $expected) {
                break;
            }
            if (base64_encode($result) == $expected) {
                break;
            }
            if (sha1($result) == $expected) {
                break;
            }
            $result++;
        }

        $this->origin = $result;
        var_dump($result);
    }
}
