<?php

namespace Drupal\drushmodule\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Datetime\DateFormatterInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for drushmodule routes.
 */
class DrushmoduleController extends ControllerBase {

  /**
   * The date formatter service.
   *
   * @var \Drupal\Core\Datetime\DateFormatterInterface
   */
  protected $dateFormatter;

  /**
   * Constructs the controller object.
   *
   * @param \Drupal\Core\Datetime\DateFormatterInterface $date_formatter
   *   The date formatter service.
   */
  public function __construct(DateFormatterInterface $date_formatter) {
    $this->dateFormatter = $date_formatter;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('date.formatter')
    );
  }

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#title' => $this->t('Content'),
      '#markup' => $this->t('Hello world!'),
    ];

    $build['date'] = [
      '#type' => 'item',
      '#title' => $this->t('Date'),
      '#markup' => $this->dateFormatter->format(REQUEST_TIME),
    ];

    return $build;
  }

}
