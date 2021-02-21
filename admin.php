<?php
require_once('config/configurations.php');
// require_once('widgets/detail.php');
?>

<?php
$currentpage = 'admin';
include('widgets/header.php');
// require_once('config/user_detail.php');

?>
<header class="page-header shadow">
  <nav>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3><b>Products</b></h3>
      </li>
      <li>
        <a href="#all_products">
          <span>All Products</span>
        </a>
      </li>
      <li>
        <a href="#insert_product">
          <span>Insert Product</span>
        </a>
      </li>
      <!-- <li>
        <a href="#update_product">
          <span>Update Product</span>
        </a>
      </li> -->
      <li>
        <a href="#delete_product">
          <span>Delete Product</span>
        </a>
      </li>

      <li>
        <a href="#all_users">
          <span>All Users</span>
        </a>
      </li>
      <li>
        <a href="#delete_user">
          <span>Remove User</span>
        </a>
      </li>
      <li>
        <a href="#messages">
          <span>Messages</span>
        </a>
      </li>
      <li>
        <a href="#carts">
          <span>Carts</span>
        </a>
      </li>
      <li>
        <a href="#payments">
          <span>Payments</span>
        </a>
      </li>
  </nav>
</header>

<section class="page-content">
  <section id="all_products">
    <h3><b>All products in store</b></h3>
    <div class="container py-4" id="allproducts">
      <table id="t98">
        <tr>
          <th class="had">
            <h5>Product_id</h5>
          </th>
          <th class="had">
            <h5>Product Name</h5>
          </th>
          <th class="had">
            <h5>Product Type</h5>
          </th>
          <th class="had">
            <h5>Product Brand</h5>
          </th>
          <th class="had">
            <h5>Product Price</h5>
          </th>
          <th class="had">
            <h5>Modified</h5>
          </th>
          <th class="had">
            <h5>Product Image</h5>
          </th>
        </tr>
        <?php foreach ($result as $pdt) : ?>
          <tr>
            <td class="had"><?php echo $pdt['product_id']; ?></td>
            <td class="had"><?php echo $pdt['product_name']; ?></td>
            <td class="had"><?php echo $pdt['product_type']; ?></td>
            <td class="had"><?php echo $pdt['product_brand']; ?></td>
            <td class="had"><?php echo $pdt['product_price']; ?></td>
            <td class="had"><?php echo $pdt['modified']; ?></td>
            <td class="had"><?php echo $pdt['product_image']; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
      <br>
    </div>
  </section>
  <section id="insert_product">
    <div class="container py-4 border-top"></div>
    <h3><b>Insert Product</b></h3>
    <div class="mb-3 text-center">

      <form method="post" action="admin.php" class="needs-validation" novalidate>
        <?php include('config/errors.php'); ?>
        <div class="container">

          <div class="form-group ">
            <label for="" class="text-black"><b>Product Name</b></label>
            <input type="textfield" class="form-control" id="" name="pdtname" placeholder="Name" value="" required>
          </div>

          <div class="form-group ">
            <label for="" class="text-black"><b>Product Type</b> </label>
            <input type="textfield" class="form-control" id="" name="pdttype" placeholder="Type" value="" required>
          </div>

          <div class="form-group ">
            <label for="" class="text-black"><b>Product Brand</b> </label>
            <input type="textfield" class="form-control" id="" name="pdtbrand" placeholder="Brand" value="" required>
          </div>

          <div class="form-group ">
            <label for="" class="text-black"><b>Product Price</b> </label>
            <input type="textfield" class="form-control" id="" name="pdtprice" placeholder="Price" value="" required>
          </div>

          <br>
          <button type="submit" class="btn btn-warning col-md-4" name="add_product"><b>Add Product</b></button>

        </div>
      </form>
    </div>
  </section>
  <!-- <section id="update_product">
    <div class="container py-4 border-top">
      <h3><b>Update Product</b></h3>
     
    </div>
  </section> -->
  <section id="delete_product">
    <div class="container py-4 border-top">
      <h3><b>Delete Product</b></h3>
      <div class="mb-3 text-center">
        <div class="dg">
          <h5>Danger zone</h5>
          <p>Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
        </div>
        <br>
        <form action="admin.php" method="post" class="needs-validation" novalidate>
          <label for="" class="white">Enter Product Id:</label>
          <input type="text" name="pid" class="form-control mb-3" required>
          <button type="submit" class="btn btn-danger col-md-4" name="delete_product">Delete Product</button>
        </form>
      </div>
    </div>
  </section>
  <section id="all_users">
    <div class="container py-4 border-top">
      <h3><b>All Users</b></h3>
      <div class="container py-4" id="allusers">
        <table id="t98">
          <tr>
            <th class="had">
              <h5>User_Id</h5>
            </th>
            <th class="had">
              <h5>FirstName</h5>
            </th>
            <th class="had">
              <h5>LastName</h5>
            </th>
            <th class="had">
              <h5>UserName</h5>
            </th>
            <th class="had">
              <h5>Email</h5>
            </th>
            <th class="had">
              <h5>Reg-Date</h5>
            </th>
            <th class="had">
              <h5>Address</h5>
            </th>
            <th class="had">
              <h5>Country</h5>
            </th>
            <th class="had">
              <h5>District</h5>
            </th>
            <th class="had">
              <h5>Zip</h5>
            </th>
          </tr>
          <?php foreach ($userresult as $user) : ?>
            <tr>
              <td class="had"><?php echo $user['id']; ?></td>
              <td class="had"><?php echo $user['fname']; ?></td>
              <td class="had"><?php echo $user['lname']; ?></td>
              <td class="had"><?php echo $user['username']; ?></td>
              <td class="had"><?php echo $user['email']; ?></td>
              <td class="had"><?php echo $user['regdate']; ?></td>
              <td class="had"><?php echo $user['address']; ?></td>
              <td class="had"><?php echo $user['country']; ?></td>
              <td class="had"><?php echo $user['district']; ?></td>
              <td class="had"><?php echo $user['zip']; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
        <br>
      </div>
    </div>
  </section>
  <section id="delete_user">
    <div class="container py-4 border-top">
      <h3><b>Delete User</b></h3>
      <div class="mb-3 text-center">
        <div class="dg">
          <h5>Danger zone</h5>
          <p>Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
        </div>
        <br>
        <form action="admin.php" method="post" class="needs-validation" novalidate>
          <label for="" class="white">Enter User Id:</label>
          <input type="text" name="uid" class="form-control mb-3" required>
          <button type="submit" class="btn btn-danger col-md-4" name="delete_user">Delete User</button>
        </form>
      </div>
    </div>
  </section>
  <section id="messages">
    <div class="container py-4 border-top">
      <h3><b>Messages</b></h3>
      <div class="container py-4" id="messages">
        <table id="t98">
          <tr>
            <th class="had">
              <h5>User Name</h5>
            </th>
            <th class="had">
              <h5>User Email</h5>
            </th>
            <th class="had">
              <h5>User Country</h5>
            </th>
            <th class="had">
              <h5>User Message</h5>
            </th>
            <th class="had">
              <h5>Date</h5>
            </th>
          </tr>
          <?php foreach ($messagesresult as $msg) : ?>
            <tr>
              <td class="had"><?php echo $msg['usr_name']; ?></td>
              <td class="had"><?php echo $msg['usr_email']; ?></td>
              <td class="had"><?php echo $msg['usr_country']; ?></td>
              <td class="had"><?php echo $msg['usr_msg']; ?></td>
              <td class="had"><?php echo $msg['modified']; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
        <br>
      </div>
    </div>
  </section>
  <section id="carts">
    <div class="container py-4 border-top">
      <h3><b>Carts</b></h3>
      <div class="container py-4" id="cart">
        <table id="t98">
          <tr>
            <th class="had">
              <h5>Cart ID</h5>
            </th>
            <th class="had">
              <h5>User ID</h5>
            </th>
            <th class="had">
              <h5>Product ID</h5>
            </th>
            <th class="had">
              <h5>Product QTY</h5>
            </th>
          </tr>
          <?php foreach ($cartresult as $cart) : ?>
            <tr>
              <td class="had"><?php echo $cart['cart_id']; ?></td>
              <td class="had"><?php echo $cart['userid']; ?></td>
              <td class="had"><?php echo $cart['product_id']; ?></td>
              <td class="had"><?php echo $cart['product_qty']; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
        <br>
      </div>
    </div>
  </section>
  <section id="payments">
    <div class="container py-4 border-top">
      <h3><b>Payments</b></h3>
      <div class="container py-4" id="payment">
        <table id="t98">
          <tr>
            <th class="had">
              <h5>User ID</h5>
            </th>
            <th class="had">
              <h5>Pay Method</h5>
            </th>
            <th class="had">
              <h5>Card Name</h5>
            </th>
            <th class="had">
              <h5>Card Number</h5>
            </th>
            <th class="had">
              <h5>Expiration Date</h5>
            </th>
            <th class="had">
              <h5>CVV</h5>
            </th>
          </tr>
          <?php foreach ($paymentsresult as $pay) : ?>
            <tr>
              <td class="had"><?php echo $pay['userid']; ?></td>
              <td class="had"><?php echo $pay['method']; ?></td>
              <td class="had"><?php echo $pay['cname']; ?></td>
              <td class="had"><?php echo $pay['cnum']; ?></td>
              <td class="had"><?php echo $pay['expiration']; ?></td>
              <td class="had"><?php echo $pay['cvv']; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
        <br>
      </div>
    </div>
  </section>

  <?php
  include('widgets/footer.php');
  ?>
</section>


<script src="assets/scripts/validate.js"></script>