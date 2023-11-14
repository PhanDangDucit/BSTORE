var contentHome = document.getElementById('content-session');
contentHome.innerHTML = `<!-- The aside part -->

<div class="group background-builtin">
    <form>
        <table>
            <thead>
                <tr class="thead__tr--border">
                    <th class="w-together w-together__thead" colspan="3">
                        <div class="w-together ml-43">
                            <input type="checkbox" id="form-check-all">
                            <label for="form-check-all">Chon Tat Ca</label>
                        </div>
                    </th>
                    <th class="w-together">Giá</th>
                    <th class="w-together">Số lượng</th>
                    <th class="w-together">Tổng</th>
                </tr>
            </thead>
            <tbody>
                <tr class="tbody__tr--padding">
                    <td></td>
                </tr>
                <tr class="sanpham">
                    <td class="w-together w-together-width">
                        <input data-id="0"  type="checkbox" value="1" class="form-check-item" required name="check-item">
                    </td>
                    <td colspan="2" class="sanpham-box">
                        <img class="pull-left" src="https://product.hstatic.net/1000237375/product/bia_truoc_f3dab02fedc74168a80fa4de0cdbdfcc_large.jpg" alt="">
                        <p class="pull-left paragraph-product">Cuốn sách Chào Hàng Chuyên Nghiệp Để Bán Hàng Thành Công chính là cuốn sách bạn đang cần!</p>
                    </td>
                    <div class="clear-float"></div>
                    <td class="w-together">
                        <input type="button" class="price-item" value="94000đ">
                    </td>
                    <td class="w-together">
                    <form action="" class="form-group">
                        <button type="button" class="form-control form-decrease"><i class="fa-solid fa-minus"></i></button>
                        <input type="button" value="1" class="form-control form-count">
                        <button type="button" class="form-increase form-control"><i class="fa-solid fa-plus"></i></button>
                    </form>
                    
                    </td>
                    <td class="w-together">
                        <input type="button" value="94000" class="form-cost-item">
                        <label>đ</label>
                    </td>
                </tr>
                <tr class="sanpham">
                    <td class="w-together w-together-width">
                        <input data-id="1" type="checkbox" value="1" class="form-check-item" required name="check-item">
                    </td>
                    <td colspan="2" class="sanpham-box">
                        <img class="pull-left" src="https://product.hstatic.net/1000237375/product/bia_truoc_acdbc2e4f50749ceb47c5bf7f80a91e3_master.jpg" alt="">
                        <p class="pull-left paragraph-product">Cuốn sách Chào Hàng Chuyên Nghiệp Để Bán Hàng Thành Công chính là cuốn sách bạn đang cần!</p>
                    </td>
                    <div class="clear-float"></div>
                    <td class="w-together">
                        <input class="price-item" type="button" value="48000đ">
                    </td>
                    <td class="w-together">
                    <form action="" class="form-group">
                        <button type="button" class="form-control form-decrease"><i class="fa-solid fa-minus"></i></button>
                        <input type="button" value="1" class="form-control form-count">
                        <button type="button" class="form-increase form-control"><i class="fa-solid fa-plus"></i></button>
                    </form>
                    </td>
                    <td class="w-together">
                        <input type="button" value="48000" class="form-cost-item">
                        <label>đ</label>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="content-final">
            <div class="total">
                <h3>Tổng tiền: <input id="form-cost" type="button" value="0"></h3>
            </div>
            <div class="payment">
                <button type="submit">Thanh toán</button>
            </div>
        </div>
    </form>
</div>`

var products = document.querySelectorAll('.sanpham');
var priceItems = document.querySelectorAll('.price-item');
var formCounts = document.querySelectorAll('.form-count');
var formIncreases = document.querySelectorAll('.form-increase');
var formDecreases = document.querySelectorAll('.form-decrease');
var formCostItems = document.querySelectorAll('.form-cost-item');
const checkAll = document.querySelector('#form-check-all');
var checkItems = document.querySelectorAll('.form-check-item');
var formTotalCost = document.getElementById('form-cost');

products.forEach((product, index) => {
    var count = 1;
    var a = 0;
    formIncreases[index].onclick = function() {
        count++;
        render(index, count);
        getCostTotal()
    }
    formDecreases[index].onclick = function() {
        if(count > 1) {
            count--;
            render(index, count);
            getCostTotal();
        }
    }
})
// rendering cost for each product
function render(index, count) {
    var costItem = parseInt(priceItems[index].value);
    formCounts[index].value = count;
    costItem = (count * costItem);
    formCostItems[index].value = costItem;
}

// check all
checkAll.onchange = () => {
    var isCheckAll = checkAll.checked;
    checkItems.forEach((checkItem) => {
        checkItem.checked = isCheckAll;
    })
    var countCheckedItems = document.querySelectorAll('.form-check-item:checked');
    var costTotal = 0;
    if(isCheckAll) {
        countCheckedItems.forEach((countCheckedItem, index) => {
            costTotal += parseInt(formCostItems[index].value);
            formTotalCost.value = costTotal;
        })
    } else {
        formTotalCost.value = 0;
    }
}
// check all from checkitem
checkItems.forEach((checkItem, index) => {
    checkItem.onchange = () => {
        var countCheckedItems = document.querySelectorAll('.form-check-item:checked');
        if(checkItem.checked == true) {
            if(countCheckedItems.length == checkItems.length) {
                checkAll.checked = true;
            }
            getCostTotal();
        } else {
            checkAll.checked = false;
            getCostTotal();
        }
    }
})

// Create function to get costTotal
function getCostTotal() {
    var countCheckedItems = document.querySelectorAll('.form-check-item:checked');
    var dataID = [];
    countCheckedItems.forEach((countCheckedItem, index) => {
        dataID = [...dataID, countCheckedItem.getAttribute('data-id')];
        console.log(dataID);
        var costTotal = 0;
        if(countCheckedItems.length > 0) {
            for(var key in dataID) {
                costTotal += parseInt(formCostItems[dataID[key]].value);
                formTotalCost.value = costTotal;
            }
        }
    });
}

// create function to get costTotal when count variable is changed
// function getCostotalCountChanged(count, a, index) {
//     console.log(cost);
//     if(1 < count + a && isNaN(cost)) {
//         cost += a * parseInt(formCounts[index]);
//         formTotalCost.value = cost;
//     };
// }