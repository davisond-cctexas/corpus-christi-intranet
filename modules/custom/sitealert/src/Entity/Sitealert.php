<?php

namespace Drupal\sitealert\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\sitealert\SitealertInterface;

/**
 * Defines the sitealert entity type.
 *
 * @ConfigEntityType(
 *   id = "sitealert",
 *   label = @Translation("sitealert"),
 *   handlers = {
 *     "list_builder" = "Drupal\sitealert\SitealertListBuilder",
 *     "form" = {
 *       "add" = "Drupal\sitealert\Form\SitealertForm",
 *       "edit" = "Drupal\sitealert\Form\SitealertForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *     }
 *   },
 *   config_prefix = "sitealert",
 *   admin_permission = "administer sitealert",
 *   links = {
 *     "collection" = "/admin/structure/sitealert",
 *     "add-form" = "/admin/structure/sitealert/add",
 *     "edit-form" = "/admin/structure/sitealert/{sitealert}",
 *     "delete-form" = "/admin/structure/sitealert/{sitealert}/delete"
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   }
 * )
 */
class Sitealert extends ConfigEntityBase implements SitealertInterface {

  /**
   * The sitealert ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The sitealert label.
   *
   * @var string
   */
  protected $label;

  /**
   * The sitealert status.
   *
   * @var bool
   */
  protected $status;

  /**
   * The sitealert description.
   *
   * @var string
   */
  protected $description;

}
