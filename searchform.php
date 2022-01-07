<form action="<?php echo bloginfo('url') ?>/">
    <label for="searchInput"></label>

    <input
        id="searchInput"
        type="text"
        name= "s"
        placeholder="Type search"
        value="<?php echo $_GET['s'];?>"
        required
    >
        
    <button type="submit">Search</button>
</form>