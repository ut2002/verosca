<table style="font-family:Arial,Helvetica,sans-serif;font-size:10pt" border="0" width="900">
    <tbody>
    <tr>
        <td style="border-bottom:1px solid #6a6a6a;">
            <br>
            This is an email sent automatically from verosca.com
            <br>
            We have received the customer's information contacted via the contact page at <?= date('H:i d/m/Y'); ?>
            <br>
            <br>
        </td>
    </tr>
    <tr><td><br>【<?= $data['text']['form']['name']['title']; ?>】</td></tr>
    <tr><td><?= $data['name']; ?> <br></td></tr>
    <tr><td><br>【<?= $data['text']['form']['email']['title']; ?>】</td></tr>
    <tr><td><?= $data['email']; ?> <br></td></tr>
    <tr><td><br>【<?= $data['text']['form']['subject']['title']; ?>】</td></tr>
    <tr><td><?= $data['subject']; ?> <br></td></tr>
    <tr><td><br>【<?= $data['text']['form']['message']['title']; ?>】</td></tr>
    <tr><td><?= $data['message']; ?> <br><br></td></tr>

    <tr>
        <td style="border-top:1px solid #6a6a6a;">
            <br>
            Do not reply to this Email.
            <br>
            <br>
        </td>
    </tr>
    </tbody>
</table>
