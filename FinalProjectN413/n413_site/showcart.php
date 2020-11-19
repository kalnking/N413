<?php
require_once ('head.php');
require_once('n413connect.php');
?>

    <h2>My Shopping Cart</h2>
<?php
if (!isset($_SESSION['cart']) || !$_SESSION['cart']) {
    echo "Your shopping cart is empty.<br><br>";
    exit();
}

//proceed since the cart is not empty
$cart = $_SESSION['cart'];
?>

    <table class="membership_list">
        <tr>
            <th style="width: 60px">Name</th>
            <th style="width: 60px">Description</th>

        </tr>

        <?php
        //insert code to display the shopping cart content
        $sql = "SELECT * FROM memberships WHERE 0";
        foreach (array_keys($cart) as $id) {
            $sql .= " OR id=$id";
        }


        $query = $conn->query($sql);

        while($row = $query->fetch_assoc()) {
            $id = $row['id'];
            $photo = $row['photo'];
            $name = $row['name'];
            $description = $row['description'];

            echo "<tr>",
            "<td><a href='list.php?id=$id'>$id</a></td>",
            "<td>$photo</td>",
            "<td>$name</td>",
            "<td>$description</td>",
            "</tr>";
        }
        ?>
    </table>
    <br>
    <div>
        <input type="button" value="Checkout" onclick="window.location.href = 'checkout.php'"/>
        <input type="button" value="Cancel" onclick="window.location.href = 'list.php'" />
    </div>
    <br><br>

<?php
