<?php

namespace Core\Middlewares;

use Core\Services\Auth;
use Core\Middleware;
use Core\View as CoreView;

class View implements Middleware {
  public function handle(callable $next) {
    CoreView::share('user', Auth::user());
    return $next();
  }
}