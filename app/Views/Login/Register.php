<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="clearfix">
    <div class="container wrapper-container mt-4 pt-0 pt-lg-0">
        <form method="post" class="hpro__bestseller home-boxproduct cart__container fcart__container">
            <h1 class="hboxproduct__title color-hover">Đăng ký</h1>
            <div class="fcartbox row">
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <?php if (isset($auth_error)) :  ?>
                            <div class="alert-danger rounded mb-1 p-1"><?= $auth_error ?></div>
                        <?php endif ?>
                        <?php if (isset($success)) :  ?>
                            <div class="alert-success rounded mb-1 p-1"><?= $success ?></div>
                        <?php endif ?>
                        <label class="form-label b500">Email<b class="text-danger ml-1">*</b></label>
                        <input type="text" class="form-control" name="email" autocomplete="off" required value="<?= set_value('email') ?>">
                        <?php if (isset($error['email'])) :  ?>
                            <div class="alert-danger rounded mb-1 p-1"><?= $error['email'] ?></div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Mật khẩu<b class="text-danger ml-1">*</b></label>
                        <input type="password" class="form-control hide_arrow" name="password" autocomplete="off" required value="">
                        <?php if (isset($error['password'])) :  ?>
                            <div class="alert-danger rounded mb-1 p-1"><?= $error['password'] ?></div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Họ và Tên</label>
                        <input type="text" class="form-control hide_arrow" name="name" autocomplete="off" value="<?= set_value('name') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Địa chỉ</label>
                        <input type="text" class="form-control hide_arrow" name="address" autocomplete="off" value="<?= set_value('address') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label b500">Số điện thoại</label>
                        <input type="tel" class="form-control hide_arrow" name="phone" autocomplete="off" value="<?= set_value('phone') ?>" maxlength="10">
                    </div>
                    <p>Đã có tài khoản? <a href="<?= base_url('dang-nhap') ?>">Đăng nhập ngay!</a></p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mb-3">
                        <p>Đăng ký tài khoản</p>
                    </div>
                </div>
            </div>

            <div class="fcartbox mb-0 pt-md-4 pt-lg-0 text-center">
                <button type="submit" class="btn cart_btnitem cart_btnitem-red">
                    <i class="fas fa-sign-in-alt"></i>
                    Đăng ký
                </button>
            </div>
        </form>

    </div>
</div>
</div>

<script>
    $(document).ready(function(e) {

        $('form').on('submit', function() {
            var _button = $(this).find('button[type=submit]');
            _button.attr('disabled', 'disabled');
        });

    });
</script>
<?= $this->endSection() ?>