<!DOCTYPE html>
<html>
<head>
    <title>Member Alert</title>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<?php if (!empty($alert)): ?>
<script>
Swal.fire({
    icon: '<?= $alert["type"] ?>',  // success, error, warning, info
    title: <?= json_encode($alert["title"]) ?>,
    text: <?= json_encode($alert["text"]) ?>,
}).then(() => {
    <?php if (!empty($alert["redirect"])): ?>
        window.location.href = '<?= $alert["redirect"] ?>';
    <?php endif; ?>
});
</script>
<?php endif; ?>

<h3>ผลลัพธ์</h3>

<?php if (!empty($member)): ?>
    <pre><?php print_r($member); ?></pre>
<?php else: ?>
    <p>ไม่มีข้อมูลสมาชิก</p>
<?php endif; ?>

</body>
</html>
