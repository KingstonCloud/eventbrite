<?php

namespace KingstonDop\EventBrite\Entity;

use KingstonDop\EventBrite\Entity\Crud\EntityCreateTrait;
use KingstonDop\EventBrite\Entity\Crud\EntityDeleteTrait;

/**
 * Class Webhook.
 *
 * @package KingstonDop\EventBrite\Entity
 */
class Webhook extends Entity {

  use EntityCreateTrait;
  use EntityDeleteTrait;

  /**
   * @return string
   */
  public function getEntityApiType() {
    return 'webhooks';
  }

  /**
   * Load entity.
   *
   * @param array $conditions
   *   An array of conditions.
   * @param bool $reset
   *   A boolean indicating whether or not to reset stored data.
   *
   * @return Entity
   *   An entity instance.
   */
  public function load(array $conditions = array(), $reset = FALSE) {
    return parent::load('', $conditions, $reset);
  }

}
