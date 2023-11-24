<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        form {
            max-width: 400px;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="process_product.php" method="post">
        <h2>Add Product</h2>
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required>

        <label for="productPrice">Product Price:</label>
        <input type="number" id="productPrice" name="productPrice" required>

        <label for="productImage">Product Image URL:</label>
        <input type="url" id="productImage" name="productImage" required>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
