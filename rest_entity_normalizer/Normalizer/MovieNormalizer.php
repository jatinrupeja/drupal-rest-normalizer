<?php

namespace Drupal\rest_entity_normalizer\Normalizer;

use Drupal\serialization\Normalizer\EntityNormalizer;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Movie normalizer class for Movie Entity.
 */
class MovieNormalizer extends EntityNormalizer {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The interface or class that this Normalizer supports.
   *
   * @var array
   */
  protected $supportedInterfaceOrClass = ['Drupal\rest_entity_normalizer\Entity\movie'];

  /**
   * Constructs an ContentEntityNormalizer object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($entity, $format = NULL, array $context = []) {

    $normalized = [];
    $data = parent::normalize($entity, $format, $context);

    $normalized['id'] = $entity->id();
    $normalized['title'] = $entity->getTitle();
    $normalized['release_date'] = $data['field_release_date'][0]['value'];
    $genre = $this->entityTypeManager->getStorage('taxonomy_term')->load($data['field_genre'][0]['target_id']);
    $normalized['genre'] = $genre->name->value;

    return $normalized;
  }

}
