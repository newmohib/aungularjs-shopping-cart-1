{{message}}
<form ng-submit="save()">
<div class="from-group">
<label>Customer Name</label>
<input class="form-control" type="text" name="txtCustomerName" ng-model="user.customer_name" />
</div>

<div class="from-group">
<label>Payment Method</label>
<select class="form-control" name="cmbPaymentMethod" ng-model="user.payment_method">
 <option>VISA Card</option>
 <option>Master Card</option>
 <option>Cupon</option>
 <option>Cash</option>
</select>
</div>

<div class="from-group">
<label>Shipping Address</label>
<textarea class="form-control" name="txtShippingAddress" ng-model="user.shipping_address"></textarea>
</div>

<div class="from-group">
<label>Remark</label>
<textarea class="form-control" name="txtRemark" ng-model="user.remark"></textarea>
</div>


<div class="from-group"><input class="btn btn-primary" type="submit" name="btnSubmit" value="Continue" />
</div>
</form>