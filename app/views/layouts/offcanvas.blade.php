<!-- Off Canvas Menu --> 
<aside class="left-off-canvas-menu"> 
    <ul class="off-canvas-list"> 
      <li>
        <label>TINDERO</label>
      </li> 
      
      <li>
        <a href="index" class="@if($title == 'Tindero') active @endif">
          <i class="fa fa-home fa-fw"></i> Home</a>
      </li> 
      
      <li>
        <a href="cart" class="@if($title == 'Cart') active @endif">
          <i class="fa fa-shopping-cart fa-fw"></i> Cart</a>
      </li> 

      <li>
        <a href="shop" class="@if($title == 'Shop') active @endif">
          <i class="fa fa-tag fa-fw"></i> Shop</a>
      </li> 

      <li>
        <a href="checkout" class="@if($title == 'Checkout') active @endif"> 
          <i class="fa fa-check-square-o fa-fw"></i> Checkout</a>
      </li> 

      <li>
        <a href="about" class="@if($title == 'About') active @endif">
          <i class="fa fa-group fa-fw"></i> About</a>
      </li>

      <li>
        <a href="contact" class="@if($title == 'Contact') active @endif">
          <i class="fa fa-phone fa-fw"></i>Contact</a>
      </li>            
    </ul> 
</aside>