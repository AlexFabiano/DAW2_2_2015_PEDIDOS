<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Useername</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cli):?>
                <tr>
                    <td><?php echo $cli['id']?></td>
                    <td><?php echo $cli['nome']?></td>
                    <td><?php echo $cli['username']?></td>
                    <td><?php echo $cli['email']?></td>
                    <td><?php echo $cli['senha']?></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
            
            <?php var_dump($clientes);?>
        </table>
    </body>
</html>
