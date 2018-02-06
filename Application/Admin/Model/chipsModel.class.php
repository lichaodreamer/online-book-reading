<?php 
   namespace Admin\Model;
   use Think\Model\RelationModel;
   /**
   * 
   */
   class ChipsModel extends RelationModel
   {
   	
   	protected $_link = array('chips' => self::HAS_ONE);
   }
?>