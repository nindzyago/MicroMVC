
<h1>List of users</h1>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <td>№</td>
                <td>Name</td>
                <td>Username</td>
                <td>email</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user):?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->name?></td>
                <td><?=$user->username?></td>
                <td><?=$user->email?></td>
                <td><?=$user->address?></td>
                <td><a href='?controller=user&action=show&id=<?=$user->id?>'>Show</a></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>