<?php

namespace EventBrite\Entity;

use EventBrite\Entity\Crud\EntityCreateTrait;
use EventBrite\Entity\Crud\EntityDeleteTrait;
use EventBrite\Entity\Crud\EntityUpdateTrait;

/**
 * Class Event.
 *
 * @package EventBrite\Entity
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
