<html>
  <head>
    <title>
      www.DEVOUR.com
    </title>
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <link href="css/sty.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="mainpage.css" type="text/CSS">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <style>
        table.db-table    { border-right:1px solid #ccc; border-bottom:1px solid #ccc; }
        table.db-table th { background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
        table.db-table td { padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
    </style>
  </head>
  <body>
      <div class="header">
    <div class="container">
      <div class="top-header">
        <div class="logo">
          <a href="index.html"><img src="img/header.png" class="img-responsive" alt="" /></a>
        </div>
        <div class="queries">
          <p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
        </div>
                <div class="clearfix"></div>
            </div>
               
      </div>
        <div class="menu-bar">
      <div class="container">
                
            <div class="login-section">
          <ul>
            <li><a href="user.html">Home</a>  </li> |
            
            <li><a href="help.html">Help</a></li>
            <div class="clearfix"></div>
          </ul>
        </div>
            </div>
        </div>

      
        <div class="container">  
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Items</th>
                  <th>Price</th>
                  <th>Enter quantity</th>
                  <th>Add</th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Vanilla</td>
                  <td>150</td>
                  <td>
                    <form method="post" >
                  <div class="form-group">
                    <label for="qty1" class="control-label"></label>
                    <input type="text" class="form-control" name="qty1"> 
                  </div>
                  <td><button type="submit" class="btn btn-success" name="add1">Add food item</button></td>
                  <td><button type="submit" class="btn btn-success" name="del1">Remove item</button></form></td>
                  <?php
                      if(isset($_POST['add1']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                       
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            
                            $qty1 = mysqli_real_escape_string($link, $_REQUEST['qty1']);
                            $sql = "INSERT INTO carts (name, item, price, quantity) VALUES ('name', 'Vanilla', '150', '$qty1')";
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records added successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      }
                    ?>
                    <?php
                        if(isset($_POST['del1']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                          
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            $sql = "DELETE FROM carts WHERE item='Vanilla'";
                            
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records deleted successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      
                    }
                    ?>
                  
                  
                </tr>
                <tr>
                  <td>Choclate</td>
                  <td>50</td>
                  <td>
                  <form method="post">
                  <div class="form-group">
                    <label for="qty2"></label>
                    <input type="text" class="form-control" name="qty2"> 
                  </div>
                </td>
                  <td><button type="submit" class="btn btn-success" name="add2">Add food item</button></td>
                  <td><button type="submit" class="btn btn-success" name="del2">Remove item</button></form></td>
                  <?php
                      if(isset($_POST['add2']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                       
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            
                            $qty2 = mysqli_real_escape_string($link, $_REQUEST['qty2']);
                            $sql = "INSERT INTO carts (name, item, price, quantity) VALUES ('name', 'Choclate', '50', '$qty2')";
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records added successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      }
                    ?>
                    <?php
                        if(isset($_POST['del2']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                          
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            $sql = "DELETE FROM carts WHERE item='Choclate'";
                            
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records deleted successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      
                    }
                    ?>
                  
                <tr>
                  <td>Strawberry</td>
                  <td>25</td>
                  <td>
                  <form method="post">
                  <div class="form-group">
                    <label for="qty3"></label>
                    <input type="text" class="form-control" name="qty3"> 
                  </div>
                </td>
                  <td><button type="submit" class="btn btn-success" name="add3">Add food item</button></td>
                  <td><button type="submit" class="btn btn-success" name="del3">Remove item</button></form></td>
                  <?php
                      if(isset($_POST['add3']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                       
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            
                            $qty3 = mysqli_real_escape_string($link, $_REQUEST['qty3']);
                            $sql = "INSERT INTO carts (name, item, price, quantity) VALUES ('name', 'Strawberry', '25', '$qty3')";
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records added successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      }
                    ?>
                    <?php
                        if(isset($_POST['del3']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                          
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            $sql = "DELETE FROM carts WHERE item='Strawberry'";
                            
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records deleted successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      
                    }
                    ?>
                   </tr>
                <tr>
                  <td>Mango</td>
                  <td>60</td>
                  <td>
                  <form method="post">
                  <div class="form-group">
                    <label for="qty4"></label>
                    <input type="text" class="form-control" name="qty4"> 
                  </div>
                </td>
                  <td><button type="submit" class="btn btn-success" name="add4">Add food item</button></td>
                  <td><button type="submit" class="btn btn-success" name="del4">Remove item</button></form></td>
                  <?php
                      if(isset($_POST['add4']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                       
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            
                            $qty4 = mysqli_real_escape_string($link, $_REQUEST['qty4']);
                            $sql = "INSERT INTO carts (name, item, price, quantity) VALUES ('name', 'Mango', '60', '$qty4')";
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records added successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      }
                    ?>
                    <?php
                        if(isset($_POST['del4']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                          
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            $sql = "DELETE FROM carts WHERE item='Mango'";
                            
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records deleted successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      
                    }
                    ?>
                  
                </tr>
                <tr>
                  <td>BlackCurrent</td>
                  <td>60</td>
                  <td>
                  <form method="post">
                  <div class="form-group">
                    <label for="qty5"></label>
                    <input type="text" class="form-control" name="qty5"> 
                  </div>
                </td>
                  <td><button type="submit" class="btn btn-success" name="add5">Add food item</button></td>
                  <td><button type="submit" class="btn btn-success" name="del5">Remove item</button></form></td>
                  <?php
                      if(isset($_POST['add5']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                       
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            
                            $qty5 = mysqli_real_escape_string($link, $_REQUEST['qty5']);
                            $sql = "INSERT INTO carts (name, item, price, quantity) VALUES ('name', 'BlackCurrent', '60', '$qty5')";
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records added successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      }
                    ?>
                    <?php
                        if(isset($_POST['del5']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                          
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            $sql = "DELETE FROM carts WHERE item='BlackCurrent'";
                            
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records deleted successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      
                    }
                    ?>
                 
                </tr>
                <tr>
                  <td>Coconut</td>
                  <td>150</td>
                  <td>
                  <form method="post">
                  <div class="form-group">
                    <label for="qty6"></label>
                    <input type="text" class="form-control" name="qty6"> 
                  </div>
                </td>
                  <td><button type="submit" class="btn btn-success" name="add6">Add food item</button></td>
                  <td><button type="submit" class="btn btn-success" name="del6">Remove item</button></form></td>
                  <?php
                      if(isset($_POST['add6']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                       
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            
                            $qty6 = mysqli_real_escape_string($link, $_REQUEST['qty6']);
                            $sql = "INSERT INTO carts (name, item, price, quantity) VALUES ('name', 'Coconut', '150', '$qty6')";
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records added successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      }
                    ?>
                    <?php
                        if(isset($_POST['del6']))
                      {
                          $link = mysqli_connect("localhost", "root", "", "testdb");
                          
                          // Check connection
                        if($link === false)
                        {
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                        else
                        {
                            $sql = "DELETE FROM carts WHERE item='Coconut'";
                            
                            if(mysqli_query($link, $sql))
                            {
                                echo "Records deleted successfully.";
                            } 
                            else
                            {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }
                      
                    }
                    ?>
                  
                </tr>

              </tbody>
            </table>
        </div>
       </div>
      </div>
      <form method="post">
        <button type="submit" class="btn btn-success" name="submit">Show bill</button>
      <button type="submit" class="btn btn-success" name="submitform">Submit final list</button></form>
    </div>
      </form>
                <?php
                
            if(isset($_POST['submit']))
            {
                $link = mysqli_connect("localhost", "root", "", "testdb");
             
            // Check connection
            if($link === false)
            {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            else
            {
            // Escape user inputs for security
            $sql = "SELECT * FROM carts";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0) 
            {
            
              echo "<table width=100% border=3>";
              echo "<thead> <tr> <th>Item Name </th> <th>Price</th> <th> Quantity</th> </tr>";
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['item']; ?></td> 
                        <td><?php echo $row['price']; ?></td> 
                        <td><?php echo $row['quantity']; ?></td> 
                    </tr>
                    <br/>
                    <?php
                }
                echo "</table>";
                $query = "SELECT * FROM carts";
                $query_run = mysqli_query($link, $query);

                $qty= 0;
                while ($num = mysqli_fetch_array($query_run)) {
                $qty = $qty+($num['price']*$num['quantity']);
                }
                echo "<br><br><br>";
                echo "<h1> Total bill is:</h1>";
            echo $qty;
            }
            } 

            }
            if (isset($_POST['submitform']))
                {   
                ?>
            <script type="text/javascript">
            window.location = "cash.php";
            </script>      
                <?php
                }
            // close connection

                ?>
       
  </body>
</html>