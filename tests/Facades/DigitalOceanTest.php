<?php

declare(strict_types=1);

/*
 * This file is part of Laravel DigitalOcean.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JordanMalan\Tests\DigitalOcean\Facades;

use JordanMalan\DigitalOcean\DigitalOceanManager;
use JordanMalan\DigitalOcean\Facades\DigitalOcean;
use JordanMalan\TestBenchCore\FacadeTrait;
use JordanMalan\Tests\DigitalOcean\AbstractTestCase;

/**
 * This is the digitalocean facade test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class DigitalOceanTest extends AbstractTestCase
{
  use FacadeTrait;

  /**
   * Get the facade accessor.
   *
   * @return string
   */
  protected function getFacadeAccessor() {
    return 'digitalocean';
  }

  /**
   * Get the facade class.
   *
   * @return string
   */
  protected function getFacadeClass() {
    return DigitalOcean::class;
  }

  /**
   * Get the facade root.
   *
   * @return string
   */
  protected function getFacadeRoot() {
    return DigitalOceanManager::class;
  }
}
