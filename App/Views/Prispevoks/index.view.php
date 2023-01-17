<?php
/** @var \App\Core\IAuthenticator $auth */
use \App\Models\Prispevok;
?>

<div class="container">
    <h2 class="text-center">Zakaznicke otazky</h2>
    <div class="text-right">
        <a href="?c=prispevoks&a=create " class="btn btn-success">Novy prispevok</a>
    </div>


    <table class="table">
        <thead>
        <tr style="color: white">
            <th>ID</th>
            <th>Meno Priezvisko </th>
            <th>Predmet</th>
            <th>Text</th>
            <th></th>
            <?php if ($auth->isLogged()) { ?>
                <th>Actions</th>
            <?php } else { ?>
                <th></th>
            <?php } ?>
        </tr>
        </thead>
        <tbody id="tbody">
        <?php

        /** @var \App\Models\Prispevok[] $data */
        foreach ($data as $prispevok) {
            ?>
            <tr>
                <td><a href=" ?c=prispevoks&a=prispevok&id=<?php echo $prispevok->getId() ?>" class="title-link">Q<?php echo $prispevok->getId()?></a></td>
                <th> <a class="card-title"> <?php echo $prispevok->getMeno() . " " . $prispevok->getPriezvisko()?></a></th>
                <th> <a class="card-title"> <?php echo $prispevok->getSubject()?></a></th>
                <th> <a class="card-title"> <?php echo $prispevok->getText()?></a> </th>

                    <?php if ($auth->isLogged() && $auth->isSpravca()) { ?>
                        <th>
                            <a href="?c=prispevoks&a=delete&id=<?php echo $prispevok->getId() ?>"  class="btn btn-outline-danger">Delete</a>
                            <a href="?c=prispevoks&a=edit&id=<?php echo $prispevok->getId() ?>"  class="btn btn-outline-success">Edit</a>
                        </th>
                        <th></th>
                    <?php } else {?>
                <th></th>
                <th></th>
            </tr><?php }} ?></tbody>
    </table>

</div>


</div>
</div>
</body>


