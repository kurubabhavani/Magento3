<?php

namespace Form\Empmodule\Cron;

class TestDetail
{
    public function execute()
    {
        //creating a mycsv.csv file
        $current_date=date("dMY_his");
        $name_of_file='customer_'.$current_date.'.csv';
        

        $file_data=array(
            'firstname'=>'bhavani',
            'lastname'=>'kuruba',
            'email'=>'kurubabhavani2002@gmail.com',
            'telephone'=>'9390424713',
            'city' => 'banglore',
            'state' => 'karnaka',
            'country' => 'india'
        );

        file_put_contents('/var/www/html/magento3/var/export/'.$name_of_file,$file_data);
    }
}
?>