<?php


$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    
    $this->post('historic', 'BalanceController@searchHistoric')->name('historic.search');
    $this->get('historic', 'BalanceController@historic')->name('admin.historic');

    $this->post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');
    $this->get('transfer', 'BalanceController@transfer')->name('balance.transfer');
    $this->post('transfer', 'BalanceController@transferStore')->name('transfer.store');


    $this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    $this->get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');
    
    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    
    $this->get('balance', 'BalanceController@index')->name('admin.balance');
    $this->get('/', 'AdminController@index')->name('admin.home'); // Route to the admin management
});


$this->get('/', 'Site\SiteController@index')->name('home'); // Route to the site front-end 


Auth::routes();

