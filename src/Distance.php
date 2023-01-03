<?php

namespace Acme;

class Distance
{
  public function distanceSimple(string $strandA, string $strandB): int
  {
    if (strlen($strandA) !== strlen($strandB)) {
      throw new \InvalidArgumentException('DNA strands must be of equal length.');
    }

    $strandACharacters = str_split($strandA);
    $strandBCharacters = str_split($strandB);

    $totalDistance = 0;
    foreach ($strandACharacters as $key => $value) {
      if ($value !== $strandBCharacters[$key]) {
        $totalDistance++;
      }
    }

    return $totalDistance;
  }

  public function distanceNoArray(string $strandA, string $strandB): int
  {
  if (strlen($strandA) != strlen($strandB)) {
    throw new InvalidArgumentException('DNA strands must be of equal length.');
  }
  $count = 0;
  for ($i = 0; $i < strlen($strandA); $i++) {
    if ($strandA[$i] != $strandB[$i]) {
      $count++;
    }
  }
  return $count;  
  }
  public function distanceShort(string $strandA, string $strandB): int
  {
    if (strlen($a) !== strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    return count(
        array_diff_assoc(
            str_split($a),
            str_split($b)
        )
    );
  }
  public function distanceFunctional(string $strandA, string $strandB): int
  {
        [$lettersA, $lettersB] = array(str_split($strandA), str_split($strandB));
    count($lettersA) != count($lettersB) &&
        throw new \InvalidArgumentException("DNA strands must be of equal length.");
    return array_sum(array_map(fn ($lA, $lB) => $lA != $lB, $lettersA, $lettersB));
  }

  public function distanceAnurat(string $strandA, string $strandB): int
  {
    if (strlen($strand_a) !== strlen($strand_b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    return count(array_filter(
        array_map(null, str_split($strand_a), str_split($strand_b)),
        fn ($n) => $n[0] !== $n[1]
    ));
  }
}

