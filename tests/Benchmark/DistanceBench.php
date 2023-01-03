<?php

namespace Acme\Tests\Benchmark;

use Acme\Distance;

class DistanceBench
{
    public function benchSimple()
    {
        $consumer = new Distance();
        $consumer->distanceSimple('GGACGGATTCTG', 'AGGACGGATTCT');
    }

    public function benchNoArray()
    {
        $consumer = new Distance();
        $consumer->distanceNoArray('GGACGGATTCTG', 'AGGACGGATTCT');
    }

    // https://exercism.org/tracks/php/exercises/hamming/solutions/zembrowski
    public function benchShort()
    {
        $consumer = new Distance();
        $consumer->distanceShort('GGACGGATTCTG', 'AGGACGGATTCT');
    }

    // https://exercism.org/tracks/php/exercises/hamming/solutions/tz924
    public function benchFunctional()
    {
        $consumer = new Distance();
        $consumer->distanceFunctional('GGACGGATTCTG', 'AGGACGGATTCT');
    }

    // https://exercism.org/tracks/php/exercises/hamming/solutions/anurat
    public function benchAnurat()
    {
        $consumer = new Distance();
        $consumer->distanceAnurat('GGACGGATTCTG', 'AGGACGGATTCT');
    }
}
