// Fixed Navigation
const navbar = document.querySelector(".nav-bar");
window.onscroll = () => {
  if (window.scrollY > 200) {
    navbar.classList.add("nav-scroll");
  } else {
    navbar.classList.remove("nav-scroll");
  }
};
// Countdown Promotions
var countDownDate = new Date("Dec 10, 2023 00:00:00").getTime();

function updateCountdown() {
  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes, and seconds
  var days = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(
    2,
    "0"
  );
  var hours = String(
    Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
  ).padStart(2, "0");
  var minutes = String(
    Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
  ).padStart(2, "0");
  var seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(
    2,
    "0"
  );

  // Display the result in the element
  document.querySelector(
    ".count__down"
  ).innerHTML = `<div><span>${days}</span></div>
          <div><span>:</span></div>
          <div><span>${hours}</span></div>
          <div><span>:</span></div>
          <div><span>${minutes}</span></div>
          <div><span>:</span></div>
          <div><span>${seconds}</span></div>`;

  if (distance < 0) {
    clearInterval(x);
    document.querySelector(
      ".count__down"
    ).innerHTML = `<div><span>00</span></div>
      <div><span>:</span></div>
      <div><span>00</span></div>
      <div><span>:</span></div>
      <div><span>00</span></div>
      <div><span>:</span></div>
      <div><span>00</span></div>`;
  }
}

// Initial call to set the countdown
updateCountdown();

// Update the count down every 1 second
var x = setInterval(updateCountdown, 1000);
// 
document.addEventListener('DOMContentLoaded', function() {
  // Lấy tất cả các phần tử có lớp "item__pr"
  var itemPrElements = document.querySelectorAll('.item__pr');

  // Lặp qua từng phần tử
  itemPrElements.forEach(function(itemPrElement) {
      // Tìm phần tử ".discount__price" trong từng phần tử ".item__pr"
      var discountPriceContainer = itemPrElement.querySelector('.discount__price');

      // Tìm phần tử ".compare__price" trong ".discount__price"
      var comparePriceElement = discountPriceContainer ? discountPriceContainer.querySelector('.compare__price span:nth-child(1)') : null;

      if (!comparePriceElement || comparePriceElement.innerHTML.trim() === "") {
          // Nếu ".compare__price span:nth-child(1)" không tồn tại hoặc không có dữ liệu,
          // đặt style display của ".discount__price" thành "none"
          if (discountPriceContainer) {
              discountPriceContainer.style.display = "none";
          }
      } else {
          // Nếu có dữ liệu, thêm lớp "strike-through" vào ".compare__price"
          comparePriceElement.classList.add('strike-through');
      }
  });
});
// function tăng giảm số lượng sản phẩm trong giỏ hàng

function adjustQuantity(button, delta) {
  var inputElement = button.parentElement.querySelector('.quantityInput');
  var currentValue = parseInt(inputElement.value);

  if (currentValue + delta > 0) {
      inputElement.value = currentValue + delta;
  }
}

document.querySelectorAll('.decrease-btn').forEach(function(button) {
  button.addEventListener('click', function() {
      adjustQuantity(this, -1);
  });
});

document.querySelectorAll('.increase-btn').forEach(function(button) {
  button.addEventListener('click', function() {
      adjustQuantity(this, 1);
  });
});
// function tăng giảm số lượng sản phẩm trong detail pr

function increaseQuantity(event) {
  event.preventDefault(); // Ngăn chặn sự kiện mặc định (tránh tải lại trang)
  var quantityInput = document.getElementById('quantityInput');
  var currentQuantity = parseInt(quantityInput.value, 10);
  quantityInput.value = currentQuantity + 1;
}

function decreaseQuantity(event) {
  event.preventDefault(); // Ngăn chặn sự kiện mặc định (tránh tải lại trang)
  var quantityInput = document.getElementById('quantityInput');
  var currentQuantity = parseInt(quantityInput.value, 10);

  // Đảm bảo số lượng không nhỏ hơn 1
  if (currentQuantity > 1) {
      quantityInput.value = currentQuantity - 1;
  }
}

function addToCart() {
  // Thêm logic xử lý thêm sản phẩm vào giỏ hàng tại đây
  var quantity = document.getElementById('quantityInput').value;
  alert('Đã thêm ' + quantity + ' sản phẩm vào giỏ hàng.');
}

function confirmDelete() {
  return confirm("Bạn có chắc chắn muốn xóa?");
}
