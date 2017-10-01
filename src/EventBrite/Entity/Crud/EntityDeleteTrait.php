<?php

namespace EventBrite\Entity\Crud;

use EventBrite\Entity\Entity;

/**
 * Class EntityDeleteTrait.
 *
 * @package EventBrite\Entity
 */
trait EntityDeleteTrait {

  /**
   * Delete entity.
   *
   * @return mixed
   *   The response data.
   *
   * @throws \RuntimeException
   */
  public function delete() {
    /** @var Entity $this */
    if ($this->isNew()) {
      throw new \RuntimeException('Cannot delete a new entity');
    }

    $params = array(
      'method' => 'DELETE',
      'url' => $this->getEntityEndpoint(),
    );

    return $this->getConnector()->request($params);
  }

}
