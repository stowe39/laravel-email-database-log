<?php
$accessMiddlewares = config('email_log.access_middleware', null) 
    ? explode(',' , config('email_log.access_middleware'))
    : [];

Route::group([
    'prefix' => config('email_log.routes_prefix', ''),
    'middleware' => array_merge(['web'], $accessMiddlewares),
], function(){
    Route::get(
        '/email-log',
        [
            'as' => 'email-log',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@index',
        ]
    );
    Route::post(
        '/email-log/delete',
        [
            'as' => 'email-log.delete-old',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@deleteOldEmails',
        ]
    );
    Route::get(
        '/email-log/{id}/attachment/{attachment}',
        [
            'as' => 'email-log.fetch-attachment',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@fetchAttachment',
        ]
    );
    Route::get(
        '/email-log/{id}',
         [
            'as' => 'email-log.show',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@show',
        ]
    );
});

Route::group([
    'prefix' => config('email_log.routes_webhook_prefix', ''),
], function(){
    //webhooks events
    Route::post(
        '/email-log/webhooks/event',
        [
            'as' => 'email-log.webhooks',
            'uses' => 'Yhw\LaravelEmailDatabaseLog\EmailLogController@createEvent',
        ]
    );
});