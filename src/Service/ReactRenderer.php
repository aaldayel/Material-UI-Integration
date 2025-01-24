<?php

namespace Drupal\material_ui_integration\Service;

class ReactRenderer {
  /**
   * Renders a React component.
   *
   * @param string $component_name
   *   The name of the React component.
   * @param array $props
   *   Props to pass to the component.
   *
   * @return string
   *   The rendered HTML.
   */
  public function render($component_name, array $props = []) {
    $props_json = json_encode($props);
    return "<div data-react-component=\"$component_name\" data-props='$props_json'></div>";
  }
}
