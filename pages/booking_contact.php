


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/c13a07f3cd.js" crossorigin="anonymous"></script>


 
    <style>

        .page-contacts__background{
                    background-image: url("https://bizmansky.vn/image/catalog/gallery/Grand%20Event/PVO-70.jpg");
                }
    



                .page-contacts{
    padding:120px 0;
}
.page-contacts__inner{
    background:#fff
}
.page-contacts .page-contacts__info{
    padding:60px;
}
.page-contacts .page-contacts__background{
    height:100%;    
}
.page-contacts .section-title h2{
    color:#004333
}
.page-contacts__info .contact-box ul li a{
    color: #004333;
    font-weight: 700 ;
}    
.page-contacts__info .contact-box ul li a span{
    opacity: .4;
}
.page-contacts__info .contact-box ul li i{
    width: 28px;
    height: 28px;
    background: #004333;
    color: #fff;
    text-align: center;
    line-height: 28px;
    font-size: 12px;
    border-radius: 50%;
    margin-right:15px;
}
.page-contacts__info .contact-box ul li{
    display: flex;
}
.page-contacts__info .contact-box ul li p{
    width: calc(100% - 43px);
}
.page-contacts__info .contact-form .section-title{
    text-align: left;
}
.page-contacts__info .contact-form .section-title h2{
    font-size:28px;
    line-height: 34px;
}
.page-contacts__info .contact-form .form-newsletter .form-newsletter__description{
    color: rgba(1, 29, 22, 0.4);
    text-align: justify;
    margin-bottom: 15px;
}
.form-newsletter input.form-control{
    color: #004333;    
}
.page-contacts__info .contact-form .form-newsletter input.form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
color: #004333;
opacity: 1; /* Firefox */
}

.page-contacts__info .contact-form .form-newsletter input.form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
color: #004333;
}

.page-contacts__info .contact-form .form-newsletter input.form-control::-ms-input-placeholder { /* Microsoft Edge */
color: #004333;
}
.page-contacts__info .contact-form .form-newsletter .form-control{
    border-bottom:1px solid #004333
}
.page-contacts__info .contact-form .form-newsletter select.form-control{
    color: #004333;
}
.page-contacts__info .contact-form .form-newsletter select.form-control option{
    color:#fff
}
.page-contacts__info .contact-form .form-newsletter .bizman-button{
    color: #CC9902;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid #CC9902;
}
.page-contacts__info .contact-form .form-newsletter .bizman-button:hover{
    background: #CC9902;
    color: #fff;
}   
@media (min-width:768px){
    .page-contacts__info .contact-box ul li p{
        font-size:24px;
    }
    .page-contacts__info .contact-box ul li i{
        margin-top:5px;
    }
} 
@media (min-width:991px) and (max-width:1199px){
    .page-contacts .page-contacts__info {
        padding: 20px;
    }
}
@media (max-width:575px){
    .page-contacts{
        padding:0;
    }
    .page-contacts .container{
        padding:0;
    }
    .page-contacts .page-contacts__info{
        padding:30px 12px;
    }
    .page-contacts__info .contact-form .section-title h2{
        font-size:20px;
        line-height: 26px;
    }
    .page-contacts__info .contact-form .form-newsletter .form-newsletter__description{
        font-size:12px;
    }
    .page-contacts__info .contact-box ul li i{
        width:18px;
        height:18px;
        line-height: 18px;
        font-size:10px;
    }
    .page-contacts__info .contact-form .form-newsletter .btn-action{
        text-align: center !important;
    }
}




label {
            font-size: 16px;
            margin-bottom: 8px;
        }

        input[type="date"] {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Optional: Customize the appearance of the date picker dropdown */
        input[type="date"]::-webkit-calendar-picker-indicator {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 4px;
            cursor: pointer;
        }
        /*  */



#toast {
    position: fixed;
    top: 10px;
    right: 5px;
    z-index: 99999;
}

.toasts {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 2px;
    padding: 5px 0;
    min-width: 400px;
    max-width: 450px;
    border-left: 4px solid #47d864;
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
    transition: all linear 0.5s;
    margin-bottom: 10px;
  }
  
  @keyframes slideInLeft {
    from {
      opacity: 0;
      transform: translateX(calc(100% + 32px));
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes fadeOut {
    to {
      opacity: 0;
    }
  }
  .toast__icon {
    font-size: 20px;


  }

  .toast--success {
    border-color: #47d864;
  }
  
  .toast--success .toast__icon {
    color: #47d864;
  }
  
  .toast--info {
    border-color: red;
  }
  
  .toast--info .toast__icon {
    color: red;
  }
  
  .toast__icon,
  .toast__close {
    padding: 0 16px;
  }
  .toast__body {
    flex-grow: 1;
  }
  .toast__msg {
    font-size: 14px;
    color: #888;
    margin: 10px;
    line-height: 1.5;
  }

  .toast__close {
    font-size: 20px;
    color: rgba(0, 0, 0, 0.3);
    cursor: pointer;
  }
    </style>
    
</head>
<body>
<div id="toast"></div>

    <section class="bread-crumb has-bg">
        <div class="overlay"></div>
        <div class="breadcrumb-container text-center">
            <h1 class="title-page">Contact Us</h1>
        </div>
    </section>


    <section class="information_page page-contacts bg-green-dark">
    <div class="container">
                <div class="page-contacts__inner">
            <div class="row m-0">           
                <div class="col-lg-6 d-none d-lg-block p-0">
                    <div class="page-contacts__background has-bg"></div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="page-contacts__info">
                        <div class="section-title section-title-left">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="contact-box">
                            <ul class="list-inline">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        <a href="#">
                                            <strong>Address: </strong><span>Rooftop 15th floor, IMC Tower, 62 Tran Quang Khai st, Tan Dinh ward, District 1, Ho Chi Minh City<span>
                                        </span></span></a>                                        
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>
                                        <a href="#">
                                            <strong>Telephone: </strong><span>0901276262<span>
                                        </span></span></a>                                        
                                    </p>
                                </li>
                                <li>
                                    <i>
                                       <img src="./images/telephone.png" style="filter: brightness(0) invert(1);" width="16">
                                    </i>
                                    <p>
                                        <a href="#">
                                            <strong>Telephone: </strong><span>(028) 7306 5696<span>
                                        </span></span></a>                                        
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p>
                                        <a href="#">
                                            <strong>Email: </strong><span>info@bizmansky.vn<span>
                                        </span></span></a>                                        
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-form">

                        <div class="fancybox_0 wrapper-newsletter contact_newsletter newsletter" id="contact_newsletter">    
    <form class="form-newsletter" id="form-bookingForm-0" method="post" action="./pages/process-data.php">
        <div class="section-title form-newsletter__heading m-0">
            <h2>Book a table</h2>
        </div>
        <div class="form-newsletter__description item-des">
            Please leave your request in detail if any. All information that you supply will be kept confidential by us.        </div>
        <div class="form-newsletter__inside">
            <input type="hidden" name="module_code" value="newsletter.381">
                            <input type="hidden" name="api_link" value="">
                        <input type="hidden" name="required" value="{&quot;phone&quot;:&quot;1&quot;}">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-newsletter__item">                            
                        <div class="row">
                                                            <div class="col-12">
                                    <input type="text" name="name" class="form-control name " placeholder="Name ">
                                </div>
                            
                                                            <div class="col-12">
                                    <input type="text" name="phone" class="form-control phone required" placeholder="Phone">
                                </div>
                                                        
                                                            <div class="col-12">
                                    <input type="text" class="form-control email " name="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <label for="foodSelection">Chọn thực đơn:</label>
                                    <select class="form-control" id="foodSelection" name="foodSelection">
                                        <option value="monTuChon">Combo các món Ý</option>
                                        <option value="combo1">Combo hải sản</option>
                                        <option value="combo2">Combo bò hầm sâm</option>
                                        <option value="combo3">Tự chọn món ở nhà hàng</option>
                                    </select>
                                </div>

                            
                            
                                                    </div>
                        
                        <div class="row">
                                                                                                                <div class="col-12">
                                                                                                                        <input type="text" name="soluong" class="form-control" placeholder="The number of guest">
                                                                                                                                                        
                                                                           
                                                                                            <div class="col-12">
                                            <div class="form-newsletter__item">
                                                <div id="datepicker-wrapper" class="date">
                                                <input type="date" id="birthdate" name="ngay">
                                                    
                                                   
                                                </div>
                                            </div>

                                            

                                                                                                                                                       
                                                                           
                                </div>
                                                                                            <div class="col-12">
                                                                                                                        <input type="text" name="gio" class="form-control" placeholder="Time">
                                                                                                                                                       
                                                                           
                                </div>
                                                                                                            </div>
                        <span class="form-newsletter__notification"></span>
                        <div class="btn-action text-left">
                        <button type="submit" id="submitBtn" class="btn btn-submit bizman-button">Book now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="1" name="action">
    </form>
</div></div>
                    </div>               
                </div>
            </div>
        </div>        
            </div>
</section>


    
    <div class="newsletter__social social bg-green">
    <span>Follow us:</span>
    <ul class="list-inline">           
        <li>
            <a href="#" target="_blank">
                <img src="./images/fb.png" />
            </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <img src="./images/ins.png" />
            </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <img src="./images/youtube.png" />
            </a>
        </li>
        <li>
            <a href="#" target="_blank">
                <img src="./images/tri.png" />
            </a>
        </li>
    </ul>   
</div>

<script>
        function toast({  message = "", type = "info", duration = 3000 }) {
    const main = document.getElementById("toast");
    if (main) {
      const toast = document.createElement("div");
  
      // Auto remove toast
      const autoRemoveId = setTimeout(function () {
        main.removeChild(toast);
      }, duration + 2000);
  
      // Remove toast when clicked
      toast.onclick = function (e) {
        if (e.target.closest(".toast__close")) {
          main.removeChild(toast);
          clearTimeout(autoRemoveId);
        }
      };
  
      const icons = {
        success: "fa-solid fa-cart-shopping",
        info: "fas fa-info-circle"

      };
      const icon = icons[type];
      const delay = (duration / 1000).toFixed(2);
  
      toast.classList.add("toasts", `toast--${type}`);
      toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;
  
      toast.innerHTML = `
                      <div class="toast__icon">
                          <i class="${icon}"></i>
                      </div>
                      <div class="toast__body">
                          <p class="toast__msg">${message}</p>
                      </div>
                      <div class="toast__close">
                          <i class="fas fa-times"></i>
                      </div>
                  `;
      main.appendChild(toast);
    }
  }
    </script>
<script>
    // Bắt đầu xử lý khi trang đã được tải
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy đối tượng form
        var form = document.getElementById("form-bookingForm-0");

        // Bắt đầu nghe sự kiện submit của form
        form.addEventListener("submit", function (event) {
            // Ngăn chặn hành động mặc định của form (tự động load lại trang)
            event.preventDefault();

            // Lấy dữ liệu form
            var formData = new FormData(form);

            // Gửi POST request bằng Ajax
            fetch('./pages/process-data.php', {
                method: 'POST',
                body: formData
            })
            // .then(response => response.text()) // Chuyển đổi response thành JSON (nếu server trả về JSON)
            .then(data => {
                // Xử lý kết quả từ server
                console.log(data);

                // Hiển thị thông báo
                toast({
                    message: "Đã thêm giỏ hàng thành công.",
                    type: "success",
                    duration: 3000
                });
                resetFormFields();
            })
            .catch(error => {
                // Xử lý lỗi
                console.error(error);

                // Hiển thị thông báo lỗi
                toast({
                    message: "Đã xảy ra lỗi khi thêm đơn hàng.",
                    type: "info",
                    duration: 3000
                });
            });
        });
    });

    function resetFormFields() {
    document.getElementById("form-bookingForm-0").reset();
}
</script>



</body>
</html>