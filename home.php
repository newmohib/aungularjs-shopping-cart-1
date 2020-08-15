<?php
//require_once("config.php");
?>
<div class="product-card"  ng-repeat="product in products">
 <div>
 <img src="{{base_url}}/img/{{product.photo}}" width="100%" />
 </div>
 <div>
 {{product.name}}
 </div>
 <div>
 <b>tk{{product.new_price}}</b> <del>  tk{{product.old_price}}</del>
</div>
<div>
 <input type="button" class="btn btn-primary"  value="Add to cart" ng-click="addItem(product)" />
</div>
</div>