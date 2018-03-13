<?php

namespace Drupal\cctxmod\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'AlertBlock' block.
 *
 * @Block(
 *  id = "alert_block",
 *  admin_label = @Translation("Alert block"),
 * )
 */
class AlertBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    
    $build = [];
    $build['alert_block']['#type'] = 'markup';
    $build['alert_block']['#markup'] = $this->t(_cctxmod_generate_alert());

    return $build;
  }

}
