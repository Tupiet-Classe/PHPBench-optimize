<?php

namespace Demo\Tests\Benchmarks;

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

class SumBench
{
  private $start = 1;
  private $end = 100000;

/**
 * @Iterations(100)
 * @Revs(100)
 * @RetryThreshold(5.0)
 */
  public function benchArithmeticSum()
  {
    $sum = $this->end * ($this->start + $this->end) / 2;
  }

/**
 * @Iterations(100)
 * @Revs(100)
 * @RetryThreshold(5.0)
 */
  public function benchNormalSum()
  {
    $sum = 0;
    for ($i = $this->start; $i <= $this->end; $i++) {
      $sum += $i;
    }
  }

}
?>
