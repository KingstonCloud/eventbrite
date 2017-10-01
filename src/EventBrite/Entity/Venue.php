<?php

namespace EventBriteConnector\Entity;

use KingstonDop\EventBrite\Entity\Crud\EntityCreateTrait;
use KingstonDop\EventBrite\Entity\Crud\EntityUpdateTrait;

/**
 * Class Venue.
 *
 * @package KingstonDop\EventBrite\Entity
 */
class Venue extends Entity {

  use EntityCreateTrait;
  use EntityUpdateTrait;

  /**
   * {@inheritdoc}
   */
  public function getEntityApiType() {
    return 'venues';
  }

}
