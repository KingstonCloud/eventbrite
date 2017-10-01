<?php

namespace KingstonDop\EventBrite\Entity;

/**
 * Class User.
 *
 * @package KingstonDop\EventBrite\Entity
 */
class User extends Entity {

  /**
   * {@inheritdoc}
   */
  public function __construct($entity_id) {
    if (empty($entity_id)) {
      $entity_id = 'me';
    }
    parent::__construct($entity_id);
  }

  /**
   * {@inheritdoc}
   */
  public function getEntityApiType() {
    return 'users';
  }

}
