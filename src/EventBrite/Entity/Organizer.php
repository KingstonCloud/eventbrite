<?php

namespace EventBriteConnector\Entity;

use EventBrite\Entity\Crud\EntityCreateTrait;
use EventBrite\Entity\Crud\EntityUpdateTrait;

/**
 * Class Organizer.
 *
 * @package EventBrite\Entity
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
