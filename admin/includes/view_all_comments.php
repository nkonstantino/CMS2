 <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Author</th>
                        <th>Comment</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>In Response to</th>
                        <th>Date</th>
                        <th>Approve</th>
                        <th>Unapprove</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                   
                   <?php //SEARCH ALL POSTS FOR INFORMATION
                    $query = "SELECT * FROM comments"; 
                    $select_posts = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_posts)){
                        $comment_id = $row['comment_id'];
                        $comment_post_id = $row['comment_post_id'];
                        $comment_author = $row['comment_author'];
                        $comment_email = $row['comment_email'];
                        $comment_content = $row['comment_content'];
                        $comment_status = $row['comment_status'];
                        $comment_date = $row['comment_date'];
                    
                        echo "<tr>"; 
                        echo "<td>{$comment_id}</td>";
                        echo "<td>{$comment_author}</td>";
                        echo "<td>{$comment_content}</td>";
                        echo "<td>{$comment_email}</td>";
                        echo "<td>{$comment_status}</td>";
                        
                        //DISPLAY POST TITLES
//                        $query = "SELECT * FROM posts WHERE comment_post_id = $comment_post_id";
//                            $select_posts = mysqli_query($connection, $query);  
//                            while($row = mysqli_fetch_assoc($select_categories)){
//                                $post_title = $row['post_title'];}
                        
                        echo "<td>Some Title</td>";
                        echo "<td>{$comment_date}</td>";
                        echo "<td><a href='posts.php?approve={}'>Approve</a></td>";
                        echo "<td><a href='posts.php?unapprove={}'>Unapprove</a></td>";
                        echo "<td><a href='posts.php?delete={}'>Delete</a></td>";
                        echo "</tr>";
                    }
                    
                    
                    
                    ?>
                </tbody>
            </table>
            
<?php 
if(isset($_GET['delete'])){ //DELETE SELECTED POST
    $post_del_id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = {$post_del_id} ";
    $deletequery = mysqli_query($connection, $query);
    header("Location: posts.php");
}

?>