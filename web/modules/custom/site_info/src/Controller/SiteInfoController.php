<?php

namespace Drupal\site_info\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Core\Controller\ControllerBase;

class SiteInfoController extends ControllerBase {
  public function getSiteInfo() {
    $site_config = \Drupal::config('system.site');
    $site_name = $site_config->get('name');
    $site_slogan = $site_config->get('slogan');

    return new JsonResponse([
      'name' => $site_name,
      'slogan' => $site_slogan,
    ]);
  }
}
