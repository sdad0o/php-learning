<?php
// Define an array of products, each with name, color, and size attributes
$products = [
    ['name' => 'T-shirt', 'color' => 'red', 'size' => 'medium'],
    ['name' => 'Jeans', 'color' => 'blue', 'size' => 'large'],
    ['name' => 'Sweater', 'color' => 'green', 'size' => 'small'],
    ['name' => 'Dress', 'color' => 'red', 'size' => 'small'],
    ['name' => 'Jacket', 'color' => 'blue', 'size' => 'medium'],
];

// Retrieve the selected filter values from the URL query parameters (using $_GET)
$color = $_GET['color'] ?? ''; // Default to empty string if 'color' parameter is not set
$size = $_GET['size'] ?? '';   // Default to empty string if 'size' parameter is not set

// Function to check if a given value should be marked as 'selected' in the dropdown
function isSelected(string $compare, string $to): string
{
    return $compare === $to ? 'selected' : ''; // Return 'selected' if the values match
}

// Filter the products array based on the selected color and size
$filteredProducts = array_filter(
    $products,
    fn(array $product): bool => ($color === '' || $product['color'] === $color) &&  // Filter by color if it's selected
        ($size === '' || $product['size'] === $size)        // Filter by size if it's selected
);
?>

<html>

<body>
    <h1>Filter Products</h1>
    <!-- Form to filter products by size and color -->
    <form method="GET">
        <!-- Dropdown for size selection -->
        <label>Size:</label>
        <select name="size" id="size">
            <option value="">Any</option>
            <option value="small" <?= isSelected($size, 'small') ?>>Small</option>
            <option value="medium" <?= isSelected($size, 'medium') ?>>Medium</option>
            <option value="large" <?= isSelected($size, 'large') ?>>Large</option>
        </select>

        <!-- Dropdown for color selection -->
        <label>Color:</label>
        <select name="color" id="color">
            <option value="">Any</option>
            <option value="red" <?= isSelected($color, 'red') ?>>Red</option>
            <option value="blue" <?= isSelected($color, 'blue') ?>>Blue</option>
            <option value="green" <?= isSelected($color, 'green') ?>>Green</option>
        </select>

        <!-- Submit button to apply the filter -->
        <button type="submit">Filter</button>
    </form>

    <!-- Link to reset the filter (reload the page without query parameters) -->
    <a href="<?= $_SERVER['PHP_SELF'] ?>">Reset Filter</a>

    <h2>Products</h2>
    <!-- Display the filtered list of products -->
    <?php if (!empty($filteredProducts)): ?>
        <ul>
            <!-- Loop through the filtered products and display each one -->
            <?php foreach ($filteredProducts as $product): ?>
                <li>
                    <!-- Output the product name, color, and size, escaping HTML for safety -->
                    <?= htmlspecialchars($product['name']) ?> - Color: <?= htmlspecialchars($product['color']) ?>, Size: <?= htmlspecialchars($product['size']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <!-- Message to show when no products match the selected filters -->
        <p>No products found matching the selected criteria.</p>
    <?php endif; ?>
</body>

</html>