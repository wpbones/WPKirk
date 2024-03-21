<?php

namespace WPKirk\API;

if (!defined('ABSPATH')) {
  exit();
}

use WP_Error;
use WP_REST_Request;
use WP_REST_Response;
use WPKirk\WPBones\Routing\API\RestController;

class WPKirkV1Controller extends RestController
{
  public function version(): WP_Error|WP_REST_Response
  {
    if (current_user_can('edit_posts')) {
      return $this->response(['version' => '1.0.0']);
    }

    return $this->responseError(
      'Oops!',
      'Something goes wrong >> ' . $this->request->get_header('user_agent')
    );
  }

  public function multiple(): WP_REST_Response
  {
    return $this->response(['multiple' => '1.0.0']);
  }

  public function error(): WP_Error
  {
    error_log('Vendor ' . $this->vendor);

    logger()->debug('Vendor', $this->vendor);
    logger()->debug('REQUEST get_method', $this->request->get_method());
    logger()->debug('REQUEST get_headers', $this->request->get_headers());
    logger()->debug(
      'REQUEST get_query_params',
      $this->request->get_query_params()
    );
    logger()->debug('REQUEST get_attributes', $this->request->get_attributes());
    logger()->info('REQUEST get_attributes', $this->request->get_attributes());

    return $this->responseError(
      'Oops!',
      'Something goes wrong >> ' . $this->request->get_header('user_agent')
    );
  }

  public function controller_args(WP_REST_Request $request): WP_REST_Response
  {
    $value = var_export($request, true);

    return $this->response([
      'request' => $value,
      'ROUTE' => $request->get_route(),
    ]);
  }
}
