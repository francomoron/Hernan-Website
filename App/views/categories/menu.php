<?php

function showMenuItems($parentId, $categories)
{
    $menu = '';
    if (is_null($parentId)) {
        $response = $categories->getParentCategories();
    } else {
        $response = $categories->getChildCategories($parentId);
    }
    while ($row = mysqli_fetch_assoc($response)) {
        if ($row['src']) {
            $menu .= '<li><a href="' . $row['src'] . '">' . $row['name'] . '</a>';
        } else {
            $menu .= '<li><a href="' . $row['name'] . '">' . $row['name'] . '</a>';
        }
        if (isset($_SESSION) && $_SESSION["user"]["privilege"] == "admin") {
            $menu .= '<div class="panel"><form action="pages/sortMenuItem.php" method="post">
                                <label for="' . $row['name'] . '"> Order: ' . $row['sort_order'] . ' </label>
                                <input type="hidden" name="id" value="' . $row['id'] . '" >
                                <input type="number" id="' . $row['name'] . '" name="order">
                                <button type="submit">
                                    <i class="fa-solid fa-arrows-rotate update-icon"></i>
                                </button>
                        </form>';
            $menu .= '<form action="pages/deleteItem.php" method="post">
                            <input type="hidden" name="id" value="' . $row['id'] . '" >
                            <button type="submit" class="trash">
                                <i class="fa-solid fa-trash trash-icon"></i>
                            </button>
                        </form></div>';
        }
        $menu .= '<ul class= "dropdown">' . showMenuItems($row['id'], $categories) . '</ul>';
        $menu .= '</li>';
    }
    return $menu;
}

echo showMenuItems(NULL, $categories);