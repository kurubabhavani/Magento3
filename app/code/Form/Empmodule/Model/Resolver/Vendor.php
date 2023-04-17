<?php


namespace Form\Empmodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Vendor implements ResolverInterface
{
    /**
     * For displaying static data using GraphQL
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
        ){
        $vendor = [
            [
               'firstname'=>'bhavani',
               'lastname'=>'kuruba',
               'email'=>'kurubabhavani2002@gmail.com',
               'telephone'=>'9390424713',
               'city' => 'banglore',
               'state' => 'karnaka',
               'country' => 'india'
            ],
            [
                'firstname'=>'bhavani',
                'lastname'=>'kuruba',
                'email'=>'kurubabhavani2002@gmail.com',
                'telephone'=>'9390424713',
                'city' => 'banglore',
                'state' => 'karnaka',
                'country' => 'india'
             ]
        ];
            return[
                'total_count' => count($vendor),
                'items' => $vendor
            ];
    }
}
?>