<?php

namespace KingstonDop\EventBrite\Entity;

use KingstonDop\EventBrite\Entity\Crud\EntityCreateTrait;
use KingstonDop\EventBrite\Entity\Crud\EntityDeleteTrait;
use KingstonDop\EventBrite\Entity\Crud\EntityUpdateTrait;

/**
 * Class Series.
 *
 * @package KingstonDop\EventBrite\Entity
 */
class Series extends Entity {

  use EntityCreateTrait;
  use EntityUpdateTrait;
  use EntityDeleteTrait;

  /**
   * {@inheritdoc}
   */
  public function getEntityApiType() {
    return 'series';
  }

}
