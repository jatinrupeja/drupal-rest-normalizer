<?php

namespace Drupal\rest_entity_normalizer;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a movie entity type.
 */
interface MovieInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the movie title.
   *
   * @return string
   *   Title of the movie.
   */
  public function getTitle();

  /**
   * Sets the movie title.
   *
   * @param string $title
   *   The movie title.
   *
   * @return \Drupal\rest_entity_normalizer\MovieInterface
   *   The called movie entity.
   */
  public function setTitle($title);

  /**
   * Gets the movie creation timestamp.
   *
   * @return int
   *   Creation timestamp of the movie.
   */
  public function getCreatedTime();

  /**
   * Sets the movie creation timestamp.
   *
   * @param int $timestamp
   *   The movie creation timestamp.
   *
   * @return \Drupal\rest_entity_normalizer\MovieInterface
   *   The called movie entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the movie status.
   *
   * @return bool
   *   TRUE if the movie is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the movie status.
   *
   * @param bool $status
   *   TRUE to enable this movie, FALSE to disable.
   *
   * @return \Drupal\rest_entity_normalizer\MovieInterface
   *   The called movie entity.
   */
  public function setStatus($status);

}
