// var anhs = ['tranvinhphuc_banner.jpg','slide1.jpg','slide2.jpg', 'slide3.jpg', 'slide4.jpg', 'slide5.jpg', 'slide6.jpg', 'slide7.jpg', 'slide8.jpg', 'slide9.jpg'];
//     var index=1;
//     function nextright() {
//         index++;
//         if(index>=anhs.length)index=0;
//         document.getElementById('hinh').src="/images/"+anhs[index];
//         document.getElementById('dem').innerText=index+1+"/"+anhs.length;
//     }
//     function nextleft() {
//         index--;
//         if(index<0)index=anhs.length-1;
//         document.getElementById('hinh').src="/images/"+anhs[index];
//         document.getElementById('dem').innerText=index+"/"+anhs.length;
//     } 
//     setInterval(nextright, 5000);//cho chạy liên tục mỗi 5s

// CHUC NANG TAO SLIDE ANH CHO SECTION BANNER
let curIndex = 1; // xac dinh anh hien tai
// lay phan tu xac dinh vi tri anh vao mang
let dotIndex = document.getElementsByClassName("cur-index");
let srcImgArr = document.querySelectorAll(".banner img"); // lay anh vao mang
// cho anh dau tien hien thi
document.querySelector(".banner img:nth-child(" + 1 + ")")
    .style.left = 0;
// them, xu ly su kien chuyen toi anh tiep theo
document.querySelector(".banner .next")
    .addEventListener('click', function () {
        // xu ly nextIndex 1 --> 5
        let nextIndex = curIndex + 1;
        if (nextIndex > srcImgArr.length) {
            nextIndex = 1;
        }
        // * nth:child chay bat dau tu 1 
        // xu ly hieu ung khi chuyen anh
        document.querySelector(".banner img:nth-child(" + (nextIndex) + ")")
            .style.left = "100%";
        document.querySelector(".banner img:nth-child(" + (nextIndex) + ")")
            .setAttribute("class", "imgIn");
        document.querySelector(".banner img:nth-child(" + (curIndex) + ")")
            .style.left = 0;
        document.querySelector(".banner img:nth-child(" + (curIndex) + ")")
            .setAttribute("class", "imgOutLeft");
        // cap nhat curIndex
        curIndex = nextIndex;
        // hien thi vi tri anh
        indexChange();
    });
// end them, xu ly su kien chuyen toi anh tiep theo
// them, xu ly su kien quay lai anh phia truoc
document.querySelector(".banner .prev")
    .addEventListener('click', function () {
        // xu ly prevIndex 1 --> 5
        let prevIndex = curIndex - 1;
        if (prevIndex < 1) { // do dai mang nho nhat la 1
            prevIndex = srcImgArr.length;
        }
        // * nth:child chay bat dau tu 1
        // xu ly hieu ung khi chuyen anh
        document.querySelector(".banner img:nth-child(" + (prevIndex) + ")")
            .style.left = "-100%";
        document.querySelector(".banner img:nth-child(" + (prevIndex) + ")")
            .setAttribute("class", "imgIn");
        document.querySelector(".banner img:nth-child(" + (curIndex) + ")")
            .style.left = 0;
        document.querySelector(".banner img:nth-child(" + (curIndex) + ")")
            .setAttribute("class", "imgOutRight");
        // cap nhat curIndex
        curIndex = prevIndex;
        // hien thi vi tri anh
        indexChange();
    });
// end them, xu ly su kien quay lai anh phia truoc
// nhan vao dau cham chuyen den anh tuong ung
for (let i = 0; i < dotIndex.length; i++) {
    dotIndex[i].addEventListener("click", function () {
        while (curIndex != (i + 1)) {
            if (curIndex < (i + 1)) {
                document.querySelector(".banner .next").click();
            } else {
                document.querySelector(".banner .prev").click();
            }
        }
    });
}
// end nhan vao dau cham chuyen den anh tuong ung
// ham thay doi dau cham hien thi vi tri anh
function indexChange() {
    for (let i = 0; i < dotIndex.length; i++) {
        if (dotIndex[i].id == String(curIndex)) {
            dotIndex[i].style.opacity = 1;
        } else {
            dotIndex[i].style.opacity = 0.3;
        }
    }
}
// end ham thay doi dau cham hien thi vi tri anh 
// tu dong chuyen banner sau 7s
let autoSwitch = setInterval(
    function () {
        document.querySelector(".banner .next").click();
    },
    5000
);
// end tu dong chuyen banner sau 7s
// END CHUC NANG TAO SLIDE ANH CHO SECTION BANNER