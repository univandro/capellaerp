<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>
<div id="tabledata">
<div class="rowdata">
	<span class="cell">Address Type</span>
    <span class="cell"><input type="text" name="search_addresstype" id="search_addresstype"></span>
</div>
<div class="rowdata">
<span class="cell">
<?php
$imgsearch=CHtml::image(Yii::app()->request->baseUrl.'/images/search.png');
echo CHtml::link($imgsearch,'#',array(
		   'style'=>'cursor: pointer; text-decoration: underline;',
		   'onclick'=>'{
				$.fn.yiiGridView.update("datagrid", {
                    data: {
                        "addresstypename": $("#search_addresstype").val(),
                    }
					});
				$("#searchdialog").dialog("close");
		   }',
			'id'=>'search',
			'title'=>Catalogsys::model()->getcatalog('searchdata')
		));
		?></span>
</div>
</div>   
<?php $this->endWidget(); ?>
</div><!-- form -->