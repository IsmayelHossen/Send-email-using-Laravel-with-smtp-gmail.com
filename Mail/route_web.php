Route::get('/mailindex', 'MailController@index');
Route::post('/mailsend', 'MailController@postmail')->name('sendmail');