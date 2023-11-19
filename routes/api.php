<?php
$accessMiddlewares = config('email_log.access_middleware_api', null) 
    ? explode(',' , config('email_log.access_middleware_api'))
    : [];

Route::group([
    'prefix' => 'api/' . config('email_log.routes_prefix_api', ''),
    'middleware' => array_merge(['api'], $accessMiddlewares),
], function(){
    Route::get(
        '/email-log',
        [
            'as' => 'api.email-log',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@indexApi',
        ]
    );
    Route::post(
        '/email-log/delete',
        [
            'as' => 'api.email-log.delete-old',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@deleteOldEmailsApi',
        ]
    );
    Route::get(
        '/email-log/{id}/attachment/{attachment}',
        [
            'as' => 'api.email-log.fetch-attachment',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@fetchAttachment',
        ]
    );
    Route::get(
        '/email-log/{id}',
         [
            'as' => 'api.email-log.show',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@showApi',
        ]
    );
});
