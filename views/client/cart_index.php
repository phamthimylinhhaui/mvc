
<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Giỏ hàng
<?php endblock() ?>

<!-- End menu mobile -->


<!-- ---------------------Thân------------------- -->
<?php startblock('content') ?>

<main class="main-content">

    <div class="breadcrumb-area breadcrumb-height" data-bg-image="https://theme.hstatic.net/1000317997/1000499273/14/ms_banner_img1.jpg?v=198">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <div class="main-breadcrum">
                            <h2 class="breadcrumb-heading">Giỏ hàng</h2>
                            <ul style="text-align:center">
                                <li>
                                    <a href="/">Trang chủ <i class="pe-7s-angle-right"></i></a>
                                </li>
                                <li>Giỏ hàng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="inner-section checkout-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 alert-info" style="border-top: 3px solid #f26974 !important;">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Đơn hàng của bạn</h4>
                            <a onclick="clearCart()" href="/home" style="color: #f15b67 ; border: 2px solid #f15b67; background: transparent;">Xoá giỏ hàng</a>
                        </div>
                        <div class="account-content"  id="cart">
                            <div class="table-scroll">
                                <table class="table-list">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody id="list-product-cart">
                                    <tr>
                                        <td class="table-serial">
                                            <h6>1</h6>
                                        </td>
                                        <td class="table-image"><img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 "></td>
                                        <td class="table-name">
                                            <h6>Sản phẩm số 1</h6>
                                        </td>
                                        <td class="table-price">
                                            <h6>70,500 vnđ</h6>
                                        </td>
                                        <td class="table-quantity">
                                            <div class="cart-action-group" style="justify-content: center">
                                                <div class="product-action">
                                                    <button class="action-minus" onclick="minus(20)" title="Giảm">
                                                        <i class="icofont-minus"></i>
                                                    </button>
                                                    <input class="action-input" style="text-align:right;" title="Số lượng" id="qty20" type="number" readonly="" name="quantity" value="1">
                                                    <button class="action-plus" onclick="plus(20)" title="Tăng">
                                                        <i class="icofont-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action">
                                            <a class="view" href="/productdetail">
                                                <i class="pe-7s-look"></i></a>
                                            <a class="trash" href="#" onclick="deleteInCart(20,70500,1)"><i class="pe-7s-trash"></i></a></td>
                                    </tr>

                                    <tr>
                                        <td class="table-serial">
                                            <h6>2</h6>
                                        </td>
                                        <td class="table-image"><img class="img-full" src="assets/client_source/assets/images/giaydemo.jpg" alt="Sản phẩm 1 "></td>
                                        <td class="table-name">
                                            <h6>Sản phẩm 2</h6>
                                        </td>
                                        <td class="table-price">
                                            <h6>80,000 vnđ</h6>
                                        </td>
                                        <td class="table-quantity">
                                            <div class="cart-action-group" style="justify-content: center">
                                                <div class="product-action">
                                                    <button class="action-minus" onclick="minus(37)" title="Giảm">
                                                        <i class="icofont-minus"></i>
                                                    </button>
                                                    <input class="action-input" style="text-align:right;" title="Số lượng" id="qty37" type="number" readonly="" name="quantity" value="3">
                                                    <button class="action-plus" onclick="plus(37)" title="Tăng">
                                                        <i class="icofont-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action">
                                            <a class="view" href="/productdetail">
                                                <i class="pe-7s-look"></i></a>
                                            <a class="trash" href="#" onclick="deleteInCart(37,80000,3)"><i class="pe-7s-trash"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="checkout-charge mt-5 mb-3">
                                <ul>
                                    <li><span>Tổng tiền: </span><span id="hdk-total">0 vnđ</span></li>
                                </ul>
                            </div>
                            <form action="checkout_detail.php" method="post" >
                                <input hidden id="ids" name="ids" />
                                <button type="submit" class="checkout-proced btn btn-inline dieuchinhbg"><a href="/home">Thanh toán</a></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


</main>

<!-- Start footer -->


<script>
    const fetchProduct = async () => {
        const productIds = localStorage.getItem("productIds");
        document.getElementById("ids").value = productIds;

        const ids = productIds?.split(",");

        const response = await fetch(`/Product/List?ids=${ids?.toString()}`);
        let data = await response.json();

        data = data.map(item => {
            const count = ids.filter(i => i == item.id).length;
            const price = formatMoney(item.price.toString());
            return {
                ...item,
                price,
                currentPrice: item.price,
                currentQuantity: count
            }
        });

        let element = "";
        if (data.length) {
            document.getElementById("cart").style.display = "block";
            document.getElementById("noti").style.display = "none";
            data.map((product, index) => {
                element +=
                    `
                                        <tr>
                                            <td class="table-serial">
                                                <h6>${index + 1}</h6>
                                            </td>
                                            <td class="table-image"><img src="assets/client_source/assets/images/product/medium-size/${product.image}" alt="product"></td>
                                            <td class="table-name">
                                                <h6>${product.name}</h6>
                                            </td>
                                            <td class="table-price">
                                                <h6>${product.price} vnđ</h6>
                                            </td>
                                            <td class="table-quantity">
                                                <div class="cart-action-group" style="justify-content: center">
                                                    <div class="product-action">
                                                        <button class="action-minus" onclick="minus(${product.id})" title="Giảm">
                                                            <i class="icofont-minus"></i>
                                                        </button>
                                                            <input class="action-input" style="text-align:right;" title="Số lượng" id="qty${product.id}" type="number" readonly name="quantity" value="${product.currentQuantity}">
                                                        <button class="action-plus" onclick="plus(${product.id})" title="Tăng">
                                                            <i class="icofont-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table-action">
                                                <a class="view" href="#">
                                                <i class="pe-7s-look"></i></a>
                                                <a class="trash" href="#" onclick="deleteInCart(${product.id},${product.currentPrice},${product.currentQuantity})"><i class="pe-7s-trash"></i></a></td>
                                        </tr>
                                    `;
            })
        }

        document.getElementById("list-product-cart").innerHTML = element;
        const amount = localStorage.getItem("amount");
        if (amount)
            document.getElementById("hdk-total").innerHTML = `${formatMoney(amount)} vnđ`;
    }

    fetchProduct();

    const deleteInCart = (id, price, quantity) => {
        const productIds = localStorage.getItem("productIds").split(",");

        const ids = productIds.filter(product => product != id);
        localStorage.setItem("productIds", ids.toString());
        let amount = Number(localStorage.getItem("amount"));
        amount -= Number(price) * Number(quantity);
        localStorage.setItem("amount", amount);
        if (amount === 0) {
            localStorage.removeItem("amount");
        }
    }

    const plus = async (id) => {
        const qty = document.getElementById(`qty${id}`).value;
        const response = await fetch(`/Product/Index/${id}`);
        const data = await response.json();
        if (data !== "NOT_FOUND") {
            if (data.quantity >= Number(qty) + 1) {
                document.getElementById(`qty${id}`).value = Number(qty) + 1;
                let productIds = localStorage.getItem("productIds");
                productIds += `,${id}`;

                localStorage.setItem("productIds", productIds);
                fetchCart(data, 'plus');
                fetchProduct();
            } else {
                toastr.info('Số lượng đã đạt giới hạn', 'Thông báo');
            }
        }
    }
    const minus = async (id) => {
        const qty = document.getElementById(`qty${id}`).value;
        const response = await fetch(`/Product/Index/${id}`);
        const data = await response.json();
        if (data !== "NOT_FOUND") {
            if (Number(qty) - 1 >= 1) {
                document.getElementById(`qty${id}`).value = Number(qty) - 1;
                let productIds = localStorage.getItem("productIds").split(",");
                const index = productIds.indexOf(id.toString());
                if (index > -1) {
                    productIds.splice(index, 1);
                }

                localStorage.setItem("productIds", productIds.toString());
                fetchCart(data, 'minus')
                fetchProduct();
            }
            if (Number(qty) - 1 === 0) {
                deleteInCart(id, data.price, 1);
                window.location = '/Checkout';
            }
        }
    }

    const clearCart = () => {
        localStorage.removeItem("productIds");
        localStorage.removeItem("amount");
        window.location.reload();
    }
</script>

<?php endblock() ?>