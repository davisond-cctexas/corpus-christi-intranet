<?php

/**
 * @file
 * Contains \Drupal\bootstrap_site_alert\Form\BootstrapSiteAlertAdmin.
 */

namespace Drupal\bootstrap_site_alert\Form;

use Drupal\Component\Utility\Random;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;
use Drupal\Core\Cache\Cache;

class BootstrapSiteAlertAdmin extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'bootstrap_site_alert_admin';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('bootstrap_site_alert.settings');


    foreach (Element::children($form) as $variable) {
      $config->set($variable, $form_state->getValue($form[$variable]['#parents']));
    }

    // Save a random key so that we can use it to track a 'dismiss' action for
    // this particular alert.
    $random = new Random();
    $config->set('bootstrap_site_alert_key', $random->string(16, TRUE));

    $config->save();

    if (method_exists($this, '_submitForm')) {
      $this->_submitForm($form, $form_state);
    }

    // Flushes the pages after save.
    \Drupal::cache('render')->deleteAll();

    parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['bootstrap_site_alert.settings'];
  }

  public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $form = [];

    $form['description'] = [
      '#markup' => t('<h3>Use this form to setup the bootstrap site alert.</h3>
                  <p>Make sure you select the checkbox if you want to turn the alerts on</p>')
      ];

    $form['bootstrap_site_alert_active'] = [
      '#type' => 'checkbox',
      '#title' => t('If Checked, Bootstrap Site Alert is Active.'),
      '#default_value' => \Drupal::config('bootstrap_site_alert.settings')->get('bootstrap_site_alert_active'),
    ];

    $form['bootstrap_site_alert_severity'] = [
      '#type' => 'select',
      '#title' => t('Severity'),
      '#options' => [
        'alert-success' => t('Success'),
        'alert-info' => t('Info'),
        'alert-warning' => t('Warning'),
        'alert-danger' => t('Danger'),
      ],
      '#empty_option' => t('- SELECT -'),
      '#default_value' => \Drupal::config('bootstrap_site_alert.settings')->get('bootstrap_site_alert_severity'),
      '#required' => TRUE,
    ];

    $form['bootstrap_site_alert_dismiss'] = [
      '#type' => 'checkbox',
      '#title' => t('Make this alert dismissable?'),
      '#default_value' => \Drupal::config('bootstrap_site_alert.settings')->get('bootstrap_site_alert_dismiss'),
    ];

    // Need to load the text_format default a little differently.
    $message = \Drupal::config('bootstrap_site_alert.settings')->get('bootstrap_site_alert_message');

    $form['bootstrap_site_alert_message'] = [
      '#type' => 'text_format',
      '#title' => t('Alert Message'),
      '#default_value' => isset($message['value']) ? $message['value'] : NULL,
      '#required' => TRUE,
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save Alert Message'),
      '#button_type' => 'primary',
    ];

    // By default, render the form using theme_system_config_form().
    $form['#theme'] = 'system_config_form';

    // Cancelled out calling parent so we can have our own form submit.
    return $form;
  }

}
