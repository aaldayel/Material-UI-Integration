<?php

namespace Drupal\material_ui_integration\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration form for Material UI Integration settings.
 */
class MaterialUISettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['material_ui_integration.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'material_ui_integration_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('material_ui_integration.settings');

    $form['enable_material_ui'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable Material UI Integration'),
      '#default_value' => $config->get('enable_material_ui'),
    ];

    $form['custom_css_path'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Custom CSS Path'),
      '#description' => $this->t('Provide a path to a custom CSS file for Material UI styling. Leave blank to use the default.'),
      '#default_value' => $config->get('custom_css_path'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('material_ui_integration.settings')
      ->set('enable_material_ui', $form_state->getValue('enable_material_ui'))
      ->set('custom_css_path', $form_state->getValue('custom_css_path'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
