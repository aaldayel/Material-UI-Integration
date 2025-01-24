<?php

namespace Drupal\material_ui_integration\Plugin\WebformElement;

use Drupal\webform\Plugin\WebformElementBase;

/**
 * Provides a 'material_ui_element' element.
 *
 * @WebformElement(
 *   id = "material_ui_element",
 *   label = @Translation("Material UI Element"),
 *   description = @Translation("A custom Webform element rendered using Material UI."),
 *   category = @Translation("Custom")
 * )
 */
class MaterialUIElement extends WebformElementBase {

  /**
   * {@inheritdoc}
   */
  public function getDefaultProperties() {
    return [
      'material_ui_component' => '',
      'material_ui_props' => [],
    ] + parent::getDefaultProperties();
  }

  /**
   * {@inheritdoc}
   */
  public function buildElement(array $element, $value, array $properties) {
    /** @var \Drupal\material_ui_integration\Service\ReactRenderer $renderer */
    $renderer = \Drupal::service('material_ui_integration.react_renderer');

    $component = $properties['material_ui_component'] ?? '';
    $props = $properties['material_ui_props'] ?? [];

    $element['#markup'] = $renderer->render($component, $props);

    return $element;
  }
}
