<table style="font-family:Arial,Helvetica,sans-serif;font-size:10pt" border="0" width="900">
    <tbody>
    <tr>
        <td style="border-bottom:1px solid #6a6a6a;">
            <br>
            Đây là Email được gửi tự động từ fertrade.vn
            <br>
            Chúng tôi đã nhận được thông tin của khách hàng liên hệ qua trang liên hệ lúc <?= date('H:i d/m/Y'); ?>
            <br>
            <br>
        </td>
    </tr>
    <tr><td><br>【<?= $data['text']['form']['name']['title']; ?>】</td></tr>
    <tr><td><?= $data['name']; ?> <br></td></tr>
    <tr><td><br>【<?= $data['text']['form']['phone']['title']; ?>】</td></tr>
    <tr><td><?= $data['phone']; ?> <br></td></tr>
    <tr><td><br>【<?= $data['text']['form']['email']['title']; ?>】</td></tr>
    <tr><td><?= $data['email']; ?> <br></td></tr>
    <tr><td><br>【<?= $data['text']['form']['content']['title']; ?>】</td></tr>
    <tr><td><?= $data['content']; ?> <br><br></td></tr>

    <tr>
        <td style="border-top:1px solid #6a6a6a;">
            <br>
            Không trả lời lại Email này.
            <br>
            <br>
        </td>
    </tr>
    </tbody>
</table>
