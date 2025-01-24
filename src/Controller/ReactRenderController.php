<?php

namespace Drupal\material_ui_integration\Controller;

use Drupal\Core\Controller\ControllerBase;

class ReactRenderController extends ControllerBase {
  public function render() {
    return [
      '#markup' => '<div id="react-root"></div>',
      '#attached' => ['library' => ['material_ui_integration/material_ui']],
    ];
  }
}
