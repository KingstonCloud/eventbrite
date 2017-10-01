<?php

namespace KingstonDop\EventBrite\Entity;

use KingstonDop\EventBrite\Entity\Crud\EntityCreateTrait;
use KingstonDop\EventBrite\Entity\Crud\EntityDeleteTrait;
use KingstonDop\EventBrite\Entity\Crud\EntityUpdateTrait;

/**
 * Class Event.
 *
 * @package KingstonDop\EventBrite\Entity
 */
class Event extends Entity {

  use EntityCreateTrait;
  use EntityUpdateTrait;
  use EntityDeleteTrait;

  /**
   * {@inheritdoc}
   */
  public function getEntityApiType() {
    return 'events';
  }

}
