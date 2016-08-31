<?php include "navs/nav_cuenta.php"?>
<div class="container-fluid bg-im3">
    <div class="container">
        <h1>Lideres de Wambo</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Nick</th>
                <th>Puntaje</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($lideres as $lider){?>
            <tr class="success">
                <td><?php echo $lider->nick_fk?></td>
                <td><?php echo $lider->puntaje?></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php include "footer.php"?>
