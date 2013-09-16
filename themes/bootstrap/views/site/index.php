<?php
$this->pageCaption='';
$this->pageTitle=Yii::app()->name;
?>
<div class="search">
     <form id="searchbox" action="search_letting">
		 <div id="search_box">
			<div id="search_header">
		   		 <h3 id="titel_detail">寻找国外的家</h3>
		   		 <p>覆盖英国所以城市，上千个正规合作机构，上万套房屋等你入住</p>
		    </div>
		    <div id="search_middle">	    	 
			    <div id="search_bar">
			    	<input id="search_field" name="cityname" value="" style="color: rgb(187, 187, 187);" autocomplete="off" placeholder="城市或者邮编" class="ui-autocomplete-input" role="textbox" aria-autocomplete="list" aria-haspopup="true">
			    	<input id="city" name="cityid" type="hidden" value="">
			    	<button id="search_house">搜索</button>
			    	<div class="blank"></div>
			    </div>
			    <div id="search_alt"><p>e.g. 'Birminghan', 'NW3', 'NW3 5TY'</p></div>      
			</div>
	       
	     </div>
     </form>
     </div>
<h2>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h2>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>