<table class='table' style="box-sizing:border-box;">
         <tr><th>&nbsp;</th><th>Item</th><th>Qty</th><th>Price</th></tr>
          <tr ng-repeat="item in cart">
             <td>
             <div class="btn-group">
             <input class="btn btn-primary" type="button" value="Del" ng-click="deleteItem(item.id)" /><input  class="btn btn-primary" type="button" value=" + " ng-click="qtyIn(item)" /><input class="btn btn-primary"  type="button" value=" - " ng-click="qtyOut(item)" />
             </div>
             </td>
             <td>{{item.name}}</td><td>{{item.qty}}</td><td>{{item.price*item.qty}}</td>
          </tr>
          <tr><td colspan="3"><b>Total</b></td><td><b>{{total}}</b></td></tr>
</table>
<a class="btn btn-primary" id="v-pills-settings-tab" data-toggle="pill" href="#!checkout">Checkout</a>
    