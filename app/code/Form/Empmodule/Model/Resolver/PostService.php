<?php

namespace Form\Empodule\Model;

use Magento\Framework\App\Action\cantext;
use vendor\Module\Api\getpostService;
use Magento\vendor\Model\GroupFactory;

class PostService implements \Form\Empmodule\Api\PostInterface
{
    protected $_group;

      public function_construct
      (
        GroupFactory $group
      )
        {
            $this->_group = $group;
        }
        public function getvendorGroup($check){
            try{
                $store = [
                    'vendor_group_code'=>$check['groupname',
                    'tax_class_id']==>3
                ],
                $group = $this->_group->create();
                $group->setData($store);
                $group->save();

                $data_info=[
                    'group_Id'=>$check['groupId'].
                    'group_Name'=>$check['groupName']
                ];
                return $data_info;
            }
            catch(\Throwable $th)
            {
                $th->getMessage();
            }
        }
}     
