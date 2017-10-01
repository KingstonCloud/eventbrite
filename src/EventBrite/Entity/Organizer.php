<?php

namespace EventBriteConnector\Entity;

use KingstonDop\EventBrite\Entity\Crud\EntityCreateTrait;
use KingstonDop\EventBrite\Entity\Crud\EntityUpdateTrait;

/**
 * Class Organizer.
 *
 * @package KingstonDop\EventBrite\Entity
 */
class Organizer extends Entity {

  use EntityCreateTrait;
  use EntityUpdateTrait;

  /**
   * {@inheritdoc}
   */
  public function getEntityApiType() {
    return 'organizers';
  }

}
