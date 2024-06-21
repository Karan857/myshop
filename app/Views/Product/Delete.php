<script>
    <?php if ($error): ?>
        Swal.fire({
            title: "ลบร้านอาหารไม่สำเร็จ",
            text: "<?= $message ?>",
            icon: "error"
        }).then(function() {
            window.location.href = "<?= base_url() ?>product";
        });
    <?php else: ?>
        Swal.fire({
            title: "ลบร้านอาหารสำเร็จ!",
            text: "<?= $message ?>",
            icon: "success"
        }).then(function() {
            window.location.href = "<?= base_url() ?>product";
        });
    <?php endif; ?>
</script>