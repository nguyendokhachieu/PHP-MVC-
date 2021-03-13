<?php 
    require_once './views/header.php';

    $xhtml = '';
    if (count($this->data) != 0) {
        foreach ($this->data as $key => $value) {
            $status = ($value['status'] == 1) ? 'Active' : 'Inactive';
            $xhtml .= '<div class="row" id="item_'.$value['id'].'">
                        <p class="col col-1">'.$value['id'].'</p>
                        <p class="col col-2">'.$value['name'].'</p>
                        <p class="col col-3">'.$status.'</p>
                        <p class="col col-4">'.$value['ordering'].'</p>
                        <p class="col col-5">'.$value['member'].'</p>
                        <p class="col col-6">
                            <a class="btn" href="javascript:deleteItem('.$value['id'].')">Delete</a>
                        </p>
                    </div>';
        }
    }
    
    ?>
    
    <div class="content group-list">
    <div class="table">
        <div class="row head">
            <p class="col col-1">ID</p>
            <p class="col col-2">Name</p>
            <p class="col col-3">Status</p>
            <p class="col col-4">Ordering</p>
            <p class="col col-5">Member</p>
            <p class="col col-6">Action</p>
        </div>
        <?php echo $xhtml; ?>
    </div>    
</div>

<script src="./views/Group/js/groupJS.js"></script>


<?php 
    require_once './views/overlay.php';
    require_once './views/footer.php'; 
?>