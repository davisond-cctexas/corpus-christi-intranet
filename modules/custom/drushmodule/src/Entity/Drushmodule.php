<?php

namespace Drupal\drushmodule\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\drushmodule\DrushmoduleInterface;

/**
 * Defines the drushmodule entity type.
 *
 * @ConfigEntityType(
 *   id = "drushmodule",
 *   label = @Translation("drushmodule"),
 *   handlers = {
 *     "list_builder" = "Drupal\drushmodule\DrushmoduleListBuilder",
 *     "form" = {
 *       "add" = "Drupal\drushmodule\Form\DrushmoduleForm",
 *       "edit" = "Drupal\drushmodule\Form\DrushmoduleForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm"
 *     }
 *   },
 *   config_prefix = "drushmodule",
 *   admin_permission = "administer drushmodule",
 *   links = {
 *     "collection" = "/admin/structure/drushmodule",
 *     "add-form" = "/admin/structure/drushmodule/add",
 *     "edit-form" = "/admin/structure/drushmodule/{drushmodule}",
 *     "delete-form" = "/admin/structure/drushmodule/{drushmodule}/delete"
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   }
 * )
 */
class Drushmodule extends ConfigEntityBase implements DrushmoduleInterface {

  /**
   * The drushmodule ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The drushmodule label.
   *
   * @var string
   */
  protected $label;

  /**
   * The drushmodule status.
   *
   * @var bool
   */
  protected $status;

  /**
   * The drushmodule description.
   *
   * @var string
   */
  protected $description;

}
