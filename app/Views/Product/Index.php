<div class="container">
    <a href="<?= base_url('product/create'); ?>" class="btn btn-primary my-3">เพิ่มร้านอาหาร</a>
    <table class="table table-hover table-bordered text-center ">
        <thead>
            <tr>
                <th scope="col" class="text-center">ลำดับ</th>
                <th scope="col">ร้านอาหาร</th>
                <th scope="col" width="500">รายละเอียด</th>
                <th scope="col">ตำแหน่งที่ตั้ง</th>
                <th scope="col">รูปภาพ</th>
                <th scope="col" class="text-center" width="60">แก้ไข</th>
                <th scope="col" class="text-center" width="60">ลบ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $index => $row): ?>
                <tr>
                    <th class="text-center" scope="row"><?= ($index + 1); ?></th>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['desc']; ?></td>
                    <td><?= $row['location']; ?></td>
                    <td>
                        <img src="<?= base_url() . $row['image']; ?>" width="100" alt="<?= $row['image']; ?>">
                    </td>
                    <td class="text-center">
                        <a href="<?= base_url('product/update/' . $row['food_id']); ?>" class="btn btn-success">แก้ไข</a>
                    </td>
                    <td class="text-center">
                        <button action="delete" data-id="<?= $row['food_id']; ?>" class="btn btn-danger">ลบ</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
        document.addEventListener('click', function(event) {
            var target = event.target;
            if (target.matches('button[action="delete"]')) {
                event.preventDefault();
                Swal.fire({
                    title: "ยืนยันการลบ?",
                    text: "ต้องการที่จะลบข้อมูลหรือไม่",
                    icon: "question",
                    showCancelButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.href = '<?= base_url() . 'product/delete/' ?>' + target.dataset.id;
                    }
                });
            }
        });
    </script>

