+--------+----------+-------------------------------+-----------------------+------------------------------------------------------------------------+------------------------------------------------------+
| Domain | Method   | URI                           | Name                  | Action                                                                 | Middleware                                           |
+--------+----------+-------------------------------+-----------------------+------------------------------------------------------------------------+------------------------------------------------------+
|        | GET|HEAD | /                             |                       | Closure                                                                | web                                                  |
|        | GET|HEAD | _debugbar/assets/javascript   | debugbar.assets.js    | Barryvdh\Debugbar\Controllers\AssetController@js                       | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure |
|        | GET|HEAD | _debugbar/assets/stylesheets  | debugbar.assets.css   | Barryvdh\Debugbar\Controllers\AssetController@css                      | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure |
|        | DELETE   | _debugbar/cache/{key}/{tags?} | debugbar.cache.delete | Barryvdh\Debugbar\Controllers\CacheController@delete                   | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure |
|        | GET|HEAD | _debugbar/clockwork/{id}      | debugbar.clockwork    | Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork          | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure |
|        | GET|HEAD | _debugbar/open                | debugbar.openhandler  | Barryvdh\Debugbar\Controllers\OpenHandlerController@handle             | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure |
|        | GET|HEAD | _debugbar/telescope/{id}      | debugbar.telescope    | Barryvdh\Debugbar\Controllers\TelescopeController@show                 | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure |
|        | GET|HEAD | api/user                      |                       | Closure                                                                | api,auth:api                                         |
|        | GET|HEAD | home                          | home                  | App\Http\Controllers\HomeController@index                              | web,auth                                             |
|        | GET|HEAD | login                         | login                 | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,guest                                            |
|        | POST     | login                         |                       | App\Http\Controllers\Auth\LoginController@login                        | web,guest                                            |
|        | POST     | logout                        | logout                | App\Http\Controllers\Auth\LoginController@logout                       | web                                                  |
|        | GET|HEAD | memories/$value/delete        |                       | App\Http\Controllers\MemoryController@delete                           | web,auth                                             |
|        | GET|HEAD | memories/$value/edit          |                       | App\Http\Controllers\MemoryController@edit                             | web,auth                                             |
|        | GET|HEAD | memories/create               | memories.create       | App\Http\Controllers\MemoryController@create                           | web,auth                                             |
|        | GET|HEAD | memories/index                | memories.index        | App\Http\Controllers\MemoryController@index                            | web,auth                                             |
|        | POST     | memories/store                | memories.store        | App\Http\Controllers\MemoryController@store                            | web,auth                                             |
|        | POST     | password/email                | password.email        | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest                                            |
|        | GET|HEAD | password/reset                | password.request      | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,guest                                            |
|        | POST     | password/reset                | password.update       | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest                                            |
|        | GET|HEAD | password/reset/{token}        | password.reset        | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,guest                                            |
|        | GET|HEAD | register                      | register              | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest                                            |
|        | POST     | register                      |                       | App\Http\Controllers\Auth\RegisterController@register                  | web,guest                                            |
+--------+----------+-------------------------------+-----------------------+------------------------------------------------------------------------+------------------------------------------------------+
