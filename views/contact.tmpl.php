<?php
  require_once('modules/helpers.php');
?>

<section id="page-header" class="about-header">
      <h2>#Let's_talk </h2>
      <p>Để lại góp ý, chúng tôi rất mong nhận được phản hồi từ bạn!</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>Liên Lạc</span>
        <h2>Hãy ghé thăm cửa hàng hoặc liên hệ với chúng tôi ngay hôm nay</h2>
        <h3>Cửa Hàng Chính</h3>
        <div>
          <li>
            <i class="fa-solid fa-map"></i>
            <p>50 Nguyễn văn Linh, Phường Tân Thuận Tây, Quận 7</p>
          </li>
          <li>
            <i class="fa-solid fa-envelope"></i>
            <p>Cara@gmail.com</p>
          </li>
          <li>
            <i class="fa-solid fa-phone"></i>
            <p>0347587031</p>
          </li>
          <li>
            <i class="fa-solid fa-clock"></i>
            <p>Thứ Hai đến Chủ Nhật: 9.00am đến 16.pm</p>
          </li>
        </div>
      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8&q=Dai%20Hoc%20Kien%20Truc%20Ha%20Noi&zoom=10&maptype=roadmap"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <section id="form-details">
      <form action="./controllers/contact.ctl.php" method="post">
        <span>ĐỂ LẠI LỜI NHẮN</span>
        <h2>Chúng tôi luôn lắng nghe từ bạn</h2>

        <input type="text" placeholder="Nhập Họ Và Tên" name="name" 
        title="Họ và tên không dài hơn 256 ký tự" value="<?php echo getURLParameter('name'); ?>" required/>

        <input type="email" placeholder="Nhập Email" name="gmail" 
        title="Email phải có dạng abc@gmail.com và tối thiểu 13 ký tự" value="<?php echo getURLParameter('gmail'); ?>" required />

        <input type="text" placeholder="Nhập Tiêu Đề" name="title" 
        title="Tiêu đề không dài hơn 256 ký tự" value="<?php echo getURLParameter('title'); ?>" required/>

        <textarea
          name="message"
          id=""
          cols="30"
          rows="10"
          placeholder="Nhập Nội Dung"
          required
        ><?php echo getURLParameter('message'); ?></textarea>

        <button type="submit" class="normal">GÓP Ý</button>
      </form>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletter</h4>
        <p>
          Get E-mail updates about our latest shop and
          <span>special offers</span>
        </p>
      </div>
    </section>