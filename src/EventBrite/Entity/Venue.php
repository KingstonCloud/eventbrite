<?php

namespace EventBriteConnector\Entity;

use EventBrite\Entity\Crud\EntityCreateTrait;
use EventBrite\Entity\Crud\EntityUpdateTrait;

/**
 * Class Venue.
 *
 * @package EventBrite\Entity
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
