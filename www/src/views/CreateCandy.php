<?php require './src/views/layouts/header.php'; ?>
<form action="/create" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">

    <label for="price">Price:</label>
    <input type="text" id="price" name="price">

    <input type="submit" value="Submit">
</form>
<?php require './src/views/layouts/footer.php'; ?>
