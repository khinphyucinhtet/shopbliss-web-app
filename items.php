<?php
// Add item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $id = trim($_POST["id"]);
    $name = trim($_POST["name"]);
    $desc = trim($_POST["description"]);
    $category = trim($_POST["category"]);

    if ($id && $name && $desc && $category) {
        $line = "$id|$name|$desc|$category\n";
        file_put_contents("items.txt", $line, FILE_APPEND);
        $msg = "✅ Item added to inventory!";
    } else {
        $msg = "❌ Please fill all fields.";
    }
}

// Delete item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $deleteIndex = $_POST['delete_index'];
    if (file_exists("items.txt")) {
        $lines = file("items.txt", FILE_IGNORE_NEW_LINES);
        if (isset($lines[$deleteIndex])) {
            unset($lines[$deleteIndex]);
            file_put_contents("items.txt", implode("\n", $lines) . "\n");
            $msg = "🗑️ Item removed from inventory.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ShopBliss Inventory System</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fff3e0;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #ff5722;
            margin-top: 10px;
        }

        .section {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 900px;
        }

        .section h2 {
            color: #ff5722;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="submit"] {
            width: 95%;
            padding: 12px;
            margin: 7px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #ff5722;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e64a19;
        }

        .message {
            text-align: center;
            font-weight: bold;
            color: #444;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 0.95rem;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #ffe0b2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #fffaf2;
        }

        .delete-button {
            background-color: crimson;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: darkred;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #999;
        }

        .form-button {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>📦 Items Inventory</h1>

    <div class="section">
        <h2>📝 Add to Inventory</h2>
        <form method="POST">
            <input type="text" name="id" placeholder="Item ID" required>
            <input type="text" name="name" placeholder="Item Name" required>
            <input type="text" name="description" placeholder="Description" required>
            <input type="text" name="category" placeholder="Category" required>
            <div class="form-button">
                <input type="submit" name="add" value="Add Item">
            </div>
        </form>
        <p class="message"><?= $msg ?? '' ?></p>
    </div>

    <div class="section">
        <h2>📋 In Stock Items</h2>
        <table>
            <tr><th>ID</th><th>Name</th><th>Description</th><th>Category</th><th>Action</th></tr>
            <?php
            if (file_exists("items.txt")) {
                $lines = file("items.txt", FILE_IGNORE_NEW_LINES);
                foreach ($lines as $index => $line) {
                    if (trim($line)) {
                        list($id, $name, $desc, $cat) = explode("|", $line);
                        echo "<tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$desc</td>
                                <td>$cat</td>
                                <td>
                                    <form method='POST' style='display:inline;'>
                                        <input type='hidden' name='delete_index' value='$index'>
                                        <input class='delete-button' type='submit' name='delete' value='Delete'>
                                    </form>
                                </td>
                              </tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='5'>No items in inventory yet.</td></tr>";
            }
            ?>
        </table>
    </div>

    <div class="footer">
        &copy; 2025 ShopBliss Admin Panel
    </div>

</body>
</html>
